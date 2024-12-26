<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{

    public $email, $password;
    #[Title('Login')]
    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        $payload = $this->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);
        if (Auth::attempt($payload)) {
            session()->regenerate();
            session()->flash("success", "Logged in successfully");
            return $this->redirectRoute('dashboard', navigate: true);

        }
        return $this->addError('email', 'The provide credentials do not match our records.');
    }
}