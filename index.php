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
        require_once "src/Tecnico.php";
        require_once "src/Programacao.php";
        require_once "src/Didatico.php";

        $livro = new livro;

        $livro->setTitulo("Fundamentos html5 e CSS3");
        $livro->setAutor("Maurício Samy Silva");
        $livro->setPaginas(304);

        $formato = new Tecnico;

        $area = new Programacao;
        $area->setArea("Programação");

        $disciplina = new Didatico;
        $nivel = new Didatico;
        $disciplina->setDisciplina("Front-End");

    ?>

<table border="1" style="border-collapse: collapse;">
    <thead>
        <tr>
            <th>Livro</th>
            <th>Autor</th>
            <th>Paginas</th>
            <th>Formato</th>
            <th>Area</th>
            <th>Disciplina</th>
            <th>Nível</th>
        </tr>
    </thead>
    <tbody>
        <tr>
           <td><?=$livro->getTitulo()?></td>
           <td><?=$livro->getAutor()?></td>
           <td><?=$livro->getPaginas()?></td>
           <td><?=$formato->getFormato()[0]?></td>
           <td><?=$area->getArea()?></td>
           <td><?=$disciplina->getDisciplina()?></td>
           <td><?=$nivel->getNivel()[1]?></td>
        </tr>
        <tr>

        </tr>
    </tbody>
</table>
</body>
</html>