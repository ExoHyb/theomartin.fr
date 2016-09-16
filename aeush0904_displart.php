<?php
require_once("class/eventManager.php");
$em = new eventManager();
require_once("class/blogManager.php");
$bm = new blogManager();
if(isset($_GET['cat'])){
    $posts = $bm->getPosts($_GET['cat']);
}
else{
    $posts = $bm->getPosts();
}

if(isset($_POST[''])){
    if($_GET['a'] == 'ajouter'){
        $bm->addCategory($_GET['nom']);
    }
}

if(isset($_GET['a']) && $_GET['a'] == 'suppr' && isset($_GET['id'])){
    if(!isset($_GET['conf'])){
        $event_text = 'Êtes-vous certain de vouloir supprimer l\'article : <b>'.$bm->getPost($_GET['id'])->titre.'</b> ?';
        $event_links[] = "<a href=\"aeush0904_displart.php?a=suppr&conf=1&id=".$_GET['id']."\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i></a>";
        $event_links[] = "<a href=\"aeush0904_displart\" class=\"btn btn-danger\"><i class=\"fa fa-close\"></i></a>";
        $em->addEvent('Confirmation',$event_text, 'warning', $event_links);
    }
    elseif($_GET['conf']==1 && isset($_GET['id'])){
        $bm->delPost($_GET['id']);
        header('location:aeush0904_displart.php?e=1');
    }
}


if(isset($_GET['e']) && $_GET['e'] == 1){
    $em->addEvent('Suppression réussie !', 'La suppression de l\'article s\'est déroulée avec succès.');
}

include("header_admin.php");
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tous les articles
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
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Articles</h3>
                <div class="box-tools pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-filter"></i></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="aeush0904_displart.php">Toutes les catégories</a></li>
                            <li class="divider"></li>
                            <?php foreach($bm->getCategory() as $category){?>
                                <li><a href="aeush0904_displart.php?cat=<?php echo $category->id; ?>"><?php echo $category->libelle; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <a class="btn btn-box-tool" href="aeush0904_creart.php"><i class="fa fa-plus"></i></a>
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Titre de l'article</th>
                        <th>Contenu</th>
                        <th>Catégorie</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($posts as $post){ ?>
                        <tr>
                            <td><?php echo $post->titre; ?></td>
                            <td><?php echo $bm->getExcerpt($post->id, false); ?></td>
                            <td><?php echo $bm->getCategoryName($post->categorie); ?></td>
                            <td>
                                <a href="template_article.php?id=<?php echo $post->id; ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                <a href="aeush0904_creart.php?a=modif&id=<?php echo $post->id; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                <a href="aeush0904_displart.php?a=suppr&id=<?php echo $post->id; ?>" class="btn btn-danger"><i class="fa fa-close"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
      


    </section>
    <!-- /.content -->


<?php include("footer_admin.php"); ?>