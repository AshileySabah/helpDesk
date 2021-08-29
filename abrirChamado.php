<?php
  include_once 'head.php';
  require_once 'checkLogin.php';
?>
<?php if(isset($_GET['status']) && $_GET['status'] == 'sucesso'){ ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    Chamado aberto com sucesso!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php } ?>
<div class="container">    
  <div class="row">
    <div class="card-chamado">
      <div class="card">
        <div class="card-header">
          Abertura de chamado
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <form method="post" action="registrarChamado.php">
                <div class="form-group">
                  <label>Título</label>
                  <input required name="titulo" type="text" class="form-control" placeholder="Título">
                </div>
                <div class="form-group">
                  <label>Categoria</label>
                  <select required name="categoria" class="form-control">
                    <option value="">Selecione uma categoria</option>
                    <option value="criacaoUsuario">Criação Usuário</option>
                    <option value="impressora">Impressora</option>
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                    <option value="rede">Rede</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Descrição</label>
                  <textarea required name="descricao" class="form-control" rows="3"></textarea>
                </div>
                <div class="row mt-5">
                  <div class="col-6">
                    <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                  </div>
                  <div class="col-6">
                    <button class="btn btn-lg btn-info btn-block" type="submit">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php include_once 'foot.php' ?>