<?php
    require("./db/fake_db.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <title>Atividade Mapa</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<script src="./js/app.js"></script>
<body>
    <header>
        <nav class="header-nav">
            <img src="./img/logo2.png"  class="header-logo" alt="logo" title="logo">
            <ul class="nav-list">
                <li><a href="#">Home</a></li>
                <li><a href="#historia">Conheça a Dona Rita</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
        <div class="banner">
            <img src="./img/banner.jpg" alt="banner" title="banner">
            <div class="banner-info">
                <h1 class='titulo-banner'>VENHA CONHECER A CASA DA DONA RITA <br/>E ESCOLHA SUA MARMITA!!!</h1>
                <a class="banner-btn" href="#marmitas">Saiba mais</a>
            </div>
            <!-- <button class="banner-btn"></button> -->
        </div>
    </header>

    <main>
        <section id="marmitas">
            <article class="cardapio">
                <div class="header-marmita">
                    <h1>Confira nossas marmitas</h1>
                    <p>Aqui você encontra o nosso cardápio das marmitas</p>
                    <hr class="hr-cab">
                </div>

                <div class="cards">
                    <!-- Aqui vou renderizar as marmitas -->
                    <div class='card'>
                    <?php
                        foreach($marmitas as $marmita){
                            $id = $marmita["id"];
                            $img_marmita = $marmita["nome_imagem"];
                            $titulo_imagem_marmita = $marmita["titulo_imagem"];
                            $alt_imagem_marmita = $marmita["alt_imagem"];
                            $nome_marmita = $marmita["nome"];
                            $preco_marmita = $marmita["preço"];
                            $tamanho = $marmita["tamanho"];
                            echo "
                            <div class='card-marmita'>
                                <div class='box'>
                                    <form action='./views/ver_mais.php?id=$id' method='POST'>
                                        <a href='/Atividades-facul/atividade_mapa/views/ver_mais.php?id=$id'><img src='./img/$img_marmita' alt='$alt_imagem_marmita' title='$titulo_imagem_marmita' height='150' /></a>
                                        <hr/>
                                        <h1 value='nome'>$nome_marmita</h1>
                                        <p>Clique em ver mais, para mais informações</p>
                                        <button type='submit' class='card-marmita-btn'>Ver mais</button>
                                    
                                    </form>
                                </div>
                            </div>
                            ";
                        }
                    ?>
                    </div>
                </div>
            </article>
        </section>


        <section id="historia">
            <div class="sobre">
                <h1>Conheça a Dona Rita</h1>
                <p>Veja quem é essa mulher batalhadora.</p>
                <hr class="hr-cab">
                <div class="sobre-img">
                    <!-- OBS: IMAGENS PEGAS NA INTERNET, O TRABALHO É ACADÊMICO E NÃO SERÁ POSTADO NA WEB. -->
                    <img src="./img/dona-rita3.jpg" class="img1" alt="Dona Rita" width="300" height="250">
                    <img src="./img/dona-rita.jpg" class="img2" alt="Dona Rita" title="Dona Rita" width="400">
                    <img src="./img/dona-rita2.jpg" class="img3" alt="Dona Rita" width="300" height="250">
                </div>
                <div class="sobre-texto">
                    <h2>Um pouco sobre sua história</h2>
                    <p>Dona Rita, mulher guerreira, viúva a 15 anos, nunca deixou faltar o leite e o pão para suas crianças, contudo está passando por muitas dificuldades financeiras para alimentar sua família. Dona Rita, faz marmitas variadas e vende de porta em porta com a ajuda de seus filhos na cidade de Palmas no interior do Paraná.</p>
                </div>
            </div>
        </section>
    </main>

    <script src="./js/mobile-navbar.js"></script>

    <footer>
        <div class="footer-title">
            <h1>Quer saber mais?</h1>
        </div>
        <div class="info">
            <div class="saiba-mais">
                <h2>Nossas páginas</h2>
                <nav class="nossas-paginas">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#historia">Conheça a Dora Rita</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
            <div class="links-uteis">
                <h2>Links Úteis</h2>
                <nav>
                    <ul>
                        <li><a href="#">Política de Privacidade</a></li>
                        <li><a href="#">Aviso Legal</a></li>
                        <li><a href="#">Termos de Uso</a></li>
                    </ul>
                </nav>
            </div>
            <div class="sobre">
                <h2>Sobre o projeto</h2>
                <p>
                    Projeto de Divulgação das marmitas da Dona Rita!
                </p>
            </div>
            <div class="contato">
                <h2 id="contato">Contato</h2>
                <ul>
                    <li>Telefone Fixo: (44) 32999-99</li>
                    <li>Telefone Móvel: (44) 99999-99</li>
                    <li>E-mail: donarita@gmail.com</li>
                    <li>Endereço: Rua da paz, 671</li>
                </ul>
            </div>
        </div>
        <div class="creditos">
            <p>Desenvolvido por <a href="https://github.com/eubrunodev" target="_blank">eubrunodev</a> &copy; 2022</p>
        </div>
    </footer>
</body>
</html>