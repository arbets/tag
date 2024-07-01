<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>

    </head>
    <body class="bg-gray-200 py-10">
        <div class="max-w-lg bg-white mx-auto p-5 rounded shadow">
            <form action="tags" method="post">
                @csrf
                <input type="text" name="name">
                <input type="submit" value="Agregar">
            </form>
            <h4>Listado de etiquetas</h4>
            <table>
                @forelse ($tags as $tag)
                    <tr>
                        <td>
                            {{ $tag->name }}
                        </td>
                        <td>
                            <form action="tags/{{ $tag->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <p>No hay etiquetas</p>
                    </tr>
                @endforelse
            </table>
        </div>
        
    </body>
</html>
