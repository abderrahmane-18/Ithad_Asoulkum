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
    <meta name="author" content="Khaldi Mohamed Abdelahmid Esadek (Abdou)" />
    <meta name="copyright" content="https://khaldiabdou.com/" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon"
        href="{{ asset(\App\Models\Setting::where('setting_key', 'favicon')->first()->setting_value) }}" />

    <link href="{{ asset('assets/lib/aos.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/lib/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    @vite('resources/css/app.css')

    <title>{{ \App\Models\Setting::where('setting_key', 'website_name_' . getLocale())->first()->setting_value }}
    </title>

</head>

<body class="p-6">
    <!--------------
        Main Content
    --------------->
    <main>
        <form class="flex flex-col gap-4 w-8/12 mx-auto" id="data_form">
            <div class="flex gap-8">
                <div>
                    <select class="service" name="service" class="rounded-lg">
                        <option value="0" data-display="{{ __('front.Choose services') }}">
                            {{ __('front.Choose services') }}
                        </option>
                        <option value="buy">{{ __('front.Buy') }}</option>
                        <option value="rent">{{ __('front.Rent') }}</option>
                        <option value="investment">{{ __('front.Investment opportunity') }}</option>
                    </select>
                </div>

                <div>
                    <select name="type_service" class="rounded-lg">
                        <option value="0" data-display=" {{ __('front.Type of service') }}">
                            {{ __('front.Type of service') }}
                        </option>
                        <option value="1"> </option>
                    </select>
                </div>
            </div>

            <div>
                <label for="city"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('front.city') }}</label>
                <input type="text" id="city" name="city"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="{{ __('front.city') }}" />
            </div>

            <div class="">
                <div>
                    {{ __('front.price') }}
                </div>
                <div class="flex gap-2">
                    <div>
                        <label for="currency-input"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">
                        </label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1M2 5h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                                </svg>
                            </div>
                            <input name="price_start" type="number" id="currency-input"
                                class="block p-2.5 w-full z-20 ps-10 text-sm text-gray-900 bg-gray-50 rounded-lg  border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-e-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                placeholder="{{ __('front.Price start') }}" />
                        </div>
                    </div>
                    <div class="">
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
                                <input name="price_end" type="number" id="currency-input"
                                    class="block p-2.5 w-full z-20 ps-10 text-sm text-gray-900 bg-gray-50 rounded-lg  border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-e-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                    placeholder="{{ __('front.Price end') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="first_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('front.name') }}</label>
                    <input type="text" id="first_name" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="{{ __('front.name') }}" />
                </div>

                <div>
                    <label for="company"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('front.Company') }}</label>
                    <input type="text" id="company" name="company"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="{{ __('front.Riyadh') }}" />
                </div>
                <div>
                    <label for="phone"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('front.phone') }}
                    </label>
                    <input type="tel" id="phone" name="phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="123-45-678" />
                </div>

            </div>

            <div class="mb-6">
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('front.email') }}
                </label>
                <input name="email" type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="test@gmail.com" />
            </div>

            <button id="btn-submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('front.submit') }}</button>
        </form>

    </main>
    <div>
    </div>
    <!--------------
                    Footer
                --------------->
    <footer class="footer overflow-hidden" id="contact-us">

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
            confirmButtonColor: '#4ca1af',
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
                name: $('#first_name').val(),
                company: $('#company').val(),
                phone: $('#phone').val(),
                email: $('#email').val()
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
