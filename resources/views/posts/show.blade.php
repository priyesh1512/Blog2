<!DOCTYPE html>
<html>
<head>
    <title>View Blogs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 50px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .task {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="task">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="/posts">Back to all Blogs</a>
</div>

</body>
</html>
