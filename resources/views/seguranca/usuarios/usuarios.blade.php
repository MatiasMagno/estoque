<!DOCTYPE html>
<html>
<head>
    <title> Laravel </title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h3> Listagem de Usuários </h3>
        <hr>
        <table class="table table-striped">
            <thead>
            <tr class="text-center">
                <td>Nome</td>
                <td>E-Mail</td>
                <td>Ações</td>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($usuarios as $usuario):?>
            <tr class="text-center">
                <td> <?= $usuario->nome ?></td>
                <td> <?= $usuario->email ?></td>
                <td>
                    <a href="usuarios/show"><span class="glyphicon glyphicon glyphicon-menu-hamburger"></span></a>
                    <a href="usuarios/edit"><span class="glyphicon glyphicon glyphicon glyphicon-refresh"></span></a>
                    <a href="usuarios/delete"><span class="glyphicon glyphicon glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
