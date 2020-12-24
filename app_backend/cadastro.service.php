<?php

class CadastroService {
    private $conexao;
    private $cadastro;

    public function __construct(Conexao $conexao, Cadastro $cadastro){
        $this->conexao = $conexao->conectar();
        $this->cadastro = $cadastro;
    }

    public function inserir() { //create
      $query = 'insert into tb_clientes(
         nome,
         cpf,
         email,
         tel,
         cel,
         empresa,
         cnpj,
         cidade,
         estado,
         end,
         cep,
         complemento
      )values(
        :nome,
        :cpf,
        :email,
        :tel,
        :cel,
        :empresa,
        :cnpj,
        :cidade,
        :estado,
        :end,
        :cep,
        :complemento
      )';
      $stmt = $this->conexao->prepare($query);
      $stmt->bindValue(':nome', $this->cadastro->__get('nome'));
      $stmt->bindValue(':cpf', $this->cadastro->__get('cpf'));  
      $stmt->bindValue(':email', $this->cadastro->__get('email'));  
      $stmt->bindValue(':tel', $this->cadastro->__get('tel'));  
      $stmt->bindValue(':cel', $this->cadastro->__get('cel'));  
      $stmt->bindValue(':empresa', $this->cadastro->__get('empresa'));  
      $stmt->bindValue(':cnpj', $this->cadastro->__get('cnpj'));  
      $stmt->bindValue(':cidade', $this->cadastro->__get('cidade'));  
      $stmt->bindValue(':estado', $this->cadastro->__get('estado'));  
      $stmt->bindValue(':end', $this->cadastro->__get('end'));  
      $stmt->bindValue(':cep', $this->cadastro->__get('cep'));  
      $stmt->bindValue(':complemento', $this->cadastro->__get('complemento'));  
      $stmt->execute();

    }

    public function recuperar() { //read
      $query = 'select * from tb_clientes';
      $stmt = $this->conexao->prepare($query);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function cliente($id) { //read
      $query = 'select * from tb_clientes where id_cliente = '.$id;
      $stmt = $this->conexao->prepare($query);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function atualizar($col) { //update
      $query = "update tb_clientes set $col = ? where id_cliente = ?";
      $stmt = $this->conexao->prepare($query);
      $stmt->bindValue(1, $this->cadastro->__get($col));
      $stmt->bindValue(2, $this->cadastro->__get('id'));
      return $stmt->execute(); 
    }

    public function remover() { //delete

    }    


}

//select nome, cpf, email, tel, cel, empresa, cnpj, cidade, estado, end, cep, complemento, data_cadastro from tb_clientes