  
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

<div class="form-group listaAulas">
    <select class="form-control" name="aulas" id="" onchange="window.location.href=this.value;">
      <?php foreach ($modulos as $modulo): ?>
        <option value="" disabled="disabled"><?php echo $modulo['modulo_nome']; ?></option>     
       <?php foreach ($modulo['aulas'] as $aula): ?>
      <option value="<?php echo BASE . 'cursos/aula/' . $aula['aula_id']; ?>"> <?php echo $aula['nome']; ?></option>
       <?php endforeach; ?>
       <?php endforeach; ?>
    </select>
</div>

  <div class="list-group">

<?php foreach ($modulos as $modulo): ?>
   <li class="list-group-item list-group-item-info"><?php echo $modulo['modulo_nome']; ?></li>
  <?php foreach ($modulo['aulas'] as $aula): ?>
   <a class="list-group-item <?php echo $aula['aula_id'] == $this->helperUrl() ? 'active' : '' ?>" href="<?php echo BASE . 'cursos/aula/' . $aula['aula_id']; ?>">
    <?php echo $aula['nome']; ?></a>
  <?php endforeach; ?>
<?php endforeach; ?>
 

</div>
</div>
  <div class="col-sm-6 col-md-8">
   
  	<h2>Vídeo - <?php echo $aula_info['nome']; ?></h2><hr>
    <?php if(isset($aula_info['url']) && $aula_info['url'] != null): ?>
    <div class="embed-responsive embed-responsive-16by9">
  	<iframe class="embed-responsive-item" width="640" height="360" src="https://player.vimeo.com/video/<?php echo $aula_info['url']; ?>" frameborder="3" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
  <div class="botaoMarcar">
      <button onclick="marcarConcluido()" data-id="<?php echo $aula_info['aula_id']; ?>" type="button" class="btn btn-success">Marcar Concluído</button>
  </div>
<?php else: ?>
  Nenhum Vídeo
<?php endif; ?>
<br>
<div class="lead"><?php echo $aula_info['descricao']; ?></div>
<hr>
<h3>Tira-Dúvida</h3>
<form method="POST">
  <textarea class="form-control" name="duvida" id="duvida" cols="10" rows="5"></textarea><br>
  <input type="submit" class="btn btn-primary" value="Enviar"><br><br>

</form>
<?php foreach ($duvidas as $duvida): ?>
<div class="comments">
  <?php echo $duvida['duvida']; ?>
</div>
<?php endforeach; ?>
  </div>
</div>
</div>