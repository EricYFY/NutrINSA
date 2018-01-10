<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="../NUTRINSA/public/css/default.css">
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
            <h1 class="ecritureTete">Choix du restaurant</h1></br>

            <div id="vide">
            </div>

            <div id="miseCentre">
                <form id="nom" method="GET" action="{{url('/restaurant/{nomResto}')}}">
                    </br>
                    <table border="0">
                        <thead>
                            <tr>
                                <td class="ecritureForm"> Nom du restaurant </td>
                                <td></td>
                            </tr>
                        </thead>
                        <tr>
                            <td>
                                <select name="nomResto" size ="1" form="nom">


                                    <?php
                                    foreach ($NomResto as $resto){
                                            //echo $resto.'</br>';
                                        echo '<option value='.$resto.'>'.$resto.'</option>';
                                    }   
                                    ?>
                                </select>
                            </td>
                            <td>
                                <input type="submit" value="valider votre choix" class="choixResto" style="width:100%">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    
</div>
    @include('footer')
</body>

</html>