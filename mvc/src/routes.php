<?php
use core\Router;

$router = new Router();
/*para criar uma rota, preciso usar o router->get() e dentro uso
2 parametros, o primeiro é a rota msm, o segundo é o nome
da classe Controll seguido de um @ e logo dps o metodo 
que vai ser acessado. 
*/
$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');