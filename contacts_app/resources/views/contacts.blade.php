<!DOCTYPE html>
<html>
    <body>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <h1>Welcome</h1>
        </form>
    </body>
</html>
