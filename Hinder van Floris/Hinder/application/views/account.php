<!-- Deze view laat je account zien, hier kun je ook wachtwoord veranderen of uitloggen -->
<script>
    //Haalt de beschrijving d.m.v. AJAX uit de pagina
    function beschrijvingchange(){
        var ntekst = $("#beschrijving").val();
        $.ajax({
            url: "<?php echo base_url('index.php/User/besUpdate'); ?>",
            type: "POST",
            data: {beschrijving: ntekst},                   
            
            success: function()
            {
                alert("Opgeslagen");                                    
            }
        });
    }
    
    //Haalt geaardheid d.m.v. AJAX uit de pagina
    function geaardheidchange(gea){
        $.ajax({
            url: "<?php echo base_url('index.php/User/geaUpdate'); ?>",
            type: "POST",
            data: {geaardheid: gea},                   
            
            success: function()
            {
                alert("Opgeslagen");                                    
            }
        });
    }

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
            $.ajax({
                url: "<?php echo base_url('index.php/User/ageUpdate'); ?>",
                type: "POST",
                data: {min: ui.values[0], max: ui.values[1]},                   
                success: function()
                {
                    //alert("Opgeslagen");     
                }
            });   
        } 
        });
        $( "#amount" ).val($( "#leeftijd-range" ).slider( "values", 0 ) +
        " tot en met " + $( "#leeftijd-range" ).slider( "values", 1 ) );
    });
    
    //Opent een nieuwe window als de gebruiker op verwijder gebruiker drukt, waarin gevraagd wordt of de gebruiker zeker weet dat hij/zij afscheid wil nemen van onze prachtige site.
    function popUp(url)  
    { 
        var newWindow = '';
        
        newWindow = window.open(url, 'verwijderGebruikerPopup', 'height=250,width=400,left=400,top=200'); 
        if (window.focus)  
        { 
            newWindow.focus(); 
        } 
        return false; 
    }
</script>
<div class="content">
    <h1>Mijn Account</h1>
    <hr width="80%">
    <div class="width_80 centreer_alles" id="content">
        <a class="verzendknop" href="<?php echo base_url('index.php/Login/logUit');?>">Uitloggen</a>
        <a class="verzendknop" href="<?php echo base_url('index.php/Login/wwchange');?>">Wachtwoord wijzigen</a>
        <hr width="100%">
        <h2>Persoonlijke Informatie</h2>
        <img class="afbeelding margin_top_30 margin_bottom_20" src="<?php
                if(isset($profielfoto)){
                    echo base_url($profielfoto);
                }
                else{ 
                    //Laat een mannelijk silhouette zien als placeholder als de persoon een man is en tegenovergestelde voor vrouw
                    if($geslacht == 'M'){
                        echo base_url('css/images/male_silhouette.jpg');
                    }
                    else{
                        echo base_url('css/images/female_silhouette.jpg');
                    }
                }
                  ?>" alt="profiel_afbeelding" width="200" height="200">
        <?php if(isset($error))echo $error;?>
        <?php echo form_open_multipart('User/do_upload');?>
<div class="onder_elkaar">
<input type="file" name="userfile" size="20" />
<input class="verzendknop" type="submit" value="upload" />
</div>
</form>
        <?php echo "<div class='account_info bold'><p>Nickname: ".$nick."</p><p>Voornaam: ".$voornaam."</p><p>Achternaam: ".$achternaam."</p><p>E-mail: ".$email."</p><p>Geslacht: ";
        if($geslacht == 'M'){
              echo 'Man';
          }
          else{
              echo 'Vrouw';
          }
        echo"</p><p>Geboortedatum: ".$geboortedatum."</p><p>Persoonlijkheidstype: ".$ptype."</p><p>".$persw."</div>" ; ?>
        <a class="verzendknop" href="<?php echo base_url('index.php/User/wijzigAccount');?>">Accountgegevens wijzigen</a>
        <form class="margin_top_30" id="beschrijvingForm" action="">
            <textarea rows="4" cols="50" form="beschrijvingForm" id="beschrijving"><?php echo $beschrijving; ?></textarea><br>
            <div class="centreer">
                <input type="button" class="verzendknop" onclick="javascript:beschrijvingchange();" value="Beschrijving bijwerken">
            </div>
        </form>
        <hr width="100%">
        <h2>Persoonlijke voorkeuren</h2>
        <form id="geslachtsvoorkeur" action="">
            <p class="centreer bold margin_top_30">Ik val op:</p>
            <div class="geaardheid">
                <label for="M">
                <input type="radio" name="geaardheid" id="M" value="M" placeholder="Mannen" onclick="javascript:geaardheidchange('M');" <?php if(isset($valtop)){ if($valtop == "M"){echo 'checked="checked"';}} ?> >Mannen</label>
                <label for="V">
                <input type="radio" name="geaardheid"id="V" value="V" placeholder="Vrouwen" onclick="javascript:geaardheidchange('V');" <?php if(isset($valtop)){if($valtop == "V"){echo 'checked="checked"';}} ?>  >Vrouwen</label>
                <label for="B">
                <input type="radio" name="geaardheid" id="B" value="B" placeholder="Beide" onclick="javascript:geaardheidchange('B');" <?php if(isset($valtop)){ if($valtop == "B"){echo 'checked="checked"';}} ?> >Beide</label>
            </div>
        </form>
        <div class="margin_top_30 width_80 centreer_alles">
            <p>
            <label for="amount" class="bold">Leeftijdsvoorkeur:</label>
            <input type="text" id="amount" readonly >
            </p>
            <div class="width_80 margin_bottom_20" id="leeftijd-range"></div>
        </div>
        <?php echo '<p class="bold">Merkvoorkeuren:</p>'.$merkvk ?>
    </div>
    <div class="margin_top_15">
        <a class="verzendknop" href="<?php echo base_url('index.php/User/wijzigMerkVk');?>">Wijzig Merkvoorkeuren</a>
    </div>
    <div class="margin_top_30 margin_bottom_20">
        <a class="verzendknop" href="<?php echo base_url('index.php/User/verwijderGebruikerPopup');?>" onclick="return popUp('<?php echo base_url('index.php/User/verwijderGebruikerPopup');?>')">Account verwijderen</a>
    </div>
</div>