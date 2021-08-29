<?php
  include_once 'head.php';
  require_once 'checkLogin.php';
?>

<?php
  $arquivo = fopen('arquivo.hd', 'r');

  $listaChamados = [];
  $indiceListaChamados = 0;
  while(!feof($arquivo)){
    $linha = fgets($arquivo);

    if($linha != null){
      $listaChamados[$indiceListaChamados] = explode('#', $linha);
      $indiceListaChamados++;
    }
  }
  fclose($arquivo);
?>

<div class="container">    
  <div class="row">
    <div class="card-chamado">
      <div class="card">
        <div class="card-header">
          Consulta de chamado
        </div>
        <div class="card-body">
          <?php if($listaChamados == null){ ?>
            Não há registro de chamados.
          <?php } ?>
          <?php foreach ($listaChamados as $cadaRegistro){ ?>
            <div class="card mb-3 bg-light">
              <div class="card-body">
                <h5 class="card-title"><?php echo $cadaRegistro[0] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $cadaRegistro[1] ?></h6>
                <p class="card-text"><?php echo $cadaRegistro[2] ?></p>
              </div>
            </div>
          <?php } ?>
          <div class="row mt-4">
            <div class="col-6">
              <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once 'foot.php' ?>