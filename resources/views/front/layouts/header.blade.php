<nav class="shadow-md overflow-hidden">
    <div class="container px-6 md:px-0 md:w-8/12 mx-auto">
        <div class="flex justify-between  gap-8 items-center h-[130px]">
            <div {{ app()->getLocale() == 'ar' ? 'data-aos=fade-left' : 'data-aos=fade-right' }}>
                <a href="{{ route('home') }}">
                    <img src="{{ asset(\App\Models\Setting::where('setting_key', 'logo')->first()->setting_value) }}"
                        alt="logo" class=" w-36" />
                </a>
            </div>
            <div {{ app()->getLocale() == 'ar' ? 'data-aos=fade-right' : 'data-aos=fade-left' }}>
                <ul class="flex flex-wrap   items-center justify-center gap-4  ">
                    <li>
                        <a href="{{ route('lang.switchLang', 'ar') }}"
                            class=" text-sm  w-20 h-8 md:text-base md:w-28 md:h-12 flex items-center justify-center rounded-xl font-normal transition duration-300 border border-primary text-secondary hover:bg-primary hover:text-white">
                            {{ __('front.arbic') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('lang.switchLang', 'en') }}"
                            class="text-sm  w-20 h-8 md:text-base md:w-28 md:h-12 flex items-center justify-center rounded-xl font-normal transition duration-300 border border-primary text-secondary hover:bg-primary hover:text-white">
                            {{ __('front.english') }}
                        </a>
                    </li>
                    <li>
                        <a href="#contact-us"
                            class="text-primary font-bold text-sm md:text-lg ms-6 relative  before:absolute before:bottom-[-2px] {{ app()->getLocale() == 'ar' ? 'before:right-0' : 'before:left-0' }} before:w-8 before:bg-primary before:h-[2px] before:rounded-lg ">
                            <span>{{ __('front.contact-us') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('join_us.show') }}"
                            class="text-primary font-bold text-sm md:text-lg ms-6 relative  before:absolute before:bottom-[-2px] {{ app()->getLocale() == 'ar' ? 'before:right-0' : 'before:left-0' }} before:w-8 before:bg-primary before:h-[2px] before:rounded-lg ">
                            <span>{{ __('front.join-us') }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
