<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-primary-light">
            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? Couldn\'t find it in your inbox, check inside your spam folder and if you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('We’ve sent a new verification link to the email you provided in your profile.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button type="submit" class="text-primary-light">
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <div>                
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 ml-2">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>