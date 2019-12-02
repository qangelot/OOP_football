<?php

namespace Controllers;
use Models\Teams as ModelTeams;

class Teams extends Controller // tous les controlers devront étendre de Controller afin de pouvoir mettre les classes en une ligne
{
    public function listTeams()
    {
      $model = new ModelTeams;
      $teams = $model->getTeams();
      $this->render('views/listTeams.php', [
        'teams' => $teams // on passe par l'entité Teams pour récupérer la base de données avec les getters...
      ]);
    }
}
