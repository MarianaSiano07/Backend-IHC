<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Gerar Relatório || Sistema de Apoio à Coleta e Analíse de Avaliações dos Cursos de Graduação da UFJF</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/1e335b449c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../../public/CSS/gerarRelatorio.css">
    </head>

    <body>

        <!-- breadcrumb e busca -->

        <section class="header-main border-bottom">
            <div class="container-fluid">
              <div class="row p-2 pt-3 pb-3 d-flex align-items-center">

                    <div class="col-md-4">
                        <nav aria-label="Breadcrumb navigation" role="navigation">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ADM Gerar Relatório</li>
                            </ol>
                        </nav>
                    </div>
        
                    <div class="col-md-8">
                        <div class="d-flex form-inputs"> <input class="form-control" type="text" placeholder="Digite o nome do curso"> <i class="bx bx-search"></i> </div>
                    </div>
    
              </div>
            </div>
        </section>
        
        <!-- Fim do breadcrumb e busca -->

        <div class="container text-center table-responsive">
            <h4 class="legend">Médias dos resultados das avaliações discentes</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Curso</td>
                        <td>A</td>
                        <td>B</td>
                        <td>C</td>
                        <td>D</td>
                        <td>E</td>
                        <td>F</td>
                        <td>G</td>
                        <td>H</td>
                        <td>I</td>
                        <td>J</td>
                        <td>K</td>
                        <td>L</td>
                        <td>M</td>
                    </tr>
                </thead>
                <tr>
                    <td>D1</td>
                    <td>SI</td>
                    <td>Sim</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>5</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>D1</td>
                    <td>CC-N</td>
                    <td>Sim</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>5</td>
                    <td>4</td>
                </tr>
                <tr class = "divider"></tr>
                    <td>Média</td>
                    <td class="text-danger font-weight-bold">Com Outlier D2</td> 
                    <td>Sim</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>5</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Média</td>
                    <td class="text-danger font-weight-bold">Com Outlier D2%</td> 
                    <td>Sim</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>5</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Média</td>
                    <td class="text-primary font-weight-bold">Sem Outlier D2</td> 
                    <td>Sim</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>5</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Média</td>
                    <td class="text-primary font-weight-bold">Sem Outlier D2%</td> 
                    <td>Sim</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>5</td>
                    <td>4</td>
                </tr>
        
            </table>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>