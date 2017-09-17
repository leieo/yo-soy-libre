<?php
if(isset($_POST['mailform']))
{
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
    {
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"NPP"<helene@newparadiseproductions.com>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        
        $message='
        <html>
          <body>
            <div align="left">
              <u>Message de</u> '.$_POST['nom'].' <br />
              <span><</span>'.$_POST['mail'].'<span>></span>
            </div>
            <div>
              <br /> 
              '.nl2br($_POST['message']).' 
              <br />
            </div>
          </body>
        </html>
        ';
  
    mail("helene@newparadiseproductions.com", "contact - npp", $message, $header);
    $msg="Your message has been sent";    
    }
    else
    {
        $msg="All fields are required";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Yo Soy Libre</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:800|Roboto:300,400,500" rel="stylesheet">
  </head>
  <body id="contact">
  <div class="site-content">
    <div class="btn-burger">
      <div class="barre"></div>
      <div class="barre"></div>
      <div class="barre"></div>
    </div>
    <nav>
      <ul>
        <li><a href="index.html">inicio</a></li>
        <li><a href="acerca.html">acerca</a></li>
        <li><a href="fotos.html">fotos</a></li>
        <li><a href="contacto.html" class="active">contacto</a></li>
        <li><a href="contacto.html" class="lang chosen">ES</a> <a href="en-contact.html" class="lang">EN</a> <a href="fr-contact.html" class="lang">FR</a></li>
      </ul>
    </nav>
    <div class="main">
      <header>
        <div class="title">
          <h2>Yo Soy</h2>
          <h1>Libre</h1>
        </div>
        <h4>Un proyecto documental de Hélène Chauvin</h4>
      </header>
      
        <div class="msg" align="center">
        <br/>
        <br/>
        <?php
        if(isset($msg))
        {
        echo $msg;
        }
        ?>
        <br/>
        </div>
  
      <div id="don-b">
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=UVQTYMLAQGANU" title="PayPal, la forma más segura y rápida de pagar en línea.">¡ Apoya YO SOY LIBRE !</a>
      </div>
     
      <div>
        <form method="POST" action="">
         <div class="field">
           <p><label for="nom">Nombre</label></p>
           <input type="text" name="nom" value="<?php if(isset($_POST['nom']) AND empty($_POST['message']) || empty($_POST['mail'])) { echo $_POST['nom']; } ?>" required/>
         </div>
         <div class="field">
           <p><label for="mail">Email</label></p>
           <input type="email" name="mail" value="<?php if(isset($_POST['mail']) AND empty($_POST['nom']) || empty($_POST['message'])) { echo $_POST['mail']; } ?>" required/></p>
         </div>
         <div class="field">
           <p><label for="message">Mensaje</label><br/></p>
           <textarea type="text" name="message" id="comment" required placeholder="..."><?php if(isset($_POST['message']) AND empty($_POST['nom']) || empty($_POST['mail'])) { echo $_POST['message']; } ?></textarea>
         </div>
         <div class="field">
           <input type="submit" value="Enviar" name="mailform" id="sendbutton"/>
         </div>
        </form>
      </div>
         
         <div class="footer">
           <h5><b>*</b>&nbsp;&nbsp;Hélène&nbsp;Chauvin  -  NEW&nbsp;PARADISE&nbsp;PRODUCTIONS&nbsp;&nbsp;<b>*</b></h5>
           <h6>helene@newparadiseproductions.com - Tel&nbsp;/&nbsp;WhatsApp&nbsp;:&nbsp;+33&nbsp;6&nbsp;48&nbsp;42&nbsp;32&nbsp;53</h6>
         </div>
         
         <div class="credits-b">
           Copyright © 2017 - webdesign > leila.el.omari@gmail.com
         </div>
      
    </div>
    </div>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script src="app.js"></script>
  </body>
</html>