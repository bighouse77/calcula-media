<?php
    
    $ma1 = $_POST['ma1'];
    $ma2 = $_POST['ma2'];
    $mb1 = $_POST['mb1'];
    $mb2 = $_POST['mb2'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];

    $a1 = ($ma1 * 0.2) + ($mb1 * 0.1) + ($p1 * 0.7);
    $a2 = ($ma2 * 0.2) + ($mb2 * 0.1) + ($p2 * 0.7);

    $media = ($a1 + (2*$a2)) / 3;

    $presenca = $_POST['presenca'];

    if($presenca >= 75 and $media >= 5) {
        $aprovacao = "Aprovado";
    }
    elseif($presenca >= 75 and $media < 5 and $media > 3) {
        $aprovacao = "RE";
    }
    elseif($presenca >= 75 and $media < 3) {
        $aprovacao = "Reprovado poe Nota";
    }
    elseif($presenca < 75) {
        $aprovacao = "Reprovado por Falta";
    }

    $nome = $_POST['nome'];
    $curso = $_POST['faculdade'];

    echo "<b>DADOS DO ALUNO</b><br>";
    echo "<b>Nome: </b>".$nome."<br>";
    echo "<b>Curso: </b>".$curso."<br>";
    echo "<b>Média: </b>".$media."<br>";
    echo "<b>Presença: </b>".$presenca."%"."<br>";
    echo "<b>Situação: </b>".$aprovacao;

?>