<?php $extend='public/index.php' ?>


<div class="container">
  <div class="row">
    <?php foreach ($coachs as $key => $coach) { ?>

      <div class="col-md-3 mt-4">

        <div class="card text-white bg-dark" style="width: 100%;">
        <img class="card-img-top imgCoach" src="<?=$coach->getPhoto();?>" alt="photo">
          <div class="card-body">
            <h5 class="card-title"><?=$coach->getName();?></h5>
            <p class="card-text"> Pays <?=$coach->getNationality();?> <br />
                                  Né à : <?= (new DateTime($coach->getBirthdayDate();)->format('d/m/Y')?>, le <?= $coach->getBirthdayPlace();?></p>
          </div>
        <div class="encart">
        <img class="card-img-bottom logoCoach" src="<?=$coach->getLogo();?>" alt="logo">
        </div>
      </div>
      </div>
    <?php } ?>
  </div>
</div>
