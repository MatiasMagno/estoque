<!DOCTYPE html>
<html>
<head>
    <title> Laravel </title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="">
            <h3> Listagem de Produtos </h3>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td> Nome </td>
                    <td> Valor </td>
                    <td> Descrição </td>
                    <td> Quantidade </td>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($produtos as $produto):?>
                <tr>
                    <td> <?= $produto->nome ?></td>
                    <td> <?= $produto->valor ?></td>
                    <td> <?= $produto->descricao ?></td>
                    <td> <?= $produto->quantidade ?></td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
