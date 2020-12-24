<?php
    require "../app_backend/cadastro.model.php";
    require "../app_backend/cadastro.service.php";
    require "../app_backend/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'inserir'){
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

    } else if($acao == 'recuperar') {
        $cadastro = new Cadastro();
        $conexao = new Conexao();
        $cadastroService = new CadastroService($conexao, $cadastro);
        $cadastros = $cadastroService->recuperar();  

        $view = isset($_GET['view']) ? $_GET['view'] : $view;
        if($view >= 1){
            $cliente = $cadastroService->cliente($view);
        } else {
            $message = 'Selecione o usuário';
        }
    } else if($acao == 'atualizar'){

        $field = $_GET['col']; 
        $col = strtolower($field);
        $id = $_POST['id'];

        $cadastro = new Cadastro();
        $cadastro->__set('id', $id)->__set($col, $_POST["$field"]);  
        $conexao = new Conexao();  
        $cadastroService = new CadastroService($conexao, $cadastro);

        if($cadastroService->atualizar($col)){
            header("location: clientes.php?view=$id&update=1");
        }
     
    } else if($acao == 'remover'){

        $cadastro = new Cadastro();
        $cadastro->__set('id', $_GET['id']);  
        $conexao = new Conexao();  
        $cadastroService = new CadastroService($conexao, $cadastro);
        $cadastroService->remover();

        header("location: clientes.php?update=2");

    }

?>