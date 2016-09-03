<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Théo Martin</title>
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Théo Martin</h1>
        <h2 class="text-center" id="desc-1">Développeur Front-End / Intégrateurs Web</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center">Qui suis-je ?</h3>
        <div class="contain-description">
          <p class="text-center">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut minima earum perferendis laudantium in itaque quaerat, at maiores eos ipsam ducimus voluptates nulla non voluptatum dolores consequuntur veniam adipisci labore. <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus architecto vel, perferendis, mollitia, inventore ut hic beatae eligendi saepe nulla, delectus voluptatibus. Minus at aperiam laudantium eaque. Facere, placeat, eos.  <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae eveniet, facilis necessitatibus in modi officia, atque rem debitis nam assumenda maxime temporibus libero enim voluptatibus vero illo tempore quae consequuntur?
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center">Et vous êtes ?</h3>
        <div class="client-description">
          <p class="text-center">
            ... Commerçant, artisan, jeune entrepreneur.... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti earum libero veritatis cumque aliquam saepe, architecto blanditiis suscipit cupiditate nam commodi mollitia, accusamus, delectus error in molestias tempore ratione porro?
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center">Ce que je vous propose...</h3>
        <div class="row">
          <div class="col-md-4">
            <div class="div-pack">
              <img class="img-responsive" id="walle" src="img/walle.gif" alt="">
              <div class="desc-pack">
                <h3 class="text-center police-pack">Pack "Opti-SEO"</h3>
                <p>Car un site non référencer est inutile, je m'occupe de l'optimisation de tous les aspects techniques du référencement de votre site pour qu'il correspondent aux exigences des moteurs de recherche actuel.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
           <div class="div-pack">
            <img class="img-responsive" id="iron-man" src="img/iron-man.gif" alt="">
            <div class="desc-pack">
              <h3 class="text-center police-pack">Pack "Iron Man"</h3>
              <p class="text-center">Ce pack comprant :
                <ul>
                  <li>Une page d'accueil</li>
                  <li>Une page produit / portfolio / gallerie <span id="aste">*</span></li>
                  <li>Une page contact</li>
                  <li>Une page blog (optionnel)</li>
                </ul>
              </p>
              <p>Ce pack convient parfaitemant à un artisans, commercant, souhaitant ce faire connaitre sur le web pour ainsi augmenter son chiffre d'affaire. Chaque demande du client est étudier pour lui fournir un site qui lui corresponde au mieux. Un travail soigné et une mise en place sur le net rapide.</p>
              <p>Le référencement est inclus dans la création du site !</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="div-pack">
            <img class="img-responsive" id="optimus" src="img/optimus.gif" alt="">
            <div class="desc-pack">
              <h3 class="text-center police-pack">Pack "Optimus Prime"</h3>
              <p>Site e-commerce, site à fort contenu...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h3 class="text-center">Mes réalisations</h3>
      <div class="style-portfolio">
        <div class="row">
          <div class="col-md-6">
            <div class="display-portfolio">
            <img class="img-responsive img-portfolio" src="img/assises.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="display-portfolio">
            <img class="img-responsive img-portfolio" src="img/paej.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h3 class="text-center">Contact</h3>
      <div class="style-form">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Téléphone</label>
            <input type="tel" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="text">Votre message</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>

</body>
</html>