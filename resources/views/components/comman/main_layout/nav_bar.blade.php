<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                    <span
                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div class="mr-3">
                        <x-comman.theme_mode />
                    </div>
                    <div class="mr-3">
                        <div x-data="{ isOpen: false, openedWithKeyboard: false }" @keydown.esc.window="isOpen = false, openedWithKeyboard = false"
                            class="relative">
                            <!-- Toggle Button -->
                            <button type="button" @click="isOpen = ! isOpen"
                                @keydown.space.prevent="openedWithKeyboard = true"
                                @keydown.enter.prevent="openedWithKeyboard = true"
                                @keydown.down.prevent="openedWithKeyboard = true"
                                class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium tracking-wide transition cursor-pointer whitespace-nowrap hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 "
                                :class="isOpen || openedWithKeyboard ? 'text-neutral-900 dark:text-white' :
                                    'text-neutral-600 dark:text-neutral-300'"
                                :aria-expanded="isOpen || openedWithKeyboard" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                            </button>
                            <!-- Dropdown Menu -->
                            <div x-cloak x-show="isOpen || openedWithKeyboard" x-transition x-trap="openedWithKeyboard"
                                @click.outside="isOpen = false, openedWithKeyboard = false"
                                @keydown.down.prevent="$focus.wrap().next()"
                                @keydown.up.prevent="$focus.wrap().previous()"
                                class="absolute top-11 right-0 flex w-full min-w-[12rem] flex-col divide-y divide-neutral-300 overflow-hidden rounded-md border border-neutral-300 bg-neutral-50 dark:divide-neutral-700 dark:border-neutral-700 dark:bg-neutral-900 "
                                role="menu">
                                <!-- Dropdown Section -->
                                <div class="flex flex-col py-1.5">
                                    <a href="#"
                                        class="flex items-center gap-2 px-4 py-2 text-sm bg-neutral-50 text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-none dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white"
                                        role="menuitem">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                            fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd"
                                                d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Profile
                                    </a>
                                    <a href="#" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                        class="flex items-center gap-2 px-4 py-2 text-sm bg-neutral-50 text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-none dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white"
                                        role="menuitem">
                                        <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8"
                                                stroke="#374151" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" />
                                        </svg>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<livewire:auth.logout>
