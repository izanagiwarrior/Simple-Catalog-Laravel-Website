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
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-black">
            <h1 class="display-4 fw-bolder">Catalog</h1>
            <p class="lead fw-normal text-black-50 mb-0">Ximi Store sells many gaming product for all your gaming activity</p>
        </div>
        <div class="Search my-5">
            <div class="row height d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <form action="{{route('katalog')}}">
                        <div class="form"> <i class="fa fa-search"></i> <input type="text" name="search" class="form-control form-input" placeholder="Search anything..." value="{{(isset($search)) ? $search : '' }}"> <span class="left-pan"></span> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($product as $pt)
            <div class="col-md-6 col-xl-3 mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{$pt->photo === null ? asset('img/il_login.png') : asset('storage/' . $pt->photo)}}" style="object-fit:cover;" height='200px' alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$pt->title}}</h5>
                            <!-- Product price-->
                            <h4 class="fw-bolder-price">{{rupiah($pt->price)}}</h4>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-danger mt-auto" href="{{route('detailProduk', $pt->id )}}">Detail</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Pagination -->
<nav class="d-flex justify-content-center" aria-label="Page navigation example">
    <ul class="pagination mx-auto">
        {{ $product->links() }}
    </ul>
</nav>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/theme.js')}}"></script>
</body>
</html>
@endsection