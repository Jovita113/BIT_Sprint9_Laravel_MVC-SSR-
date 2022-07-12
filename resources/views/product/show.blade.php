@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">{{ $product->title }} | Detail</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-9" style="display:flex">

            <div class="container m-2 p-2">
                <img src="/images/{{ $product->picture }}" height="450px" alt="...">
                <div class="container m-2 p-2">
                  <h2>{{ $product->title }}</h2>
                  <h3>Price: ${{ $product->price }}</h3>
                  <hr>
                  <p>{{ $product->description }}</p>
                  <a href="{{ route('products.index') }}" class="btn btn-success">Go Home</a>
                  <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                </div>
              </div>

        </div>


        <div class="col-md-3">
            <h3>All Comments</h3>

            <div class="comments p-2 m-2" style="background-color: rgb(232, 251, 246)">
                @foreach ($product->comments as $comment)
                    <h5>{{ $comment->comment }} ( {{ $comment->rating }} )</h5>
                    <hr>
                @endforeach
            </div>

        </div>
    </div>
</div>

@endsection