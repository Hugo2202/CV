
<!--Barre de navigation pour grands écrans-->
<nav>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 div_nav">
        <a href="#top"><img src="img/home_button.png" width="30px" alt=""></a>
        <a href="#competences">Compétences</a>
        <a href="#formation">Formation</a>
        <a href="#experience">Experiences</a>
        <a href="#hobbies">Hobbies</a>
    </div>
</nav>


<!--Menu déroulant pour petits et moyens écrans-->
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

