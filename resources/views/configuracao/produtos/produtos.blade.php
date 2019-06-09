<!DOCTYPE html>
<html>
<head>
    <title> Laravel </title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h3> Listagem de Produtos </h3>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <td> Nome </td>
                        <td> Valor </td>
                        <td> Descrição </td>
                        <td> Quantidade </td>
                        <td> Ações </td>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($produtos as $produto):?>
                    <tr class="text-center">
                        <td> <?= $produto->nome ?></td>
                        <td> <?= $produto->valor ?></td>
                        <td> <?= $produto->descricao ?></td>
                        <td> <?= $produto->quantidade ?></td>
                        <td>
                            <a href="#"><span class="glyphicon glyphicon glyphicon-menu-hamburger"></span></a>
                            <a href="#"><span class="glyphicon glyphicon glyphicon glyphicon-refresh"></span></a>
                            <a href="#"><span class="glyphicon glyphicon glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
