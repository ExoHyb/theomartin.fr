<?php
require_once("class/blogManager.php");
$bm = new blogManager();
if(isset($_GET['id']) && $post = $bm->getPost($_GET['id'])){
	$titre = $post->titre;
	$contenu = $post->contenu;
}
else{
	$titre = "Article introuvable";
	$contenu = "L'article auquel vous cherchez à accéder semble ne pas éxister !";
}




include("header.php");
?>

<div class="row">
	<div class="col-md-3">
		<?php include("menu_blog.php"); ?>
	</div>
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-12">
				<img class="img-responsive img-article" src="img/front-end-vs-back-end.jpg" alt="">
				<h3 class="text-center"><?php echo $titre; ?></h3>
				<?php echo $contenu; ?>
			</div>
		</div>



<div class="badge-article">
	<img class="img-responsive photo-profil" src="img/profil2.png" alt="">
	<div class="prez-text">
		<h5>Sophie</h5>
		<p>Dévelopeuse Front-End / Intégratice</p>
		<div class="progress">
			<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
			<span class="">Niveaux 5</span>
			</div>
		</div>
		<a href="#">
			<img class="img-responsive reseaux-sociaux" src="img/facebook.png" alt="logo Facebook">
		</a>
		<a href="#">
			<img class="img-responsive reseaux-sociaux" src="img/twitter.png" alt="logo Twitter">
		</a>
		<a href="#">
			<img class="img-responsive reseaux-sociaux" src="img/linkedin.png" alt="Logo Linkedin">
		</a>
		<a href="#">
			<img class="img-responsive reseaux-sociaux" src="img/pinterest.png" alt="Logo Pinterest">
		</a>
	</div>
	<div class="clearfix"></div>
</div>

<div class="part-sociaux">
	<h5>Note de l'article</h5>
	<div class="div-star">
		<i class="fa fa-star-o" aria-hidden="true"></i>
		<i class="fa fa-star-o" aria-hidden="true"></i>
		<i class="fa fa-star-o" aria-hidden="true"></i>
		<i class="fa fa-star-o" aria-hidden="true"></i>
		<i class="fa fa-star-o" aria-hidden="true"></i>
	</div>
	<h5>Partagez cet article</h5>
	<a href="#"><img class="img-responsive reseaux-sociaux" src="img/facebook.png" alt="Logo Facebook"></a>
	<a href="#"><img class="img-responsive reseaux-sociaux" src="img/twitter.png" alt="Logo Twitter"></a>
	<a href="#"><img class="img-responsive reseaux-sociaux" src="img/linkedin.png" alt="Logo Linkedin"></a>
	<div class="clearfix"></div>
</div>

<div class="art-simi">
	<h5>Articles similaire</h5>
	<ul>
		<li><a href="#">APIM Policy to convert and incoming GET request...</a></li>
		<li><a href="#">Getting running an example for node-webgl</a></li>
		<li><a href="#">Fatal signal 11(SISSEGV) caused by google...</a></li>
		<li><a href="#">Angular Directive Link Function Add Items To...</a></li>
		<li><a href="#">APIM Policy to convert and incoming GET request...</a></li>
	</ul>
</div>

<div class="flashquest">
	<h5>Flash'Quest</h5>
	<ul>
		<li><a href="#">APIM Policy to convert and incoming GET request...</a></li>
		<li><a href="#">Getting running an example for node-webgl</a></li>
		<li><a href="#">Fatal signal 11(SISSEGV) caused by google...</a></li>
		<li><a href="#">Angular Directive Link Function Add Items To...</a></li>
		<li><a href="#">APIM Policy to convert and incoming GET request...</a></li>
	</ul>
</div>
<div class="clearfix"></div>


<div class="commentaires">
	<h5>Commentaires</h5>
	<textarea class="form-control" rows="3" placeholder="Ecrivez votre commentaire ici..."></textarea>
	<button type="button" id="button-commentaire" class="btn btn-success">Envoyez</button>
	<div class="clearfix"></div>
