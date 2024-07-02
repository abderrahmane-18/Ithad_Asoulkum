@extends('front.layouts.app')
@section('content')
    <h1 data-aos="fade-down"
        class="w-fit mx-auto text-4xl md:text-6xl text-primary relative z-20 font-light mb-20 flex items-center justify-center gap-6">
        <span>
            <img src="{{ asset('assets/join-us.png') }}" width="48" alt="">
        </span>
        <span>
            {{ __('front.to_be_pattren') }}
        </span>
    </h1>
    <form class="join flex flex-col gap-24 md:w-8/12 mx-auto relative " id="join_form">
        <div {{ app()->getLocale() == 'ar' ? 'data-aos=fade-right' : 'data-aos=fade-left' }}
            class="grid grid-cols-1 md:grid-cols-2 gap-10 px-4 md:px-12 py-6   w-12/12 relative ">

            <div class="">
                <input type="text" id="name" name="name" class="input_join  "
                    placeholder="{{ __('front.name') }}" />
            </div>

            <div class="">
                <input type="text" id="company" name="company" class="input_join  "
                    placeholder="{{ __('front.company') }}" />
            </div>

            <div class="">
                <input type="text" id="jop_title" name="jop_title" class="input_join  "
                    placeholder="{{ __('front.jop_title') }}" />
            </div>

            <div class="">
                <input type="text" id="city" name="city" class="input_join  "
                    placeholder="{{ __('front.city') }}" />
            </div>

            <div class="">
                <input type="text" id="phone" name="phone" class="input_join  "
                    placeholder="{{ __('front.phone') }}" />
            </div>

            <div class="">
                <input type="email" id="email" name="email" class="input_join  "
                    placeholder="{{ __('front.email') }}" />
            </div>

            <div class="">
                <input type="text" id="website_name" name="website_name" class="input_join  "
                    placeholder="{{ __('front.website_name') }}" />
            </div>

            <div class="">
                <select name="type_partner" class="input_join">
                    <option disabled value="0" selected data-display="{{ __('front.choose_type_partner') }}">
                        {{ __('front.choose_type_partner') }}
                    </option>
                    <option value="{{ __('front.Real estate platform') }}">{{ __('front.Real estate platform') }}</option>
                    <option value="{{ __('front.Investor') }}">{{ __('front.Investor') }}</option>
                    <option value="{{ __('front.Real estate office') }}">{{ __('front.Real estate office') }}</option>
                    <option value="{{ __('front.Property owner') }}">{{ __('front.Property owner') }}</option>

                    <option value="{{ __('front.Certified real estate marketer') }}">
                        {{ __('front.Certified real estate marketer') }}</option>
                    <option value="{{ __('front.Certified notary') }}">{{ __('front.Certified notary') }}</option>
                    <option value="{{ __('front.Collaborator') }}">{{ __('front.Collaborator') }}</option>
                </select>
            </div>

            <div class="">
                <textarea name="notes" id="" rows="5" placeholder="{{ __('front.notes') }}"
                    class="input_join resize-none "></textarea>
            </div>
        </div>

        <div class="flex items-center my-[-60px] px-4 md:px-12">
            <input id="default-checkbox" type="checkbox" name="agree" value="1"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-checkbox"
                class="mx-4 text-lg  font-medium text-neutral-800">{{ __('front.agree') }}</label>
        </div>

        <button id="btn-submit" data-aos="zoom-in"
            class=" h-14  flex items-center justify-center rounded-xl text-xl transition duration-300 border border-primary bg-primary text-white hover:bg-transparent hover:text-primary">{{ __('front.submit') }}</button>
    </form>
@endsection

@push('script')
    <x-js.form_front />
    <script>
        $(document).ready(function() {
            $('#join_form').submit(function(e) {
                e.preventDefault();
                let form = $(this);
                HideValidationError(form);
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
