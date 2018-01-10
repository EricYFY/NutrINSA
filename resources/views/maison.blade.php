<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
      

  
    <script type="text/javascript" >
        
        function addField() {
            
            var tableau = document.getElementById('Recette');
            var ligne = tableau.insertRow(-1);
            var colonne1 = ligne.insertCell(0);
            var colonne2 = ligne.insertCell(1);
            var colonne3 = ligne.insertCell(2);
            
            colonne1.innerHTML += "<input list=\"nom\" name=\"ingredient[nom][]\">";
            colonne2.innerHTML +="<input type=\"text\" name=\"ingredient[quantite][]\">";
            colonne3.innerHTML += "<select name=\"ingredient[unite][]\">  <option value=\"g\">g</option> <option value=\"ml\">ml</option></select>";
        }
    </script>

</head>
<body>



@include('header')
<div id="header-featured" style="height: 250px;">
        <div id="vide">
        </div>
        <div id="accroche2">
                <h1 class="ecritureTete"> Choisissez des ingredients! </h1>
        </div>
        <datalist id="nom">
<?php
    foreach($ingredients as $ligne){
    echo "\t <option value=\"".$ligne->Nom."\">\n";
    }
?>

 
</datalist>
</div>

<!--<div id="vide" style="height:50px">
</div>-->


<div id="corp" style="height:30em;">
        <div id="centre" style="height:auto;" >
            <div id="MenuDuResto" style="height:auto;">
         
                {{ Form::open(array('url' => '/maison')) }}

                    <table id="Recette" border="0" class="menuResto" style="height:auto;">
                        <thead>
                            <tr>
                                <td></td>
                                <td class="tout" style="width: 80%;">  </td>
                            </tr>
                        </thead>
                        <tr>
                            <td> <h3> Ingredients </h3>  </td>
                            <td> <h3> Quantité </h3> </td>
                            <td> <h3> unité </h3> </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="ingredient[nom][]" list="nom">
                            </td>
                            <td>
                               <input type="text" name="ingredient[quantite][]">
                            </td>
                            <td>
                            <select name="ingredient[unite][]"> <option value="g">g</option>   <option value="ml">ml</option></select>
                            </td>
                        </tr>
                        
                    </table>
                    <table id="Recette" border="0" class="menuResto">
                        <tr>
                            <td>
                                <button type="button" onclick="addField();" style="width:100%;" >Ajouter un ingredient</button>
                            </td>
                            <td>
                            </td>
                            <td>
                                <input type="submit" value="valider votre choix" class="choixIngredient" style="width:100%;">
                            </td>
                        </tr>
                    </table>
                {!! Form::close()!!}

           
        </div>
    </div>
</div>
<!--</div>-->
<!--
<div id="test">
    <?php
        foreach($ingredients as $ligne){
            echo $ligne->Nom;
            echo "<br/>";
        }
    ?>
</div>
-->
    
@include('footer')


</body>
</html>
