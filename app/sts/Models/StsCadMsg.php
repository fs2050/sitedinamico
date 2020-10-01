<?php

namespace App\sts\Models;
use PDO;

/**
 * Description of StscadMsg
 *
 * @author AMIL
 */
class StsCadMsg extends Conn {

    //put your code here
    private $conn;
    private $dados;

    public function cadMsg($dados) {
        $this->dados = $dados;
        $this->conn = $this->conectar();
      $query_msg = "INSERT INTO msgs_contatos
        (nome, email, assunto, conteudo, created) VALUES
                (:nome, :email, :assunto, :conteudo, NOW())";
      $creat_msg = $this->conn->prepare($query_msg);
      $creat_msg->bindParam(':nome', $this->dados['nome'], PDO::PARAM_STR);
      $creat_msg->bindParam(':email', $this->dados['email'], PDO::PARAM_STR);
      $creat_msg->bindParam(':assunto', $this->dados['assunto'], PDO::PARAM_STR);
      $creat_msg->bindParam(':conteudo', $this->dados['conteudo'], PDO::PARAM_STR);
      
      $creat_msg->execute();
      if($creat_msg->rowCount()){
          return true;
      }else{
          return false;
      }
      
    }

}
