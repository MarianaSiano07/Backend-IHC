<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Avaliação </title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/1e335b449c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../../public/CSS/avaliacao.css">
    </head>
    <body>

        <?php require('navbar.view.php')?>
        <div class="container bg-white">
            <form action="">
                <fieldset >
                    <h2 class="text-center">Formulário de Avaliação</h2>
                    <ul class="main">
                        <li class="box">
                            <p>O professor disponibilizou o plano de curso da disciplina na primeira semana de aula?</p>
                            <ul class="list-inline">
                                <li class="item_1"><input type="radio" name="A" value="sim">Sim</li>
                                <li class="item_1"><input type="radio" name="A" value="nao">Não</li>
                            </ul>
                        </li><!-- /.box-->
                        <li class="box">
                            <p>O professor é pontual?</p>
                            <ul class="list-inline">
                                <li class="list-inline-item ">Baixo - 1</li>
                                <li class="list-inline-item "><input type="radio" name="A" value="1"></li>
                                <li class="list-inline-item "><input type="radio" name="A" value="2"></li>
                                <li class="list-inline-item "><input type="radio" name="A" value="3"></li>
                                <li class="list-inline-item "><input type="radio" name="A" value="4"></li>
                                <li class="list-inline-item "><input type="radio" name="A" value="5"></li>
                                <li class="list-inline-item "> 5 - Alto</li>
                            </ul><!-- /.box-->
                        </li>
                    </ul><!-- /.main -->
                    <div class="buttons">
                        <a class="btn btn-danger" href="./navbar.html">Cancelar</a>
                        <input type="submit" class="btn-primary btn" value="Terminar avaliação e enviar">
                    </div>
                </fieldset>
            </form>
        </div><!-- /.container -->
     
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>