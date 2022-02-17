<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Contato</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/1e335b449c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../../public/CSS/contato.css">
    </head>

    <body>
        <div class="instrucoes">
            <h1>Contato</h1>
            <p>Como entrar em contato com a nossa equipe? Preencha os campos seguintes, sua resposta chegará antes do que você imagina!</p>
            <p>Fique tranquilo, suas informações estão seguras!</p>
        </div>

        <div class="entrar-contato">
            <form action="/contato/disparar" method="post">
                <div class="form-floating">
                    <textarea name="nome" class="form-control" placeholder="Nome" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Nome</label>
                </div>
    
                <div class="form-floating">
                    <textarea name="email" class="form-control" placeholder="Email" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">E-mail</label>
                </div>
    
                <div class="form-floating">
                    <textarea name="assunto" class="form-control" placeholder="Assunto" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Assunto</label>
                </div>
    
                <div class="form-floating">
                    <textarea name="mensagem" class="form-control" placeholder="Mensagem" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Mensagem</label>
                </div>
    
                <div class="form-floating">
                    <textarea name="telefone" class="form-control" placeholder="Telefone" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Telefone</label>
                </div>
                <div class="msg-status">
                    <p id="status"></p>
                </div>
                <button class="btn btn-warning btn-call-to-action" type="submit">Enviar</button>
            </form>
        </div>

        <br>
        <br>

        <div class="telefone">
            <h4>Telefone para contato (CAED - Unidade Dom Oriore):</h4>
            <p>(32)4009-9300</p>
            
            <br>

            <h4>Unidade Espírito Santo: </h4>
            <p>(32)4009-9750</p>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>