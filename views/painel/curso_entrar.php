    <?php require('menu.php'); ?>
     <div class="container-fluid">
<div class="row">
  <div class="coluna col-sm-6 col-md-4">
      <h2><?php echo $curso->getNome(); ?></h2>
    <div class="panel panel-default">
  <div class="panel-body">
     <strong>Seu Progresso</strong>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    70%
  </div>
</div>
  </div>
</div>
  <div class="list-group">
<?php foreach ($modulos as $modulo): ?>
   <li class="list-group-item list-group-item-info"><?php echo $modulo['modulo_nome']; ?></li>
  <?php foreach ($modulo['aulas'] as $aula): ?>
   <a href="<?php echo BASE . 'cursos/aula/' . $aula['aula_id']; ?>" class="list-group-item"><?php echo $aula['nome']; ?></a>
  <?php endforeach; ?>
<?php endforeach; ?>
 

</div>
</div>
  <div class="col-sm-10 col-md-8">

  </div>
</div>
</div>