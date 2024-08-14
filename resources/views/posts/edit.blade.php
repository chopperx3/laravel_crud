<!DOCTYPE html>
<html>
<head>
    <title>Editar Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #494949;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-top: 0;
            color: #333;
        }
        label {
            display: block;
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            margin-top: 5px;
        }
        textarea {
            height: 150px;
            resize: vertical;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Post</h1>

        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="title">Título:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}">
            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror

            <label for="body">Cuerpo:</label>
            <textarea id="body" name="body">{{ old('body', $post->body) }}</textarea>
            @error('body')
                <p style="color: red;">{{ $message }}</p>
            @enderror

            <button type="submit">Actualizar</button>
        </form>

        <a href="{{ route('posts.index') }}" class="button">Volver a la lista de Posts</a>
    </div>
</body>
</html>
