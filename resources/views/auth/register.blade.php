<style>
    .w75 {
        width: 100%;
    }
</style>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" id="form">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            {{-- Angkatan --}}
            <div class="mt-4">
                <x-label for="angkatan" :value="__('Angkatan')" />

                <x-input id="angkatan" class="block mt-1 w-full" type="text" name="angkatan" :value="old('angkatan')"
                    required />
            </div>

            {{-- Pekerjaan --}}
            <div class="mt-4">
                <x-label for="pekerjaan" :value="__('Pekerjaan')" />

                <x-input id="pekerjaan" class="block mt-1 w-full" type="text" name="pekerjaan" :value="old('pekerjaan')"
                    required />
            </div>

            {{-- Fakultas --}}
            {{-- <div class="mt-4">
                <x-label for="fakultas" :value="__('Fakultas')" />
                <select name="fakultas" id="fakultas" form="form" class="mt-2 w-75">
                    <option value="volvo" class="w-75">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
            </div> --}}
            <div class="mt-4">
                <x-label for="fakultas" :value="__('Fakultas')" />

                <x-input id="fakultas" class="block mt-1 w-full" type="text" name="fakultas" :value="old('fakultas')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
