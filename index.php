<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 POO</title>
</head>
<body>

<h1>Exercicio 01 POO </h1>
    <?php
        require_once "src/livro.php";

        $livro = new livro;

        $livro->setTitulo("Biblia");
        $livro->setautor("Diversos");
        $livro->setPaginas(942);
    ?>

<table border="1" style="border-collapse: collapse;">
    <thead>
        <tr>
            <th>
                Livro
            </th>
            <th>
                Autor
            </th>
            <th>
                Paginas
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
           <td><?=$livro->getTitulo()?></td>
           <td><?=$livro->getAutor()?></td>
           <td><?=$livro->getPaginas()?></td>
        </tr>
    </tbody>
</table>
</body>
</html>