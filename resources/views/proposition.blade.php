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
        <?php
        if($testchoix['resto'] == NULL)
        {
            echo "Aucun restaurant ne correspond à vos critères : <br/>";
            echo "prix : ".$prix."<br/>";
            echo "calories : ".$calorie."<br/>";  
        }
        else{
        ?>
       Avec les critères que vous avez rentré nous vous conseillons de manger à : 
        <?php
           echo $testchoix['resto'];
           echo " avec :<br/>";
           echo $testchoix['entree'];
            echo "<br/>";
            echo $testchoix['plat'];
            echo "<br/>";
            echo $testchoix['dessert'];
            echo "<br/>";
        }
        ?>
    </div>
            
    </div>
        @include('footer')
    </body>
</html>