<div id="hoofdtekst" >
    <!-- Als je hier je mail invult, wordt er een mailtje verstuurd met je wachtwoord -->
    <form method="post" action="<?php echo base_url('index.php/Login/verzendpassmail'); ?>">
    	<p>
        	<input type="email" name="verander" value="" placeholder="Je mailadres:"><?php echo $emailErr;?>
        </p>
       <input type="submit" value="verzenden">    
    </form>
</div>