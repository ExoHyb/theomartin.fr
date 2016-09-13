<?php
require_once("class/eventManager.php");
$em = new eventManager();

require_once("class/blogManager.php");
$bm = new blogManager();
$cat = $bm->getCategory();
$error = '';

if(isset($_GET['a']) && $_GET['a'] == 'modif'){
    if(isset($_POST['titre'])){
        $titre = $_POST['titre'];
    } elseif(isset($_GET['id'])){
        $post = $bm->getPost($_GET['id']);
        $titre = $post->titre;
    }

    if(isset($_POST['contenu'])){
        $contenu = $_POST['contenu'];
    } elseif(isset($_GET['id'])){
        $post = $bm->getPost($_GET['id']);
        $contenu = $post->contenu;
    }

    if(isset($_POST['categorie'])){
        $categorie = $_POST['categorie'];
    } elseif(isset($_GET['id'])){
        $post = $bm->getPost($_GET['id']);
        $categorie = $post->categorie;
    }
}

if(isset($_POST['a']) && $_POST['a'] == 'ajout'){
    if(empty($_POST['titre'])){
        $error .= '- Le champ titre ne peut pas être vide.<br/>';
    }

    if(empty($_POST['contenu'])){
        $error .= '- Veuillez mettre du contenu à votre article.<br/>';
    }

    if($error != ''){
        $em->addEvent('Formulaire incomplet', $error, 'warning');
    }

    else{
        if(isset($_GET['a']) && $_GET['a'] == 'modif'){
            $bm->modPost($_GET['id'], $titre, $contenu, $categorie);
            $em->addEvent('Modification réussie !', 'L\'article a été modifié avec succès. Redirection en cours...');
        }else{
            $bm->addPost($_POST['titre'], $_POST['contenu'], date('Y-m-d h:s'), $categorie);
            $em->addEvent('Création réussie !', 'L\'article a été créé avec succès. Redirection en cours...');
        }

        header('refresh:3;url=aeush0904_displart.php');
    }
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
      <!-- Your Page Content Here -->
      
      <form action="aeush0904_creart.php?a=modif&<?php echo (isset($_GET['id'])) ? 'id='.$_GET['id'] : ''; ?>" method="POST">
          <input type="hidden" value="ajout" name="a"/>
        <div class="form-group">
          <label for="">Titre</label>
          <input type="text" class="form-control" name="titre" value="<?php echo (isset($titre)) ? $titre : ''; ?>">
        </div>
        <!-- <div class="form-group">
          <label for="">Contenu</label>
          <textarea class="form-control" name="contenu" rows="3"></textarea>
        </div> -->

            <textarea name="contenu" id="contenu"  rows="10" cols="80">
                <?php echo (isset($contenu)) ? $contenu : ''; ?>
            </textarea>

            <script>
                CKEDITOR.replace( 'contenu' );
            </script>

        <div class="form-group">
          <label for="">Catégories</label>
          <select class="form-control" name="categorie">
            <?php foreach($cat as $c){ ?>
                <option value="<?php echo $c->id;?>" <?php echo (isset($categorie) && $categorie==$c->id) ? 'selected' : ''; ?>><?php echo $c->libelle; ?></option>
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