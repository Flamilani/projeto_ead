   <?php require('menu.php'); ?>
<div class="container">
 
  <h1>Meus Cursos</h1>

    <div class="row display-flex text-center">
           <?php if (!empty($cursos)): ?>                    
           <?php foreach ($cursos as $curso): ?>
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
               <img src="<?php echo BASE . 'assets/images/' . $curso['imagem']; ?>" class="img-responsive" alt="">
                <div class="caption">
                    <h4><?php echo $curso['nome']; ?></h4>
                    <p><?php ///echo $curso['descricao']; ?></p>
                    <a href="<?php echo BASE . 'cursos/entrar/' . $curso['curso_id']; ?>" class="btn btn-primary" role="button">Acessar</a>
                </div>
            </div>
        </div>     
 <?php endforeach; ?>
 <?php endif; ?>       
    </div>
</div>