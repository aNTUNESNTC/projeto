<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link">Logo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cadastrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </nav>

    <section id="esquerda">
        <form action="projeto" method="POST">

            <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" style="width: 20em">
            </div>

            <div class="campo">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" style="width: 20em">
            </div>

            <div class="campo">
                <label for="dataNascimento">Data de Nascimento</label>
                <input type="date" id="dataNascimento" name="dataNascimento" style="width: 15em">
            </div>

            <div class="campo">
                <label for="dhGravacao">Data e Hora Gravação</label>
                <input type="datetime-local" value="<?php echo date('Y-m-d\TH:i'); ?>" id="dhGravacao" name="dhGravacao"
                    style="width: 15em">
            </div>
            <button class="button button2">Enviar</button>

        </form>
    </section>

    <section id="direita">
        <table>
            <tr id="titulo">
                <td>Nome</td>
                <td>CPF</td>
                <td>Data de Nascimento</td>
                <td>Data e Hora Gravação</td>
                <td></td>
            </tr>
            <tr>
                <td>adadad</td>  
                <td>dsdsdsds</td>
                <td>sdsdsd</td>
                <td>dsdsdsds</td>
                <td><a id="links" href="">Editar</a> <a id="links" href="">Excluir</a> </td>
            </tr>
        </table>

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>