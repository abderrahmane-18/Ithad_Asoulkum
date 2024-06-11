@extends('front.layouts.app')
@section('content')
    <h1 data-aos="fade-down"
        class="w-fit mx-auto text-4xl md:text-6xl text-primary relative z-20 font-light mb-20 flex items-center justify-center gap-6">
        <span>
            <img src="{{ asset('assets/join-us.png') }}" width="48" alt="">
        </span>
        <span>
            {{ __('front.join-us') }}
        </span>
    </h1>
    <form class="flex flex-col gap-24 w-8/12 mx-auto relative " id="join_form">
        <div {{ app()->getLocale() == 'ar' ? 'data-aos=fade-right' : 'data-aos=fade-left' }}
            class="grid grid-cols-2 gap-10 px-12 py-6   w-12/12 relative ">

            <div class="relative z-20  ">
                <input type="text" id="name" name="name"
                    class=" placeholder:font-bold border border-neutral-300 focus:outline-none  placeholder:text-neutral-700 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secring-secondary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="{{ __('front.name') }}" />
            </div>

            <div class="relative z-20  ">
                <input type="text" id="phone" name="phone"
                    class=" placeholder:font-bold border border-neutral-300 focus:outline-none  placeholder:text-neutral-700 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secring-secondary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="{{ __('front.enter_phone') }}" />
            </div>

            <div class="relative z-20  ">
                <input type="text" id="city" name="city"
                    class=" placeholder:font-bold border border-neutral-300 focus:outline-none  placeholder:text-neutral-700 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secring-secondary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="{{ __('front.city') }}" />
            </div>

            <div
                class="bg-white text-[#333] flex items-center  border border-neutral-300   p-1    rounded-lg overflow-hidden">
                <div class="px-4 flex flex-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 612.675 612.675">
                        <path
                            d="M581.209 223.007 269.839 530.92c-51.592 51.024-135.247 51.024-186.839 0-51.592-51.023-51.592-133.737 0-184.761L363.248 69.04c34.402-34.009 90.15-34.009 124.553 0 34.402 34.008 34.402 89.166 0 123.174l-280.249 277.12c-17.19 17.016-45.075 17.016-62.287 0-17.19-16.993-17.19-44.571 0-61.587L394.37 161.42l-31.144-30.793-249.082 246.348c-34.402 34.009-34.402 89.166 0 123.174 34.402 34.009 90.15 34.009 124.552 0l280.249-277.12c51.592-51.023 51.592-133.737 0-184.761-51.593-51.023-135.247-51.023-186.839 0L36.285 330.784l1.072 1.071c-53.736 68.323-49.012 167.091 14.5 229.88 63.512 62.79 163.35 67.492 232.46 14.325l1.072 1.072 326.942-323.31-31.122-30.815z"
                            data-original="#000000" />
                    </svg>
                    <p class="text-sm mx-3">example.pdf</p>
                </div>
                <label for="uploadFile1"
                    class="bg-gray-800 hover:bg-gray-700 text-white text-sm px-3 py-1.5 outline-none rounded-lg cursor-pointer ml-auto w-max block">{{ __('front.Upload') }}</label>
                <input type="file" name="fal" id='uploadFile1' class="hidden" />
            </div>


        </div>


        <button id="btn-submit" data-aos="zoom-in"
            class=" h-14 flex items-center justify-center rounded-xl text-xl transition duration-300 border border-primary bg-primary text-white hover:bg-transparent hover:text-primary">{{ __('front.submit') }}</button>
    </form>
@endsection

@push('script')
    <x-js.form />
    <script>
        $(document).ready(function() {
            $('#join_form').submit(function(e) {
                e.preventDefault();
                let form = $(this);
                HideValidationError(form);
                var data_join = {
                    name: $('[name="name"]').val(),
                    phone: $('[name="phone"]').val(),
                    city: $('[name="city"]').val(),
                    fal: $('[name="fal"]')[0].files[0],
                };
                console.log(data_join)
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    type: "POST",
                    url: "{{ route('join_us.store') }}",
                    data: new FormData(this),
                    contentType: false,
                    // cache: false,
                    processData: false,


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
