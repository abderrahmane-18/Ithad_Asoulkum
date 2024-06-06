<!DOCTYPE html>
@if (app()->getLocale() == 'ar')
    <html lang="en" dir="rtl" direction="rtl">
@else
    <html lang="ar">
@endif

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="{{ \App\Models\Setting::where('setting_key', 'keywords')->first()->setting_value }}" />
    <meta name="title"
        content="{{ \App\Models\Setting::where('setting_key', 'website_name_' . getLocale())->first()->setting_value }}" />
    <meta name="description"
        content="{{ \App\Models\Setting::where('setting_key', 'description_' . getLocale())->first()->setting_value }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon"
        href="{{ asset(\App\Models\Setting::where('setting_key', 'favicon')->first()->setting_value) }}" />

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/lib/aos.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/lib/nice-select.css') }}" />
    @vite('resources/css/app.css')

    <title>{{ \App\Models\Setting::where('setting_key', 'website_name_' . getLocale())->first()->setting_value }}
    </title>

</head>



<body class="scroll-smooth {{ app()->getLocale() == 'ar' ? 'ar' : 'en' }}">

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
                    </ul>
                </div>
            </div>
        </div>
    </nav>



    <!--------------
        Main Content
    --------------->
    <main class="py-32 relative min-h-[800px] overflow-hidden">

        <div class="absolute inset-0   shadow-sm"
            style="background-image: url('{{ asset('assets/image.png') }}');background-size: cover;background-position: center;background-repeat: no-repeat;">
            <div class="absolute inset-0 bg-secondary opacity-60 ">
            </div>
        </div>
        <h1 data-aos="fade-down"
            class="header w-fit mx-auto text-4xl md:text-6xl text-white relative z-20 font-light mb-36 flex items-center justify-center gap-6">
            <span>
                <img src="{{ asset('assets/search.svg') }}" width="48" alt="">
            </span>
            <span>
                {{ __('front.title') }}
            </span>
        </h1>
        <form class="flex flex-col gap-24 w-8/12 mx-auto relative " id="data_form">
            <div data-aos="flip-up"
                class="w-12/12 relative before:bg-white   before:rounded-2xl before:opacity-100 before:w-full  before:absolute before:inset-0">
                <div class="flex gap-20 flex-wrap px-12 py-6 ">
                    <div class="flex flex-col items-center  gap-1  relative">
                        <select name="service"
                            class="rounded-lg service bg-transparent border border-none text-neutral-600 font-bold">
                            <option value="0" data-display="{{ __('front.Choose services') }}">
                                {{ __('front.Choose services') }}
                            </option>
                            <option value="{{ __('front.Buy') }}">{{ __('front.Buy') }}</option>
                            <option value="{{ __('front.Rent') }}">{{ __('front.Rent') }}</option>
                            <option value="{{ __('front.Investment opportunity') }}">
                                {{ __('front.Investment opportunity') }}</option>
                        </select>
                    </div>
                    <div
                        class="text-4xl font-extralight border-xl hidden xl:flex  text-neutral-500 relative z-20  mt-[-2px]">
                        |
                    </div>
                    <div class=" div_type_service flex flex-col items-center gap-1  relative">
                        <select name="type_service"
                            class="rounded-lg service bg-transparent border border-none text-neutral-600 font-bold">
                            <option value="0" data-display=" {{ __('front.Type of service') }}">
                                {{ __('front.Type of service') }}
                            </option>
                            <option disabled>{{ __('front.info') }}</option>
                        </select>
                    </div>
                    <div
                        class="text-4xl font-extralight border-xl  text-neutral-500 relative z-20 hidden xl:flex  mt-[-2px]">
                        |
                    </div>

                    <div class=" min-w-[250px] lg:min-w-[80px] flex-1 relative z-20">
                        <input type="text" id="city" name="city"
                            class="bg-transparent border-none placeholder:font-bold  focus:outline-none focus:border-none placeholder:text-neutral-600  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="{{ __('front.city') }}" />
                    </div>
                </div>
            </div>

            <div class="flex  items-center gap-12 xl:gap-28"
                {{ app()->getLocale() == 'ar' ? 'data-aos=fade-left' : 'data-aos=fade-right' }}>
                <div class="text-3xl text-white font-light">
                    {{ __('front.rang_price') }}
                </div>
                <div class=" grid grid-cols-3 items-center  gap-4 lg:gap-12 relative ">
                    <div class="col-span-3 sm:col-span-2 lg:col-span-1">
                        <label for="currency-input"
                            class="mb-2 text-lg font-medium text-gray-900 sr-only dark:text-white">
                        </label>
                        <div class="relative w-full ">
                            <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1M2 5h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                                </svg>
                            </div>
                            <input name="price_start" type="number" id="currency-input"
                                class="block p-2.5 py-6 text-lg focus:outline-0 border-neutral-500 w-full z-20 ps-14  text-gray-900 bg-gray-50 rounded-xl  border "
                                placeholder="{{ __('front.Price start') }}" />
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2 lg:col-span-1">
                        <label for="currency-input"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">
                            test
                        </label>
                        <div>
                            <div class="relative w-full">
                                <div
                                    class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1M2 5h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                                    </svg>
                                </div>
                                <input name="price_start" type="number" id="currency-input"
                                    class="block p-2.5 py-6 text-lg focus:outline-0 border-neutral-500 w-full z-20 ps-14  text-gray-900 bg-gray-50  rounded-xl  border "
                                    placeholder="{{ __('front.Price end') }}" />

                            </div>
                        </div>
                    </div>
                    <div class="type_mony col-span-3 sm:col-span-2 lg:col-span-1  ">
                        <select name="type_mony" id="type_mony">
                            <option value="0" data-display=" {{ __('front.type_mony') }}" disabled>
                                {{ __('front.type_mony') }}
                            </option>
                            <option value="2 ">{{ __('front.riyal') }} </option>
                            <option value="1">{{ __('front.dollar') }} </option>
                            <option value="3">{{ __('front.dirham') }} </option>
                        </select>
                    </div>
                </div>
            </div>


            <div {{ app()->getLocale() == 'ar' ? 'data-aos=fade-right' : 'data-aos=fade-left' }}
                class="flex  flex-wrap gap-20 px-12 py-6    w-12/12 relative before:bg-white   before:rounded-2xl before:opacity-100 before:w-full  before:absolute before:inset-0">
                <div class="relative z-20  min-w-[20%]">
                    <input type="text" id="first_name" name="name"
                        class="bg-transparent border-none placeholder:font-bold  focus:outline-none focus:border-none placeholder:text-neutral-600  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="{{ __('front.name') }}" />
                </div>
                <div
                    class="text-4xl font-extralight border-xl  text-neutral-500 relative z-20 hidden xl:flex  mt-[-2px]">
                    |
                </div>

                <div class="relative z-20  min-w-[20%]">
                    <input type="tel" id="phone" name="phone"
                        class="bg-transparent placeholder:text-start border-none placeholder:font-bold  focus:outline-none focus:border-none placeholder:text-neutral-600  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="{{ __('front.enter_phone') }}" />
                </div>
                <div
                    class="text-4xl font-extralight border-xl  text-neutral-500 relative z-20 hidden xl:flex  mt-[-2px]">
                    |
                </div>

                <div class="relative z-20  min-w-[20%]">
                    <input name="email" type="text" id="email"
                        class="bg-transparent border-none placeholder:font-bold  focus:outline-none focus:border-none placeholder:text-neutral-600  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="odsolcom@odsolcom.com" />
                </div>
            </div>
            <div class="flex items-center my-[-60px]">
                <input id="default-checkbox" type="checkbox" name="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox"
                    class="mx-4 text-lg  font-medium text-white">{{ __('front.checkbox') }}</label>
            </div>

            <button id="btn-submit" data-aos="zoom-in"
                class=" h-14 flex items-center justify-center rounded-xl text-xl transition duration-300 border border-primary bg-primary text-white hover:bg-transparent hover:text-primary">{{ __('front.submit') }}</button>
        </form>

    </main>

    <!--------------
                    Footer
                --------------->
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
                                $instagram = \App\Models\Setting::where('setting_key', 'instagram')->first()
                                    ->setting_value;
                                $snapchat = \App\Models\Setting::where('setting_key', 'snapchat')->first()
                                    ->setting_value;
                            @endphp
                            @if ($youtube)
                                <a href="{{ $youtube }}" target="__blanc"
                                    class="transition duration-300  hover:opacity-40">
                                    <img src="{{ asset('assets/youtube.svg') }}" alt="youtube" class="w-7 h-7" />
                                </a>
                            @endif
                            @if ($twitter)
                                <a href="{{ \App\Models\Setting::where('setting_key', 'twitter')->first()->setting_value }} "
                                    target="__blanc" class="transition duration-300  hover:opacity-40">
                                    <img src="{{ asset('assets/twitter.svg') }}" alt="twitter" class="w-7 h-7" />
                                </a>
                            @endif
                            @if ($tiktok)
                                <a href="{{ \App\Models\Setting::where('setting_key', 'tiktok')->first()->setting_value }} "
                                    target="__blanc" class="transition duration-300  hover:opacity-40">
                                    <img src="{{ asset('assets/tiktok.svg') }}" alt="tiktok"
                                        class="w-[1.5rem] h-[1.5rem]" />
                                </a>
                            @endif
                            @if ($instagram)
                                <a href="{{ \App\Models\Setting::where('setting_key', 'instagram')->first()->setting_value }} "
                                    target="__blanc" class="transition duration-300  hover:opacity-40">
                                    <img src="{{ asset('assets/instagram.svg') }}" alt="instagram"
                                        class="w-7 h-7" />
                                </a>
                            @endif
                            @if ($snapchat)
                                <a href="{{ \App\Models\Setting::where('setting_key', 'snapchat')->first()->setting_value }} "
                                    target="__blanc" class="transition duration-300  hover:opacity-40">
                                    <img src="{{ asset('assets/snapchat.svg') }}" alt="snapchat" class="w-7 h-7" />
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

                    <a class="text-secondary underline" href="{{ asset('assets/filename.pdf') }}"
                        target="__blanc"><img class="" src="{{ asset('assets/second_logo.png') }}"
                            width="200px" alt=""></a>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="{{ asset('assets/lib/jquery.js') }}"></script>
