<?php

namespace App\sts\Models;
if (!defined('F5A1B2')) {
    header("Location: /");
    die("Erro: Página não encontrada");
}

Use PDO;

/**
 * Description of Conn
 *
 * @author Fabio
 */
class Conn {

    //put your code here
    private $db = "mysql";
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "port";
    private $port = 3306;
    private $connect;

    protected function conectar() {
        try {
            $this->connect = $this->conectar = new PDO($this->db . ':host=' . $this->host .
                    ';port=' . $this->port .
                    ';dbname=' . $this->dbname, $this->user, $this->pass);
            //echo 'conexao';
            return $this->connect;
        } catch (Exception $exc) {
            die("erro: Entre em contato com o Administrador" . $exc);
        }
    }

}
