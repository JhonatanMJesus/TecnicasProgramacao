<?php
    require_once "class_pessoa.php";
    require_once "class_aluno.php";
    require_once "class_autor.php";
    require_once "class_editora.php";
    require_once "class_publicacoes.php";
    require_once "class_emprestimo.php";
    require_once "class_genero.php";
    require_once "class_itens.php";
    require_once "class_livro.php";
    require_once "class_revista.php";

    $genero = new Genero("Ciências Sociais", array());
    $editora = new Editora("25.025.0001/01", "Mundo");
    $aluno = new Aluno("1234567", "Jhonatan");
    $autor = new Autor("Brasileiro", "Kieran", array());
    $livro = new Livro("Enfrentando um mundo com desigualdade, passando uma mensagem que trás reflexão sobre como vivemos e em qual lugar estamos.", "1548769302587", array(), array(), "25/05/2023", "Consciência de Classe", $editora);
    $item1 = new Itens("14/10/2024", array($livro));
    $emprestimo = new Emprestimo("07/10/2024", $aluno, array());

    $livro->setAutor($autor);
    $livro->setGenero($genero);
    $autor->setLivro($livro);

    $emprestimo->setItens($item1);


    echo "Gênero(s) do Livro:<br/>";

    foreach ($livro->getGenero() as $genero) {
        echo "{$genero->getDescritivo()}<br/>";
    }
    echo "Titulo: {$livro->getTitulo()}<br/>";
    foreach ($livro->getAutor() as $autor) {
        echo "Nome do(s) autor(es): " . $autor->getNome() . "<br/>";
    }
    echo "Editora: {$livro->getEditora()->getNome()}";

    echo "<h1>Empréstimos</h1>";
    echo "Data do empréstimo: {$emprestimo->getDataEmprestimo()}<br/>";
    echo "Nome do aluno: {$emprestimo->getAluno()->getNome()}<br/>";
    echo "Livros:<br/>";
    foreach ($emprestimo->getItens() as $itens) {
        foreach ($itens->getLivro() as $livros) {
            echo "Editora: {$livros->getEditora()->getNome()}<br/>";
        }
        echo "Data devolução: {$itens->getDataDevolucao()}<br/>";
    }

?>