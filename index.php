<?php
use Controllers\Teams; // utilise le controller teams dans le namespace controllers
use Controllers\Coachs;



// ça charge automatiquement les classes

spl_autoload_register(function ($class) {
  $parts = explode('\\', $class);
  $className = array_pop($parts);
  $path = implode(DIRECTORY_SEPARATOR, $parts);
  $file = $className.'.php';
  require strtolower($path) . DIRECTORY_SEPARATOR . $file;
});

$data = explode('/', substr($_SERVER['REQUEST_URI'], 1));
array_shift($data); //rewritting url

$route = $data[0] ? $data[0] : 'teams'; // ? et : correspond à un else if

if ($route === "teams"){
  $controller = new Teams;
  $controller->listTeams();
} elseif ($route === "coachs"){
  $controller = new Coachs;
  $controller->listCoachs();
}
