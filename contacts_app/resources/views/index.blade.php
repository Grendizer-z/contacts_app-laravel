<!DOCTYPE html>
<html>
    <body>
        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Clave" name="clave">
            <input type="submit" value="Login">
        </form>
    </body>
</html>
