<!DOCTYPE html>
<html lang="en">
<head>
  <title>UpdatePost</title>
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
  <form action="{{route('update_post',$post->id)}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$post->title}}">
    </div>
    <div class="form-group">
      <label for="description">description:</label>
      <textarea class="form-control" name="description" id="" cols="60" rows="3">{{$post->description}}</textarea>
    </div>

    <div class="form-group">
        <label for="author">author:</label>
        <input type="text" class="form-control" id="author" placeholder="Enter author" name="author" value="{{$post->author}}">
      </div>
    
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($post->published)> published</label>
    </div>
    <button type="submit" class="btn btn-default">Update Post</button>
  </form>
</div>

</body>
</html>
