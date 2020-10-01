<?php

namespace Core;

//var_dump($this->dados);
if (!defined('F5A1B2')) {
    header("Location: /");
    die("Erro: Página não encontrada");
}

/**
 * Description of ConfigController
 *
 * @author Fabio
 */
class ConfigController {

    private $url;

    public function __construct() {
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
        } else {
            $this->url = "home";
        }
    }

    public function carregar() {
        $this->config();
        $urlController = \ucwords($this->url);
        $classe = "\\App\\sts\\Controllers\\" . $urlController;
        $classeCarregar = new $classe;
        $classeCarregar->index();
    }

    private function config() {
        define('URL', 'http://localhost:8080/portfolio/');
    }

}
