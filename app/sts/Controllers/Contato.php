<?php

namespace App\sts\Controllers;

if (!defined('F5A1B2')) {
    header("Location: /portfolio");
    die("Erro: Página não encontrada");
}

/**
 * Description of Home
 *
 * @author AMIL
 */
class Contato {

    //put your code here
    public function index() {
       $this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
       $cadMsg = new \App\sts\Models\StsCadMsg();
      
       if($cadMsg->cadMsg($this->dados)){
       
           echo true;
       }else{
           echo false;
       }
       
    }

}
