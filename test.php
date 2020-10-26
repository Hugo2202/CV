<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <link rel="stylesheet" href="button_contact.css">

</head>
<body>
<div class="contact_me">
    <a href="#" class="btn">
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

<br><br><br><br><br><br><br>
    <div id="burger_deroulant">
        <div class="menu" id="menu{postrow.displayed.U_POST_ID}" onclick="afficheMenu(this)">
            <a href="#"><img src="img/burger.png" width="40px" alt=""> </a>
        </div>
        <div id="sousmenu{postrow.displayed.U_POST_ID}" style="display:none">
            <div class="sousmenu">
                    <a class="lien_burger" href="#competences">Compétances</a>
                    <a class="lien_burger" href="#formation">Formation</a>
                    <a class="lien_burger" href="#experience">Experiences</a>
                    <a class="lien_burger" href="#hobbies">Hobbies</a>
            </div>
        </div>
    </div>
</div>



<a href="img/ok.png">Télécharger ici !</a>

<script src="burger_deroulant.js"></script>



</body>
</html>

