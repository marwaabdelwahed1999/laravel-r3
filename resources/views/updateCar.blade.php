<!DOCTYPE html>
<html lang="en">
<head>
  <title>UpdateCar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  @include('includes.nav');
<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="{{route('updateCar',$car->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$car->title}}">
    </div>
    <div class="form-group">
      <label for="description">description:</label>
      <textarea class="form-control" name="description" id="" cols="60" rows="3">{{$car->description}}</textarea>
    </div>

    {{-- current image --}}
    
<div class="form-group">
  <label for="current-image">Current Image:</label>
  <br>
  <img src="{{ asset('assets/images/' . $car->image) }}" alt="{{ $car->title }}" id="current-image" style="max-width: 300px; max-height: 300px;">
</div>


    <br>
    {{-- update image  --}}

    <div class="form-group">
      <label for="image">image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
    </div>



    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($car->published)> published</label>
    </div>
    <button type="submit" class="btn btn-default">Update Car</button>
  </form>
</div>

</body>
</html>
