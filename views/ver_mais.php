<?php
require('../db/fake_db.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Mapa</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
            <nav class="header-nav">
                <img src="../img/logo2.png"  class="header-logo" alt="logo" title="logo">
                <ul class="nav-list">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../index.php?#historia">Conheça a Dona Rita</a></li>
                    <li><a href="../index.php?#contato">Contato</a></li>
                </ul>
            </nav>
    </header>
    <main>
        <article>
            <?php
                $existe_marmita = false;
                $foto_marmita;
                $nome_marmita;
                $preco_marmita;
                $tamanhos_marmita;
                $ingredientes_marmita;
                if(isset($_GET['id']) && !empty($_GET['id'])){
                    $id = $_GET['id'];
                    foreach($marmitas as $key => $value){
                        if($id == $value['id']){
                            $existe_marmita = true;
                            $foto_marmita = $value['nome_imagem'];
                            $nome_marmita = $value['nome'];
                            $preco_marmita = $value['preço'];
                            $tamanhos_marmita = $value['tamanho'];
                            $ingredientes_marmita = $value['ingredientes'];
                        }
                    }
                }   
            ?>
            <?php if($existe_marmita == true) : ?>
                <div class="card-container">
                    <div class="card-produto">
                        <div class="card-img">
                            <img src="../img/<?=$foto_marmita?>" alt="foto marmita" title="foto marmita">
                        </div>
                        <div class="card-info">
                            <h1><?= $nome_marmita ?></h1>
                            <h2>Informações:</h2>
                            <p>Preço: <?= $preco_marmita ?>R$</p>

                            <?php 

                                $tamanhos = count($tamanhos_marmita);
                                $tam = '';
                                for($i=0; $i < $tamanhos; $i++) {
                                    if($i == $tamanhos-1){
                                        $tam .= $tamanhos_marmita[$i];
                                    } else {
                                        $tam .= $tamanhos_marmita[$i].', ';
                                    }
                                }

                            ?>

                            <p>Tamanho(s): <?= $tam?></p>
                            <p>Ingredientes: <br/><?= $ingredientes_marmita ?></p>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <?= header('Location: /Atividades-facul/atividade_mapa/views/404.php');?>
            <?php endif; ?>
        </article>
    </main>
</body>
</html>