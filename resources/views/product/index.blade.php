@extends('layouts.auth')

@section('content')
<div class="text-center">ROBOT TOYS</div>


<div class="container-xl mb-3 mt-5">
    <div class="row row-cols-1 row-cols-md-4">
      @foreach ($products as $product)
        <div class="col-mt-10">
          <div class="rounded-lg shadow-lg bg-white max-w-sm" style="width: 16rem;">
                <img src="{{ $product->picture }}" class="card-img-top w-80" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->title }}</h5>
                  <h5 class="card-title">Price: ${{ $product->price }}</h5>
                  <hr>
                  <p class="card-text">{{ $product->description}} </p>
                  <a href="{{ route('products.show', $product->id) }} " class="btn btn-primary">Detail</a>
                </div>
          </div>  
        </div>
        @endforeach
    </div>
</div>

@endsection