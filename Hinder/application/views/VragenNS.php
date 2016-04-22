<div class="content">
    <h1>Registreren</h1>
    <hr width="80%">
    <h2>Stap 2</h2>
    <p>Vul hieronder de vragenlijst in waaruit wij jouw persoonlijkheidstype bepalen</p>
    <?php echo form_open('Perstest/vragenformNS'); echo validation_errors(); ?>
    
    
    <p>Vraag 6:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="6.1"><input name="vraag6" id="6.1" type="radio" value="1" <?php echo set_radio('vraag6', '1'); ?>>Ik geef de voorkeur aan concepten en het leren op basis van associaties.</label></li>
            <li><label class="pointer label_hover" for="6.2"><input name="vraag6" id="6.2" type="radio" value="2" <?php echo set_radio('vraag6', '2'); ?>>Ik geef de voorkeur aan observaties en het leren op basis van feiten.</label></li>
            <li><label class="pointer label_hover" for="6.3"><input name="vraag6" id="6.3" type="radio" value="3" <?php echo set_radio('vraag6', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 7:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="7.1"><input name="vraag7" id="7.1" type="radio" value="1" <?php echo set_radio('vraag7', '1'); ?>>Ik heb een groot inbeeldingsvermogen en heb een globaal overzicht van een project.</label></li>
            <li><label class="pointer label_hover" for="7.2"><input name="vraag7" id="7.2" type="radio" value="2" <?php echo set_radio('vraag7', '2'); ?>>Ik ben pragmatisch ingesteld en heb een gedetailleerd beeld van elke stap.</label></li>
            <li><label class="pointer label_hover" for="7.3"><input name="vraag7" id="7.3" type="radio" value="3" <?php echo set_radio('vraag7', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 8:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="8.1"><input name="vraag8" id="8.1" type="radio" value="1" <?php echo set_radio('vraag8', '1'); ?>>Ik kijk naar de toekomst.</label></li>
            <li><label class="pointer label_hover" for="8.2"><input name="vraag8" id="8.2" type="radio" value="2" <?php echo set_radio('vraag8', '2'); ?>>Ik houd mijn blik op het heden gericht.</label></li>
            <li><label class="pointer label_hover" for="8.3"><input name="vraag8" id="8.3" type="radio" value="3" <?php echo set_radio('vraag8', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 9:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="9.1"><input name="vraag9" id="9.1" type="radio" value="1" <?php echo set_radio('vraag9', '1'); ?>>Ik houd van de veranderlijkheid in relaties en taken.</label></li>
            <li><label class="pointer label_hover" for="9.2"><input name="vraag9" id="9.2" type="radio" value="2" <?php echo set_radio('vraag9', '2'); ?>>Ik houd van de voorspelbaarheid in relaties en taken.</label></li>
            <li><label class="pointer label_hover" for="9.3"><input name="vraag9" id="9.3" type="radio" value="3" <?php echo set_radio('vraag9', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
       
        <div class="centreer">
            <input type="submit" class="verzendknop margin_top_50" value="Volgende stap">
        </div>
    </form>
</div>