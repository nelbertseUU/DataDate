<div class="content">
    <h1>Registreren</h1>
    <hr width="80%">
    <h2>Stap 2</h2>
    <p>Vul hieronder de vragenlijst in waaruit wij jouw persoonlijkheidstype bepalen</p>
    <?php echo form_open('Perstest/vragenformTF'); echo validation_errors();?>
    
    <p>Vraag 10:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="10.1"><input name="vraag10" id="10.1" type="radio" value="1" <?php echo set_radio('vraag10', '1'); ?>>Ik overdenk een beslissing helemaal.</label></li>
            <li><label class="pointer label_hover" for="10.2"><input name="vraag10" id="10.2" type="radio" value="2" <?php echo set_radio('vraag10', '2'); ?>>Ik beslis met mijn gevoel.</label></li>
            <li><label class="pointer label_hover" for="10.2"><input name="vraag10" id="10.2" type="radio" value="3" <?php echo set_radio('vraag10', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 11:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="11.1"><input name="vraag11" id="11.1" type="radio" value="1" <?php echo set_radio('vraag11', '1'); ?>>Ik werk het beste met een lijst plussen en minnen.</label></li>
            <li><label class="pointer label_hover" for="11.2"><input name="vraag11" id="11.2" type="radio" value="2" <?php echo set_radio('vraag11', '2'); ?>>Ik beslis op basis van de gevolgen voor mensen.</label></li>
            <li><label class="pointer label_hover" for="11.3"><input name="vraag11" id="11.3" type="radio" value="3" <?php echo set_radio('vraag11', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 12:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="12.1"><input name="vraag12" id="12.1" type="radio" value="1" <?php echo set_radio('vraag12', '1'); ?>>Ik ben van nature kritisch.</label></li>
            <li><label class="pointer label_hover" for="12.2"><input name="vraag12" id="12.2" type="radio" value="2" <?php echo set_radio('vraag12', '2'); ?>>Ik maak het mensen graag naar de zin.</label></li>
            <li><label class="pointer label_hover" for="12.3"><input name="vraag12" id="12.3" type="radio" value="3" <?php echo set_radio('vraag12', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
        <p>Vraag 13:</p>
        <ul class="vragenlijst">
            <li><label class="pointer label_hover" for="13.1"><input name="vraag13" id="13.1" type="radio" value="1" <?php echo set_radio('vraag13', '1'); ?>>Ik ben eerder eerlijk dan tactisch.</label></li>
            <li><label class="pointer label_hover" for="13.2"><input name="vraag13" id="13.2" type="radio" value="2" <?php echo set_radio('vraag13', '2'); ?>>Ik ben eerder tactisch dan eerlijk.</label></li>
            <li><label class="pointer label_hover" for="13.3"><input name="vraag13" id="13.3" type="radio" value="3" <?php echo set_radio('vraag13', '3'); ?>>Ik zit er eigenlijk tussenin.</label></li>
        </ul>
    
       
  <div class="centreer">
            <input type="submit" class="verzendknop margin_top_50" value="Volgende stap">
        </div>
    </form>
</div>