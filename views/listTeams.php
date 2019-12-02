<?php $extend='public/index.php' ?>


<div class="container">
  <div class="row">
    <?php foreach ($teams as $key => $team) { ?>

      <div class="col-md-3 mt-4">

        <div class="card text-white bg-dark shadow-lg rounded" style="width: 100%;">
        <img class="card-img-top" src="<?=$team->getLogo();?>" alt="logo">
          <div class="card-body">
            <h5 class="card-title"><?=$team->getName();?></h5>
            <p class="card-text">Aka <?=$team->getShortName();?> <br />
                                 Adresse : <?=nl2br($team->getAdress());?></p>
            <a href="./team/<?=$team->getId(); ?>" class="btn btn-primary mb-2">Détails</a> <br />
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
