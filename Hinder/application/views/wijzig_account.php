<div class="content">
    <h1>Wijzig Accountgegevens</h1>
    <hr width="80%">
    <?php echo form_open('User/wijzigAccountForm'); ?>      
        <p>Nickname (4 tot 15 karakters):</p> 
        	<input maxlength="80" type="text" name="nick" value="<?php echo set_value('nick', $nick); ?>">
        <p class="layout_text"> Email adres:</p>
        	<input maxlength="80" type="email" name="email" value="<?php echo set_value('email', $email); ?>" >
        <!--<p>Wachtwoord (5 tot 12 karakters):</p>
        	<input maxlength="80" type="password" name="password" value="<?php echo set_value('password'); ?>" >
        <p>Wachtwoord controleren:</p>
        	<input maxlength="80" type="password" value="<?php echo set_value('passconf'); ?>" name="passconf">-->
        <p>Geboortedatum (dd-mm-jjjj):</p> 
        	<input type="text" name="geboortedatum" value="<?php echo set_value('geboortedatum', $geboortedatum); ?>">
        <p>Voornaam:</p> 
        	<input maxlength="80" type="text" name="voornaam" value="<?php echo set_value('voornaam', $voornaam); ?>" >
        <p>Achternaam:</p> 
        	<input maxlength="80" type="text" name="achternaam" value="<?php echo set_value('achternaam', $achternaam); ?>">
        <p>Geslacht:</p> 
        	<div class="geslacht">
            	<input type="radio" name="geslacht" value="M" placeholder="Man" <?php if($geslacht == 'M'){echo 'checked';}?>>Man
        		<input type="radio" name="geslacht" value="V" placeholder="Vrouw" <?php if($geslacht == 'V'){echo 'checked';}?>>Vrouw
            </div>
        
        <!--<p>Valt op:</p>
        <div class="geaardheid">
            	<input type="radio" name="geaardheid" value="M" placeholder="Mannen" checked="checked">Mannen
        		<input type="radio" name="geaardheid" value="V" placeholder="Vrouwen">Vrouwen
            <input type="radio" name="geaardheid" value="B" placeholder="Beide">Beide
            </div> -->
        	<input type="submit" class="verzendknop margin_top_20" value="Wijzig gegevens">        
        </form>
</div>