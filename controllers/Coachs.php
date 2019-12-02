<?php
namespace Controllers;
use Models\Teams as ModelCoachs;

class Coachs extends Controller // tous les controlers devront étendre de Controller afin de pouvoir mettre les classes en une ligne
{
    public function listCoachs()
    {
      $model = new ModelCoachs;
      $coachs = $model->getCoachs();
      $this->render('views/listCoachs.php', [
        'coachs' => $coachs // on passe par l'entité Teams pour récupérer la base de données avec les getters...
      ]);
    }
}
