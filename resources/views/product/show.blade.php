@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">Detail</h1>
<hr>
<br>

<div class="container">
    <div class="row row-cols-4">
        <div class="col-md-9" style="display:flex">
            <img src="{{ $product->picture }}" width ="350px" alt="...">
            <div class="container m-4 p-2">
                <h2>{{ $product->title }}</h2>
                <h3 class="text-danger">Price: ${{ $product->price }}</h3>
                <hr>
                <p>{{ $product->description }}</p>
                <a href="{{ route('products.index') }}" class="btn btn-success">Back</a>
            </div>
        </div>

        <div class="col-md-3">
            <h4>All Comments</h4>

            <div class="comments p-2 m-2" style="background-color: rgb(232, 251, 246)">
                @foreach ($product->comments as $comment)
                    <p>{{ $comment->comment }} ( {{ $comment->rating }} )</p>
                    <hr>
                @endforeach
            </div>

           
    </div>
</div>
<div class="container mt-20 p-2">
    <h5>Add a Comment ....</h5>

    <form action="" method="POST">
        @csrf
        
        <input type="hidden" id="id" name="id" value="{{ $product->id }}">

        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <input type="text" class="form-control" name="comment" id="comment" placeholder="Enter Comment">
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" class="form-control" name="rating" id="rating" placeholder="Enter Rating">
        </div>

          <button type="submit" id="addCommentBtn" class="btn btn-success">comment</button>

    </form>
    
</div>

</div>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });



    // Add Comment To Product By Id

    $("#addCommentBtn").click(function(e){

        //get data from form

        var comment = $('#comment').val();
        var rating =  $('#rating').val();
        var id = $('#id').val();

        $.ajax({
            type: "POST",
            dataType: "json",
            data: {comment:comment, rating:rating, _token: '{{csrf_token()}}'},
            url: "/products/"+$id,
            success: function(data) {
                console.log('Data Saved');
            },
            error: function(error) {
                console.log(error);
            }
        });
    });


</script>    

@endsection