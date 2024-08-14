<?php
use core\Router;
use src\controllers\HomeController;

$router = new Router();
/*para criar uma rota, preciso usar o router->get() e dentro uso
2 parametros, o primeiro é a rota msm, o segundo é o nome
da classe Controll seguido de um @ e logo dps o metodo 
que vai ser acessado. 
*/


$router->get('/', 'HomeController@index');
//essa rota vou deixar pra adicionar novos usuarios;
$router->get('/novo','UsuarioController@add');