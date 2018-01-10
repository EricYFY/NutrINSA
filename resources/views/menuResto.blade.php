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
    @include("header")
    <div id="header-featured">
        <div id="vide">
        </div>
        <div id="accroche2">
            <?php 
                echo '<h1 class="ecritureResto" >'.$nom.'</h1>';
            ?>
        </div>
    </div>
    <div id="corp" style="height:30em;" >
        <div id="centre">
            <div id="MenuDuResto">
                <form id="nom" method="POST" action="{{url('/calculatrice')}}">
                    <table class="menuResto">
                        <thead>
                            <tr>
                                <td class="ecritureForm"> </td>
                                <td> Choix Des repas que vous avez consommé </td>
                            </tr>
                        </thead>
                        <tr>
                            <td> Entré
                            </td>
                            <td>
                                <select name="Entree" size="1" form="nom">
                                    <option value="NULL">vous n'avez pas pris d'entrée</option>
                                    <?php
                                    foreach($menu as $menuDuresto){
                                        if($menuDuresto->entrees == NULL){
                                            continue;
                                        }
                                    echo '<option value="'.$menuDuresto->entrees.'" style="width: 100%;">'.$menuDuresto->entrees.'</option>';
                                    }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> Plats</td>
                            <td>
                                <select name="Plats" size="1" form="nom">
                                    <option value="NULL">vous n'avez pas pris de plats</option>
                                    <?php
                                    foreach($menu as $menuDuresto){
                                    echo '<option value="'.$menuDuresto->plats.'">'.$menuDuresto->plats.'</option>';
                                    }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> Dessert </td>
                            <td>
                                <select name="Dessert" size="1" form="nom">
                                    <option value="NULL">vous n'avez pas pris de dessert</option>
                                    <?php
                                    foreach($menu as $menuDuresto){
                                    echo '<option value="'.$menuDuresto->dessert.'">'.$menuDuresto->dessert.'</option>';
                                    }
                                ?>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="valider votre choix" class="choixResto" style="width:100%">
                            </td>
                        </tr>
                    </table>
                    
                    <!-- Necessaire avec Laravel-->
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                </form>

            </div>
        </div>
    </div>
    </div>
    @include("footer")

</body>

</html>