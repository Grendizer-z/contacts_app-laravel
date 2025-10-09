<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Contacto</title>
</head>
<body>
    <h2>Crear nuevo contacto</h2>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre" required>
        <input type="text" name="phone" placeholder="Teléfono">
        <input type="email" name="email" placeholder="Correo" required>
        <button type="submit">Guardar</button>
    </form>

    <a href="{{ route('contacts') }}">← Volver a la lista</a>
</body>
</html>