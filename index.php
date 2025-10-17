<?php
require_once("./lib/raelgc/view/Template.php");

use raelgc\view\Template;

$tpl = new Template("./template/index.html");

$tpl->addFile("TOPO", "./includes/topo.html");
$tpl->addFile("CONTEUDO", "./includes/conteudo.html");
$tpl->addFile("RODAPE", "./includes/rodape.html");

$tpl->show();