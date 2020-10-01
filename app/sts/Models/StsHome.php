<?php

namespace App\sts\Models;
if (!defined('F5A1B2')) {
    header("Location: /");
    die("Erro: Página não encontrada");
}

/**
 * Description of Sts
 *
 * @author Fabio
 */
class StsHome extends Conn {

    //put your code here
    private $conn;
    private $dados;

    public function index() {

        $this->conn = $this->conectar();
        //echo "Models<br>"
        $this->viewTopo();
        $this->viewServ();
        $this->viewAcao();
        $this->viewContato();
        $this->viewFooter();
        //var_dump($this->dados);
        return $this->dados;
    }

    private function viewTopo() {
        $query_home_topo = "SELECT titulo_topo, subtitulo_topo, text_btn_topo, link_btn_topo, imagem_topo From homes_topos LIMIT 1";
        $result_home_topo = $this->conn->prepare($query_home_topo);
        $result_home_topo->execute();
        $this->dados['topo'] = $result_home_topo->fetch();
    }

    private function viewServ() {
        $query_home_serv = "SELECT titulo_serv, subtitulo_serv, icone_um_serv, titulo_um_serv, desc_um_serv, icone_dois_serv, titulo_dois_serv, desc_dois_serv, icone_tres_serv, titulo_tres_serv, desc_tres_serv From homes_servicos LIMIT 1";
        $result_home_serv = $this->conn->prepare($query_home_serv);
        $result_home_serv->execute();
        $this->dados['serv'] = $result_home_serv->fetch();
    }
     private function viewAcao() {
        $query_home_acao= "SELECT titulo_acao, subtitulo_acao, desc_acao, text_btn_acao, link_btn_acao,imagem_acao From homes_acoes LIMIT 1";
        $result_home_acao = $this->conn->prepare($query_home_acao);
        $result_home_acao->execute();
        $this->dados['acao'] = $result_home_acao->fetch();
    }
     private function viewContato() {
        $query_home_contato = "SELECT titulo_contato, subtitulo_contato,end_contato, tel_contato, email_contato From homes_contatos LIMIT 1";
        $result_home_contato = $this->conn->prepare($query_home_contato);
        $result_home_contato->execute();
        $this->dados['contato'] = $result_home_contato->fetch();
    }
     private function viewFooter() {
        $query_home_footer = "SELECT titulo_pg, titulo_contato, txt_telefone,link_telefone,txt_end,link_end,txt_cnpj, link_cnpj, titulo_rede_soc, txt_um_rede_soc, link_um_rede_soc,txt_dois_rede_soc, link_dois_rede_soc, txt_tres_rede_soc,link_tres_rede_soc, txt_quatro_rede_soc,link_quatro_rede_soc From footers LIMIT 1";
        $result_home_footer = $this->conn->prepare($query_home_footer);
        $result_home_footer->execute();
        $this->dados['footer'] = $result_home_footer->fetch();
    }

}
