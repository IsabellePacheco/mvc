<?php


class Aluno {


    private $alunos =[
        ['nome' => 'Maria', 'idade' => 19],
        ['nome' => 'João', 'idade' => 29],
        ['nome' => 'Melissa', 'idade' => 9]
    ];

    public function listarAlunos(){
        return $this ->alunos;
    }
}
?>