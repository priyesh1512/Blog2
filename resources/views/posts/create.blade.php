<!DOCTYPE html>
<html>
<head>
    <title>Create Blog</title>
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
        form {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        label, textarea, input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        input, textarea {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h1>Create a new Blog</h1>

<form action="/posts" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" required>
    
    <label>Content:</label>
    <textarea name="content" required></textarea>
    
    <button type="submit">Create Blog</button>
</form>

</body>
</html>
