<?php
require_once("../lib/raelgc/view/Template.php");

use raelgc\view\Template;

$tpl = new Template("index.html");

$tpl->addFile("TOPO", "../includes/topo.html");
$tpl->addFile("RODAPE", "../includes/rodape.html");

$alunos = [
    [
        'id' => 1,
        'nome' => 'Ana Silva',
        'nota1' => 8.5,
        'nota2' => 7.2,
        'media' => 7.85
    ],
    [
        'id' => 2,
        'nome' => 'Bruno Santos',
        'nota1' => 9.0,
        'nota2' => 8.8,
        'media' => 8.9
    ],
    [
        'id' => 3,
        'nome' => 'Carla Oliveira',
        'nota1' => 6.5,
        'nota2' => 7.8,
        'media' => 7.15
    ],
    [
        'id' => 4,
        'nome' => 'Diego Costa',
        'nota1' => 5.5,
        'nota2' => 6.0,
        'media' => 5.75
    ],
    [
        'id' => 5,
        'nome' => 'Elena Ferreira',
        'nota1' => 9.5,
        'nota2' => 9.2,
        'media' => 9.35
    ],
    [
        'id' => 6,
        'nome' => 'Felipe Lima',
        'nota1' => 7.0,
        'nota2' => 8.0,
        'media' => 7.5
    ],
    [
        'id' => 7,
        'nome' => 'Gabriela Rocha',
        'nota1' => 8.2,
        'nota2' => 7.8,
        'media' => 8.0
    ],
    [
        'id' => 8,
        'nome' => 'Hugo Mendes',
        'nota1' => 6.8,
        'nota2' => 7.5,
        'media' => 7.15
    ],
    [
        'id' => 9,
        'nome' => 'Isabela Cruz',
        'nota1' => 9.8,
        'nota2' => 9.0,
        'media' => 9.4
    ],
    [
        'id' => 10,
        'nome' => 'João Pedro',
        'nota1' => 5.0,
        'nota2' => 6.5,
        'media' => 5.75
    ]
];

//$alunos = [];

$cores_fundo = ["blue", "green", "yellow", "red"];

if (!empty($alunos)) {


    foreach ($alunos as $aluno) {

        $random = array_rand($cores_fundo);

        $corDeFundo = $cores_fundo[$random];
        
        $tpl->COR_FUNDO = $corDeFundo;

        if ($aluno["media"] >= 8) {
            $aluno["aprovado"] = "APROVADO";
            $color = 'aprovado';
            $cor_media = 'aprovado';
        } else {
            $aluno["aprovado"] = "REPROVADO";
            $color = 'reprovado';
            $cor_media = 'reprovado';
        }

        $cor_nota1 = $aluno["nota1"] >= 8 ?'aprovado' :'reprovado';
        $cor_nota2 = $aluno["nota2"] >= 8 ?'aprovado' :'reprovado';
        $cor_media = $aluno["media"] >= 8 ?'aprovado' :'reprovado';


        $tpl->COR_NOTA1 = $cor_nota1;
        $tpl->COR_NOTA2 = $cor_nota2;
        $tpl->COR_MEDIA = $cor_media;
        $tpl->COLOR = $color;

        $tpl->NOME = $aluno["nome"];
        $tpl->NOTA1 = $aluno["nota1"];
        $tpl->NOTA2 = $aluno["nota2"];
        $tpl->MEDIA = $aluno['media'];
        $tpl->STATUS = $aluno['aprovado'];

        $tpl->block("BLOCK_ALUNO");
    }

    $tpl->block("BLOCK_CARDS");
}

$tpl->show();
