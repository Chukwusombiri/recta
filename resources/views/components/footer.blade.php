<div class="pt-16 md:pt-24 text-primary-light">
    <div class="w-full px-6 md:px-12">
        <div class="flex flex-col">
            {{-- subscribe call to action --}}
            <div class="w-full flex md:justify-between items-center flex-wrap border-b border-gray-300 pb-10">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <div class="max-w-sm flex flex-col">
                        <h3 class="sedan-regular-bold text-2xl md:text-4xl mb-5">
                            Newletter
                        </h3>
                        <p class="futura-book text-md">
                            Sign up for our weekly non-boring newsletter about money, markets, and more.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 flex flex-col">
                    @livewire('subscribe')
                    <p class="futura-light text-sm max-w-sm text-primary-lighter">
                        By providing your email, you are consenting to receive communications from
                        {{ config('app.name') }} Media Inc. Visit our <a href="{{ route('policy.show') }}"
                            class="underline">Privacy Policy</a> for more info, or contact us at
                        {{ config('mail.mainTo.address') }} or {{ config('app.company.address') }}.
                    </p>
                </div>
            </div>
            {{-- footer items --}}
            <div class="w-full py-10 border-b border-gray-300">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 justify-center">
                    {{-- single --}}
                    <div class="">
                        <p class="futura-medium text-md mb-2">Our company</p>
                        <ul class="list-style-none space-y-2">
                            <li class="futura-book text-sm"><a href="{{ route('about') }}">About us</a></li>
                            <li class="futura-book text-sm"><a href="{{ route('about') . '#team' }}">Our team</a></li>
                            <li class="futura-book text-sm"><a href="{{ route('pricing') . '#reviews' }}">Client
                                    review</a></li>
                            <li class="futura-book text-sm"><a href="{{ route('knowledge') . '#faqs' }}">FAQs</a></li>
                        </ul>
                    </div>
                    {{-- single --}}
                    <div class="">
                        <p class="futura-medium text-md mb-2">Products</p>
                        <ul class="list-style-none space-y-2">
                            <li class="futura-book text-sm"><a href="{{ route('managedInvesting') }}">Portfolio
                                    management</a></li>
                            <li class="futura-book text-sm"><a href="{{ route('pricing') }}">Investment Plans</a></li>
                            <li class="futura-book text-sm"><a
                                    href="{{ route('managedInvesting') . '#features' }}">Portfolio features</a></li>
                            <li class="futura-book text-sm"><a
                                    href="{{ route('managedInvesting') . '#faqs' }}">Portfolio management FAQs</a></li>
                        </ul>
                    </div>
                    {{-- single --}}
                    <div class="">
                        <p class="futura-medium text-md mb-2">Legal</p>
                        <ul class="list-style-none space-y-2">
                            <li class="futura-book text-sm"><a href="{{ route('policy.show') }}">Privacy policy</a>
                            </li>
                            <li class="futura-book text-sm"><a href="{{ route('terms.show') }}">Terms of use</a></li>
                        </ul>
                    </div>
                    {{-- single --}}
                    <div class="col-span-2 md:col-span-2 lg:col-span-2">
                        <h5 class="futura-medium text-md mb-2">
                            <x-application-logo />
                        </h5>
                        <p class="futura-book text-md">
                            We're a comprehensive investment firm committed to offering a wide range of opportunities to
                            help you
                            invest with confidence. Whether you're just starting out or have years of experience, we're
                            here to
                            support every step of your journey.
                        </p>
                        <div class="mt-4">
                            <p class="futura-medium text-md">Contact us</p>
                            <div class="mt-2 text-sm flex flex-col gap-4">
                                <a href="{{ config('app.socials.whatsapp_link') }}" class="flex items-center">
                                    <svg class="size-7 text-primary-light mr-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                        <path
                                            d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                    </svg>
                                    <span>{{ config('app.socials.whatsapp') }}</span>
                                </a>
                                <a href="mailto:{{ config('mail.mainTo.address') }}" class="flex items-center">
                                    <svg class="size-7 mr-2 text-primary-light" xmlns="http://www.w3.org/2000/svg" width="32"
                                        height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                        <path d="M3 7l9 6l9 -6" />
                                    </svg>
                                    <span>{{ config('mail.mainTo.address') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- copyright --}}
            <div class="pt-10 pb-6">
                <div class="w-full flex items-center justify-center">
                    <div class="max-w-2xl mx-auto flex flex-col items-center">
                        <p class="futura-light text-sm mb-px">
                            © 2014–{{ now()->year }}, {{ config('app.name') }} Technologies Inc. All Rights
                            Reserved.
                        </p>
                        <p class="futura-light text-sm mb-px">
                            By using this website, you accept our <a href="{{ route('terms.show') }}"
                                class="underline">Terms of Use</a> and <a href="{{ route('policy.show') }}"
                                class="underline">Privacy Policy.</a>
                        </p>
                        <p class="futura-light text-sm mb-px">
                            For information about filing a complaint please visit <a href="{{ route('contact') }}"
                                class="underline">our contact page</a> and use subject 'How to File a Complaint'.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
