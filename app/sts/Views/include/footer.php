<?php
//var_dump($this->dados);
if (!defined('F5A1B2')) {
    header("Location: /");
    die("Erro: Página não encontrada");
}
?>


<div class="jumbotron rodape">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4">
                <h5><?php echo $this->dados['footer'] ['titulo_pg']; ?></h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#inicio" class="link-rodape">Home</a>
                    </li>
                    <li>
                        <a href="#servicos" class="link-rodape">Serviço</a>
                    </li>
                    <li>
                        <a href="#descricao" class="link-rodape">Descrição</a>
                    </li>
                    <li>
                        <a href="#contato" class="link-rodape">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <h5><?php echo $this->dados['footer'] ['titulo_contato']; ?></h5>
                <ul class="list-unstyled">

                    <li>
                        <a href="#contato" class="link-rodape"><?php echo $this->dados['footer'] ['link_telefone']; ?></a>
                    </li>
                    <li>
                        <a href="#contato" class="link-rodape"><?php echo $this->dados['footer'] ['txt_end']; ?></a>
                    </li>
                    <li>
                        <a href="#contato" class="link-rodape">CNPJ:<?php echo $this->dados['footer'] ['txt_cnpj']; ?></a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-sm-12 col-md-4">
                <h5><?php echo $this->dados['footer'] ['titulo_rede_soc']; ?></h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?php echo $this->dados['footer'] ['link_um_rede_soc']; ?>" target="_blank" class="link-rodape"><?php echo $this->dados['footer'] ['txt_um_rede_soc']; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo $this->dados['footer'] ['link_dois_rede_soc']; ?>" target="_blank" class="link-rodape"><?php echo $this->dados['footer'] ['txt_dois_rede_soc']; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo $this->dados['footer'] ['link_tres_rede_soc']; ?>" target="_blank" class="link-rodape"><?php echo $this->dados['footer'] ['txt_tres_rede_soc']; ?></a> 
                    </li>
                    <li>
                        <a href="<?php echo $this->dados['footer'] ['link_quatro_rede_soc']; ?>" target="_blank" class="link-rodape"><?php echo $this->dados['footer'] ['txt_quatro_rede_soc']; ?></a> 
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



