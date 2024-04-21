@extends ('products.layout')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <div>
                <button><a href="{{route('products.create')}}">Add New</a></button>
            </div>

            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Detail</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   @foreach($products as $product)
   
   <tr>
      <th scope="row">1</th>
      <td>{{$product->image}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->detail}}</td>
      <td>
       <form action="{{route('products.destroy',$product->id)}}" method="post">

       @csrf 
       @method('DELETE')
       <button><a href="{{route('products.show',$product->id)}}">View</a></button>
        <button><a href="{{route('products.edit',$product->id)}}">Edit</a></button>
        <button type="submit">Delete</button>
       </form>
      </td>
    </tr>  
   @endforeach
  </tbody>
</table>
        </div>
    </div>
</div>


@endsection