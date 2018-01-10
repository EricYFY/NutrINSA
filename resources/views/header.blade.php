{{ HTML::style('css/default.css')}}
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <!--
      <h1><a href="">Nutr-Insa</a></h1>
      -->
            <h1> {{ HTML::link('/','Nutr-Insa') }} </h1>
        </div>
        <div id="menu">
            <ul>
                <li><a href="/aleatoire" accesskey="1" title="">Proposition de restaurant</a></li>
                @if (Auth::guest())
                <li>{{ HTML::link('/login','Connexion', array('acceskey' => '2' ,'title' => '')) }} </li>
                <li>{{ HTML::link('/register','Créer un compte', array('acceskey' => '3' ,'title' => '')) }} </li>
                @else
                <?php $user = Auth::user(); ?>
                <li>{{ HTML::link('/suivi','Suivi', array('acceskey' => '2' ,'title' => '')) }} </li>    
                <li>
                        <a>
                            <?php echo $user["name"] ?>
                        </a>
                        <ul id="niveau2">
                            <li>{{ HTML::link('/logout','Deconnexion', array('acceskey' => '2' ,'title' => '')) }} </li>
                        </ul>
                    </li>
                    @endif

            </ul>
        </div>
    </div>
</div>