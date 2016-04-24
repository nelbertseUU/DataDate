<div class="content">
    <h1>Registreren</h1>
    <hr width="80%">
    <h2>Stap 2</h2>
    <p>Vul hieronder de vragenlijst in waaruit wij jouw persoonlijkheidstype bepalen</p>
    <?php echo form_open('Perstest/vragenformJP'); echo validation_errors(); ?>
    
    
    <p>Vraag 14:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="14.1"><input name="vraag14" id="14.1" type="radio"  value="1" <?php echo set_radio('vraag14', '1'); ?>>Ik houd van vertrouwde situaties.</label></li>
            <li><label class="pointer label_hover" for="14.2"><input name="vraag14" id="14.2" type="radio" value="2" <?php echo set_radio('vraag14', '2'); ?>>Ik houd van flexibele situaties.</label></li>
            <li><label class="pointer label_hover" for="14.3"><input name="vraag14" id="14.3" type="radio" value="3" <?php echo set_radio('vraag14', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 15:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="15.1"><input name="vraag15" id="15.1" type="radio" value="1" <?php echo set_radio('vraag15', '1'); ?>>Ik plan alles, met een to-do lijstje in mijn hand.</label></li>
            <li><label class="pointer label_hover" for="15.2"><input name="vraag15" id="15.2" type="radio" value="2" <?php echo set_radio('vraag15', '2'); ?>>Ik wacht tot er meerdere ideeën opborrelen en kies dan on-the-fly wat te doen.</label></li>
            <li><label class="pointer label_hover" for="15.3"><input name="vraag15" id="15.3" type="radio" value="3" <?php echo set_radio('vraag15', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 16:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="16.1"><input name="vraag16" id="16.1" type="radio" value="1" <?php echo set_radio('vraag16', '1'); ?>>Ik houd van het afronden van projecten.</label></li>
            <li><label class="pointer label_hover" for="16.2"><input name="vraag16" id="16.2" type="radio" value="2" <?php echo set_radio('vraag16', '2'); ?>>Ik houd van het opstarten van projecten.</label></li>
            <li><label class="pointer label_hover" for="16.3"><input name="vraag16" id="16.3" type="radio" value="3" <?php echo set_radio('vraag16', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 17:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="17.1"><input name="vraag17" id="17.1" type="radio" value="1" <?php echo set_radio('vraag17', '1'); ?>>Ik ervaar stress door een gebrek aan planning en abrupte wijzigingen.</label></li>
            <li><label class="pointer label_hover" for="17.2"><input name="vraag17" id="17.2" type="radio" value="2" <?php echo set_radio('vraag17', '2'); ?>>Ik ervaar gedetailleerde plannen als benauwend en kijk uit naar veranderingen.</label></li>
            <li><label class="pointer label_hover" for="17.3"><input name="vraag17" id="17.3" type="radio" value="3" <?php echo set_radio('vraag17', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 18:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="18.1"><input name="vraag18" id="18.1" type="radio" value="1" <?php echo set_radio('vraag18', '1'); ?>>Het is waarschijnlijker dat ik een doel bereik.</label></li>
            <li><label class="pointer label_hover" for="18.2"><input name="vraag18" id="18.2" type="radio" value="2" <?php echo set_radio('vraag18', '2'); ?>>Het is waarschijnlijker dat ik een kans zie.</label></li>
            <li><label class="pointer label_hover" for="18.3"><input name="vraag18" id="18.3" type="radio" value="3" <?php echo set_radio('vraag18', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 19:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="19.1"><input name="vraag19" id="19.1" type="radio" value="1" <?php echo set_radio('vraag19', '1'); ?>>"All play and no work maakt dat het project niet afkomt."</label></li>
            <li><label class="pointer label_hover" for="19.2"><input name="vraag19" id="19.2" type="radio" value="2" <?php echo set_radio('vraag19', '2'); ?>>"All work and no play maakt je maar een saaie pief."</label></li>
            <li><label class="pointer label_hover" for="19.3"><input name="vraag19" id="19.3" type="radio" value="3" <?php echo set_radio('vraag19', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <div class="centreer">
            <input type="submit" class="verzendknop margin_top_50" value="Volgende stap">
        </div>
    </form>
</div>