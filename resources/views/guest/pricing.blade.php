<x-app-layout>
    {{-- hero --}}
    <section class="md:h-[60vh] py-8 md:py-24 bg-primary-dark">
        <div class="h-full flex flex-col justify-center items-center px-4 md:px-10">
            <h1
                class="sedan-regular-bold text-3xl md:text-6xl w-[50%] max-w-xl mx-auto mb-4 md:mb-10 text-center capitalize">
                investment plans</h1>
            <p class="text-center text-md md:text-2xl max-w-3xl mx-auto">
                Your success matters—so we focus on delivering stable, long-term results across market cycles. It’s the
                little things—done consistently in the background like rebalancing and reinvestment—that drive long-term
                growth, and we manage them for you.
            </p>
        </div>
    </section>
    {{-- plans --}}
    <section class="md:min-h-screen pt-0 pb-16 md:py-24">
        <div class="flex flex-wrap px-4 md:px-10">
            @if (count($plans) > 0)
                @foreach ($plans as $p => $plan)
                    @php
                        $text = '';
                        $bgColor = '';
                        switch ($p) {
                            case 0:
                                $bgColor = 'bg-gray-700 hover:bg-gray-800';
                                $text = 'Low-fee, easy-to-understand package';
                                break;
                            case 1:
                                $bgColor = 'bg-slate-700 hover:bg-slate-800';
                                $text = 'Low-cost plans with smart guidance';
                                break;
                            case 2:
                                $bgColor = 'bg-neutral-700 text-primary-light hover:bg-neutral-800';
                                $text = 'Personalized advice from experts';
                                break;
                            case 3:
                                $bgColor = 'bg-zinc-700 text-primary-light hover:bg-zinc-800';
                                $text = 'Diversified assets for steady growth';
                                break;
                            case 4:
                                $bgColor = 'bg-blue-800 text-primary-light hover:bg-blue-900';
                                $text = 'Hands-off investing with automation';
                                break;
                            case 5:
                                $bgColor = 'bg-green-900 text-primary-light hover:bg-green-900';
                                $text = 'Flexible options to match your goals';
                                break;
                            default:
                                $bgColor = 'bg-neutral-700 text-primary-light hover:bg-neutral-800';
                                $text = 'Advanced, real-time data insights';
                                break;
                        }
                    @endphp
                    <div class="w-full px-3 md:px-6 lg:w-1/3" id="{{ $plan->name }}">
                        <div
                            class="rounded-lg md:rounded-xl p-6 mb-6 shadow-lg border border-gray-300 hover:shadow-xl transition duration-300 ease-in-out transform hover:-translate-y-2">
                            <div class="w-full flex flex-col">
                                <h2 class="sedan-regular-bold text-3xl mb-4 md:mb-6">{{ $plan->name }}</h2>
                                <p class="mb-4 md:mb-6">{{ $text }}</p>
                                <div class="flex items-center mb-4 md:mb-6">
                                    <span
                                        class="{{ $bgColor }} inline-flex items-center py-2 px-4 rounded-full shadow">
                                        <span class="sedan-regular text-2xl">{{ round($plan->perMonInt, 1) }}%</span>
                                        <span class="ml-2">after {{ $plan->duration_str }}</span>
                                    </span>
                                </div>
                                <div class="flex items-center mb-4">
                                    <span class="sedan-regular text-2xl font-bold">Minimum:
                                        ${{ number_format($plan->min) }}</span>
                                </div>
                                <div class="flex items-center mb-6">
                                    <span class="sedan-regular text-2xl font-bold">Maximum:
                                        ${{ number_format($plan->max) }}</span>
                                </div>
                                <p class="futura-medium text-lg mb-4">Benefits</p>
                                @if ($plan->features !== null || $plan->features !== '')
                                    @foreach (json_decode($plan->features, true) as $item)
                                        <div class="flex items-start mb-px md:mb-2">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-4 h-4 md:w-6 md:h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m4.5 12.75 6 6 9-13.5" />
                                                </svg>
                                            </span>
                                            <span class="ml-2">{{ $item }}</span>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="flex justify-start mt-6">
                                    @if (auth()->check())
                                        @if ((auth()->user()->plan_id !== null && auth()->user()->plan_id === $plan->id) || auth()->user()->plan_id === null)
                                            <x-link-one
                                                href="{{ route('user.deposit.pricingTable') }}">Deposit</x-link-one>
                                        @endif
                                        @if (auth()->user()->plan_id !== null && auth()->user()->plan_id !== $plan->id)
                                            <x-link-one
                                                href="{{ route('user.deposit.pricingTable') }}">Upgrade</x-link-one>
                                        @endif
                                    @else
                                        <x-link-one
                                            href="{{ route('user.deposit.pricingTable') }}">Deposit</x-link-one>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
    {{-- features --}}
    <section class="md:min-h-screen py-16 md:py-24 bg-gray-900 text-primary-light">
        <div class="px-6 md:px-16 grid grid-cols-1 md:grid-cols-5 gap-6 justify-center">
            <div class="col-span-1 md:col-span-3">
                <h2 class="text-3xl md:text-6xl sedan-regular max-w-xl">Investing made effortless — <br>with <span
                        class="text-blue-600">enhanced </span> security</h2>
            </div>
            <div class="col-span-1 md:col-span-2">
                @php
                    $features = [
                        [
                            'heading' => 'Simplified Trading',
                            'description' =>
                                'Our user-friendly platform and supportive team guide you from your first deposit to withdrawals and retirement planning—no guesswork, just growth.',
                        ],
                        [
                            'heading' => 'Smart Money Management',
                            'description' =>
                                'Enjoy auto-reinvestment, compounding returns, and free expert advice—all working seamlessly behind the scenes to keep your finances on track.',
                        ],
                        [
                            'heading' => 'Superior Returns',
                            'description' => "At $appName, data-driven strategies and expert insights combine to deliver returns that consistently outperform the market, helping your money grow faster.",
                        ],
                    ];

                @endphp

                @foreach ($features as $item)
                    <div class="flex flex-col mb-6 md:mb-10">
                        <h4 class="futura-medium text-md md:text-2xl tracking-wider flex gap-4 flex-nowrap">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-8 w-8 text-blue-600">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            {{ $item['heading'] }}
                        </h4>
                        <p class="text-md md:text-2xl mt-2">{{ $item['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- contact --}}
    <section class="md:min-h-screen py-16 md:py-24 bg-primary-white">
        <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-6 px-6 md:px-10">            
            <div class="col-span-1 md:col-span-2">
                <x-cia />
            </div>
            <div class="col-span-1 md:col-span-2">
                <h2 class="sedan-regular text-3xl md:text-6xl mb-4 w-full md:max-w-[85%]">
                    Smart Moves for Your <span class="text-blue-600">Money</span>
                </h2>
                <p class="text-md md:text-2xl mb-4 md:mb-10 w-full md:max-w-[85%]">
                    Our team takes the time to understand your unique financial goals and risk tolerance. Once we know what you’re aiming for, we’ll guide you step-by-step as you transition into Managed Portfolio with {{ $appName }}—making the process simple, informed, and tailored to you.
                </p>
                <div class="flex">
                    <x-link-one href="{{ route('contact') }}">Talk to us</x-link-one>
                </div>
            </div>
        </div>
    </section>
    {{-- cta --}}    
    <section class="bg-primary-light bg-cover" style="background-image: url('images/managedInvesting/low-fees.jpg')">
        <div
            class="md:h-screen flex items-center justify-center px-4 md:px-10 mt-6 md:mt-10 py-16 bg-primary-dark bg-opacity-70 text-primary-lighter">
            <div class="max-w-lg mx-auto flex flex-col items-center justify-center text-center">
                <h2
                    class="w-[70%] mx-auto md:w-full text-center sedan-regular text-4xl md:text-6xl text-primary-lighter mb-10">
                    Flexible options to match your goals
                </h2>
                <p class="w-[70%] mx-auto md:w-full futura-book text-md md:text-2xl mb-10 text-primary-lighter">
                    Create your {{ $appName }} account now and begin investing.
                </p>
                <div class="flex justify-center">
                    <x-link-two href="{{ route('user.deposit.pricingTable') }}" class="py-4">Sign-up
                        today</x-link-two>
                </div>
            </div>
        </div>
    </section>
    {{-- reviews --}}
    <section class="py-16">
        <div class="text-primary-light pt-8" id="reviews">

            <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-10">

                <div class="mb-10">
                    <h2 class="sedan-regular text-4xl md:text-5xl max-w-xl">
                        Read some reviews from <span class="text-blue-600">our clients</span>
                    </h2>
                </div>


                <div class="md:columns-2 lg:columns-3 gap-8 space-y-8">
                    @foreach ($reviews as $item)
                        <x-review-card :image-url="$item->photoUrl" :occupation="$item->occupation">
                            <x-slot:client>{{ $item->client }}</x-slot>
                            <x-slot:comment>{{ $item->comment }}</x-slot>
                        </x-review-card>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
