<footer class style="background: url('{{ asset('assets/lines.svg') }}'); background-color: #d7eff1;"
    class=" shadow-sm mb-[-30px]  " id="contact-us">

    <div class="container w-8/12 mx-auto">
        <div class="grid grid-cols-2 gap-16 py-12">
            <div class="col-span-2 md:col-span-1"
                {{ app()->getLocale() == 'ar' ? 'data-aos=fade-up-left' : 'data-aos=fade-up-right ?>' }}>
                <div>
                    <div class="w-fit">

                        <a href="{{ route('home') }}">
                            <img src="{{ asset(\App\Models\Setting::where('setting_key', 'logo')->first()->setting_value) }}"
                                alt="logo" class="w-36" />
                        </a>
                    </div>
                </div>
                <div class="text-neutral-800 flex items-center gap-4 mt-16">
                    <span class="underline text-secondary">{{ __('front.follow_us') }} :</span>
                    <div class="flex item-center gap-5">
                        @php
                            $youtube = \App\Models\Setting::where('setting_key', 'youtube')->first()->setting_value;
                            $twitter = \App\Models\Setting::where('setting_key', 'twitter')->first()->setting_value;
                            $tiktok = \App\Models\Setting::where('setting_key', 'tiktok')->first()->setting_value;
                            $instagram = \App\Models\Setting::where('setting_key', 'instagram')->first()->setting_value;
                            $snapchat = \App\Models\Setting::where('setting_key', 'snapchat')->first()->setting_value;
                        @endphp
                        @if ($youtube)
                            <a href="{{ $youtube }}" target="__blanc"
                                class="transition duration-300  hover:opacity-40">
                                <img src="{{ asset('assets/youtube.png') }}" alt="youtube"
                                    class="w-7 h-7 object-cover" />
                            </a>
                        @endif
                        @if ($twitter)
                            <a href="{{ \App\Models\Setting::where('setting_key', 'twitter')->first()->setting_value }} "
                                target="__blanc" class="transition duration-300  hover:opacity-40">
                                <img src="{{ asset('assets/x.png') }}" alt="twitter" class="w-7 h-7 object-cover" />
                            </a>
                        @endif
                        @if ($tiktok)
                            <a href="{{ \App\Models\Setting::where('setting_key', 'tiktok')->first()->setting_value }} "
                                target="__blanc" class="transition duration-300  hover:opacity-40">
                                <img src="{{ asset('assets/tiktok.png') }}" alt="tiktok"
                                    class="w-7 h-7 object-cover" />
                            </a>
                        @endif
                        @if ($instagram)
                            <a href="{{ \App\Models\Setting::where('setting_key', 'instagram')->first()->setting_value }} "
                                target="__blanc" class="transition duration-300  hover:opacity-40">
                                <img src="{{ asset('assets/instagram.png') }}" alt="instagram"
                                    class="w-7 h-7 object-cover" />
                            </a>
                        @endif
                        @if ($snapchat)
                            <a href="{{ \App\Models\Setting::where('setting_key', 'snapchat')->first()->setting_value }} "
                                target="__blanc" class="transition duration-300  hover:opacity-40">
                                <img src="{{ asset('assets/snapchat.png') }}" alt="snapchat"
                                    class="w-7 h-7 object-cover" />
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div {{ app()->getLocale() == 'ar' ? 'data-aos=fade-up-right' : 'data-aos=fade-up-left ?>' }}>
                <h3 class="text-xl mb-6 underline text-secondary    ">{{ __('front.contact info') }}</h3>
                <div class="flex items-center gap-4 mb-2">
                    <img src="{{ asset('assets/location.svg') }}" alt="" width="16">
                    <span
                        class="text-neutral-900">{{ \App\Models\Setting::where('setting_key', 'address')->first()->setting_value }}</span>
                </div>
                <div class="flex items-center gap-4 mb-2">
                    <img src="{{ asset('assets/tel.svg') }}" alt="" width="16">
                    <span
                        class="text-neutral-900">{{ \App\Models\Setting::where('setting_key', 'telephone')->first()->setting_value }}</span>
                </div>

                <div class="flex items-center gap-4">
                    <img src="{{ asset('assets/email.svg') }}" alt="" width="16">
                    <span
                        class="text-neutral-900">{{ \App\Models\Setting::where('setting_key', 'email')->first()->setting_value }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class=" border  border-t-primary py-6 text-secondary  text-base md:text-xl ">
        <div class="flex items-center justify-between  flex-wrap w-8/12 mx-auto">
            <div>{!! __('front.copy_right') !!}</div>
            <div class="flex gap-2 items-center">

                <a class="text-secondary underline" href="{{ asset('assets/filename.pdf') }}" target="__blanc"><img
                        class="" src="{{ asset('assets/second_logo.png') }}" width="200px" alt=""></a>
            </div>
        </div>
    </div>
</footer>
