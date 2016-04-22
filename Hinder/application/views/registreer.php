<script>
    //Haalt de voorkeursleeftijd d.m.v. AJAX uit de pagina
    $(function() {
        $( "#leeftijd-range" ).slider({
        range: true,
        min: 18,
        max: 99,
        values: [ <?php echo $age_min; ?>, <?php echo $age_max; ?> ],
        slide: function( event, ui )
        {
            $( "#amount" ).val(ui.values[ 0 ] + " tot en met " + ui.values[ 1 ] );
            $("#pass_to_controller").val(ui.values[ 0 ] + ', ' + ui.values[ 1 ])
        } 
        });
        $( "#amount" ).val($( "#leeftijd-range" ).slider( "values", 0 ) +
        " tot en met " + $( "#leeftijd-range" ).slider( "values", 1 ) );
    });
</script>  
<div class="content">
    <h1>Registreren</h1>
    <hr width="80%">
    <!-- Op deze pagina vult u uw persoonlijke gegevens in voor uw nieuwe account, waarna een activatiemail naar het ingevulde mailadres wordt gestuurd om te checken of het een echte mail is -->
    <h2>Stap 1</h2>
    <p>Vul hier je persoonlijke informatie en voorkeuren in:</p>
    <h3>Persoonlijke Informatie</h3>
    <hr width="50%">
    <?php echo form_open('Login/checkform', $attributes); ?>
    <div class="space_between">
        <div>
            <?php echo form_error('nick'); ?>
            <p>Nickname (4 tot 15 karakters):</p> 
                <input maxlength="80" type="text" name="nick" value="<?php echo set_value('nick'); ?>">
        </div>
        <div>
            <?php echo form_error('email'); ?>
            <p class="layout_text"> Email adres:</p>
                <input maxlength="80" type="email" name="email" value="<?php echo set_value('email'); ?>" >
        </div>
    </div>
    <div class="space_between">
        <div>
            <?php echo form_error('voornaam'); ?>
            <p>Voornaam:</p> 
                <input maxlength="80" type="text" name="voornaam" value="<?php echo set_value('voornaam'); ?>" >
        </div>
        <div>
            <?php echo form_error('achternaam'); ?>
            <p>Achternaam:</p> 
                <input maxlength="80" type="text" name="achternaam" value="<?php echo set_value('achternaam'); ?>">
        </div>
    </div>
    <div class="space_between">
        <div>    
            <?php echo form_error('password'); ?>
            <p>Wachtwoord<br> (5 tot 12 karakters):</p>
                <input maxlength="80" type="password" name="password" value="<?php echo set_value('password'); ?>" >
        </div>
        <div>
            <!-- Hieronder wordt het wachtwoord gecheckt -->
            <?php echo form_error('passconf'); ?>
            <p>Wachtwoord<br>Controleren:</p>
                <input maxlength="80" type="password" value="<?php echo set_value('passconf'); ?>" name="passconf">
        </div>
    </div>
    <div class="space_between">
        <div>
            <?php echo form_error('geboortedatum'); ?>
            <p>Geboortedatum (dd-mm-jjjj):</p> 
                <input type="text" name="geboortedatum" value="<?php echo set_value('geboortedatum'); ?>">
        </div>
        <div class="margin_left_-10">
            <?php echo form_error('geslacht'); ?>
            <p>Geslacht:</p> 
                <div class="geslacht">
                    <input type="radio" name="geslacht" value="M" placeholder="Man" checked="checked">Man
                    <input class="margin_left_40" type="radio" name="geslacht" value="V" placeholder="Vrouw">Vrouw
                </div>
        </div>
    </div>
    <div class="centreer_alles margin_top_30">
    <p>Beschrijving:</p>
    <?php
    $data = array(
              'name'        => 'beschrijving',
              'placeholder' => 'Vertel wat over jezelf',
              'rows'        => '4',
              'cols'        => '50'
            );
    
    echo form_textarea($data);
    ?>
    </div>
    <h3 class="centreer">Voorkeuren</h3>
    <hr width="100%">
    <div class="centreer_alles">
        <p>Ik val op:</p>
        <div class="geaardheid">
            <input type="radio" name="geaardheid" value="M" placeholder="Mannen" checked="checked">Mannen
            <input type="radio" name="geaardheid" value="V" placeholder="Vrouwen">Vrouwen
            <input type="radio" name="geaardheid" value="B" placeholder="Beide">Beide
        </div>
    </div>
    <div class="margin_top_30 centreer_alles">
        <p>
            <label for="amount">Leeftijdsvoorkeur:</label>
            <input type="text" name="leeftijdsvoorkeur" id="amount" readonly >
        </p>
        <input type="hidden" name="AgeVk" id="pass_to_controller">
        <div class="width_80 margin_bottom_20" id="leeftijd-range"></div>
    </div>
    <div class="margin_top_30 centreer">
        <input type="submit" class="verzendknop" value="Volgende stap">
    </div>
    </form>
</div>