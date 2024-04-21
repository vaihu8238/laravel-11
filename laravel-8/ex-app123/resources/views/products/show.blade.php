@extends ('products.layout')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6">

        <h4>
            {{$product->name}}
        </h4>
        </div>
    </div>
</div>
@endsection