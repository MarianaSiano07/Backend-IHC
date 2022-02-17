<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ADM Tabela de Cursos || Sistema de Apoio à Coleta e Analíse de Avaliações dos Cursos de Graduação da UFJF</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="../../../public/CSS/disciplina.css">
      <link rel="stylesheet" href="../../../public/CSS/tabelaCursos.css">

  </head>
  <body>

    <!-- navbar -->

    <!-- corpo da página -->

      <!-- breadcrumb e busca -->

      <section class="header-main border-bottom">
        <div class="container-fluid">
          <div class="row p-2 pt-3 pb-3 d-flex align-items-center">
            
            <div class="col-md-4">
              <nav aria-label="Breadcrumb navigation" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./admHome.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Gráfico de Avaliação por Curso</li>
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
      <h4 class="legend text-center">Resultados das avaliações discentes Ciência da Computação-Diurno</h4>
      <div class="container text-center table-responsive">
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
                <td class="font-weight-bold">D1</td>
                <td>CC-D</td>
                <td>4</td>
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
                <td class="font-weight-bold">D2</td>
                <td>CC-D</td>
                <td>4</td>
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
                <td class="font-weight-bold">D3</td>
                <td>CC-D</td>
                <td>5</td>
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
                <td class="font-weight-bold" colspan="2">Média</td>
                <td>4.63</td>
                <td>4.63</td>
                <td>4.9</td>
                <td>5</td>
                <td>4.63</td>
                <td>4.73</td>
                <td>9.91</td>
                <td>4.36</td>
                <td>4</td>
                <td>4.82</td>
                <td>4.82</td>
                <td>4.45</td>
                <td>4.64</td>
            </tr>
            <tr class="font-weight-bold">
                <td colspan="2">Média</td>
                <td>100%</td>
                <td>96%</td>
                <td>98%</td>
                <td>100%</td>
                <td>100%</td>
                <td>98%</td>
                <td>84%</td>
                <td>94%</td>
                <td>95.6%</td>
                <td>100%</td>
                <td>98%</td>
                <td>94%</td>
                <td>96%</td>
            </tr>
        </table>
        <!-- Fim da Tabela de Disciplinas -->
      </div>
      <div class="mt-5 mb-5 text-center">
          <a href="./admHome.html" class="btn btn-outline-info">Terminar</a>
      </div>
    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>