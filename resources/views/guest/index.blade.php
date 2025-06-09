<x-app-layout>
    {{-- Hero CTA and why choose us --}}
    <section class="py-12 md:py-24 text-primary-light">
        <div class="container px-6 md:px-10 mx-auto flex justify-center items-center h-full pb-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
                <div class="flex flex-col justify-center items-start mb-10 md:mb-0" data-aos="fade-left">
                    <h2
                        class="w-full text-primary-light text-center md:text-left tracking-wider capitalize sedan-regular-bold text-3xl md:text-4xl lg:text-6xl mb-4 md:mb-6">
                        Secure Your Financial <br class="md:hidden"><span class="text-blue-600">Growth</span> with Expert
                        Trading.
                    </h2>
                    <p class="text-primary-lightfutura-book text-center md:text-left text-md md:text-2xl mb-4 md:mb-6">
                        Join {{ $appName }} and Let Experts With Proven Results Trade for You .
                    </p>
                    <div class="w-full flex items-center justify-center md:justify-start flex-wrap gap-4 md:gap-6">
                        <x-link-two href="{{ route('user.deposit.pricingTable') }}" class="py-4">Start
                            investing</x-link-two>
                        <x-link-one href="{{ route('pricing') }}" class="py-4">View plans</x-link-one>
                    </div>
                </div>
                <div class="flex justify-center items-center" data-aos="fade-right">
                    <img src="{{ asset('/images/landing/feature-3.jpg') }}" alt="Hero Image"
                        class="w-full h-auto md:h-full rounded-xl">
                </div>
            </div>
        </div>
        <div class="container px-6 md:px-10 mx-auto grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-10 mt-10 md:mt-16">
            <div class="flex flex-col justify-start pb-4 md:pt-6 md:border-t border-primary-light" data-aos="fade-up">
                <div class="w-full flex justify-center md:justify-start mb-4 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                        class="w-12 h-12" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M3 12h4l3 8l4 -16l3 8h4" />
                    </svg>

                </div>
                <h4 class="futura-medium text-lg md:text-3xl text-center md:text-left">
                    Daily market tips at no cost
                </h4>
                <p class="futura-book text-md md:text-xl mt-2 md:mt-4 text-center md:text-left">
                    Stay informed with timely, expert-curated market insights delivered to you every day — all for free.
                </p>
            </div>
            <div class="flex flex-col justify-center md:justify-start py-4 md:py-6 border-t border-primary-light"
                data-aos="fade-up">
                <div class="w-full flex justify-center md:justify-start mb-4 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round" class="w-12 h-12">
                        <path d="M9 14c0 1.657 2.686 3 6 3s6 -1.343 6 -3s-2.686 -3 -6 -3s-6 1.343 -6 3z" />
                        <path d="M9 14v4c0 1.656 2.686 3 6 3s6 -1.344 6 -3v-4" />
                        <path
                            d="M3 6c0 1.072 1.144 2.062 3 2.598s4.144 .536 6 0c1.856 -.536 3 -1.526 3 -2.598c0 -1.072 -1.144 -2.062 -3 -2.598s-4.144 -.536 -6 0c-1.856 .536 -3 1.526 -3 2.598z" />
                        <path d="M3 6v10c0 .888 .772 1.45 2 2" />
                        <path d="M3 11c0 .888 .772 1.45 2 2" />
                    </svg>

                </div>
                <h4 class="futura-medium text-lg md:text-3xl text-center md:text-left">
                    Free portfolio setup with zero fees
                </h4>
                <p class="futura-book text-md md:text-xl mt-2 md:mt-4 text-center md:text-left">
                    Build a custom investment portfolio tailored to your goals. We’ll help you get started from scratch,
                    without any setup fees or hidden costs.
                </p>
            </div>
            <div class="flex flex-col justify-start py-4 md:py-6 border-t border-primary-light" data-aos="fade-up">
                <div class="w-full flex justify-center md:justify-start mb-4 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round" class="w-12 h-12">
                        <path d="M18 9l3 3l-3 3" />
                        <path d="M15 12h6" />
                        <path d="M6 9l-3 3l3 3" />
                        <path d="M3 12h6" />
                        <path d="M9 18l3 3l3 -3" />
                        <path d="M12 15v6" />
                        <path d="M15 6l-3 -3l-3 3" />
                        <path d="M12 3v6" />
                    </svg>

                </div>
                <h4 class="futura-medium text-lg md:text-3xl text-center md:text-left">
                    Wide Range of Investment
                </h4>
                <p class="futura-book text-md md:text-xl mt-2 md:mt-4 text-center md:text-left">
                    From stocks and ETFs to crypto and forex, or build long-term value through professionally managed
                    mutual funds — all in one place.
                </p>
            </div>
        </div>
    </section>
    {{-- About us --}}
    <section class="bg-primary-dark text-primary-light py-16 md:py-24">
        <div class="container mx-auto flex flex-col md:grid md:grid-cols-2 justify-around items-center">
            <div class="flex flex-col justify-center items-center px-6 md:px-10 mb-6 md:mb-0 order-2 md:order-1"
                data-aos="fade-up">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-auto md:h-full rounded-xl"
                    enable-background="new 0 0 1080 1080" viewBox="0 0 1080 1080"
                    id="Conceptofinvestmentandsavingmoney">
                    <path fill="#ccdcff"
                        d="M1020.8 320.8c-13.6-23.1-35.5-41.3-60.8-50.2-10.9-3.8-24-5.6-32.9 1.7-8.9 7.3-5.8 26 5.7 25.7-35.5-24.6-78.3-38.5-121.5-39.6-10.8-.3-23.1.9-29.9 9.3-6.9 8.4-1.1 25 9.5 23.1-32.6-20.9-75.6-14.5-112.1-1.5-10.6 3.8-21.1 8-31.6 12.2-11.5 4.6-8.1 21.7 4.3 21.6l369.3-2.3zM93.1 201.6c-13.6 3.3-27.4-8-24.5-17.5 2.9-9.5 16.1-16 29.4-19.9 30.1-8.8 65.8-8.7 95.8.3-7-3.6-6.4-11.2-.9-15.7 5.6-4.5 14.5-6.5 23.1-7.6 41-5.2 85.9 6.8 110 29.6-7.9-5.6-3.6-15.6 5.9-19.8s22.1-4.2 33.4-2.8c48.6 5.8 89.8 23.5 99.1 55.9l-371.3-2.5z"
                        class="colorcce9ff svgShape"></path>
                    <path fill="#f7f7f7"
                        d="M71 959.6c39.1-75.2 82.1-148.4 128.8-219.1 18.8-28.5 40-58.1 71.6-71.2 27.7-11.5 60.1-8.1 87.4 4.5 27.2 12.6 49.8 33.7 68.5 57.2 16.1 20.1 33.3 44.3 59 46.4 27.4 2.3 49.1-21.7 66-43.5 55.5-71.5 111-143.1 166.5-214.6 18.4-23.7 41.1-49.6 71-49.5 26.8.1 48.5 21.3 65.2 42.3 98 122.9 136.2 281.6 171.7 434.6L71 959.6z"
                        class="colorf7f7f7 svgShape"></path>
                    <circle cx="977.4" cy="745.5" r="71.6" fill="#ccdcff" class="colorcceeff svgShape"></circle>
                    <path fill="#b6cdff"
                        d="M977 943.1c-1.1-.2-1.8-1.2-1.8-2.3V767.5c0-1.2.9-2.3 2.1-2.3 1.3-.1 2.3.9 2.3 2.2V941c0 1.3-1.2 2.4-2.6 2.1z"
                        class="colorb6eaff svgShape"></path>
                    <path fill="#b6cdff"
                        d="M977.4 781.9c-.6 0-1.1-.2-1.6-.6-.9-.9-.9-2.3 0-3.1l19.6-19.6c.9-.9 2.3-.9 3.1 0 .9.9.9 2.3 0 3.1L979 781.3c-.5.4-1 .6-1.6.6zM977.4 800.1c-.6 0-1.1-.2-1.6-.6-.9-.9-.9-2.3 0-3.1l19.6-19.6c.9-.9 2.3-.9 3.1 0 .9.9.9 2.3 0 3.1L979 799.5c-.5.4-1 .6-1.6.6z"
                        class="colorb6eaff svgShape"></path>
                    <circle cx="155.5" cy="714.8" r="110.9" fill="#b0c9ff" class="colorb0e1ff svgShape">
                    </circle>
                    <path fill="#ccdcff"
                        d="M155.5 933.9c-1.4 0-2.5-1.1-2.5-2.5V714.8c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5v216.5c.1 1.4-1.1 2.6-2.5 2.6z"
                        class="colorcceeff svgShape"></path>
                    <path fill="#ccdcff"
                        d="M155.5 774.7c-.6 0-1.3-.2-1.8-.7l-31-31c-1-1-1-2.6 0-3.6s2.6-1 3.6 0l31 31.1c1 1 1 2.6 0 3.6-.5.4-1.1.6-1.8.6zM155.5 803.6c-.6 0-1.3-.2-1.8-.7l-31-31c-1-1-1-2.6 0-3.6s2.6-1 3.6 0l31 31c1 1 1 2.6 0 3.6-.5.4-1.1.7-1.8.7z"
                        class="colorcceeff svgShape"></path>
                    <path fill="#f2f2f2"
                        d="M89.5 922.1h918.7c14.5 0 26.2 11.7 26.2 26.2v32.8c0 14.5-11.7 26.2-26.2 26.2H89.5c-14.5 0-26.2-11.7-26.2-26.2v-32.8c0-14.4 11.7-26.2 26.2-26.2z"
                        class="colorf2f2f2 svgShape"></path>
                    <circle cx="712.2" cy="328.3" r="152.6" fill="none" stroke="#558aff"
                        stroke-miterlimit="10" class="colorStrokeffbe55 svgStroke"></circle>
                    <path fill="#2a69f4"
                        d="M688.4 504.7c31.5 15.4 22.3 44.9 22.3 44.9s-17.6 25.4-49.2 10c-31.5-15.4-65-65.8-65-65.8s60.4-4.5 91.9 10.9z"
                        class="color2a94f4 svgShape"></path>
                    <path fill="#ccdcff" d="M688.4 504.7c31.5 15.4 22.3 44.9 22.3 44.9l-114.2-55.8s60.4-4.5 91.9 10.9z"
                        class="colorcce9ff svgShape"></path>
                    <path fill="#2a69f4"
                        d="M738.6 669.8c-31.5 15.4-22.3 44.9-22.3 44.9s17.6 25.4 49.2 10c31.5-15.4 65-65.8 65-65.8s-60.3-4.5-91.9 10.9z"
                        class="color2a94f4 svgShape"></path>
                    <path fill="#ccdcff"
                        d="M738.6 669.8c-31.5 15.4-22.3 44.9-22.3 44.9l114.2-55.8s-60.3-4.5-91.9 10.9zM811.5 932.3c-40.1 50.1-100.8 27.3-100.8 27.3s-35.6-54.2 4.5-104.4S867 764.1 867 764.1s-15.4 118-55.5 168.2z"
                        class="colorcce9ff svgShape"></path>
                    <path fill="#2a69f4"
                        d="M811.5 932.3c-40.1 50.1-100.8 27.3-100.8 27.3L867 764.1s-15.4 118-55.5 168.2z"
                        class="color2a94f4 svgShape"></path>
                    <path fill="#ccdcff"
                        d="M613.6 932.3c40.1 50.1 100.8 27.3 100.8 27.3s35.6-54.2-4.5-104.4c-40.1-50.1-151.8-91.1-151.8-91.1s15.4 118 55.5 168.2z"
                        class="colorcce9ff svgShape"></path>
                    <path fill="#2a69f4"
                        d="M613.6 932.3c40.1 50.1 100.8 27.3 100.8 27.3L558.1 764.1s15.4 118 55.5 168.2z"
                        class="color2a94f4 svgShape"></path>
                    <path fill="#b1c8fc" d="m512.8 538-28.7 9.2-4.2-2-8.1-8 .8-13.1 15.9-.4 24.3 14.3z"
                        class="colorfcd2b1 svgShape"></path>
                    <path fill="#2563eb"
                        d="M417.2 370s-9.8 113.2 71.2 153.7c-3.3 3.9-16.9 10.1-16.9 10.1s-79.3-48.1-76.5-101.5 22.2-62.3 22.2-62.3z"
                        class="color1d87d6 svgShape"></path>
                    <path fill="#0b2b70"
                        d="M263.7 886.1s10.6 49 18.4 71.1c.9 2.6-2.4 4.7-4.3 2.8-13.1-12.9-31.3-39-37.3-45-7.5-7.5-19-21.5-19-21.5l27.5-24.2 18.1 9.1-3.4 7.7z"
                        class="color0b4870 svgShape"></path>
                    <path fill="#081f51"
                        d="M362.1 922.1s43.7 24.4 65.5 33.3c2.6 1.1 2 4.9-.8 5.1-18.3 1.3-50-2.3-58.4-1.8-10.5.7-28.7 0-28.7 0v-36.6l18.8-7.6 3.6 7.6z"
                        class="color083751 svgShape"></path>
                    <path fill="#081f51"
                        d="M406.4 498.3s-4.2 218.7-6.6 223.6c-2.4 4.8-37.7 200.3-37.7 200.3h-22.4s4-204.3 12.8-211.9c0-18-6.1-210.2 11-223.9 25-1.5 42.9 11.9 42.9 11.9z"
                        class="color083751 svgShape"></path>
                    <path fill="#0b2b70"
                        d="M330.6 477.2c-32.3 23.8-38.8 135-5.9 220.9-21.5 38.6-85.8 191.7-85.8 191.7l19 11.4S389 720.9 384 702.3c-5-18.6 4.5-217.5 4.5-217.5l-57.9-7.6z"
                        class="color0b4870 svgShape"></path>
                    <path fill="#2a69f4"
                        d="M423.3 344.9c.7 2.7 1.6 5.4 2.7 8 7 16.6 16.6 50.9 15.9 56.6-.8 6.2-22.7 27.3-28.5 43.4s-6.8 45.4-6.8 45.4l-75.8-21.1s21.1-52 21.9-75.5 8.9-72.1 38.8-77c22.8-3.8 29.8 12.6 31.8 20.2z"
                        class="color2a94f4 svgShape"></path>
                    <path fill="#0b2b70"
                        d="M446.4 245.7c1.4-3.5.9-7.5-1.3-10.6-11.4-15.5-31.9-24.2-50.9-20.8-21.1 3.8-38.8 22-42 43.2-1.2 8.2-.5 16.6-2.2 24.7-2 9.5-7.5 18.3-15.2 24.2-9.6 7.4-22 10.2-32.7 16-10.8 5.9-19.7 14.7-27.3 24.4-7.6 9.7-14.2 20.6-16.3 32.8s.9 25.7 10 34c5.8 5.3 13.3 8 20.7 10.5 14.8 5 30.3 9.5 45.8 7.8 15.5-1.7 31.2-10.9 36-25.8 6.7-21-9.8-43.1-6.8-64.9 2.1-14.8 12.9-27 24.9-35.9s25.6-15.7 37-25.3c8.5-7.1 16.6-25.3 20.3-34.3z"
                        class="color0b4870 svgShape"></path>
                    <path fill="#b1c8fc"
                        d="M425.9 308.5c-3.8 7.8-7.3 28.3-4 37 3 8.6 1.9 10 1.9 10l-33.3-27.3 7.7-37.5 27.7 17.8z"
                        class="colorfcd2b1 svgShape"></path>
                    <path fill="#cadbff" d="M453 277c0 19.3-5 39-21 39s-37-19.7-37-39 13-35 29-35 29 15.7 29 35z"
                        class="colorffe3ca svgShape"></path>
                    <path fill="#0b2b70"
                        d="M451.3 238.5c5.7-.5 9.6 5.6 6.8 10.5-5.5 9.9-15.3 19.8-38.1 17-10.4-1.3-27 0-28 7l-8-19s2-12 4-12h21.8l41.5-3.5z"
                        class="color0b4870 svgShape"></path>
                    <path fill="#0b2b70"
                        d="M408 264c-3 6-4.6 16.7-8.6 18.7-5-2.9-11.2-18-10.8-17.9.4.1 5.4-2.9 6.4-2.9s13 2.1 13 2.1z"
                        class="color0b4870 svgShape"></path>
                    <ellipse cx="396.8" cy="284.1" fill="#cadbff" rx="5.6" ry="9"
                        transform="rotate(-24.199 396.775 284.07)" class="colorffe3ca svgShape"></ellipse>
                    <circle cx="397.9" cy="293.4" r="5.2" fill="#558aff" class="colorffbe55 svgShape">
                    </circle>
                    <path fill="#2a69f4"
                        d="m479.8 652.8-62.1-54.9c-2.2-1.9-2.4-5.3-.5-7.5l38.5-47.5c1.9-2.2 5.3-2.4 7.5-.5l66 58.3c2.2 1.9 2.4 5.3.5 7.5l-42.4 44.1c-2 2.2-5.3 2.4-7.5.5z"
                        class="color2a94f4 svgShape"></path>
                    <path fill="#2a69f4"
                        d="m540.9 670.5-56.8-26.3 14.7-17 46.8 31.1.7.5-5.4 11.7zM518.1 545.6c7 6 9.3 17.1 6.4 31.3l-5.2 25.7-57.9-50.1 25.6-8.9c13.2-4.7 24.2-4 31.1 2m3.3-3.8c-8-6.9-20.6-8.4-36.1-3l-33.7 11.8 71 61.3 6.9-34.1c3.3-16.5 0-29-8.1-36z"
                        class="color2a94f4 svgShape"></path>
                    <path fill="#2259d1" d="M540.9 670.5c-3.6-6.7.1-10.3 4.7-12.2l.7.5-5.4 11.7z"
                        class="color2286d1 svgShape"></path>
                    <path fill="#4981fc"
                        d="M374.4 352c-1.4 45.4 17 161.8 51.5 207.7 5.9-3.1 12.3-6.6 12.3-6.6s-44-101.2-29.9-186.2c1.5-10.5 0-18-3.2-23.2-8.4-14.1-30.2-8-30.7 8.3z"
                        class="color49b0fc svgShape"></path>
                    <path fill="#b1c8fc"
                        d="M425.9 559.8s9.9 20.5 12.3 22.7c2.3 2.2 19.3 11.3 24.1 13.1 4.8 1.7-6.5-8.6-6.5-8.6s8.8 5.6 12.9 7.8c.6.3 1.1-.4.7-.9-3.1-3.7-10.7-9.7-10.7-9.7s11.9 7.1 17.2 9.9c.6.3 1.1-.4.7-.9-3.8-3.6-12.4-10.3-13.9-11.1 6.3 2.7 10.8 5.3 13.6 6.6.4.2.7-.3.4-.6-5.5-5-28.9-21.6-30.1-21.9-4.8-1.1-9.3-12.5-9.3-12.5l-11.4 6.1z"
                        class="colorfcd2b1 svgShape"></path>
                    <path fill="#d2e0ff"
                        d="m484.1 547.2-4.2-2-.5-.7s11.3-11.5 14.2-12.8c1.9-.8 9.9 2.3 15 4.4 1.5.6 1.4 2.8-.2 3.3l-24.3 7.8z"
                        class="colorffe4d2 svgShape"></path>
                    <path fill="#2a69f4" d="M709.3 411.2h5.8v549.6h-5.8z" class="color2a94f4 svgShape"></path>
                    <path fill="#558aff"
                        d="M604 189.4c-12.3 0-22.2 10-22.2 22.2 0-12.3-10-22.2-22.2-22.2 12.3 0 22.2-10 22.2-22.2-.1 12.2 9.9 22.2 22.2 22.2z"
                        class="colorffbe55 svgShape"></path>
                    <path fill="none" stroke="#558aff" stroke-miterlimit="10"
                        d="M614.6 189.4c-18.2 0-32.9 14.7-32.9 32.9 0-18.2-14.7-32.9-32.9-32.9 18.2 0 32.9-14.7 32.9-32.9 0 18.2 14.8 32.9 32.9 32.9z"
                        class="colorStrokeffbe55 svgStroke"></path>
                    <path fill="#558aff"
                        d="M895.1 370c-7.1 0-12.9 5.8-12.9 12.8 0-7.1-5.8-12.8-12.8-12.8 7.1 0 12.8-5.8 12.8-12.8 0 7 5.8 12.8 12.9 12.8z"
                        class="colorffbe55 svgShape"></path>
                    <path fill="none" stroke="#558aff" stroke-miterlimit="10" stroke-width=".75"
                        d="M901.2 370c-10.5 0-19 8.5-19 19 0-10.5-8.5-19-19-19 10.5 0 19-8.5 19-19 0 10.5 8.5 19 19 19z"
                        class="colorStrokeffbe55 svgStroke"></path>
                    <path fill="none" stroke="#ccdcff" stroke-dasharray="12 14" stroke-miterlimit="10"
                        d="m554 664.4 138.9 65.3M546.3 677.2l90 171.8M574.5 694l118.4 155M601.9 705.3l94.2 71.2"
                        class="colorStrokecce9ff svgStroke"></path>
                    <path fill="#0e358c"
                        d="M689.8 429.8h44.3v22.1c0 12.2-9.9 22.1-22.1 22.1-12.2 0-22.1-9.9-22.1-22.1v-22.1z"
                        class="color0e538c svgShape"></path>
                    <circle cx="712.2" cy="328.3" r="124.2" fill="#558aff" class="colorffbe55 svgShape">
                    </circle>
                    <circle cx="712.2" cy="328.3" r="93.2" fill="none" stroke="#f7f7f7"
                        stroke-miterlimit="10" class="colorStrokef7f7f7 svgStroke"></circle>
                    <path fill="#f7f7f7"
                        d="M716.8 288.8c8.4 1.6 13.4 7.9 13.4 17.9v1.6l-11.6 1.1v-1.8c0-5.6-2-8.2-6.4-8.2-3.6 0-6.1 2.2-6.1 6.7v1.5c0 4.4 2.4 8.1 10.2 15.2 10.7 9.9 14.4 16.3 14.4 24.9v1.9c0 10-5.4 16.1-13.9 17.6v8.3h-9.5v-8.3c-8.4-1.8-13.7-8.1-13.7-17.9v-4.5l11.6-1.1v4.8c0 5.6 2.3 8.2 7 8.2 3.5 0 6.6-2.2 6.6-6.7v-1.7c0-4.4-2.4-8.1-10.2-15.2-10.7-9.9-14.4-16.3-14.4-24.9v-1.7c0-9.9 4.9-16 13.2-17.6v-7.1h9.5v7z"
                        class="colorf7f7f7 svgShape"></path>
                </svg>
            </div>
            <div class="max-w-xl mx-auto mb-10 md:mb-0 px-6 md:px-10" data-aos="fade-up">
                <h2 class="sedan-regular text-4xl md:text-6xl mb-6">
                    Trade Smarter, <span class="text-blue-600">Invest</span> Wiser
                </h2>
                <p class="futura-book text-lg md:text-2xl">
                    Our approach is straightforward: your success drives ours. We prioritize your interests with
                    transparent investment practices, expert-led strategies, and a cost structure that aligns with your
                    profitability. At {{ $appName }}, we succeed only when you do, ensuring industry-leading
                    results and trust at every step.
                </p>
                <div class="mt-6 flex items-center justify-center md:justify-start flex-wrap gap-4 md:gap-6">
                    <x-link-two href="{{ route('about') }}" class="py-4">Learn more</x-link-two>
                </div>
            </div>
        </div>
        <div
            class="container mt-10 md:mt-16 px-6 md:px-10 mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 text-primary-light">
            <div class="flex flex-col justify-start items-center py-6 md:border-t border-primary-light"
                data-aos="fade-up">
                <h4 class="sedan-regular-bold text-5xl md:text-6xl font-bold traccking-wide text-blue-600">
                    99.9%
                </h4>
                <p class="futura-book text-lg md:text-2xl mt-2 md:mt-4">
                    Client Returns
                </p>
            </div>
            <div class="flex flex-col justify-start items-center py-6 border-t border-primary-light"
                data-aos="fade-up">
                <h4 class="sedan-regular-bold text-5xl md:text-6xl font-bold traccking-wide text-blue-600">
                    $610M+
                </h4>
                <p class="futura-book text-lg md:text-2xl mt-2 md:mt-4">
                    Asset Oversight
                </p>
            </div>
            <div class="flex flex-col justify-start items-center py-6 border-t border-primary-light"
                data-aos="fade-up">
                <h4 class="sedan-regular-bold text-5xl md:text-6xl font-bold traccking-wide text-blue-600">
                    12+ years
                </h4>
                <p class="futura-book text-lg md:text-2xl mt-2 md:mt-4">
                    Proven Experiences
                </p>
            </div>
        </div>
    </section>
    {{-- how it works --}}
    <section class="py-10">
        <div class="max-w-6xl mx-auto px-6">
            <div class="p-6 md:p-10 bg-transparent border border-gray-500 rounded-2xl">
                <h2 class="text-3xl md:text-4xl font-bold futura-bold tracking-wide mb-2 text-gray-300">
                    How to start
                </h2>
                <p class="text-md text-gray-400 mb-4 futura-medium">
                    Quickly get started following these simple three-step guide.
                </p>
                @php
                    $steps = [
                        [
                            'title' => 'Sign-up a portfolio',
                            'description' => 'Create an account on our platform and verify your email. 100% free.',
                            'step' => '1',
                            'url' => route('register'),
                        ],
                        [
                            'title' => 'Choose plan',
                            'description' => 'Navigate to pricing, choose a suitable investment plan.',
                            'step' => '2',
                            'url' => route('pricing'),
                        ],
                        [
                            'title' => 'Fund your portfolio',
                            'description' => 'Deposit your capital into your investment portfolio. That\'s it!',
                            'step' => '3',
                            'url' => route('user.deposit.pricingTable'),
                        ],
                    ];
                @endphp
                <div class="grid grid-cols-1 lg:grid-cols-3 justify-center gap-4">
                    @foreach ($steps as $item)
                        <div
                            class="p-4 border-0 border-b lg:border-0 lg:border-r border-gray-600 last:border-0 flex flex-col gap-2">
                            <span
                                class="rounded-full size-10 bg-blue-800 text-gray-100 flex justify-center items-center font-bold">{{ $item['step'] }}</span>
                            <h4 class="text-gray-300 text-2xl font-semibold-tracking-wide capitalize futura-bold">
                                <a href="{{ $item['url'] }}"
                                    class="hover:underline inline-flex items-center">{{ $item['title'] }}<svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        width="24" height="24" stroke-width="2.5">
                                        <path d="M5 12l14 0"></path>
                                        <path d="M15 16l4 -4"></path>
                                        <path d="M15 8l4 4"></path>
                                    </svg></a>
                            </h4>
                            <p class="text-md text-gray-400 break-words">{{ $item['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Features --}}
    <section class="py-16 md:py-32">
        <div class="container mx-auto px-6 md:px-10">
            {{-- Single region --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pb-8 md:pb-16 mb-8 md:mb-16">
                <div class="flex flex-col md:justify-center" data-aos="fade-up">
                    <h6 class="text-md mb-4 font-light text-primary text-opacity-90 tracking-wider uppercase">portfolio
                        mangement</h6>
                    <h2 class="futura-medium text-3xl md:text-5xl font-medium text-primary-light mb-4">Expert-Driven
                        Portfolios
                        <span class="text-blue-600">Tailored</span> for you
                    </h2>
                    <p class="text-lg md:text-2xl mb-8">
                        Professionally managed and aligned with your goals, {{ $appName }}’s expert team
                        diversifies your forex and crypto investments to optimize returns while minimizing risk
                    </p>
                    <div class="flex justify-start">
                        <x-link-two href="{{ route('user.deposit.pricingTable') }}" class="py-4 font-bold">Let's make
                            your portfolio</x-link-two>
                    </div>
                </div>
                <div class="flex justify-center items-center overflow-hidden" data-aos="fade-up">
                    <div class="w-full md:h-[80vh]">
                        <x-portfolio-svg />
                    </div>
                </div>
            </div>
            {{-- investment solutions --}}
            <x-investment-solution />
            {{-- Team region --}}
            <div class="mt-10 md:mt-20 mb-6 md:mb-10 grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="flex justify-center order-2 md:order-1" data-aos="fade-up">
                    <div class="w-full text-center">
                        <x-cia />
                    </div>
                </div>
                <div class="flex flex-col justify-center order-1 md:order-2" data-aos="fade-up">
                    <h2 class="sedan-regular text-4xl md:text-6xl font-medium text-primary mb-8">
                        Always within reach, <span class="text-blue-600">contact us</span>
                    </h2>
                    <div class="">
                        <p class="futura-medium text-lg mb-2 font-medium">Chat to an advisor</p>
                        <p class="text-lg mb-6 max-w-md">{{ $appName }} clients enjoy personalized goal setting
                            and financial planning tools. Need help? Chat with us live — we’re here for you.</p>
                        <p class="futura-medium text-lg mb-2 font-medium">Reach out via email or WhatsApp</p>
                        <p class="text-lg mb-6 max-w-md">Have questions about your account? Forget the wait — our team
                            is available every day of the week to support you at <a
                                href="mailto:{{ config('mail.mainTo.address') }}"
                                class="underline">{{ config('mail.mainTo.address') }}</a> or WhatsApp: <a href="{{config('app.socials.whatsapp_link')}}" class="underline">{{config('app.socials.whatsapp')}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- testimonials --}}
    <x-testimonial-slide :reviews="$reviews" />
    {{-- Plans --}}
    <section class="py-16 md:py-32 md:min-h-screen">
        <div class="container mx-auto px-6 md:px-10 my-6 md:my-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start justify-center">
                <div class="col-span-3 md:col-span-1">
                    <h6 class="text-md mb-4 font-light text-primary text-opacity-90 tracking-wider uppercase">
                        Trading plans</h6>
                    <h2 class="sedan-regular text-5xl md:text-6xl font-bold text-primary-white mb-4">Start Profiting
                        Like a
                        <span class="text-blue-600">Pro</span> Today
                    </h2>
                    <p class="text-md md:text-2xl mb-6 md:mb-10 text-primary-white">Our investment plans at {{$appName}}
                        are designed with one clear goal: to maximize returns from the crypto and forex markets for our
                        clients.</p>
                    <div class="flex flex-wrap gap-4 md:gap-6">
                        <x-link-two href="{{ route('pricing') }}">view plans</x-link-two>
                        <x-link-one href="{{ route('contact') }}">Contact team</x-link-one>
                    </div>
                </div>
                @if (count($plans) > 0)
                    @foreach ($plans as $p => $plan)
                        <a x-data="{ mouseOver: false }" @mouseenter="mouseOver = true" @mouseleave="mouseOver = false"
                            href="{{ route('user.deposit.create', [$plan->id]) }}"
                            class="col-span-3 md:col-span-1 relative {{ $p == 0 ? 'bg-primary-lighter hover:bg-primary-light' : 'border border-primary-light hover:border-blue-600' }} rounded-xl overflow-hidden shadow-lg"
                            data-aos="fade-up" aria-label="Deposit Plan {{ $plan->name }}">
                            <div class="p-6 text-primary-{{ $p == 0 ? 'dark' : 'white' }}">
                                <div class="mb-6 flex justify-start">
                                    <span
                                        @if ($p == 0) :class="mouseOver ? 'bg-primary-lighter hover:shadow-lg' : 'bg-primary-light'" @endif
                                        class="px-4 py-2 {{ $p == 1 && 'bg-zinc-800 text-primary-white' }} rounded-full shadow-md uppercase text-sm futura-book tracking-widest">${{ number_format($plan->min) }}
                                        in assets</span>
                                </div>
                                <div class="flex items-center mb-6">
                                    <span
                                        class="sedan-regular text-4xl font-extrabold ml-2">{{ $plan->name }}</span>
                                    <span class="ml-2 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-6 h-6 text-primary">
                                            <path d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex items-end mb-6">
                                    <span
                                        class="sedan-regular text-4xl font-bold ml-2 mr-2">{{ round($plan->perMonInt, 1) }}%</span>
                                    <span class="text-xl font-semibold">after {{ $plan->duration_str }}
                                        day{{ $plan->duration > 1 ? 's' : '' }}</span>
                                </div>
                                <div class="flex items-center mb-4">
                                    <span class="sedan-regular text-2xl font-bold ml-2">Minimum:
                                        ${{ number_format($plan->min) }}</span>
                                </div>
                                <div class="flex items-center mb-6">
                                    <span class="sedan-regular text-2xl font-bold ml-2">Maximum:
                                        ${{ number_format($plan->max) }}</span>
                                </div>
                                @if (!empty($plan->features))
                                    @php
                                        $features = json_decode($plan->features, true);
                                    @endphp
                                    @for ($i = 0; $i < min(3, count($features)); $i++)
                                        <div class="flex mb-px">
                                            <span class=" mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="w-6 h-6 text-primary">
                                                    <path d="m4.5 12.75 6 6 9-13.5"></path>
                                                </svg>
                                            </span>
                                            <span
                                                class="text-lg text-primary{{ $p == 1 && '-white' }}">{{ $features[$i] }}</span>
                                        </div>
                                    @endfor
                                @endif
                            </div>                            
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    {{-- CTA --}}
    <section class="bg-primary-light bg-cover" style="background-image: url('images/landing/feature-3.jpg')">
        <div
            class="md:h-screen flex items-center justify-center px-4 md:px-10 mt-6 md:mt-10 py-16 bg-primary-dark bg-opacity-70 text-primary-lighter">
            <div class="max-w-lg mx-auto flex flex-col items-center justify-center text-center">
                <h2
                    class="w-[70%] mx-auto md:w-full text-center sedan-regular text-4xl md:text-6xl text-primary-lighter mb-10">
                    Join today and put your money to work.
                </h2>
                <p class="w-[70%] mx-auto md:w-full futura-book text-md md:text-2xl mb-10 text-primary-lighter">
                    Open an account with {{ $appName }} and start growing your investments.
                </p>
                <div class="flex justify-center">
                    <x-link-two href="{{ route('user.deposit.pricingTable') }}" class="py-4">Get started
                        today</x-link-two>
                </div>
            </div>
        </div>
    </section>
    {{-- rewards --}}
    <section class="py-16 md:py-32">
        <div class="container mx-auto px-6 md:px-10">
            <div
                class="grid grid-cols-1 md:grid-cols-2 justify-center gap-6 md:gap-10 max-w-full sm:max-w-5xl md:max-w-7xl">
                <div class="flex flex-col justify-start text-primary-light" data-aos="fade-up">
                    <h5 class="mb-4 md:mb-6 uppercase tracking-wide font-light">
                        community & rewards
                    </h5>
                    <h2 class="text-4xl md:text-5xl sedan-regular w-full md:w-[90%] mb-4 md:mb-6">Grow your community
                        and get <span class="text-blue-600">rewarded</span></h2>
                    <p class="text-md md:text-xl mb-4 md:mb-10">
                        When you invite a friend to {{ config('app.name') }}, you will earn 10% of your friend’s
                        initial deposit. Share your referral link
                        with your colleagues and family to earn income without you needing to invest.
                        <a href="{{ route('knowledge') . '#referrals' }}"
                            class="underline ml-px font-bold text-blue-600 hover:text-blue-500">Learn more.</a>
                    </p>
                    <div class="flex">
                        <x-link-two href="{{ route('user.referrals') }}" class="py-4">Get your referral
                            link</x-link-two>
                    </div>
                </div>
                <div class="flex" data-aos="fade-up">                    
                    <x-reward-svg />                    
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
