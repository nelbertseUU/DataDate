<div class="content" >
    <h1>Log in</h1>
    <hr width="80%">
    <!-- Op deze pagina kan je inloggen met je accountgegevens. Ook geven wij de optie om je account te onthouden en als je je wachtwoord vergeten bent, geven wij de optie om je mail in te voeren, waarna je wachtwoord naar deze mail wordt verstuurd -->
	
    <?php echo validation_errors();
          echo form_open('Login/checkloginform');
    	  echo $passerror; ?>
    
    <p>Nickname:</p> 
    <input maxlength="80" type="text" name="nick" value="<?php echo set_value('nick'); ?>">
    <p>Wachtwoord:</p>
    <input maxlength="80" class="margin_bottom_20" type="password" name="password" value="<?php echo set_value('password'); ?>" >
            
    <!-- eventueel nog een remember me cookie -->
    <br>
    <input type="submit" class="verzendknop" name="commit" value="Login">        
    <br>
    <form id="" action="<?php echo base_url('index.php/Login/veranderpass'); ?>">
    <input type="submit" class="verzendknop" value="Wachtwoord vergeten?">
    </form>    
    <form class="margin_bottom_20" action="<?php echo base_url('index.php/Login/registratie'); ?>">
    <input type="submit" class="verzendknop" value="Registreren">
    </form>
</div>