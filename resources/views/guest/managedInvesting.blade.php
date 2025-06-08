<x-app-layout>
    {{-- hero --}}
    <section class="md:min-h-screen py-9 md:py-24">
        <div class="container mx-auto h-full flex flex-wrap items-center">
            <div class="w-full md:w-1/2 flex flex-col justify-center items-start px-6 md:px-10 mb-10 md:mb-0">
                <h2 data-aos="fade-up"
                    class="text-center md:text-left sedan-regular-bold text-3xl md:text-4xl lg:text-6xl font-bold mb-3 md:mb-6 capitalize">
                    Portfolio <span class="text-blue-600">management</span> for you
                </h2>
                <p data-aos="fade-up" class="text-center md:text-left text-md md:text-lg lg:text-2xl mb-6">
                    We'll build you a smart, sophisticated Trading portfolio designed to help you achieve maximum
                    profits and reach your goals faster.
                </p>
                <div data-aos="fade-up" class="w-full flex justify-center md:justify-start">
                    <x-link-two href="{{ route('user.deposit.pricingTable') }}" class="py-4">Get Started</x-link-two>
                </div>
            </div>
            <div data-aos="fade-up" class="w-full md:w-1/2 flex justify-center items-center md:px-6">
                <img src="{{ asset('/images/managedInvesting/hero.jpg') }}" alt="Hero Image"
                    class="w-full h-56 md:h-auto md:rounded-xl object-cover">
            </div>
        </div>
    </section>
    {{-- quote --}}
    <section class="py-16 lg:py-24">
        <div class="container mx-auto px-4 md:px-10 flex flex-col items-center">
            <div class="w-full flex items-end mb-6">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-quote rotate-180 text-primary-lighter" width="40"
                    height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                    <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                </svg>
                <span class="w-10/12 border-b border-primary-light"><span class="hidden">Horizontal rule</span></span>
            </div>
            <div class="w-full flex flex-col items-center md:px-10">
                <h2 class="sedan-regular-bold text-lg md:text-4xl mb-4 md:mb-8 text-left">
                    The most effective path to your financial goals? Investing in a mix of affordable, diversified
                    assets that match your risk tolerance.
                </h2>
                <h2 class="sedan-regular-bold text-lg md:text-4xl mb-6 md:mb-8 text-left">
                    We aim to position you for steady, dependable returns—no matter how the market moves.
                </h2>
                <p class="w-full text-md uppercase tracking-widest"><span class="font-semibold">Jonathan Carsley</span>,
                    CIO (CHIEF INVESTMENT OFFICER)</p>
            </div>
        </div>
    </section>
    {{-- SOLUTIONS --}}
    <section class="py-14 md:py-24 text-primary" id="solutions">
        <div class="container mx-auto px-4 md:px-8">
            <h5 data-aos="fade-up" class="mb-4 md:mb-6 uppercase tracking-wide font-light">
                Asset managment solutions
            </h5>
            <h2 data-aos="fade-up"
                class="sedan-regular-bold text-3xl md:text-3xl lg:text-5xl mb-10 max-w-3xl pr-6 md:pr-0">
                Smart diversification leads to <span class="text-blue-600">success</span>.
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $solutions = [
                        [
                            'title' => 'Forex Market Exposure',
                            'desc' =>
                                'Gain access to the world’s largest financial market. Our strategy leverages global currency movements and economic trends to drive potential high returns.',
                        ],
                        [
                            'title' => 'Crypto Asset Growth',
                            'desc' =>
                                'Tap into the dynamic world of digital currencies. Our portfolio includes Bitcoin, Ethereum, and more — capturing upside in a fast-paced market.',
                        ],
                        [
                            'title' => 'Equity Market Strategy',
                            'desc' =>
                                'Invest in strong-performing stocks chosen for growth and dividend potential. We build long-term value through smart equity selection.',
                        ],
                        [
                            'title' => 'Real Estate Stability',
                            'desc' =>
                                'Balance your portfolio with real estate holdings. From private homes to commercial assets, enjoy income potential and resilience against market shifts.',
                        ],
                    ];
                @endphp
                @foreach ($solutions as $item)
                    <div
                        class="rounded-lg border border-gray-800 bg-gray-900 p-4 shadow-xs transition hover:shadow-lg sm:p-6">
                        <span class="inline-block rounded-sm bg-gray-200 p-2 text-blue-600">
                            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24"
                                height="24" stroke-width="2">
                                <path d="M7 12l5 5l10 -10"></path>
                                <path d="M2 12l5 5m5 -5l5 -5"></path>
                            </svg>
                        </span>

                        <h3 class="mt-0.5 text-lg font-medium text-gray-200">
                            {{ $item['title'] }}
                        </h3>

                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-400">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- features --}}
    <section class="md:min-h-screen py-9 md:py-24 text-primary" id="features">
        <div class="container mx-auto h-full flex flex-col justify-center px-4 md:px-8">
            <h5 data-aos="fade-up" class="mb-4 md:mb-6 uppercase tracking-wide font-light">
                Portfolio managment features
            </h5>
            <h2 data-aos="fade-up"
                class="sedan-regular-bold text-3xl md:text-3xl lg:text-5xl mb-10 max-w-3xl pr-6 md:pr-0">
                Professionally managed portfolios, <span class="text-blue-600">tailored</span> to you.
            </h2>
            <div class="flex flex-wrap my-12">
                <div data-aos="fade-up" class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-blue-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Reliable and diversified</div>
                    </div>
                    <p class="leading-loose">
                        Your funds are invested over numerous asset classes in the market. It is a tried-and-true method
                        for assisting in maximising profits while lowering risk.
                    </p>
                </div>
                <div data-aos="fade-up" class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-blue-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Made for modern investors</div>
                    </div>
                    <p class="leading-loose">
                        Gain free access to unique, cutting-edge investment opportunities. Savour user-friendly
                        technology while receiving assistance from people.
                    </p>
                </div>
                <div data-aos="fade-up" class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 lg:border-r-0 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-blue-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Withdraw income any time</div>
                    </div>
                    <p class="leading-loose">
                        Our clients can withdraw the funds whenever they want to do so and through multiple channel
                        including bitcoin, ethereum and many more others.
                    </p>
                </div>
                <div data-aos="fade-up" class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r lg:border-b-0 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-blue-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Supported by experts</div>
                    </div>
                    <p class="leading-loose">Our in-house trading team will customize a portfolio to suit your
                        investment goals. They keep a close eye on market trends and opportunities, so you don’t have
                        to.
                    </p>
                </div>
                <div data-aos="fade-up"
                    class="w-full border-b md:w-1/2 md:border-r md:border-b-0 lg:w-1/3 lg:border-b-0 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-blue-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">24/7 Client support</div>
                    </div>
                    <p class="leading-loose">
                        We are always eager, willing and devoted to solving our clients problems and offering support
                        all along the way.
                    </p>
                </div>
                <div data-aos="fade-up" class="w-full border-b md:w-1/2 md:border-b-0 lg:w-1/3 lg:border-b-0 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-blue-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Data Security</div>
                    </div>
                    <p class="leading-loose">
                        Our systems are protected against any attack 24/7 using next-gen cutting-edge security
                        achitectures and technology which generally security of funds and clients data.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- market charts --}}
    <section class="py-16 md:py-24 text-primary-light min-h-screen overflow-y-auto">
        <div class="container mx-auto px-6 md:px-10">
            <div class="flex flex-col gap-6 md:gap-10">
                <h2 class="text-4xl md:text-5xl font-extrabold max-w-2xl capitalize"><span
                        class="text-blue-600">real-time</span> Forex and Stock market moves</h2>
                <div class="w-full h-[100vh]">
                    <x-market-chart />
                </div>
            </div>
        </div>
    </section>
    {{-- lower fees --}}
    <section class="bg-cover bg-center" style="background-image: url('images/reviews/hero.jpg')">
        <div class="pt-16 md:py-24 bg-primary-dark bg-opacity-60 text-primary-lighter">
            <div class="container max-w-xl mx-auto">
                <div data-aos="fade-up" class="px-6 md:px-10 flex flex-col items-center justify-center">
                    <h2 class="text-4xl md:text-6xl futura-medium mb-6 md:mb-10 text-center">
                        Make the most of your money
                    </h2>
                    <p class="text-md md:text-2xl tracking-wide mb-6 md:mb-10 text-center">
                        It’s the little things—done consistently in the background like rebalancing and
                        reinvestment—that drive long-term growth, and we manage them for you.
                    </p>
                    <div class="w-full flex gap-4 flex-wrap justify-center">
                        <x-link-two href="{{ route('user.deposit.pricingTable') }}">Get your portfolio</x-link-two>
                        <x-link-one href="{{ route('pricing') }}"
                            class="bg-primary-lighter border-primary-lighter text-primary-dark hover:bg-primary-light hover:text-primary-dark">View
                            plans</x-link-one>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- contact team --}}
    <section class="py-12 md:py-24 mt-10 lg:mt-20">
        <div class="container mx-auto px-6 md:px-10">
            <div class="w-full flex flex-wrap items-center">
                <div data-aos="fade-up" class="w-full md:w-1/2 md:px-6 order-2 md:order-1">
                    <x-cia />
                </div>
                <div data-aos="fade-up" class="w-full md:w-1/2 md:px-6 md:order-2 mb-4 mb-0">
                    <div class="flex flex-col justify-center md:pl-10">
                        <h2 class="sedan-regular-bold text-3xl lg:text-4xl mb-6 md:mb-10">One text does it !</h2>
                        <p class="mb-4 text-md text-xl">Account questions? Sick of delayed replies? We're online 7 days
                            a week and ready to help — no waiting around.</p>
                        <div class="mb-4">
                            <p class="font-semibold text-base md:text-2xl mb-2">Just a message away</p>
                            <p class="text-md">Clients at {{ $appName }} gain access to tailored financial
                                planning and goal tracking. Connect with our team instantly through live chat or send an
                                email to <a class="underline"
                                    href="mailto:{{ config('mail.mainTo.address') }}">{{ config('mail.mainTo.address') }}</a> or WhatsApp: <a href="{{config('app.socials.whatsapp_link')}}" class="underline">{{config('app.socials.whatsapp')}}</a>
                            </p>
                        </div>
                        <div class="mb-4">
                            <p class="font-semibold text-base md:text-2xl mb-2">Talk to an advisor</p>
                            <p class="text-md">Every client is paired with a dedicated advisor, available to provide
                                clear answers and guidance—no matter how complex your financial questions may be. Reach
                                us at <a class="underline"
                                    href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- plans --}}
    <section class="md:min-h-screen py-16 lg:py-24" id="plans">
        <div class="container mx-auto px-6 md:px-10">
            <h2 data-aos="fade-up" class="sedan-regular-bold text-4xl md:text-6xl max-w-xl mb-8 tracking-wide">
                Smarter, safer <span class="text-blue-600">investing</span> starts now
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-6">
                @foreach ($plans as $plan)
                    @php
                        $bgColor = '';
                        $text = '';
                        switch ($loop->index) {
                            case 0:
                                $bgColor = 'bg-gray-700 hover:bg-gray-800';
                                $text = 'Get started with simple, low-fee investment package';
                                break;
                            case 1:
                                $bgColor = 'bg-slate-700 hover:bg-slate-800';
                                $text = 'Make the most of your investment with low fees and tailored advice';
                                break;
                            case 2:
                                $bgColor = 'bg-neutral-700 text-primary-light hover:bg-neutral-800';
                                $text = 'Build your legacy with expert guidance from your dedicated team of advisors';
                                break;
                            default:
                                $bgColor = 'bg-neutral-700 text-primary-light hover:bg-neutral-800';
                                $text =
                                    'Always stay ahead of the curve with innovative and state-of-the-art data analysis';
                                break;
                        }
                    @endphp
                    <a data-aos="fade-up" href="{{ route('user.deposit.create', [$plan->id]) }}"
                        class="w-full lg:w-full">
                        <div class="{{ $bgColor }} rounded-xl p-6 mb-6 shadow-lg">
                            <div class="mb-3 md:mb-8">
                                <span class="py-2 futura-book uppercase">${{ number_format($plan->min) }} in
                                    assets</span>
                            </div>
                            <div class="flex items-center mb-3 md:mb-6">
                                <span class="mr-3 sedan-regular-bold text-3xl capitalize">{{ $plan->name }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" class="w-6 h-6 hover:w-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </div>
                            <div class="flex mb-4 md:mb-6 items-center">
                                <p>{{ $text }}</p>
                            </div>
                            <div class="flex items-end mb-6">
                                <span
                                    class="sedan-regular text-4xl font-bold mr-2">{{ round($plan->perMonInt, 1) }}%</span>
                                <span class="text-xl font-semibold">after {{ $plan->duration_str }}</span>
                            </div>
                            <div class="flex items-center mb-4">
                                <span class="sedan-regular text-2xl font-bold">Minimum:
                                    ${{ number_format($plan->min) }}</span>
                            </div>
                            <div class="flex items-center mb-6">
                                <span class="sedan-regular text-2xl font-bold">Maximum:
                                    ${{ number_format($plan->max) }}</span>
                            </div>
                            @if (!empty($plan->features))
                                @php
                                    $features = json_decode($plan->features, true);
                                @endphp
                                @for ($i = 0; $i < min(2, count($features)); $i++)
                                    <div class="flex items-start mb-px md:mb-4">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>
                                        </span>
                                        <span class="ml-2">{{ $features[$i] }}</span>
                                    </div>
                                @endfor
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    {{-- FAQ --}}
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
