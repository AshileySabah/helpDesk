<?php
  include_once 'head.php';
  require_once 'checkLogin.php';
?>

<div class="container">    
  <div class="row">
    <div class="card-chamado">
      <div class="card">
        <div class="card-header">
          Menu
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-6 d-flex justify-content-center">
              <a href="abrirChamado.php" class="links">
                <div align="center">
                  Abrir Chamado<br>
                  <img src="img/formulario_abrir_chamado.png" width="70" height="70">
                </div>
              </a>
            </div>
            <div class="col-6 d-flex justify-content-center">
              <a href="consultarChamado.php" class="links">
                <div align="center">
                  Consultar Chamado<br>
                  <img src="img/formulario_consultar_chamado.png" width="70" height="70">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<?php include_once 'foot.php' ?>