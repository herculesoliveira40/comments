@csrf {{-- DIRETIVA SALVAR DADOS NO BANCO --}}

    <label for="name">description:</label>
    <input type="text" name="description" id="description" value="{{ $comment->description ?? old('description') }}">
    <label for="visible">
        <input type="checkbox" name="visible"> Visivel 
    </label>

    <button type="submit">
        Salvar
    </button>
