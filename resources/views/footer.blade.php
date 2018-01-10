

<!-- HTML::style('css/footer.css') }}-->

<div id="footer">
    <div id="extra" class="container">
        <h2>INSA TC/ WEB Project</h2>
        <span>Site web développé dans le cadre de la formation en école d'ingénieur</span> 
        <p>Ce site <strong>Nutri-INSA</strong>,a été développé dans le cadre du cour WEB 3ème année à <a href="https://www.insa-lyon.fr" rel="nofollow" style ="color:white" >L'INSA DE LYON</a>, département<a href="https://telecom.insa-lyon.fr" style ="color:white"> Télecoms Services et Usages</a>. </p>

        <!--<a href=mailto class="button">Nous contacter</a> -->
        {{ HTML::link('/contact', 'Nous contacter', array('class' => 'buttonContact')) }}
        <a href="{{URL::to('pdf/about.pdf')}}" class="buttonContact">apropos</a>
        
    </div>

    <div id="copyright" class="container">
    <p>Untitled. All rights reserved. | Photos by HANSOLO and someone else</a> | Design by TEMPLATED and all the team</a>.</p>
    </div>
</div>

