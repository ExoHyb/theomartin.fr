<?php
if(!empty($_POST)){
    $error = '';

    if($_POST['nom'] == ''){
        $error .= '- Veuillez entrer votre nom.<br/>';
    }
    if($_POST['numero'] != ''){
        if(!preg_match('`[0-9]{10}`',$_POST['numero'])){
            $error .= '- Veuillez entrer un numéro valide.<br/>';
        }
    }
    if($_POST['expediteur'] == '' || !filter_var($_POST['expediteur'], FILTER_VALIDATE_EMAIL)){
        $error .= '- Veuillez entrer une adresse email valide.<br/>';
    }
    if($_POST['sujet'] == ''){
        $error .= '- Veuillez entrer un sujet à votre message.<br/>';
    }
    if($_POST['message'] == ''){
        $error .= '- Veuillez entrer un contenu à votre message.<br/>';
    }

    if($error == ''){
        $to      = 'theomartin.ste@gmail.com';
        $subject = $_POST['sujet'];
        $message = "Nom : ". $_POST['nom'] ."\r\n Numéro de téléphone : ". $_POST['numero']. "\r\n\r\n". $_POST['message'];
        $message = wordwrap($message, 70, "\r\n");;
        $headers = 'From: '.$_POST['expediteur'] . "\r\n";

        mail($to, $subject, $message, $headers);
    }
}
?>

<!-- CONTACT -->
        <div class="row">
            <div class="col-md-12" id="contact">
                <h3 class="text-center">Contact</h3>
                  <div class="style-form">
                      <?php
                      if(isset($error) && $error != ''){
                          echo $error;
                      }
                      ?>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>#contact">
                          <div class="form-group">
                            <label for="nom">Nom <span id="asterix-red">*</span></label>
                            <input type="text" class="form-control" id="nom" name="nom">
                        </div>
                        <div class="form-group">
                            <label for="numero">Téléphone</label>
                            <input type="" class="form-control" id="numero" name="numero">
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail<span id="asterix-red">*</span></label>
                            <input type="email" class="form-control" id="email" name="expediteur">
                        </div>
                        <div class="form-group">
                            <label for="sujet">Sujet<span id="asterix-red">*</span></label>
                            <input type="text" class="form-control" id="sujet" name="sujet">
                        </div>
                        <div class="form-group">
                            <label for="text">Votre message<span id="asterix-red">*</span></label>
                            <textarea class="form-control" rows="3" name="message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
<!-- CONTACT -->