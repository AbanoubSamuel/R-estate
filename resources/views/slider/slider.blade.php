<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Responsive Blog Card Slider </title>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
    <link rel="stylesheet" href="{{ Url('slider/style.css') }}">


</head>
@extends('template')
@section('nav')
@endsection

<body>
    <!-- partial:index.partial.html -->
    <div class="blog-slider">
        <div class="blog-slider__wrp swiper-wrapper">
            <div class="blog-slider__item swiper-slide">
                <div class="blog-slider__img">

                    <img src="/storage/{{ $data['image2'] }}" />
                </div>
                <div class="blog-slider__content">
                    <span class="blog-slider__code">5 April 2022</span>
                    <div class="blog-slider__title">{{ $data['name'] }}</div>
                    <div class="blog-slider__text">{{ $data['desc'] }}</div>

                </div>
            </div>
            <div class="blog-slider__item swiper-slide">
                <div class="blog-slider__img">
                    <img src="/storage/{{ $data['image3'] }}" />
                </div>
                <div class="blog-slider__content">
                    <span class="blog-slider__code">5 April 2022</span>
                    <div class="blog-slider__title">{{ $data['name'] }}</div>
                    <div class="blog-slider__text"> {{ $data['desc'] }}</div>

                </div>
            </div>

            <div class="blog-slider__item swiper-slide">
                <div class="blog-slider__img">
                    <img src="/storage/{{ $data['image4'] }}" />
                </div>
                <div class="blog-slider__content">
                    <span class="blog-slider__code">25 April 2022</span>
                    <div class="blog-slider__title">{{ $data['name'] }}</div>
                    <div class="blog-slider__text">{{ $data['desc'] }}</div>

                </div>
            </div>

        </div>
        <div class="blog-slider__pagination"></div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
    <script src="{{ Url('slider/script.js') }}"></script>

</body>

</html>
