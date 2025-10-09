<h2>Editar contacto</h2>

<form action="{{ route('contacts.update', $contacto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $contacto->name }}" required>
    <input type="text" name="phone" value="{{ $contacto->phone }}">
    <input type="email" name="email" value="{{ $contacto->email }}" required>
    <button type="submit">Actualizar</button>
</form>