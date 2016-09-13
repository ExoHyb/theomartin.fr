<?php
include("header_admin.php");
require_once("class/blogManager.php");
$bm = new blogManager();

if(isset($_POST['a'])){
    if($_GET['a'] == 'ajout'){
        $bm->addPost($_GET['titre'], $_GET['contenu'], date('Y-m-d h:s'), $_GET['categorie']);
    }
}

$posts = $bm->getPosts();

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
      <!-- Your Page Content Here -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Articles</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Titre de l'article</th>
                        <th>Contenu</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($posts as $post){ ?>
                        <tr>
                            <td><?php echo $post->titre ?></td>
                            <td><?php echo $post->contenu ?></td>
                            <td><?php echo $post->categorie ?></td>
                            <td>
                                <a class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                <a href="aeush0904_displart.php?a=suppr&id=<?php echo $post->id?>" class="btn btn-danger"><i class="fa fa-close"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
      


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include("footer_admin.php"); ?>