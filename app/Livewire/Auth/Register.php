<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    #[Title('Register')]
    #[Layout('components.layouts.auth')]
    public $name, $email, $password, $password_confirmation;
    public function render()
    {
        return view('livewire.auth.register');
    }

    public function register()
    {
        $validation = $this->validate([
            'name' => "required|min:2|max:30",
            'email' => "required|email|unique:users,email",
            'password' => "required|min:6|max:40|confirmed",
            'password_confirmation' => "required",
        ]);
        $validation['password'] = Hash::make($validation['password']);
        $user = User::create($validation);
        session()->flash("success", "Account create successfully! please login now");
        $this->redirectRoute('login', navigate: true);
    }
}