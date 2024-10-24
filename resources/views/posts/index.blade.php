<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
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
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0 auto;
            width: 50%;
        }
        li {
            background-color: #fff;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .buttons {
            display: flex;
            gap: 10px;
        }
        a, form button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        a {
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
        }
        form button {
            background-color: #e74c3c;
            color: white;
        }
    </style>
</head>
<body>

<h1>Blogs</h1>

<a href="/posts/create" style="display: block; text-align: center; margin-bottom: 20px;">Create New Blog</a>

<ul>
  @foreach ($posts as $post)
    <li>
      <span>{{ $post->title }}</span>
      <div class="buttons">
        <a href="/posts/{{ $post->id }}">View</a>
        <form action="/posts/{{ $post->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
          @csrf
          @method('DELETE')
          <button type="submit">Delete</button>
        </form>
      </div>
    </li>
  @endforeach
</ul>

</body>
</html>
