<?php
// defina classe chamada aluno

class Aluno {
    // criar uma propriedade privada (encapsulamento) chamada $alunos
    // essa propriedade é um array que armazena dados de alunos.
    // cada aluno é representado por array associativo com nome e idade.

    private $alunos =[
        ['nome' => 'Maria', 'idade' => 19],
        ['nome' => 'João', 'idade' => 29],
        ['nome' => 'Melissa', 'idade' => 9]
    ];

    // define um metodo publico chamado listarAlunos.
    // esse metodo serve para listar "retornar" o conteudo do array $alunos
    public function listarAlunos(){
        return $this ->alunos;
    }








}
?>