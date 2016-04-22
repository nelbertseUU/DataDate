<div class="content">
    <h1>Registreren</h1>
    <hr width="80%">
    <h2>Stap 2</h2>
    <p>Vul hieronder de vragenlijst in waaruit wij jouw persoonlijkheidstype bepalen</p>
    <?php echo form_open('Login/vragenform'); ?>
        <div class="vraag">
        <p>Vraag 1:</p>
        <ul class="vragenlijst">
            <li><input name="vraag1" type="radio" value="<?php echo set_value('E'); ?>">Ik geef de voorkeur aan grote groepen mensen, met een grote diversiteit.</li>
            <li><input name="vraag1" type="radio"  value="<?php echo set_value('I'); ?>">Ik geef de voorkeur aan intieme bijeenkomsten met uitsluitend goede vrienden.</li>
            <li><input name="vraag1" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        </div>
        <p>Vraag 2:</p>
        <ul class="vragenlijst">
            <li><input name="vraag2" type="radio"  value="<?php echo set_value('E'); ?>">Ik doe eerst, en dan denk ik.</li>
            <li><input name="vraag2" type="radio"  value="<?php echo set_value('I'); ?>">Ik denk eerst, en dan doe ik.</li>
            <li><input name="vraag2" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 3:</p>
        <ul class="vragenlijst">
            <li><input name="vraag3" type="radio"  value="<?php echo set_value('E'); ?>">Ik ben makkelijk afgeleid, met minder aandacht voor een enkele specifieke taak.</li>
            <li><input name="vraag3" type="radio"  value="<?php echo set_value('I'); ?>">Ik kan me goed focussen, met minder aandacht voor het grote geheel.</li>
            <li><input name="vraag3" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 4:</p>
        <ul class="vragenlijst">
            <li><input name="vraag4" type="radio"  value="<?php echo set_value('E'); ?>">Ik ben een makkelijke prater en ga graag uit.</li>
            <li><input name="vraag4" type="radio"  value="<?php echo set_value('I'); ?>">Ik ben een goede luisteraar en meer een privé-persoon.</li>
            <li><input name="vraag4" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 5:</p>
        <ul class="vragenlijst">
            <li><input name="vraag5" type="radio"  value="<?php echo set_value('E'); ?>">Als gastheer/-vrouw ben ik altijd het centrum van de belangstelling.</li>
            <li><input name="vraag5" type="radio"  value="<?php echo set_value('I'); ?>">Als gastheer/-vrouw ben altijd achter de schermen bezig om te zorgen dat alles soepeltjes verloopt.</li>
            <li><input name="vraag5" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 6:</p>
        <ul class="vragenlijst">
            <li><input name="vraag6" type="radio"  value="<?php echo set_value('N'); ?>">Ik geef de voorkeur aan concepten en het leren op basis van associaties.</li>
            <li><input name="vraag6" type="radio"  value="<?php echo set_value('S'); ?>">Ik geef de voorkeur aan observaties en het leren op basis van feiten.</li>
            <li><input name="vraag6" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 7:</p>
        <ul class="vragenlijst">
            <li><input name="vraag7" type="radio"  value="<?php echo set_value('N'); ?>">Ik heb een groot inbeeldingsvermogen en heb een globaal overzicht van een project.</li>
            <li><input name="vraag7" type="radio"  value="<?php echo set_value('S'); ?>">Ik ben pragmatisch ingesteld en heb een gedetailleerd beeld van elke stap.</li>
            <li><input name="vraag7" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 8:</p>
        <ul class="vragenlijst">
            <li><input name="vraag8" type="radio"  value="<?php echo set_value('N'); ?>">Ik kijk naar de toekomst.</li>
            <li><input name="vraag8" type="radio"  value="<?php echo set_value('S'); ?>">Ik houd mijn blik op het heden gericht.</li>
            <li><input name="vraag8" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 9:</p>
        <ul class="vragenlijst">
            <li><input name="vraag9" type="radio"  value="<?php echo set_value('N'); ?>">Ik houd van de veranderlijkheid in relaties en taken.</li>
            <li><input name="vraag9" type="radio"  value="<?php echo set_value('S'); ?>">Ik houd van de voorspelbaarheid in relaties en taken.</li>
            <li><input name="vraag9" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 10:</p>
        <ul class="vragenlijst">
            <li><input name="vraag10" type="radio"  value="<?php echo set_value('T'); ?>">Ik overdenk een beslissing helemaal.</li>
            <li><input name="vraag10" type="radio"  value="<?php echo set_value('F'); ?>">Ik beslis met mijn gevoel.</li>
            <li><input name="vraag10" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 11:</p>
        <ul class="vragenlijst">
            <li><input name="vraag11" type="radio"  value="<?php echo set_value('T'); ?>">Ik werk het beste met een lijst plussen en minnen.</li>
            <li><input name="vraag11" type="radio"  value="<?php echo set_value('F'); ?>">Ik beslis op basis van de gevolgen voor mensen.</li>
            <li><input name="vraag11" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 12:</p>
        <ul class="vragenlijst">
            <li><input name="vraag12" type="radio"  value="<?php echo set_value('T'); ?>">Ik ben van nature kritisch.</li>
            <li><input name="vraag12" type="radio"  value="<?php echo set_value('F'); ?>">Ik maak het mensen graag naar de zin.</li>
            <li><input name="vraag12" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 13:</p>
        <ul class="vragenlijst">
            <li><input name="vraag13" type="radio"  value="<?php echo set_value('T'); ?>">Ik ben eerder eerlijk dan tactisch.</li>
            <li><input name="vraag13" type="radio"  value="<?php echo set_value('F'); ?>">Ik ben eerder tactisch dan eerlijk.</li>
            <li><input name="vraag13" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 14:</p>
        <ul class="vragenlijst">
            <li><input name="vraag14" type="radio"  value="<?php echo set_value('J'); ?>">Ik houd van vertrouwde situaties.</li>
            <li><input name="vraag14" type="radio"  value="<?php echo set_value('P'); ?>">Ik houd van flexibele situaties.</li>
            <li><input name="vraag14" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 15:</p>
        <ul class="vragenlijst">
            <li><input name="vraag15" type="radio"  value="<?php echo set_value('J'); ?>">Ik plan alles, met een to-do lijstje in mijn hand.</li>
            <li><input name="vraag15" type="radio"  value="<?php echo set_value('P'); ?>">Ik wacht tot er meerdere ideeën opborrelen en kies dan on-the-fly wat te doen.</li>
            <li><input name="vraag15" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 16:</p>
        <ul class="vragenlijst">
            <li><input name="vraag16" type="radio"  value="<?php echo set_value('J'); ?>">Ik houd van het afronden van projecten.</li>
            <li><input name="vraag16" type="radio"  value="<?php echo set_value('P'); ?>">Ik houd van het opstarten van projecten.</li>
            <li><input name="vraag16" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 17:</p>
        <ul class="vragenlijst">
            <li><input name="vraag17" type="radio"  value="<?php echo set_value('J'); ?>">Ik ervaar stress door een gebrek aan planning en abrupte wijzigingen.</li>
            <li><input name="vraag17" type="radio"  value="<?php echo set_value('P'); ?>">Ik ervaar gedetailleerde plannen als benauwend en kijk uit naar veranderingen.</li>
            <li><input name="vraag17" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 18:</p>
        <ul class="vragenlijst">
            <li><input name="vraag18" type="radio"  value="<?php echo set_value('J'); ?>">Het is waarschijnlijker dat ik een doel bereik.</li>
            <li><input name="vraag18" type="radio"  value="<?php echo set_value('P'); ?>">Het is waarschijnlijker dat ik een kans zie.</li>
            <li><input name="vraag18" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <p>Vraag 19:</p>
        <ul class="vragenlijst">
            <li><input name="vraag19" type="radio"  value="<?php echo set_value('J'); ?>">"All play and no work maakt dat het project niet afkomt."</li>
            <li><input name="vraag19" type="radio"  value="<?php echo set_value('P'); ?>">"All work and no play maakt je maar een saaie pief."</li>
            <li><input name="vraag19" type="radio"  value="<?php echo set_value('O'); ?>">Ik zit er eigenlijk tussenin.</li>
        </ul>
        <div class="centreer">
            <input type="submit" class="verzendknop margin_top_50" value="Volgende stap">
        </div>
    </form>
</div>