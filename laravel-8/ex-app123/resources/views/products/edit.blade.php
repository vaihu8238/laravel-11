@extends ('products.layout')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <div>
                <button><a href="{{route('products.index')}}">Back</a></button>
            </div>

            <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">

            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$product->name}}">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Detail</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="detail" value="{{$product->detail}}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Upload Image</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="image" >

                    <img src="images/{{$product->image}}" alt="">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection