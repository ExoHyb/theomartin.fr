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

<!-- 	<textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script> -->

</form>

<?php include("footer.php"); ?>