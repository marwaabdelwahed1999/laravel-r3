<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add_car</title>
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
  <form action="{{route('storeCar')}}" method="post" enctype="multipart/form-data">
    @csrf
    {{-- @method('put') --}}
    <div class="form-group">
      <label for="title">title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{old('title')}}">
      @error('title')
        {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="description">description:</label>
      <textarea class="form-control" name="description" id="" cols="60" rows="3">{{old('description')}}</textarea>
      @error('description')
      {{$message}}
      @enderror
    </div>
    {{-- image --}}

    <div class="form-group">
      <label for="image">image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
      @error('image')
        {{$message}}
      @enderror
    </div>


    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked(old('published'))> published</label>
    </div>
    <button type="submit" class="btn btn-default">Insert Car</button>
  </form>
</div>

</body>
</html>
