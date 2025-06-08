<div class="py-16 mx-auto max-w-8xl">
    <div class="max-w-3xl">
        <h2 class="text-4xl font-extrabold sm:text-5xl capitalize">What is our Portfolio Management approach</h2>
        <p class="mt-4 text-lg max-w-md mb-2">Our strategy is designed to help you earn steady returns, even as markets
            changes by diversifying across numerous financial instruments.</p>
        <a href="{{ route('managedInvesting') }}"
            class="hover:underline text-blue-600 inline-flex items-center flex-nowrap gap-1 text-md tracking-wide futura-medium">
            <span>Learn more</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                <path d="M5 12l14 0"></path>
                <path d="M13 18l6 -6"></path>
                <path d="M13 6l6 6"></path>
            </svg>
        </a>
    </div>
    <div class="mt-12 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:grid-cols-4 lg:gap-x-8">
        @php
            $solutions = [
                [
                    'title' => 'Equity Investments',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 text-green-500 size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
</svg>
',
                    'desc' =>
                        'Our portfolio includes carefully selected stocks with strong growth potential, aiming to deliver solid long-term returns through capital appreciation and dividends.',
                ],
                [
                    'title' => 'Real Estate Assets',
                    'svg' => '
<svg
class="flex-shrink-0 text-green-500 size-6"
  xmlns="http://www.w3.org/2000/svg"
  width="32"
  height="32"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="1.5"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M19 10l-7 -7l-9 9h2v7a2 2 0 0 0 2 2h6" />
  <path d="M9 21v-6a2 2 0 0 1 2 -2h2c.387 0 .748 .11 1.054 .3" />
  <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
  <path d="M19 21v1m0 -8v1" />
</svg>
',
                    'desc' =>
                        'We diversify with real estate investments—ranging from private properties to commercial spaces—to offer stability and long-term value against market volatility.',
                ],
                [
                    'title' => 'Cryptocurrency Assets',
                    'svg' => '
<svg
class="flex-shrink-0 text-green-500 size-6"
  xmlns="http://www.w3.org/2000/svg"
  width="32"
  height="32"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="1.5"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M6 6h8a3 3 0 0 1 0 6a3 3 0 0 1 0 6h-8" />
  <path d="M8 6l0 12" />
  <path d="M8 12l6 0" />
  <path d="M9 3l0 3" />
  <path d="M13 3l0 3" />
  <path d="M9 18l0 3" />
  <path d="M13 18l0 3" />
</svg>
',
                    'desc' =>
                        'Gain exposure to digital currencies like Bitcoin and Ethereum. Our approach helps you navigate the dynamic world of crypto with informed, strategic investments.',
                ],
                [
                    'title' => 'Forex Market Access',
                    'svg' => '
<svg
class="flex-shrink-0 text-green-500 size-6"
  xmlns="http://www.w3.org/2000/svg"
  width="32"
  height="32"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="1.5"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M3 18l3.279 -11.476a.75 .75 0 0 1 1.442 0l3.279 11.476" />
  <path d="M21 6h-4a3 3 0 0 0 0 6h1a3 3 0 0 1 0 6h-4" />
  <path d="M17 20v-2" />
  <path d="M18 6v-2" />
  <path d="M4.5 14h5" />
</svg>
',
                    'desc' =>
                        'Tap into the world\'s largest financial market with our Forex investment strategies, designed to leverage global currency fluctuations for optimal returns.',
                ],
            ];

        @endphp
        @foreach ($solutions as $item)
            <div>
                <div class="flex flex-nowrap">
                    {!! $item['svg'] !!}
                    <div class="ml-3 flex-shrink">
                        <h4 class="text-lg font-semibold">{{ $item['title'] }}</h4>
                    </div>
                </div>
                <p class="mt-2">{{ $item['desc'] }}</p>
            </div>
        @endforeach
    </div>
</div>
