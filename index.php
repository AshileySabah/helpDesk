<?php include 'head.php' ?>
<?php
  $mensagemErro = '';

  if(isset($_GET['login']) && $_GET['login'] == 'erro'){
    $mensagemErro = '* O e-mail e/ou senha inválido(s)';
  }
?>
<div class="container">    
  <div class="row">
    <div class="card-login">
      <div class="card">
        <div class="card-header">
          Login
        </div>
        <div class="card-body">
          <form method="post" action="validaLogin.php">
            <div class="form-group">
              <input required name="email" type="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="form-group">
              <input required name="senha" type="password" class="form-control" placeholder="Senha">
            </div>
            <span class="text-danger"><?php echo $mensagemErro ?></span>
            <button class="btn btn-lg btn-info btn-block mt-2" type="submit">Entrar</button>
          </form>
        </div>
      </div>
    </div>
</div>
<?php include 'foot.php' ?>