<script src="{{ asset('assets/lib/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/lib/aos.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-js.form />
@vite('resources/js/app.js')

<script>
    const SwalModal = (text, type, url) => {
        Swal.fire({
            text: text,
            icon: type,
            confirmButtonText: '{{ __('front.Ok got it') }}',
            confirmButtonColor: '#7bcbc2',
            customClass: {
                title: "Nexa-Thin",
                content: 'Nexa-Thin',
                confirmButton: 'Nexa-Thin',
            }
        }).then(function() {
            if (url)
                window.location = url;
        });
    };

    $(document).ready(function() {
        let type_service = {
            "{{ __('front.Buy') }}": [
                "{{ __('front.land') }}",
                "{{ __('front.palace') }}",
                "{{ __('front.resort') }}",
                "{{ __('front.building') }}",
                "{{ __('front.villa') }}",
                "{{ __('front.duplex') }}",
                "{{ __('front.apartment') }}",
                "{{ __('front.retreat') }}",
                "{{ __('front.chalet') }}",
                "{{ __('front.farm') }}",
                "{{ __('front.yard') }}",
                "{{ __('front.Office') }}",
                "{{ __('front.Shop') }}",
                "{{ __('front.Showroom') }}",
                "{{ __('front.Floor') }}",
                "{{ __('front.Studio') }}",
                "{{ __('front.Compound') }}",
                "{{ __('front.Warehouse') }}",
                "{{ __('front.Station') }}",
            ],
            "{{ __('front.Rent') }}": [
                "{{ __('front.land') }}",
                "{{ __('front.palace') }}",
                "{{ __('front.resort') }}",
                "{{ __('front.building') }}",
                "{{ __('front.villa') }}",
                "{{ __('front.duplex') }}",
                "{{ __('front.apartment') }}",
                "{{ __('front.retreat') }}",
                "{{ __('front.chalet') }}",
                "{{ __('front.farm') }}",
                "{{ __('front.yard') }}",
                "{{ __('front.Office') }}",
                "{{ __('front.Shop') }}",
                "{{ __('front.Showroom') }}",
                "{{ __('front.Floor') }}",
                "{{ __('front.Studio') }}",
                "{{ __('front.Compound') }}",
                "{{ __('front.Warehouse') }}",
                "{{ __('front.Station') }}",
            ],
            "{{ __('front.Investment opportunity') }}": [
                "{{ __('front.land') }}",
                "{{ __('front.auction') }}",
                "{{ __('front.tower') }}",
                "{{ __('front.development_project') }}",
                "{{ __('front.partnership') }}",
                "{{ __('front.other') }}",
            ],
        }

        $('.service').on('change', function() {
            let service = $('.service').val();
            $('select[name="type_service"]').empty();
            $('.div_type_service .list').empty();
            $.each(type_service[service], function(index, value) {
                $('select[name="type_service"]').append('<option value="' + value + '">' +
                    value +
                    '</option>');
                $('.div_type_service .list').append(
                    `<li data-value="${value}"  class="option selected">${value}</li>`
                )
            });
        })

        $('#data_form').submit(function(e) {
            e.preventDefault();
            let form = $(this);
            HideValidationError(form);
            var data = {
                service: $('.service').val(),
                type_service: $('select[name="type_service"]').val(),
                city: $('#city').val(),
                price_start: $('#currency-input').val(),
                price_end: $('#currency-input').val(),
                type_mony: $('#type_mony').val(),
                name: $('#first_name').val(),
                company: $('#company').val(),
                phone: $('#phone').val(),
                email: $('#email').val(),
                checkbox: $('[name="checkbox"]').is(':checked') ? 1 : 0,
            };

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{ route('form.store') }}",
                data: data,
                success: function(response) {
                    form.find(':input:not(.datepicker):not(.checkbox)').val('');
                    if (response.status) {
                        SwalModal(response.msg, 'success');
                    } else {
                        SwalModal(response.msg, 'errors');
                    }
                },
                error: function(response) {

                    let array = []
                    $.each(response.responseJSON.errors, function(i, value) {
                        let index = i.split('.')[0];
                        console.log(index);

                        showValidationError(form, index, value);
                    });
                    Swal.fire({
                        title: '{{ __('front.check the input') }}',
                        icon: 'error',
                        confirmButtonColor: '#4ca1af',
                        confirmButtonText: '{{ __('front.ok') }}',
                    })
                }
            });
        });
    });
</script>

</html>
