<x-base-layout>
    <x-jet-authentication-card2>
        <x-slot name="logo">
            <x-logos.main class="w-32" />
        </x-slot>

        <x-jet-validation-errors class="mb-4 " />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="username" value="{{ __('Username') }}" />
                <x-jet-input id="username" class="block w-full mt-1" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-3">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            {{-- <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div> --}}

            <div class="mt-3">
                <x-jet-label for="alamat" value="{{ __('Alamat') }}" />
                <x-jet-input id="alamat" class=" block h-20 w-96 mt-1" type="text" name="alamat" :value="old('alamat')" required />
            </div>

            <div class="mt-3">
                <x-jet-label for="email" value="{{ __('E-mail') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="text" name="email" :value="old('email')" required />
            </div>

            <div class="mt-3">
                <x-jet-label for="notlp" value="{{ __('No. Telepon') }}" />
                <x-jet-input id="notlp" class="block w-full mt-1" type="text" name="notlp" :value="old('notlp')" required />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-buttons.primary class="ml-4">
                    {{ __('Register') }}
                </x-buttons.primary>
            </div>
        </form>
    </x-jet-authentication-card2>
    <x-logos.avatar-regist>

    </x-logos.avatar-regist>
</x-base-layout>
