<?php

class CadastroService {
    private $conexao;
    private $cadastro;

    public function __construct(Conexao $conexao, Cadastro $cadastro){
        $this->conexao = $conexao->conectar();
        $this->cadastro = $cadastro;
    }

    public function inserir() { //create
      
    }

    public function recuperar() { //read

    }

    public function atualizar() { //update

    }

    public function remover() { //delete

    }    


}