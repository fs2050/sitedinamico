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
class Home {
    //put your code here
    public function index(){
    $viewHome = new \App\sts\Models\StsHome();
    $this->dados = $viewHome->index();
    //var_dump($this->dados);
    $carregarView = new \Core\ConfigView("sts/Views/home/home", $this->dados);
    $carregarView->renderizar();
    
    
    }
}
