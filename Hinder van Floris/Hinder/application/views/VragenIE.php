<div class="content">
    <h1>Registreren</h1>
    <hr width="80%">
    <h2>Stap 2</h2>
    <p>Vul hieronder de vragenlijst in waaruit wij jouw persoonlijkheidstype bepalen</p>
    <?php echo validation_errors(); echo form_open('Perstest/vragenformIE');  ?>
        <div class="vraag">
        <p>Vraag 1:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="1.1"><input name="vraag1" id="1.1" type="radio" value="1" <?php echo set_radio('vraag1', '1'); ?>>Ik geef de voorkeur aan grote groepen mensen, met een grote diversiteit.</label></li>
            <li><label class="pointer label_hover" for="1.2"><input name="vraag1" id="1.2" type="radio" value="2" <?php echo set_radio('vraag1', '2'); ?>>Ik geef de voorkeur aan intieme bijeenkomsten met uitsluitend goede vrienden.</label></li>
            <li><label class="pointer label_hover" for="1.3"><input name="vraag1" id="1.3" type="radio"  value="3" <?php echo set_radio('vraag1', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        </div>
        <p>Vraag 2:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="2.1"><input name="vraag2" id="2.1" type="radio"  value="1" <?php echo set_radio('vraag2', '1'); ?>>Ik doe eerst, en dan denk ik.</label></li>
            <li><label class="pointer label_hover" for="2.3"><input name="vraag2" id="2.2" type="radio"  value="2" <?php echo set_radio('vraag2', '2'); ?>>Ik denk eerst, en dan doe ik.</label></li>
            <li><label class="pointer label_hover" for="2.3"><input name="vraag2" id="2.3" type="radio"  value="3" <?php echo set_radio('vraag2', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 3:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="3.1"><input name="vraag3" id="3.1" type="radio"  value="1" <?php echo set_radio('vraag3', '1'); ?>>Ik ben makkelijk afgeleid, met minder aandacht voor een enkele specifieke taak.</label></li>
            <li><label class="pointer label_hover" for="3.2"><input name="vraag3" id="3.2" type="radio"  value="2" <?php echo set_radio('vraag3', '2'); ?>>Ik kan me goed focussen, met minder aandacht voor het grote geheel.</label></li>
            <li><label class="pointer label_hover" for="3.3"><input name="vraag3" id="3.3" type="radio"  value="3" <?php echo set_radio('vraag3', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 4:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="4.1"><input name="vraag4" id="4.1" type="radio"  value="1" <?php echo set_radio('vraag4', '1'); ?>>Ik ben een makkelijke prater en ga graag uit.</label></li>
            <li><label class="pointer label_hover" for="4.2"><input name="vraag4" id="4.2" type="radio"  value="2" <?php echo set_radio('vraag4', '2'); ?>>Ik ben een goede luisteraar en meer een privé-persoon.</label></li>
            <li><label class="pointer label_hover" for="4.3"><input name="vraag4" id="4.3" type="radio"  value="3" <?php echo set_radio('vraag4', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 5:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="5.1"><input name="vraag5" id="5.1" type="radio"  value="1" <?php echo set_radio('vraag5', '1'); ?>>Als gastheer/-vrouw ben ik altijd het centrum van de belangstelling.</label></li>
            <li><label class="pointer label_hover" for="5.2"><input name="vraag5" id="5.2" type="radio"  value="2" <?php echo set_radio('vraag5', '2'); ?>>Als gastheer/-vrouw ben altijd achter de schermen bezig om te zorgen dat alles soepeltjes verloopt.</label></li>
            <li><label class="pointer label_hover" for="5.3"><input name="vraag5" id="5.3" type="radio"  value="3" <?php echo set_radio('vraag5', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
    <div class="centreer">
        <input type="submit" class="verzendknop margin_top_50" value="Volgende stap">
    </div>
    </form>
</div>