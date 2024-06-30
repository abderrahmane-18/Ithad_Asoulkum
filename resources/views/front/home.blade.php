@extends('front.layouts.app')
@section('content')
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
    <form class="home flex flex-col gap-24 w-8/12 mx-auto relative " id="data_form">
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
                <div class="text-4xl font-extralight border-xl hidden xl:flex  text-neutral-500 relative z-20  mt-[-2px]">
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
                <div class="text-4xl font-extralight border-xl  text-neutral-500 relative z-20 hidden xl:flex  mt-[-2px]">
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
                    <label for="currency-input" class="mb-2 text-lg font-medium text-gray-900 sr-only dark:text-white">
                    </label>
                    <div class="relative w-full ">
                        <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1M2 5h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                            </svg>
                        </div>
                        <input name="price_start" type="number" id="currency-input"
                            class="block p-2.5 py-6 text-lg focus:outline-0 border-neutral-500 w-full z-20 ps-14  text-gray-900 bg-gray-50 rounded-xl  border "
                            placeholder="{{ __('front.Price start') }}" />
                    </div>
                </div>
                <div class="col-span-3 sm:col-span-2 lg:col-span-1">
                    <label for="currency-input" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">
                        test
                    </label>
                    <div>
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
            <div class="text-4xl font-extralight border-xl  text-neutral-500 relative z-20 hidden xl:flex  mt-[-2px]">
                |
            </div>

            <div class="relative z-20  min-w-[20%]">
                <input type="tel" id="phone" name="phone"
                    class="bg-transparent placeholder:text-start border-none placeholder:font-bold  focus:outline-none focus:border-none placeholder:text-neutral-600  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="{{ __('front.enter_phone') }}" />
            </div>
            <div class="text-4xl font-extralight border-xl  text-neutral-500 relative z-20 hidden xl:flex  mt-[-2px]">
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
            <label for="default-checkbox" class="mx-4 text-lg  font-medium text-white">{{ __('front.checkbox') }}</label>
        </div>

        <button id="btn-submit" data-aos="zoom-in"
            class=" h-14 flex items-center justify-center rounded-xl text-xl transition duration-300 border border-primary bg-primary text-white hover:bg-transparent hover:text-primary">{{ __('front.submit') }}</button>
    </form>
@endsection

@push('script')
    <x-js.form />
    <script>
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
                    $('select[name="type_service"]').append('<option data-display="' + value +
                        '"  value="' + value + '">' +
                        value +
                        '</option>');
                    $('.div_type_service .list').append(
                        `<li data-value="${value}"  class="option ">${value}</li>`
                    )
                });
            })

            $('#data_form').submit(function(e) {
                e.preventDefault();
                let form = $(this);
                HideValidationError(form);
                var data = {
                    service: $('.service').val(),
                    type_service: $('.div_type_service .current').html(),
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
@endpush
