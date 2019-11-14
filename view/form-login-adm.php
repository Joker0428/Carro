<?php include "view/header.php";?>
<form method="post" action="adm">
<fieldset>

<!-- Form Name -->
<legend>Login Administrador</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
  <input id="textinput" name="nome" type="text" placeholder="Usuario" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput"></label>
  <div class="col-md-4">
    <input id="passwordinput" name="senha" type="password" placeholder="Senha" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Entrar</button>
  </div>
</div>

</fieldset>
</form>
<?php include "view/footer.php";?>