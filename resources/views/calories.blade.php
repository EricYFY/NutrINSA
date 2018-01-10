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
        <div id="vide" style="height:50px;"></div>
        <div id="header-featured" style="padding-button:25%;height:60%;">
            <div id="vide"></div>

            <div id="accroche" class="accrocheCentrage">
                <?php
                    echo 'vous avez consommé <h3 style="color:red";>'.$Calorie.'</h3> Kcalories avec le repas que vous avez pris';
                ?>
            </div>
        </div>
        
        <?php
   $user = Auth::user();
   if(Auth::check())
    {
       echo '<div id="corp" style="height:auto; background-color:#55ACEE;">';
        if( Storage::disk('users')->size($user['email']) != 0)
            echo "<div id='temp-div' style ='width:80%; height:30em; margin:auto;'></div>";
           
         echo '</div>';    
    }
?>

        @linechart('Calories', 'temp-div')
              


        
        
        @include("footer")
        
        
    </body>
</html>