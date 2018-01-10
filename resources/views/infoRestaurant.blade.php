<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    
</head>
<body>
    @include('header')
    <div id="header-featured" style="height:10em;">
    <!--</br>
        </br>
        </br>
        </br>
        </br>
        </br>-->
    <div id="vide">

    </div>
    <div id="accroche">
        Restaurants de l'INSA
    </div>
    </br>
    <!--<a href="#" class="button1">Commencez ici</a>-->
</div>
<!--<div id="bandau"> hello</div>-->
<div id="corp" style="height:auto;">
    <div id="centre">
        &nbsp &nbsp &nbsp &nbsp Les restaurants de l'INSA Lyon préparent et distribuent les petits déjeuners et les repas des étudiants 7 jours sur 7 et 11 mois sur 12.
        </br>
        <div class="title-colored">Les restaurants</div>
	  &nbsp &nbsp &nbsp &nbsp L'INSA Lyon dispose de plusieurs restaurants avec des formules de restauration qui leur sont spécifiques :
	  </br>
        &nbsp &nbsp &nbsp &nbsp Le Castor & Pollux : restaurant self-service traditionnel
        </br>
        &nbsp &nbsp &nbsp &nbsp Le Prévert : restauration rapide sur place ou à emporter
        </br>
        &nbsp &nbsp &nbsp &nbsp Le Grillon : restaurant grill
        </br>
        &nbsp &nbsp &nbsp &nbsp L'Olivier. : restauration italienne
        </br>
        &nbsp &nbsp &nbsp &nbsp Point A : petit déjeuner (au pied du Batiment A)
        </br>
        Les horaire:<a href="{{URL::to('pdf/horaire.pdf')}}">ici </a>
        </br>
        <div id="corp-image" style=""></div>
    </div>
</div>
@include('footer')
</body>
</html>