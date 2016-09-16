<?php
require_once("class/eventManager.php");
$em = new eventManager();

require_once("class/blogManager.php");
$bm = new blogManager();
$cat = $bm->getCategory();
$error = '';


if(!empty($_POST)){
    $categorie = $_POST['categorie'];
    if(empty($_POST['titre'])){
        $error .= '- Veuillez entrer un titre.<br/>';
    }else{
        $titre = $_POST['titre'];
    }
    if(empty($_POST['contenu'])){
        $error .= '- Votre article ne possède pas de contenu.<br/>';
    }else{
        $contenu = $_POST ['contenu'];
    }if($_FILES['image']['name'] == ''){
        $image = 'img/articles/default.jpg';
    }else{
        $image = 'img/articles/'.$_FILES['image']['name'];
    }
}elseif(isset($_GET['id'])){
    $post = $bm->getPost($_GET['id']);
    $titre = $post->titre;
    $contenu = $post->contenu;
    $image = $post->image;
    $categorie = $post->categorie;
}

if($error != ''){
    $em->addEvent('Formulaire incomplet', $error, 'warning');
}

if(!empty($_POST) && $error == ''){
    $uploaddir = $_SERVER['DOCUMENT_ROOT'].'theomartin.fr/img/articles/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

    $bm->addPost($titre, $contenu, date('Y-m-d h:s'), $categorie, $image);
}

include("header_admin.php");
?>

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
        <?php
        $em->printEvents();
        ?>
      <!-- Your Page Content Here -->
      <form enctype="multipart/form-data" action="aeush0904_creart.php<?php echo (isset($_GET['id'])) ? '?id='.$_GET['id'] : ''; ?>" method="POST">

          <div class="col-xs-8">
              <div class="form-group">
                  <label for="">Titre</label>
                  <input type="text" class="form-control" name="titre" value="<?php echo (isset($titre)) ? $titre : ''; ?>">
              </div>
          </div>
          <div class="col-xs-4">
              <div class="form-group">
                  <label for="">Catégorie</label>
                  <select class="form-control" name="categorie">
                      <?php foreach($cat as $c){ ?>
                          <option value="<?php echo $c->id;?>" <?php echo (isset($categorie) && $categorie==$c->id) ? 'selected' : ''; ?>><?php echo $c->libelle; ?></option>
                      <?php } ?>
                  </select>
              </div>
          </div>
          <div class="col-xs-12">
              <div class="form-group">
                  <?php echo (isset($image)) ? '<img width="100%" src="'.$image.'"/>' : ''; ?>
                  <label for="image">Image</label>
                  <input name="image" type="file">
              </div>

            <div class="form-group">
                <label for="contenu">Contenu</label>
                <textarea name="contenu" id="contenu"  rows="10" cols="80">
                    <?php echo (isset($contenu)) ? $contenu : ''; ?>
                </textarea>
            </div>
          </div>
            <script>
                CKEDITOR.replace( 'contenu' );
            </script>

            <button class="btn btn-success" type="submit">Envoyez</button>

      </form>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include("footer_admin.php"); ?>