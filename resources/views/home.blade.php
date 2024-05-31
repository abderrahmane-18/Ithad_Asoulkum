<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content=" , ,  " />
    <meta name="title" content="" />
    <meta name="description" content="" />
    <meta name="author" content="Khaldi Mohamed Abdelahmid Esadek (Abdou)" />
    <meta name="copyright" content="https://khaldiabdou.com/" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="images/logo2.jpeg" type="image/x-icon" />

    <link href="{{ asset('assets/lib/aos.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/lib/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    @vite('resources/css/app.css')

    <title>
        إتحاد اصولكم
    </title>
</head>

<body class="p-6">

    <!--------------
        Navigation
    --------------->



    <!--------------
        Landing
    --------------->
    <!--------------
        Main Content
    --------------->
    <main>


        <div class="flex flex-col gap-4">
            <div class="flex gap-8">
                <div>
                    <select class="service" class="rounded-lg">
                        <option data-display="{{ __('Choose services') }}">{{ __('Choose services') }}</option>
                        <option value="1">{{ __('Buy') }}</option>
                        <option value="1">{{ __('Rent') }}</option>
                        <option value="1">{{ __('Investment opportunity') }}</option>
                    </select>
                </div>

                <div>
                    <select name="type_service" class="rounded-lg">
                        <option data-display=" {{ __('Type of service') }}"> {{ __('Type of service') }}</option>
                        <option value="1"> </option>
                    </select>
                </div>
            </div>

            <div>
                <label for="city"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('city') }}</label>
                <input type="text" id="city"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Flowbite" required />
            </div>

            <div class="">
                <div>
                    {{ __('price') }}
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
                            <input type="number" id="currency-input"
                                class="block p-2.5 w-full z-20 ps-10 text-sm text-gray-900 bg-gray-50 rounded-lg  border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-e-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                placeholder="{{ __('Price start') }}" required />
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
                                <input type="number" id="currency-input"
                                    class="block p-2.5 w-full z-20 ps-10 text-sm text-gray-900 bg-gray-50 rounded-lg  border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-e-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                    placeholder="{{ __('Price end') }}" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="first_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('name') }}</label>
                    <input type="text" id="first_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="{{ __('name') }}" required />
                </div>

                <div>
                    <label for="company"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                    <input type="text" id="company"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Flowbite" required />
                </div>
                <div>
                    <label for="phone"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('phone') }}
                    </label>
                    <input type="tel" id="phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                </div>

            </div>

            <div class="mb-6">
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('email') }}
                </label>
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="test@gmail.com" required />
            </div>

            <a href="route('form.store')"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('submit') }}</a>
        </div>

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
@vite('resources/js/app.js')

</html>
