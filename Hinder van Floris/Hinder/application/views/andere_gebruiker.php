<script>
$(document).ready(function() {
        checklike();
        //init();
    });
    
    
    function lik(id){
    $.ajax({
            url: "<?php echo base_url('index.php/User/like/'.$OtherID); ?>",
            type: "POST",
                        
            success: function(){
                checklike();
                
            }
         });
    
}
    function checklike(){
     $.ajax({
            url: "<?php echo base_url('index.php/User/checklike/'.$OtherID); ?>",
            type: "POST",
                        
            success: function(yn){
                if(yn == 1){
                   document.getElementById("liknop").style.display = "none"; 
                    document.getElementById("liknop2").style.display = "none"; 
                    document.getElementById("liknop3").style.display = "none"; 
                }
                
            }
         });
    }


</script>
<div class="content">
    <h1>Account Details</h1>
    
    
    <hr width="80%" id="liknop" >
        <a id="liknop2" class="verzendknop" onclick="lik(<?php echo $OtherID; ?>)">Like
            <i class="margin_left_10 fa fa-thumbs-up"></i></a>
    <p id="liknop3">Let op! Als je iemand liked, is dit definitief!</p>
    
    
    <hr width="80%">
    <h2><?php echo $nick.'\'s' ?> Informatie</h2>
    <img class="afbeelding margin_top_30 margin_bottom_20" src="<?php
              //Laat een mannelijk silhouette zien als placeholder als de persoon een man is en tegenovergestelde voor vrouw
              if($geslacht == 'M'){
                  echo base_url('css/images/male_silhouette.jpg');
              }
              else{
                  echo base_url('css/images/female_silhouette.jpg');
              }
              ?>" alt="profiel_afbeelding">
    <?php echo "<div class='account_info bold'><p>Nickname: ".$nick."</p><p>Voornaam: ".$voornaam."</p><p>Achternaam: ".$achternaam."</p><p>E-mail: ".$email."</p><p>Geslacht: ";
    if($geslacht == 'M'){
          echo 'Man';
      }
      else{
          echo 'Vrouw';
      }
    echo"</p><p>Geboortedatum: ".$geboortedatum."</p><p>Persoonlijkheidstype: ".$ptype."</p><p>Beschrijving: ".$beschrijving."</p></div>" ; ?>
    <hr width="100%">
    <h2><?php echo $nick.'\'s' ?> voorkeuren</h2>
    <p class="bold"><?php echo $nick; ?> valt op:</p>
    <?php if(isset($valtop)){ if($valtop == "M"){echo 'Mannen';}else if($valtop == "V"){echo 'Vrouwen';}else{echo 'Beide geslachten';}} ?> 
    <p class="bold">Leeftijdsvoorkeur:</p>
    <?php echo $age_min.' tot en met '.$age_max; ?>
    <?php echo '<p class="bold">Merkvoorkeuren:</p>'.$merkVk ?>
    <div class="margin_bottom_20"></div>
</div>