<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .car-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        .date {
            font-size: 12px;
            color: #999;
        }
    </style>
</head>

<body>
    <div class="car-container">
        <h1>{{$post->title}}</h1>
        <p>{{$post->description}}</p>
        <p class="date">Author: <span id="updated-at">{{$post->author}}</span></p>
        <p class="date">Updated at: <span id="updated-at">{{$post->updated_at}}</span></p>
        <p class="date">Created at: <span id="created-at">{{$post->created_at}}</span></p>
        <p class="date">Published: <span id="published"> {{$post->published? "published" : "Not published"}}</span></p>
    </div>
</body>

</html>
