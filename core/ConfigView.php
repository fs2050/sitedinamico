<?php

namespace Core;

if (!defined('F5A1B2')) {
    header("Location: /");
    die("Erro: Página não encontrada");
}

/**
 * Description of ConfigView
 *
 * @author Fabio
 */
class ConfigView {

    //put your code here
    private $nome;
    private $dados;

    public function __construct($nome, array $dados) {
        $this->nome = $nome;
        $this->dados = $dados;
    }

    public function renderizar() {
        if (file_exists('app/' . $this->nome . '.php')) {
            include 'app/sts/Views/include/libHead.php';
            include 'app/' . $this->nome . '.php';
            include 'app/sts/Views/include/footer.php';
            include 'app/sts/Views/include/libFooter.php';
        } else {
            echo 'Erro ao carregar página';
            echo "Erro ao carregar view: {$this->nome}<br>";
        }
    }

}
