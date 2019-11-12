<?php include "view/header.php";?>
<h1>Departamentos</h1>
    
<form class="form-horizontal" method="post" action="cadastrar">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome"></label>  
  <div class="col-md-4">
  <input id="nome" name="nome" value="<?php echo $departamento['nome']; ?>" type="text" 
  placeholder="Nome" class="form-control input-md" required="">
    
  </div>
</div>






<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Vizualização dos Departamentos</button>
  </div>
</div>

</fieldset>
</form>
<?php include "view/footer.php";?>


