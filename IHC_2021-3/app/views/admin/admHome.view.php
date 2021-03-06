<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home ADM || Sistema de Apoio à Coleta e Analíse de Avaliações dos Cursos de Graduação da UFJF</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/1e335b449c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../../public/CSS/home.css">
    </head>

    <body>
        <div class="main">
            <?php require('adm-navbar.view.php') ?>
            <div class="miniatura">
                
                <div class="cartao" style="width: 18rem;">
                    <a href="/disciplina">
                        <img class="card-img-top" src="../../../public/img/disciplinas.png" alt="Imagem de diversas disciplinas">
                        <div class="card-body">
                            <p class="card-text">Disciplinas Cadastradas</p>
                        </div>
                    </a>
                </div>
    
                <div class="cartao" style="width: 18rem;">
                    <a href="/graficos">
                        <img class="card-img-top" src="../../../public/img/grafico.png" alt="Imagem de vários usuários">
                        <div class="card-body">
                            <p class="card-text">Graficos</p>
                        </div>
                    </a>
                </div>

                <div class="cartao" style="width: 18rem;">
                    <a href="/tabelaCursos">
                        <img class="card-img-top" src="../../../public/img/tabela.png" alt="Imagem de uma tabela">
                        <div class="card-body">
                            <p class="card-text">Tabelas por Curso</p>
                        </div>
                    </a>
                </div>

                <div class="cartao" style="width: 18rem;">
                    <a href="/gerarRelatorio">
                        <img class="card-img-top" src="../../../public/img/relatorio.png" alt="Imagem de um relatório">
                        <div class="card-body">
                            <p class="card-text">Relatórios de Médias</p>
                        </div>
                    </a>
                </div>
                
                <div class="cartao" style="width: 18rem;">
                    <a href="/graficoCurso">
                        <img class="card-img-top" src="../../public/img/grafico_curso.png" alt="Imagem de uma moça com lápis e papel com fundo azul">
                        <div class="card-body">
                            <p class="card-text">Gráficos por Curso</p>
                        </div>
                    </a>
                </div>

                <div class="cartao" style="width: 18rem;">
                    <a href="/listaCursos">
                        <img class="card-img-top" src="../../public/img/lista.jpg" alt="Imagem de uma moça com lápis e papel com fundo azul">
                        <div class="card-body">
                            <p class="card-text">Listas de Curso</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>