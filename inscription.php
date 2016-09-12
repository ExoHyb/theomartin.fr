<?php include("header.php"); ?>

<form class="form-inscription">
	<div class="form-group">
		<label for="">Pseudo                            <span id="asterix-red">*</span>	</label>
		<input type="name"     class="form-control" id="" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Adresse email                     <span id="asterix-red">*</span>	</label>
		<input type="email"    class="form-control" id="" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Confirmez votre adresse email     <span id="asterix-red">*</span>	</label>
		<input type="email"    class="form-control" id="" placeholder="">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Mot de passe <span id="asterix-red">*</span>	</label>
		<input type="password" class="form-control" id="" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Confirmez votre mot de passe      <span id="asterix-red">*</span>	</label>
		<input type="password" class="form-control" id="" placeholder="">
	</div>
	<button type="submit"      class="btn btn-default">Envoyez</button>
</form>

<?php include("footer.php"); ?>