</div>

<div class="mini-badge">
	<img class="img-responsive photo-profil" src="img/profil4.png" alt="Photo de profil">
	<div class="prez-text">
		<h5>Jacquie</h5>
		<p>Dévelopeuse Back-End</p>
	</div>
	<div class="clearfix"></div>
</div>

<div class="reponse">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, eum, culpa? Officia quas voluptatem distinctio debitis molestias odit cumque, perferendis facilis eligendi quod dolores magni non itaque, ad dignissimos deserunt.</p>
</div>


<div class="mini-badge">
	<img class="img-responsive photo-profil" src="img/profil8.png" alt="Photo de profil">
	<div class="prez-text">
		<h5>Michel</h5>
		<p>Spécialiste Python</p>
	</div>
	<div class="clearfix"></div>
</div>

<!-- LES COMMENTAIRES DEPOSER -->

<div class="titre-commentaire">
	<div class="row">
		<div class="col-md-12">
			<h3>3 Commentaires</h3>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">

		<div class="row">
			<div class="col-md-1">
				<img class="img-responsive img-profil-com" src="img/profil4.png" alt="">
			</div>
			<div class="col-md-11 com-position com-position">
				<span id="pseudo-commentaire">Jacquie</span>
				<br>
				<span>Il y à 6 mois</span>
			</div>
		</div>
		<p class="position-text-com">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit temporibus, enim tempore sunt nam nesciunt iste sit, maiores aliquid placeat voluptatem quibusdam non doloremque eligendi, quod architecto id voluptatum cum!</p>
	</div>
</div>
<div class="separate-line"></div>
<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-1">
				<img class="img-responsive img-profil-com" src="img/profil8.png" alt="">
			</div>
			<div class="col-md-11 com-position">
				<span id="pseudo-commentaire">Michel</span>
				<br>
				<span>Il y à 6 mois</span>
			</div>
		</div>
		<p class="position-text-com">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit temporibus, enim tempore sunt nam nesciunt iste sit, maiores aliquid placeat voluptatem quibusdam non doloremque eligendi, quod architecto id voluptatum cum!</p>
	</div>
	<div class="col-md-11 col-md-offset-1">
		<div class="row">
			<div class="col-md-1">
				<img class="img-responsive img-profil-com" src="img/profil5.png" alt="">
			</div>
			<div class="col-md-11 com-position">
				<span id="pseudo-commentaire">Marc</span>
				<br>
				<span>Il y à 6 mois</span>
			</div>
		</div>
		<p class="position-text-com">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, pariatur, cumque. Et quisquam repudiandae quam a corporis modi dolorem repellendus esse pariatur voluptate unde deserunt laboriosam, quaerat commodi saepe. Ea.</p>
	</div>
	<div class="col-md-11 col-md-offset-1">
		<div class="row">
			<div class="col-md-1">
				<img class="img-responsive img-profil-com" src="img/profil7.png" alt="">
			</div>
			<div class="col-md-11 com-position">
				<span id="pseudo-commentaire">Clara</span>
				<br>
				<span>Il y à 6 mois</span>
			</div>
		</div>
		<p class="position-text-com">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, pariatur, cumque. Et quisquam repudiandae quam a corporis modi dolorem repellendus esse pariatur voluptate unde deserunt laboriosam, quaerat commodi saepe. Ea.</p>
	</div>
</div>
<div class="separate-line"></div>
<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-1">
				<img class="img-responsive img-profil-com" src="img/profil9.png" alt="">
			</div>
			<div class="col-md-11 com-position">
				<span id="pseudo-commentaire">Papy voyeur</span>
				<br>
				<span>Il y à 6 mois</span>
			</div>
		</div>
		<p class="position-text-com">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit temporibus, enim tempore sunt nam nesciunt iste sit, maiores aliquid placeat voluptatem quibusdam non doloremque eligendi, quod architecto id voluptatum cum!</p>
	</div>
</div>


</div>
</div>

<?php include("footer.php"); ?>