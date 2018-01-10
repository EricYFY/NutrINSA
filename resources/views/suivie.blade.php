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

<div id="header-featured" style="height:100%">
<div id="vide" style="height:60px;">

    </div>
    <div id="accroche">
        <?php 
            $user = Auth::user();
            echo $user['name'];
            echo "</br>";
            if( Storage::disk('users')->size($user['email']) == 0)
                echo "Vous n'avez pas encore enregistré de repas !"; 
            else
                echo "Voici votre suivi";
            echo "</br>";
            ?>
    </div>
    <div id="vide" style="height:50px;">

    </div>
    
    <!--</br>
        </br>
        </br>
        </br>
        </br>
        </br>-->
<?php
   $user = Auth::user();
   if(Auth::check())
    {
       
        if( Storage::disk('users')->size($user['email']) != 0)
            echo "<div id='temp-div' style ='width:80%; height:30em; margin:auto; position:relative;e-index:1;'</div>";
           
            
    }
?>
        
  @linechart('Calories', 'temp-div')      
        
</div>
    
    </div>
@include('footer')






</body>
</html>
