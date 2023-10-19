<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 POO</title>
</head>
<body>

<h1>Exercicio 03 </h1>
    <?php
        use Biblioteca\Tecnico;
        use Biblioteca\Didatico;
        use Biblioteca\Programacao;
        use Biblioteca\Web;

        require_once "vendor/autoload.php";

        $livroTecnico = new Tecnico;
        $livroTecnico->setTitulo("Fundamentos html5 e CSS3");
        $livroTecnico->setAutor("Maurício Samy Silva");
        $livroTecnico->setPaginas(304);
        $livroTecnico->setFormato(["Digital"]);

        $area = new Programacao;
        $area->setArea("Programação");

        $disciplina = new Didatico;
        $disciplina->setDisciplina("Front-End");
        
        $nivel = new Didatico;

    ?>

<table border="1" style="border-collapse: collapse; text-align: center;">
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
           
           <td><?=$livroTecnico->getTitulo()?></td>
           <td><?=$livroTecnico->getAutor()?></td>
           <td><?=$livroTecnico->getPaginas()?></td>
           <td><?=$livroTecnico->getFormato()[0]?></td>
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