<!--{{ HTML::style('css/corp.css') }}-->


<div id="header-featured">
    <!--</br>
        </br>
        </br>
        </br>
        </br>
        </br>-->
    <div id="vide">

    </div>
    <div id="accroche">
        Voulez-vous savoir combien de calories</br> avez-vous consommés aujourd'hui</br>?</br>
    </div>
    </br>
    <!--<a href="#" class="button1">Commencez ici</a>-->
    {{ HTML::link('/commencer','Commencez', array("class"=>"button1")) }}
</div>
<!--<div id="bandau"> hello</div>-->
<div id="corp">
    <div id="gauche">
        <div id="titrecatego">
            Categorie/Conseil
        </div>
        <div id="bloc">
            <a href="/conseil/viande"> <img src="/img/Viande.png" /></a>
        </div>
        <div id="bloc">
            <a href="/conseil/fruitlegume"> <img src="/img/Legume.png" /></a>
        </div>
        <div id="bloc">
            <a href="/conseil/lait"> <img src="/img/Boisson.png" /></a>
        </div>
        <div id="bloc">
            <a href="/conseil/lait"> <img src="/img/ProduitLaitier.png" /></a>
        </div>
       <!-- <div id="bloc">
            <a href="#"> <img src="/img/autres.png" /></a>
        </div>
        <div id="bloc">
            Les gens sont comme ça
        </div>-->

    </div>
    <div id="droit">
        <div id="titrecatego">
            Restaurants
        </div>
        <div id="bloc">
            <a href="/infoRestaurant"> <img src="/img/Castro.png" /></a>
        </div>
        <div id="bloc">
            <a href="/infoRestaurant"> <img src="/img/Grillon.png" /></a>
        </div>
        <div id="bloc">
            <a href="/infoRestaurant"> <img src="/img/Prevert.png" /></a>
        </div>
        <div id="bloc">
            <a href="/infoRestaurant"> <img src="/img/Olivier.png" /></a>
        </div>
        
    <!--    <div id="bloc">
            Les gens sont comme ça
        </div>
        <div id="bloc">
            Les gens sont comme ça
        </div>
-->

    </div>
</div>








<!--
<div id="corp">
    <div id="corp-image" style="background-image:url({{ URL::asset('img/SlowFood2.jpg') }})"> </div>
    <div id="content">
            <div id="gauche"></div>
            <div id="droit"></div>

    </div>
</div>
<div id = "clear"></div>
-->