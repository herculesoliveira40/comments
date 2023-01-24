@csrf {{-- DIRETIVA SALVAR DADOS NO BANCO --}}

    <label for="name">description:</label>
    <input type="text" name="description" id="description" value="{{ $comment->description ?? old('description') }}" required>
    <label for="visible">
        <input type="checkbox" name="visible" id="visible"
        @if (isset($comment) && $comment->visible) checked = "checked"  @endif 
        {{--@checked(old('visible', $comment->visible))--}}
        > Visivel 
        
    </label>

    <button type="submit">
        Salvar
    </button>
