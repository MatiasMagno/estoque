<!DOCTYPE html>
<html>
<head>
    <title> Laravel </title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h3> Listagem de Categorias </h3>
        <hr>
        <table class="table table-striped">
            <thead>
            <tr class="text-center">
                <td> Nome </td>
                <td> Ações </td>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($categorias as $categoria):?>
            <tr class="text-center">
                <td> <?= $categoria->nome ?></td>
                <td>
                    <a href="categorias/show"><span class="glyphicon glyphicon glyphicon-menu-hamburger"></span></a>
                    <a href="categorias/edit"><span class="glyphicon glyphicon glyphicon glyphicon-refresh"></span></a>
                    <a href="categorias/delete"><span class="glyphicon glyphicon glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
