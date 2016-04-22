<div id="hoofdtekst" >
    <!--Deze view heeft twee tekstvakken waar je je oude en nieuwe wachtwoord invult, waarna je oude wachtwoord verandert in het nieuwe wachtwoord-->
    <form class="login_form" method="post" action="<?php echo base_url('index.php/Login/passchange'); ?>">
    	<p>Vul je nieuwe wachtwoord in:</p> 
        	<input type="password" name="password" value="" placeholder=""><?php echo $_SESSION['passErr'];?>        
    	<p>Bevestig wachtwoord:</p> 
        	<input type="password" name="checkpassword" value="" placeholder=""><?php echo $_SESSION['passErr2'];?>
        	<input class="verzendknop" type="submit" value="verzenden">          
    </form>
</div>