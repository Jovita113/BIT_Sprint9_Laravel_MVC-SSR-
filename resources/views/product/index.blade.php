@extends('layouts.auth')

@section('content')
<p class="text-4xl font-bold text-center">ROBOT TOYS</p>
<hr>
<br/>
<br/>

<div class="container-xl">
    <div class="row row-cols-6">
      @foreach ($products as $product)
        <div class="card mb-10 mx-8">
          <img class="w-full aspect-square card-img-top" src="{{ $product->picture }}" alt="no picture">
          <hr>
          <div class="card-body">
            <p class="card-title font-bold text-center">{{ $product->title }}</p>
            <p class="card-title text-center">Price:</p>
            <p class="font-bold text-center text-danger">${{ $product->price }}</p>
            <a href="{{ route('products.show', $product->id) }} " class="btn btn-primary mt-6 ml-4">Read More</a>
          </div>   
        </div>
        @endforeach
    </div>
</div>

@endsection
