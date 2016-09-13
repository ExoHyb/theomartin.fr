<?php
require_once("class/eventManager.php");
$em = new eventManager();

require_once("class/blogManager.php");
$bm = new blogManager();
$cat = $bm->getCategory();

if(isset($_POST['a'])){
    if($_POST['a'] == 'ajout'){
        $bm->addPost($_POST['titre'], $_POST['contenu'], date('Y-m-d h:s'), $_POST['categorie']);
        $em->addEvent('Création réussie !', 'L\'article a été créé avec succès. Redirection en cours...');
        header('refresh:3;url=aeush0904_displart.php');
    }
}

include("header_admin.php");
?>

  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Créer un article
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Your Page Content Here -->
      
      <form action="aeush0904_creart.php" method="post">
          <input type="hidden" value="ajout" name="a"/>
        <div class="form-group">
          <label for="">Titre</label>
          <input type="text" class="form-control" name="titre">
        </div>
        <!-- <div class="form-group">
          <label for="">Contenu</label>
          <textarea class="form-control" name="contenu" rows="3"></textarea>
        </div> -->

            <textarea name="contenu" id="contenu" rows="10" cols="80">
              
            </textarea>

            <script>
                CKEDITOR.replace( 'contenu' );
            </script>

        <div class="form-group">
          <label for="">Catégories</label>
          <select class="form-control" name="categorie">
            <?php foreach($cat as $c){ ?>
                <option value="<?php echo $c->id;?>"><?php echo $c->libelle; ?></option>
            <?php } ?>
          </select>
        </div>
        <button class="btn btn-success" type="submit">Envoyez</button>
      </form>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include("footer_admin.php"); ?>