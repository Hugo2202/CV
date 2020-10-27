<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="app_css.css">
    <link rel="stylesheet" href="button_contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body id="top">

<!--MENU DE NAVIGATION-->
<?php include("php/menu.php"); ?>

<div class="row div_me">
    <!--PHOTO-->
   <div class="col-12 col-sm-4 col-md-3 col-lg-3 div_me_V2 photo"><img id="photo" alt="photo_hugo" src="img/me.jpg"></div>

    <!--NOM ET POSTE-->
   <div class="col-12 col-sm-8 col-md-6 col-lg-6 div_me_V2" id="poste_n_button">
       <div class="nom"><p>Hugo Falourd</p></div>
      <div class="poste_actuel"><p>Développeur Web</p></div>

       <!--BOUTON CONTACTEZ MOI-->
       <div class="contact_me">
           <a href="form_contact.html" class="btn">
               <svg width="277" height="62">
                   <defs>
                       <linearGradient id="grad1">
                           <stop offset="0%" stop-color="#FF8282"/>
                           <stop offset="100%" stop-color="#E178ED" />
                       </linearGradient>
                   </defs>
                   <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
               </svg>
               <span>Contactez moi !</span>
           </a>
       </div>

       <!--TELECHARGER VERSION PDF-->
       <div class="div_download_pdf"><a href="attachment/CV.pdf" target="_blank" class="download_pdf">Téléchargez la vesion PDF ICI !</a></div>
   </div>

    <!--INFOS POUR GRANDS ECRANS-->
    <div class="col-12 col-sm-12 col-md-3 col-lg-3 div_me_V2 infos_d">
        <div class= "div_info_d" id="infos_d">
            <div class="row div_info_list_d">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 div_info_v2" id = "div_phone_d">
                    <div id="div_tel_icon_d>" ><img src="img/phone.png" class="icon_info_d" alt="tel"></div>
                    <div id="div_tel_contain_d>"> 06 20 92 09 29 </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 div_info_v2" id = "div_mail_d">
                    <div id="div_mail_icon_d>" ><img src="img/mail.png" class="icon_info_d" alt="mail"></div>
                    <div id="div_mail_contain_d>">hugo.f@live.fr </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 div_info_v2" id = "div_lieu_d">
                    <div id="div_lieu_icon_d>" ><img src="img/here.png" class="icon_info_d" alt="here"></div>
                    <div id="div_lieu_contain_d>"> La Rochelle </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 div_info_v2" id = "div_age_d">
                    <div id="div_age_icon_d>" ><img src="img/birth.png" class="icon_info_d" alt="birth"></div>
                    <div id="div_age_contain_d>"> 30 ans </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--PARTIE INFOS-->
<?php include("php/infos.php"); ?>

<!--PARTIE COMPETENCES-->
<?php include("php/competences.php"); ?>

<!--PARTIE FORMATION-->
<?php include("php/formation.php"); ?>

<!--PARTIE EXPERIENCES-->
<?php include("php/experiences.php"); ?>


<!--PARTIE HOBBIES-->
<?php include("php/hobbies.php"); ?>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="burger_deroulant.js"></script>
</body>


</html>

