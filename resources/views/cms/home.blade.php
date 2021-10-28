@push('script')
<!-- splide -->
<script src="{{ asset('vendor/splide-3.2.1/dist/js/splide.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('.splide').mount();
    });
</script>
@endpush
@push('css')
<!-- splide css -->
<link rel="stylesheet" href="vendor/splide-3.2.1/dist/css/splide.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/splide.min.css" />
@endpush
@extends('layouts.admin')

@section('title', 'Home')

@section('main-content')
<div class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">1</li>
            <li class="splide__slide">2</li>
            <li class="splide__slide">3</li>
        </ul>
    </div>
</div>

<script>
    new Splide('#image-slider').mount();
</script>

@endsection