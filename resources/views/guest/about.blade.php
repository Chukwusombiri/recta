<x-app-layout>
    {{-- Hero --}}
    <section class="relative bg-cover bg-center bg-no-repeat md:h-screen"
        style="background-image:url('/images/admin/auth.jpg')">
        <div
            class="h-full relative px-4 py-16 sm:px-10 md:flex md:flex-col justify-center bg-gray-900 bg-opacity-50 backdrop-blur-sm">
            <div class="max-w-2xl text-white">
                <h1 class="futura-medium text-2xl md:text-5xl font-semibold tracking-wider" data-aos="fade-up">
                    Whether you're just starting out or looking to grow your wealth, our platform makes it easier to
                    make informed, confident financial decisions.
                </h1>

                <p class="mt-4 md:mt-8 max-w-lg sm:text-xl/relaxed uppercase futura-medium" data-aos="fade-up">
                    - Executive, Chris Stuani - Chartered Accountant
                </p>
            </div>
        </div>
    </section>
    {{-- Who we are --}}
    <section class="py-12 md:py-24">
        <div class="flex px-4 md:px-10">
            <div class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center">
                <div class="col-span-full md:col-span-1">
                    <h2 data-aos="fade-up"
                        class="futura-medium text-xl md:text-5xl font-extrabold tracking-wider mb-4 md:mb-0 p-0 text-blue-600 capitalize">
                        {{ $appName }}: Who we are
                    </h2>
                </div>
                <div class="col-span-full md:col-span-2">
                    <div data-aos="fade-up" class="w-full md:w-4/5 lg:w-3/4">
                        <p class="mb-4 text-xl">
                            At {{ config('app.name') }}, we’re committed to helping individuals and organizations
                            achieve financial freedom and prosperity. Built on integrity, innovation, and personalized
                            service, our team of seasoned professionals guides clients through the complexities of
                            investing.
                        </p>
                        <p class="mb-4 text-xl">
                            Recognized as thought leaders, our Investment Advisory Committee offers strategic insights
                            and supports the {{ config('app.name') }} management team with expert investment advice.
                        </p>
                        <p class="text-xl">
                            What began as a vision to transform the financial industry has grown into a trusted name,
                            delivering transparent, accessible, and high-quality investment solutions backed by
                            strategic guidance and tailored support.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- What we do --}}
    <section class="pt-8 pb-12 md:py-24" id="workEthics">
        <div class="flex px-4 md:px-10">
            <div class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center">
                <div class="col-span-full md:col-span-1" data-aos="fade-up">
                    <h2
                        class="futura-medium text-xl md:text-5xl font-extrabold tracking-wider mb-4 md:mb-0 p-0 text-blue-600 capitalize">
                        Not an average portfolio managers
                    </h2>
                </div>
                <div class="col-span-full md:col-span-2">
                    <div class="w-full md:w-4/5 lg:w-3/4">
                        <p class="mb-4 md:text-xl" data-aos="fade-up">
                            We offer a broad range of financial services, including crypto investments, diversified
                            portfolio management, and strategic planning. Our personalized approach ensures each client
                            receives tailored advice to meet their unique goals.
                        </p>
                        <p class="mb-4 md:text-xl" data-aos="fade-up">
                            Our expert advisors are always available to help you plan, address concerns, and choose the
                            right investment accounts with confidence.
                        </p>
                        <p class="md:text-xl" data-aos="fade-up">
                            From day one, we've helped clients reach their financial goals through smart investment
                            tools, expert guidance, and data-driven strategies—making a meaningful impact in their lives
                            and the financial community.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- stats --}}
    <section class="bg-center bg-cover my-16" style="background-image: url('/images/landing/feature-1.jpg')">
        <div class="bg-gray-900 bg-opacity-80 py-24">
            <div class="max-w-4xl mx-auto px-6 md:px-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="flex flex-col items-center gap-3 border-b border-gray-300 pb-6 md:pb-0 md:border-transparent">
                    <h2 class="text-4xl md:text-6xl font-bold text-gray-100">
                        5,678</h2>
                    <span class="text-gray-50 text-xl capitalize tracking-wider font-semibold sedan-regular">Active
                        Investors</span>
                </div>
                <div
                    class="flex flex-col items-center gap-3 border-b border-gray-300 pb-6 md:pb-0 md:border-transparent">
                    <h2 class="text-4xl md:text-6xl font-bold text-gray-100">
                        $400M+</h2>
                    <span class="text-gray-50 text-xl capitalize tracking-wider font-semibold sedan-regular">Active
                        Deposits</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <h2 class="text-4xl md:text-6xl font-bold text-gray-100">
                        $250M+</h2>
                    <span class="text-gray-50 text-xl capitalize tracking-wider font-semibold sedan-regular">Funds
                        withdrawn</span>
                </div>
            </div>
        </div>
    </section>
    {{-- Board of directors --}}
    <section class="py-12 md:py-24" id="team">
        <div class="flex flex-col px-6 md:px-10">
            <div data-aos="fade-up" class="w-full flex mb-4 md:mb-10">
                <h2 class="sedan-regular-bold text-xl md:text-5xl font-bold">Board of <span
                        class="text-blue-600">Directors</span></h2>
            </div>
            <div data-aos="fade-up"
                class="w-full grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-x-4 gap-y-6 md:gap-x-6 md:gap-y-10 md:gap-10">
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Chris Stuani - Chartered Accountant </h4>
                    <p class="text-sm">Executive & Board Director </p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Alison Davis</h4>
                    <p class="text-sm">Board Advisor</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Stanley Druckenmiller</h4>
                    <p class="text-sm">Founder, Duquesne Capital</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Joseph Yong Bum Bae</h4>
                    <p class="text-sm">Founder & CO-CEO, KKR Capital</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Keith Rabois</h4>
                    <p class="text-sm">GP, Founders Fund. Ex-MD, Khosla Ventures</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Daniel Loeb</h4>
                    <p class="text-sm">Founder & CEO, Third Point</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Tracey Brophy Warson</h4>
                    <p class="text-sm">Ex-Chairman, Citi Private Bank</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Daniel Och</h4>
                    <p class="text-sm">Founder, Och-Ziff</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">JDavid McCormick</h4>
                    <p class="text-sm">CEO, Bridgewater Associates</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Andy Stephens</h4>
                    <p class="text-sm">Advisor and Chartered Investment manager</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Cassie Paul</h4>
                    <p class="text-sm">Head of Customers service</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Map --}}
    <section class="py-16 md:py-24 bg-primary-white">
        <div class="flex px-4 md:px-10">
            <div class="w-full text-primary">
                <h2 class="futura-medium text-xl md:text-5xl font-extrabold tracking-wider mb-4 md:mb-10 text-blue-600 capitalize">
                    Our offices
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="w-full order-2 md:order-1">
                        <div class="flex md:mx-6 py-6 border-b border-gray-500">
                            <span class="mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-building-skyscraper text-blue-600"
                                    width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 21l18 0" />
                                    <path d="M5 21v-14l8 -4v18" />
                                    <path d="M19 21v-10l-6 -4" />
                                    <path d="M9 9l0 .01" />
                                    <path d="M9 12l0 .01" />
                                    <path d="M9 15l0 .01" />
                                    <path d="M9 18l0 .01" />
                                </svg>
                            </span>
                            <span class="flex flex-col max-w-[80%]">
                                <h4 class="text-xl md:text-3xl font-semibold text-primary-light text-wrap">
                                    {{ config('app.company.address') }}</h4>
                            </span>
                        </div>
                    </div>
                    <div class="h-[60vh] md:h-auto w-full max-w-full overflow-x-scroll order-1 md:order-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18347.474417809433!2d-5.1233449952455326!3d54.912850627093306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48623b3a00660d09%3A0xeda5a02b2221c62b!2sLeswalt%2C%20Stranraer%20DG9%200LT%2C%20UK!5e0!3m2!1sen!2sng!4v1749420078908!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Call to action --}}
    <section class="min-h-screen py-16 md:py-24 bg-gray-900">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 px-4 md:px-10">
            <div class="flex flex-col">
                <h2 class="text-3xl md:text-6xl sedan-regular font-bold">
                    Invest smarter—get started in <span class="text-blue-600">minutes</span>
                </h2>
            </div>
            <div class="flex flex-col">
                <x-validation-errors class="mb-4" />
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-6 md:mb-8">
                        <x-label for="email" value="{{ __('Email Address') }}"
                            class="text-primary-light text-md" />
                        <x-input placeholder="Enter your email address" id="email"
                            class="block mt-1 w-full bg-transparent text-primary-light placeholder:text-gray-400 focus:border-blue-600 py-4"
                            type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
                    <div class="mt-6 md:mb-8">
                        <x-label for="password" value="{{ __('Password') }}" class="text-primary-light text-md" />
                        <x-input placeholder="create a secure password" id="password"
                            class="block mt-1 w-full bg-transparent text-primary-light placeholder:text-gray-400 focus:border-blue-600 py-4"
                            type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-6 md:mb-8">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}"
                            class="text-primary-light text-md" />
                        <x-input placeholder="Repeat secure password" id="password_confirmation"
                            class="block mt-1 w-full bg-transparent text-primary-light placeholder:text-gray-400 focus:border-blue-600 py-4"
                            type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required
                                        class="bg-transparent border-blue-600 checked:bg-gray-700 checked:text-primary-light" />

                                    <div class="ml-2 text-primary-light">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' =>
                                                '<a target="_blank" href="' .
                                                route('terms.show') .
                                                '" class="underline text-sm text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">' .
                                                __('Terms of Service') .
                                                '</a>',
                                            'privacy_policy' =>
                                                '<a target="_blank" href="' .
                                                route('policy.show') .
                                                '" class="underline text-sm text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">' .
                                                __('Privacy Policy') .
                                                '</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-md text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ml-4 px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-700 text-lighter">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- FAQs --}}
    <section class="py-16 md:py-24" id="faqs">
        <div class="container mx-auto px-4 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
                <div class="flex justify-start">
                    <h2 class="text-3xl md:text-6xl font-semibold sedan-regular">FAQS</h2>
                </div>
                <div class="flex flex-col">
                    <x-faq-list></x-faq-list>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
