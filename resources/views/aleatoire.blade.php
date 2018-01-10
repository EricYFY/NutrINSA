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
    <div id="accroche" >
        
       Entrez le nombre de calorie que vous voulez consommer et nous vous conseillerons où aller manger
    </div>
    </div>
    <div id="corp" style="height:auto;">
        <div id="centre">
        <table border="1">
            <form id= "aleatoire" method="POST" action"{{url('/aleatoire')}}">
            <tr>
                <td>
                    Nombre de calorie : 
                </td>
                <td>
                    <input type="text" name="calorie" value="NULL"/>
                </td>
            </tr>
                
            <tr>
                <td>
                    Prix :
                </td>
                <td>
                    <input type="text" name="prix" value="NULL"/>
                </td>    
            </tr>
                
            <tr>
                <td>
                    
                </td>
                <td>
                    <input type="submit" name="submit" value="chercher"/>
                </td>    
            </tr>
            <!-- Necessaire avec Laravel-->
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
            </form>
        </table>
        </div>
    
    </div>
    
    @include('footer')