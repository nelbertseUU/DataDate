
<script>
//de display functie doet precies wat de naam suggereert.
//De hide functie doet exact het omgekeerde.
function displayDropdown(){
    var a = document.getElementById('overig');
    a.style.display = "block";
}
function hideDropdown(){
    var a = document.getElementById('overig');
    a.style.display = "none";
}
</script>
<div class="menubalk_afbeelding">
</div>
<div class="menubalk">
   <script>
        /*
    $( window ).scroll(function() {
         if ($(window).scrollTop() > 0) {
            $('.menubalk_afbeelding').css("display", "none").fadeOut(0);
            $('.menubalk').css("margin-top", "0");
         }
         else {
             $('.menubalk_afbeelding').fadeIn(0);
         }
    });*/
    </script>
    <ul class="menubalk_lijst">
        <li class="menublokken">
            <a class="menulinks" href="<?php echo base_url('') ?>">Home<i class="margin_top_2 margin_left_10 fa fa-home"></i></a>
        </li>
        <li class="menublokken">
            <a class="menulinks" href="<?php echo base_url('index.php/Matching/') ?>">Matching<i class="margin_top_4 margin_left_10 fa fa-venus-mars"></i></a>
        </li>
        <li class="menublokken">
            <a class="menulinks" href="<?php echo base_url('index.php/Zoeken/') ?>">Zoek gebruikers<i class="margin_top_2 margin_left_10 fa fa-search"></i></a>
        </li>
        <li class="menublokken">
            <a class="menulinks" onmouseover="displayDropdown()" onmouseleave="hideDropdown()" href="<?php
            if (isset($_SESSION["ingelogd"])){
                if ($_SESSION["ingelogd"] == TRUE){
                    echo base_url('index.php/User');
                } 
                else{
                    echo base_url('index.php/Login');
                }
            }
            else{
                echo base_url('index.php/Login');
            }
            ?> ">  
            <?php 
            if (isset($_SESSION["ingelogd"])){
                if ($_SESSION["ingelogd"] == TRUE){
                    echo 'Mijn Account <i class="margin_top_2 margin_left_10 fa fa-user"></i>';
                } 
                else {
                    echo 'Inloggen <i class="margin_top_4 margin_left_10 fa fa-sign-in"></i>';
                }
            }
            else{
                echo 'Inloggen <i class="margin_top_4 margin_left_10 fa fa-sign-in"></i>';
            }
            ?>  
            </a>
            <?php 
            if (isset($_SESSION["ingelogd"])){
                if ($_SESSION["ingelogd"] == TRUE){
                    echo 
                    '<ul class="dropdown_menu" id="overig" onmouseover="displayDropdown()" onmouseleave="hideDropdown()">
                        <li class="menublokken_dropdown">
                            <a class="menulinks" href="';
                    echo base_url('index.php/Login/logUit');
                    echo '">Uitloggen <i class="margin_top_4 margin_left_10 fa fa-sign-out"></i></a>
                        </li>
                    </ul>';
                } 
                else {
                    echo '<ul class="dropdown_menu" id="overig" onmouseover="displayDropdown()" onmouseleave="hideDropdown()">
                        <li class="menublokken_dropdown">
                            <a class="menulinks" href="'; 
                    echo base_url('index.php/Login/registratie');
                    echo '">Registreren <i class="margin_top_2 margin_left_10 fa fa-user-plus"></i></a>
                        </li>
                    </ul>';
                }
            }
            else{
                echo 
                '<ul class="dropdown_menu" id="overig" onmouseover="displayDropdown()" onmouseleave="hideDropdown()">
                    <li class="menublokken_dropdown">
                        <a class="menulinks" href="';
                echo base_url('index.php/Login/registratie');
                echo '">Registreren <i class="margin_top_2 margin_left_10 fa fa-user-plus"></i></a>
                    </li>
                </ul>';
            }
            ?> 
        </li>
    </ul>
</div>