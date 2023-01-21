@csrf {{-- DIRETIVA SALVAR DADOS NO BANCO --}}

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $user->name ?? old('name') }}">
    <label for="name">E-mail:</label>
    <input type="email" name="email" id="email" value="{{ $user->email ?? old('email') }}">
    <label for="name">Password:</label>
    <input type="password" name="password" id="password" value="{{ $user->password ?? old('password') }}">

    <button type="submit">
        Salvar
    </button>
