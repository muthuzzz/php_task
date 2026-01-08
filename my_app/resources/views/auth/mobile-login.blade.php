<x-guest-layout>{{-- blade component is used here which refers to layouts/guest.blade.php --}}
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('mobile-login.submit') }}">
        @csrf {{-- CSRF token for security --}}

        <!-- Mobile Number -->
        <div>
            <x-input-label for="mobile" :value="__('MobileNo')" />
            <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="flex items-center justify-between mt-4">
    <!-- Remember Me on the right -->
    <div class="flex items-center">
        <input id="remember_me" type="checkbox" name="remember"
               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
        <label for="remember_me" class="ms-2 text-sm text-gray-600">
            {{ __('Remember me') }}
        </label>
    </div>
      <!-- Forgot Password on the left -->
    <div>
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}"
               class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
               {{ __('Forgot your password?') }}
            </a>
        @endif
    </div>
</div>


        <div class="flex items-center justify-start mt-1">

              </div>
              <div class="flex justify-center ms-3 mt-4">

            <x-primary-button class="justify-center ms-3">
                {{ __('Log in') }}
            </x-primary-button>
    @if (Route::has('register'))
        <a
            href="{{ route('register') }}"
            class="px-5 py-1.5 border rounded-md text-sm hover:bg-gray-100 mt-0.5 ml-4"
        >
            Register
        </a>
    @endif
</div>

    </form>

</x-guest-layout>

