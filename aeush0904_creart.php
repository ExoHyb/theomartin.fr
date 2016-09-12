<?php include("header_admin.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Créer un article
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      
      <form>
        <div class="form-group">
          <label for="">Titre</label>
          <input type="text" class="form-control" id="" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Contenu</label>
          <textarea class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="">Catégories</label>
          <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <button type="submit">Envoyez</button>
      </form>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include("footer_admin.php"); ?>