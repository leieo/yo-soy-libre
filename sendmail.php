

<?php
if(isset($_POST['mailform']))
{
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
    {
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"machin.com"<bla@blabla.com>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        
        $message='
        <html>
          <body>
            <div align="center">
              <u>Expéditeur :</u> '.$_POST['nom'].' <br />
              <u>Mail de l\'expéditeur :</u> '.$_POST['mail'].' <br />
              <br /> 
              '.nl2br($_POST['message']).' 
              <br />
            </div>
          </body>
        </html>
        ';
  
    mail("leila.el.omari@gmail.com", "contact - npp", $message, $header);
    $msg="Votre message a bien été envoyé !";    
    }
    else
    {
        $msg="Tous les champs doivent être complétés ...";
    }
}
?>

<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:800|Roboto:300,400,500" rel="stylesheet">
   </head>
  <body>
    <h3>Formulaire de contact</h3>
    <form method="POST" action="">
      <input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>"/>
      <input type="email" name="mail" placeholder="Votre e-mail" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>"/>
      <textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
      <input type="submit" value="Envoyer !" name="mailform"/>
    </form>
    <?php
    if(isset($msg))
    {
        echo $msg;
        }
    ?>
  </body>
</html>

