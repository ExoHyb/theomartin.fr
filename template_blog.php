<?php
require_once("class/blogManager.php");
$bm = new blogManager();
$posts = $bm->getPosts();
include("header.php");
?>

<div class="row">
	<div class="col-md-3">
		<?php include("menu_blog.php"); ?>
	</div>
	<div class="col-md-9">
		<div class="row">
			<div class="style-display-article">
                <?php foreach($posts as $post){ ?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-responsive" src="img/front-end-vs-back-end.jpg" alt="">
                            </div>
                            <div class="col-md-9">
                                <h3><a href="template_article.php?id=<?php echo $post->id; ?>"><?php echo $post->titre; ?></a></h3>
                                <?php echo $bm->getExcerpt($post->id); ?>
                            </div>
                        </div>
                        <div class="separate-line"></div>
                    </div>
                    <?php } ?>
			</div>
		</div>
	</div>
</div>

<!-- Voir footer -->