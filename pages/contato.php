<div class="container">
    <form action="?page=enviar" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="nome" name="nome" class="form-control" id="nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="assunto">Assunto</label>
            <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Assunto">
        </div>
        <div class="form-group">
            <label for="msg">Mensagem</label>
            <textarea class="form-control" name="msg" id="msg"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
</div>