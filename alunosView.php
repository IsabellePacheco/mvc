<?php
// declara uma função chama exibirAlunos que recebe o parametro (parenteses) $alunos
// esse parametro é esperado com um array com informações dos alunos.

function exibirAlunos($alunos){
    // imprime da tela um titulo h2 e abra uma lista ordenada ul.

    echo "<h2> Lista de Alunos:</h2> <ul>";

    // inicia um loop foreach, que percorre cada item do array $alunod.
    // cada item e armazenado tempoariamente na variavel $aluno

    foreach ($alunos as $aluno){
    // para cada aluno, imprime um item da lista (li)
    // exibe o numero e idade do aluno, formatados como "Nome - Idade anos".
    
    echo "<li> {$aluno['nome']} - {$aluno['idade']} anos </li>";
    }

    echo "</ul>";

}
?>