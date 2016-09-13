<?php
include("header_admin.php");
require_once("class/blogManager.php");
$bm = new blogManager();
$posts = $bm->getPosts();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Accueil
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
      
        <div class="row">
          <div class="col-md-6">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Derniers articles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Titre de l'article</th>
                        <th>Contenu</th>
                        <th>Status</th>
                    </tr>
                    <?php foreach($posts as $post){ ?>
                        <tr>
                            <td><?php echo $post->titre ?></td>
                            <td><?php echo $post->contenu ?></td>
                            <td><?php echo $post->categorie ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
          </div>

          </div>
          <div class="col-md-6">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Derniers commentaires</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Article</th>
                  <th>Contenu</th>
                  <th>Déposé par</th>
                  <th>Status</th>
                </tr>
                <tr>
                  <td>Example</td>
                  <td>Example</td>
                  <td>Example</td>
                  <td>Example</td>
                </tr>
                <tr>
                  <td>Example</td>
                  <td>Example</td>
                  <td>Example</td>
                  <td>Example</td>
                </tr>
                <tr>
                  <td>Example</td>
                  <td>Example</td>
                  <td>Example</td>
                  <td>Example</td>
                </tr>
                <tr>
                  <td>Example</td>
                  <td>Example</td>
                  <td>Example</td>
                  <td>Example</td>
                </tr>
                <tr>
                  <td>Example</td>
                  <td>Example</td>
                  <td>Example</td>
                  <td>Example</td>
                </tr>
              </table>
            </div>
            </form>
          </div>
          </div>
        </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include("footer_admin.php"); ?>