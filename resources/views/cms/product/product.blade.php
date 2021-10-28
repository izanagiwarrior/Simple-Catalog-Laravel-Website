@extends('layouts.admin')
@section('title', 'Products')

@section('main-content')

<h1 class="h3 mb-4 text-gray-800 text-center">{{ __('Products') }}</h1>
@foreach ($data as $product)
<div class="col-sm-4" style="padding: 0 40px;">
    <div class="card card-product">
        <div class="card-body p-0">
            <img class="img-card" src="{{asset('public/'.$product->img_path)}}" alt="" srcset="">
            <h5 class="mt-2 card-title text-center">{{$product->nama_product}}</h5>
        </div>
        <div class="hover-card">
            <a href="{{route('detail', $product->id)}}" class="btn btn-dark">Input Data</a>
            <form action="{{ route('deleteProduct') }}" method="post">
                @csrf
                <input type="hidden" value="{{ $product->id }}" name="id">
                <button class="btn btn-danger my-3">Delete</button>
            </form>
            <a href="{{ route('updateProduct',$product->id) }}" class="btn btn-block btn-warning">Edit</a>
        </div>
    </div>
</div>
@endforeach
@endsection