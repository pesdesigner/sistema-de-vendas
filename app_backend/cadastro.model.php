<?php
    class Cadastro {
        private $id_cliente;
        private $nome;
        private $cpf;
        private $email;
        private $tel;
        private $cel;
        private $empresa;
        private $cnpj;
        private $cidade;
        private $estado;
        private $end;
        private $cep;
        private $complemento;
        private $data_cadastro;

        public function __get($atributo){
            return $this->$atributo;
        }
    
        public function __set($atributo, $valor){
            $this->$atributo = $valor;
            return $this;
        }       

    }

?>