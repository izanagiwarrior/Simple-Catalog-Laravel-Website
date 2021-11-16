<?php
function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}
?>
@extends('layouts.app')

@section('content')
<!-- Header-->
<header class="bg-light py-5">
    <div class="container px-4 px-lg-0 my-0">
    </div>
</header>
<!-- Product section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row">
            <div class="col-md-6">
                <img class="card-img-top mb-5 h-100" style="object-fit: cover;" src="{{asset('storage/' . $product->photo)}}" alt="..." />
            </div>
            <div class="col-md-6 d-flex flex-column">
                <div class="flex-fill">
                    <h1 class="display-5 fw-bolder">{{$product->title}}</h1>
                    <div class="fs-1 fw-bolder">
                        <span>{{(rupiah($product->price))}}</span>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Detail Product-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="detail text-left">
                <h2>Detail Product</h2>
                <hr>
                <p style="font-size: 20px;">{{$product->description}}</p>
            </div>
        </div>
    </div>
</section>
<section class="page-section" id="details">

</section>
<!-- Related items section-->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">More Products</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($data as $dt)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{asset('storage/' . $dt->photo)}}" alt="..." height="200px"/>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$dt->title}}</h5>
                            <!-- Product price-->
                            {{$dt->price}}
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="{{route('detailProduk', $dt->id)}}">Detail</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/theme.js')}}"></script>
</body>

</html>
@endsection