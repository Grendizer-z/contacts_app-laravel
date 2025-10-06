<!DOCTYPE html>
<html>
    <body>
        <form action="{{ route('registrar.post') }}" method="POST">
            @csrf
            <input type="text" placeholder="Nombre" name="nombre">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Clave" name="clave">
            <input type="submit" value="Login">
        </form>
    </body>
</html>