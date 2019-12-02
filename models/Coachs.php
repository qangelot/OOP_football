<?php

namespace Models;

class Coachs extends Model
{
  public function getCoachs()
  {
    $stmt = $this->db->prepare('SELECT * FROM coachs');
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_CLASS, 'Entities\Coachs');
  }
}
