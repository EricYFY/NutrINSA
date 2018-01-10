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
        Restaurants de l'INSA
    </div>
    </br>
    <!--<a href="#" class="button1">Commencez ici</a>-->
    {{ HTML::link('/commencer','Commencez', array("class"=>"button1")) }}
</div>
<!--<div id="bandau"> hello</div>-->
<div id="corp" style="height:auto">
    <div id="centre">
        &nbsp &nbsp &nbsp &nbsp Les restaurants de l'INSA Lyon pr®¶parent et distribuent les petits d®¶jeuners et les repas des ®¶tudiants 7 jours sur 7 et 11 mois sur 12.
        </br>
        <div class="title-colored">Les restaurants</div>
	  &nbsp &nbsp &nbsp &nbsp L'INSA Lyon dispose de plusieurs restaurants avec des formules de restauration qui leur sont sp®¶cifiques :
	  </br>
        &nbsp &nbsp &nbsp &nbsp Le Castor & Pollux : restaurant self-service traditionnel
        </br>
        &nbsp &nbsp &nbsp &nbsp Le Pr®¶vert : restauration rapide sur place ou ®§ emporter
        </br>
        &nbsp &nbsp &nbsp &nbsp Le Grillon : restaurant grill
        </br>
        &nbsp &nbsp &nbsp &nbsp L'Olivier. : restauration italienne
        </br>
        &nbsp &nbsp &nbsp &nbsp Point A : petit d®¶jeuner (au pied du B?timent A)
        </br>
        Les horaire:
        </br>
        <div id="corp-image" style=""></div>
    </div>
</div>
@include('footer')
</body>
</html>