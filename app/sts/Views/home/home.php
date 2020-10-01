<?php
//var_dump($this->dados);
if (!defined('F5A1B2')) {
    header("Location: /");
    die("Erro: Página não encontrada");
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Site Portfólio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#inicio">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicos">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#descricao">Descrição</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contato">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center descr-top" style=" background-image: url('<?php echo URL ?>app/sts/assets/imagens/home_topo/<?php echo $this->dados['topo']['imagem_topo']; ?>')">
    <h2><a name="inicio" class="link"></a></h2>
    <div class="container">
        <h1 class="display-4 mb-4"><?php echo $this->dados['topo']['titulo_topo']; ?></h1>
        <p class="lead mb-4"><?php echo $this->dados['topo']['subtitulo_topo']; ?></p>
        <p>
            <a href="<?php echo $this->dados['topo'] ['link_btn_topo']; ?>" class="btn btn-primary btn-lg"><?php echo $this->dados['topo']['text_btn_topo']; ?></a>
        </p>
    </div>
</div>

<div class="jumbotron servicos">
    <h2><a name="servicos" class="link"></a></h2>
    <div class="container text-center">
        <h2 class="display-4"><?php echo $this->dados['serv'] ['titulo_serv']; ?></h2>
        <p class="lead pb-4"><?php echo $this->dados['serv'] ['subtitulo_serv']; ?></p>
        <div class="row">
            <div class="col-lg-4">
                <div class="rounded-circle circulo centralizar shadow border border-info">
                    <i class="<?php echo $this->dados['serv'] ['icone_um_serv']; ?>"></i>
                </div>
                <h2 class="mt-4 mb-4"><?php echo $this->dados['serv'] ['titulo_um_serv']; ?></h2>
                <p> <?php echo $this->dados['serv'] ['desc_um_serv']; ?></p>
            </div>
            <div class="col-lg-4">
                <div class="rounded-circle circulo centralizar shadow border border-info">
                    <i class="<?php echo $this->dados['serv'] ['icone_dois_serv']; ?>"></i>
                </div>
                <h2 class="mt-4 mb-4"><?php echo $this->dados['serv'] ['titulo_dois_serv']; ?></h2>
                <p><?php echo $this->dados['serv'] ['desc_dois_serv']; ?></p>
            </div>
            <div class="col-lg-4">
                <div class="rounded-circle circulo centralizar shadow border border-info">
                    <i class="<?php echo $this->dados['serv'] ['icone_tres_serv']; ?>"></i>
                </div>
                <h2 class="mt-4 mb-4"><?php echo $this->dados['serv'] ['titulo_tres_serv']; ?></h2>
                <p><?php echo $this->dados['serv'] ['desc_tres_serv']; ?></p>
            </div>
        </div>
    </div>            
</div>

<div class="jumbotron descr-chamada" style="background-image: url('<?php echo URL ?>app/sts/assets/imagens/home_acao/<?php echo $this->dados['acao']['imagem_acao']; ?>')">
    <h2><a name="descricao" class="link"></a></h2>
    <div class="container text-center">
        <h4 class="lead mb-4"><?php echo $this->dados['acao'] ['titulo_acao']; ?></h4>
        <h2 class="display-4 mb-4"><?php echo $this->dados['acao'] ['subtitulo_acao']; ?></h2>
        <p class="lead mb-4"><?php echo $this->dados['acao'] ['desc_acao']; ?></p>
        <a href="<?php echo $this->dados['acao'] ['link_btn_acao']; ?>" class="btn btn-outline-primary btn-lg"><?php echo $this->dados['acao'] ['text_btn_acao']; ?></a>
    </div>
</div>

<div class="jumbotron contato">
    <h2><a name="contato" class="link"></a></h2>
    <div class="container">
        <h2 class="display-4 mb-4 text-center"><?php echo $this->dados['contato'] ['titulo_contato']; ?></h2>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="mt-4 mb-4"><?php echo $this->dados['contato'] ['subtitulo_contato']; ?></h2>
                <p><strong>Localização</strong>: <?php echo $this->dados['contato'] ['end_contato']; ?></p>
                <p><strong>Telefone</strong>: <?php echo $this->dados['contato'] ['tel_contato']; ?></p>
                <p><strong>Email</strong><?php echo $this->dados['contato'] ['email_contato']; ?></p>
            </div>

            <div class="col-lg-6">
                <span class="msg"></span>
                <form method="POST" id="insert_form">

                    <input type="hidden" name="url" id="url" value="<?php echo URL; ?>contato">


                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Seu melhor e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="assunto">Assunto</label>
                        <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Assunto da mensagem" required>
                    </div>
                    <div class="form-group">
                        <label for="conteudo">Conteúdo</label>
                        <textarea name="conteudo" class="form-control" id="conteudo" placeholder="Conteúdo da mensagem" required></textarea>
                    </div>
                    <input type="submit" name="CadMsg" id="CadMsg" value="Enviar" class="btn btn-primary">
                </form>
            </div>                    
        </div>
    </div>
</div>




