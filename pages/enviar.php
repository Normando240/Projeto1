<div class="container">

    <?php
    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['assunto']) && !empty($_POST['msg'])):
        echo "<p class='alert alert-success'>Mensagem enviada com sucesso!!</p>";
        echo "                
                <ul>
                    <li>Nome: {$_POST['nome']}</li>
                    <li>Email: {$_POST['email']}</li>
                    <li>Assunto: {$_POST['assunto']}</li>
                    <li>Mensagem: {$_POST['msg']}</li>
                </ul>
                ";
    else:
        echo "<p class='alert alert-danger'>Error ao enviar mensagem!! Todos os campos são obrigatórios</p>";
    endif;
    ?>

    <p></p>
</div>