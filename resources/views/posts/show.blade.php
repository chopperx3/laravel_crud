<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Post</title>
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
        p {
            font-size: 16px;
            line-height: 1.6;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 10px;
        }
        .button-delete {
            background-color: #dc3545;
        }
        .button:hover {
            opacity: 0.8;
        }
        .form-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalles del Post</h1>

        <p><strong>Título:</strong> {{ $post->title }}</p>
        <p><strong>Cuerpo:</strong> {{ $post->body }}</p>

        <a href="{{ route('posts.edit', $post->id) }}" class="button">Editar</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="button button-delete">Eliminar</button>
        </form>
        <a href="{{ route('posts.index') }}" class="button">Volver a la lista de Posts</a>
    </div>
</body>
</html>
