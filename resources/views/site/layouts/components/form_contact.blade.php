{{$slot}}

<form action="{{ route('site.contact.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome" class="{{$bord}}">
    <br>
    <input type="text" name="phone" placeholder="Telefone" class="{{$bord}}">
    <br>
    <input type="email" name="email" placeholder="E-mail" class="{{$bord}}">
    <br>
    <select name="reason contact" class="{{$bord}}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="message" class="{{$bord}}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{$bord}}">ENVIAR</button>
</form>
