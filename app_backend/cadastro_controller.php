<?php
    require "../app_backend/cadastro.model.php";
    require "../app_backend/cadastro.service.php";
    require "../app_backend/conexao.php";

    $cadastro = new Cadastro();
    $cadastro->__set('nome', $_POST['nome']);
    $cadastro->__set('cpf', $_POST['cpf']);
    $cadastro->__set('email', $_POST['email']);
    $cadastro->__set('tel', $_POST['tel']);
    $cadastro->__set('cel', $_POST['cel']);
    $cadastro->__set('empresa', $_POST['empresa']);
    $cadastro->__set('cnpj', $_POST['cnpj']);
    $cadastro->__set('cidade', $_POST['cidade']);
    $cadastro->__set('estado', $_POST['estado']);
    $cadastro->__set('end', $_POST['end']);
    $cadastro->__set('cep', $_POST['cep']);
    $cadastro->__set('complemento', $_POST['complemento']);

    $conexao = new Conexao();

    $cadastroService = new CadastroService($conexao, $cadastro);
    $cadastroService->inserir(); 

    header('Location: cadastro_clientes.php?inclusao=1');


/*     echo '<pre>';
    print_r($cadastroService);
    echo '<pre>'; */

?>