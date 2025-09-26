<?php
    require 'conexao.php';
    $titulo = $_POST['titulo'];
    $genero =  $_POST['genero'];
    $autor =  $_POST['autor'];
    $ano =  $_POST['ano'];
    $paginas =  $_POST['paginas'];

    $sql = "INSERT INTO livros (titulo, genero, autor, ano, paginas) VALUES (:titulo, :genero, :autor,  :ano,  :paginas)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':paginas', $paginas);




 if ($stmt->execute()) {
    echo "<script>alert('Livro inserido com sucesso!'); history.back();</script>";
} else {
    echo  "<script>alert('Erro ao inserir livro'); history.back();</script>";
}
return

?>


