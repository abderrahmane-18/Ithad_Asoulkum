@extends('front.layouts.app')
@section('content')
    <div class="p-5 flex flex-col gap-12 ">
        <div class="flex justify-center items-start ">
            <div data-aos="fade-down" class="w-full sm:w-10/12 md:w-1/2 my-1">
                <h1
                    class="w-fit mx-auto text-4xl md:text-6xl text-primary relative z-20 font-light mb-20 flex items-center justify-center gap-6">
                    <span>
                        <img src="{{ asset('assets/about-us.png') }}" width="48" alt="">
                    </span>
                    <span>
                        {{ __('front.about_us') }}
                    </span>
                </h1>
                <div class="min-h-96 text-neutral-800">
                    {!! $about !!}
                </div>
            </div>
        </div>
        <div class="flex justify-center items-start ">
            <div data-aos="fade-down" class="w-full sm:w-10/12 md:w-1/2 my-1">
                <h1
                    class="w-fit mx-auto text-4xl md:text-6xl text-primary relative z-20 font-light mb-20 flex items-center justify-center gap-6">
                    <span>
                        <img src="{{ asset('assets/terms-and-conditions.png') }}" width="48" alt="">
                    </span>
                    <span>
                        {{ __('front.terms') }}
                    </span>
                </h1>
                <div class="min-h-96 text-neutral-800">
                    {!! $terms !!}
                </div>
            </div>
        </div>
        <div class="flex justify-center items-start ">
            <div data-aos="fade-down" class="w-full sm:w-10/12 md:w-1/2 my-1">
                <h1
                    class="w-fit mx-auto text-4xl md:text-6xl text-primary relative z-20 font-light mb-20 flex items-center justify-center gap-6">
                    <span>
                        <img src="{{ asset('assets/privacy.png') }}" width="48" alt="">
                    </span>
                    <span>
                        {{ __('front.privacy') }}
                    </span>
                </h1>
                <div class="min-h-96 text-neutral-800">
                    {!! $privacy !!}
                </div>
            </div>
        </div>
    </div>
@endsection
