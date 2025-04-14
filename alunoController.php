<?php
// incluir o arquivo 'aluno.php', que contem a class aluno.
// incluir alunosView.php, que contem a função exibirAluno().

require_once 'aluno.php';
require_once 'alunosView.php';

// declaração da classe alunoController.
// essa classe é responsavel pela comunicação entre o aluno.php (movel) e o alunosView.php (view)

class alunoController {
// criar uma propriedade privada chamada $model.
// ela sera usada para armazenar uma instancia da classe aluno.
private $model;

// criar um metodo constructor da classe, ele é chamado automaticamente quando um objeto for criado.
public function __construct(){
    // criar uma nova instancia da lasse aluno, armazenar na propriedade $model

    $this->model= new Aluno();
}

// metodo publico chamado listar.
// serve para buscar a lista de alunos e passar pra o view.

public function listar(){
    // chama o metodo listarAlunos()do modelo e armazena na variavel $alunos.

    $alunos = $this->model-> listarAlunos();
    // chama função exiber alunos e envia a lista para mostrar no navegador

    exibirAlunos($alunos);
}
}
?>