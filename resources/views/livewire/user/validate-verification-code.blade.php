<x-authentication-card>
    <x-slot name="logo">
        <x-authentication-card-logo />
    </x-slot>

    <div class="mb-4 text-sm text-primary-light">
        {{ __('Before continuing, could you verify your email address by entering the 6-digit verification code we emailed to you? Couldn\'t find it in your inbox, check inside your spam folder and if you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-code-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('We’ve sent a new verification code to the email you provided in your profile.') }}
        </div>
    @endif

    @if ($errors->has('code'))
        <div class="text-sm text-red-500 mb-4">{{ $errors->first('code') }}</div>
    @endif

    <form wire:submit.prevent="verify">
        <div class="flex items-center gap-2">
            <x-input id="code" wire:model="code" type="text" maxlength="6" required autofocus placeholder="ABC123"
                class="block w-full" />
            <x-button type="submit" class="text-primary-light">
                {{ __('Verify') }}
            </x-button>
        </div>
    </form>
    <div class="mt-4 flex items-center justify-between">
        <div class="flex items-center">
            <x-secondary-button class="text-primary-light" wire:click="resend">
                {{ __('Resend code') }}
            </x-secondary-button>
            <svg wire:loading class="animate-spin ml-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M3 12a9 9 0 0 0 9 9a9 9 0 0 0 9 -9a9 9 0 0 0 -9 -9" />
                <path d="M17 12a5 5 0 1 0 -5 5" />
            </svg>

        </div>
        <div>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf

                <button type="submit"
                    class="underline text-sm text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 ml-2">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-authentication-card>
