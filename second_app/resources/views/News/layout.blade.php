<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body >
  
@yield('content')
<center>
<div class="container">
  <div class="row">
    <div class="col-12" style="margin: 2%;">
      <a href="{{route('News.create')}}" class="btn btn-primary">ADD NEW</a>
    </div>
    <div class= "container-fluid  col-sm-12 col-md-12 rounded align-items-center justify-content-between">
        <!-- <div class="bg-secondary rounded h-100 p-4">       -->
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Details</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
      
        <tbody>
          @foreach ($news as $n)
            
          <tr>
            <th scope="row">{{++$i}}</th>
            <td>{{$n->name}}</td>
            <td>{{$n->details}}</td>
            <td>
              <form action="{{route('News.destroy',$n->id)}}" method="POST">
                <a href="{{route('News.show',$n->id)}}" class="btn btn-info">View</a>
                <a href="{{route('News.edit',$n->id)}}" class="btn btn-success">Edit</a>

                <!-- <form action="{{route('News.destroy',$n->id)}}" method="POST"> -->
                @csrf
                @method('DELETE')
                
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>

          @endforeach
        </tbody>
      </table>
      {{$news->links()}}
    <!-- </div> -->
  </div>
</div>
</div>
</center>
</body>
</html>