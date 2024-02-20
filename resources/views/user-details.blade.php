<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User details</title>
</head>
<body>
    <p>Detalles del usuario:</p>

    <ul>
        <li>
            <strong>Id:</strong> {{ $user->id }}
        </li>

        <li>
            <strong>Fecha de creación:</strong>

            {{-- Los campos created_at y updated_at devuelven un objeto Carbon --}}
            {{ $user->created_at->format('d/M/Y') }}
        </li>

        <li>
            <strong>Nombre usuario:</strong>
            {{ $user->name }}
        </li>

        <li>
            <strong>Email:</strong>
            {{ $user->email }}
        </li>
    </ul>
</body>
</html>
