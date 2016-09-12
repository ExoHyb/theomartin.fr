<?php
include("header_admin.php");
require_once("class/blogManager.php");

$bm = new blogManager();

if(isset($_GET['a'])){
    if($_GET['a'] == 'suppr') {
        if (isset($_GET['id'])) {
            $bm->delCategory($_GET['id']);
        }
    }
    if($_GET['a'] == 'ajouter'){
        $bm->addCategory($_GET['nom']);
    }

}

$cat = $bm->getCategory();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Catégories
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
              <h3 class="box-title">Liste des catégories</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Nom de la catégorie</th>
                  <th>Action</th>
                </tr>
                <?php foreach($cat as $c){ ?>
                    <tr>
                        <td><?php echo $c->libelle;?></td>
                        <td>
                            <a class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                            <a href="aeush0904_categories.php?a=suppr&id=<?php echo $c->id?>" class="btn btn-danger"><i class="fa fa-close"></i></a>
                        </td>
                    </tr>
                <?php } ?>


              </table>
            </div>
          </div>
          </div>

          <div class="col-md-6">
            <div class="box box-info">
              <div class="box-header width-border">
                <h3 class="box-title">Créer une catégorie</h3>
              </div>
              <div class="box-body">
                <form action="aeush0904_categories.php" METHOD="get">
                    <input type="hidden" name="a" value="ajouter"/>
                  <div class="form-group">
                    <label for="">Nom de la catégorie</label>
                    <input type="text" name="nom" class="form-control">
                  </div>
                  <button class="btn btn-default" type="submit">Créer</button>
                </form>
              </div>
            </div>
          </div>

          </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include("footer_admin.php"); ?>