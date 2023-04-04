<h1>Nova Dúvida</h1>

<form action="{{ route('supports.store') }}" method="post">
    @csrf
    <input type="text" class="text" placeholder="Assunto" name="subject">
    <textarea name="body" id="" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>
