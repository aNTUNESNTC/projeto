<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="app/css/estilo.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
          
            <li class="nav-item">
                <a class="nav-link" href="empresa.php">Empresa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="funcionario.php">Funcionario</a>
            </li>

        </ul>
    </nav>

    <section id="esquerda">
        <form action="/empresas/create" method="POST">

            <div class="campo">
                <label for="razaoSocial">Razão Social</label>
                <input type="text" id="razaoSocial" name="razaoSocial" style="width: 20em">
            </div>

            <div class="campo">
                <label for="cnpj">CNPJ</label>
                <input type="text" id="cnpj" name="cnpj" style="width: 20em">
            </div>

            <button class="button button2">Enviar</button>

        </form>
    </section>

    <section id="direita">
        <?php  $empresas = $_SESSION['empresas']; ?>
        <table>
            <tr id="titulo">
                <td>Razão Social</td>
                <td>CNPJ</td>
                <td></td>
                <td></td>
            </tr>
            <?php foreach ($empresas as $empresa){?>
            <tr>
                <td><?php echo $empresa->razaoSocial ?> </td>
                <td><?php echo $empresa->cnpj ?></td>
                <td><a id="links" href="/empresa/edit?id=<?php echo $empresa->id; ?>">Editar</a> </td>
                <td><a id="links" href="/empresa/delete?id=<?php echo $empresa->id; ?>">Excluir</a></td>
            </tr>
            <?php }?>
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