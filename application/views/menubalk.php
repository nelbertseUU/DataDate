<link rel="stylesheet" href="css/menubalk.css">
<script>
//de display functie doet precies wat de naam suggereert.
//De hide functie doet exact het omgekeerde.
function displayDropdownTraceroute(){
    var a = document.getElementById('traceroute');
    a.style.display = "block";
}
function hideDropdownTraceroute(){
    var a = document.getElementById('traceroute');
    a.style.display = "none";
}
function displayDropdownAccessLog(){
    var a = document.getElementById('access_logs');
    a.style.display = "block";
}
function hideDropdownAccessLog(){
    var a = document.getElementById('access_logs');
    a.style.display = "none";
}
function displayDropdownOverig(){
    var a = document.getElementById('overig');
    a.style.display = "block";
}
function hideDropdownOverig(){
    var a = document.getElementById('overig');
    a.style.display = "none";
}
</script>
<div class="menubalk_afbeelding">
</div>
<div class="menubalk">
    <script>
    $( window ).scroll(function() {
         if ($(window).scrollTop() > 1) {
            $('.menubalk_afbeelding').css("display", "none").fadeOut(500);
            $('.menubalk').css("margin-top", "0");
         }
         else {
             $('.menubalk_afbeelding').fadeIn(500);
         }
    });
    </script>
    <ul class="menubalk_lijst">
        <li class="menublokken"><a class="menulinks" href="https://www.projects.science.uu.nl/INFOB1PICA/2015/02/Hinder/">Home</a></li>
        <li class="menublokken"><a class="menulinks" onmouseover="displayDropdownTraceroute()" onmouseleave="hideDropdownTraceroute()" href="traceroute.html">placeholder</a>
        <div class="dropdown">
        <ul class="dropdown_menu" id="traceroute" onmouseover="displayDropdownTraceroute()" onmouseleave="hideDropdownTraceroute()">
            <li class="menublokken_dropdown"><a class="menulinks" id="margin_dropdown" href="traceroute.html#the_internet_map">placeholder</a></li>
            <li class="menublokken_dropdown"><a class="menulinks" id="margin_dropdown" href="traceroute.html#map_of_the_internet">placeholder</a></li>
            <li class="menublokken_dropdown"><a class="menulinks" id="margin_dropdown" href="traceroute.html#the_opte_project">placeholder</a></li>
        </ul>
        </div>
        </li>
        <li class="menublokken"><a class="menulinks" onmouseover="displayDropdownAccessLog()" onmouseleave="hideDropdownAccessLog()" href="access_logs.html">placeholder</a>
        <ul class="dropdown_menu" id="access_logs" onmouseover="displayDropdownAccessLog()" onmouseleave="hideDropdownAccessLog()">
            <li class="menublokken_dropdown"><a class="menulinks" href="access_logs.html#Logstalgia">placeholder</a></li>
            <li class="menublokken_dropdown"><a class="menulinks" href="access_logs.html#glTail">placeholder</a></li>
            <li class="menublokken_dropdown"><a class="menulinks" href="access_logs.html#Gource">placeholder</a></li>
            <li class="menublokken_dropdown"><a class="menulinks" href="access_logs.html#glTrail">placeholder</a></li>
        </ul>
        </li>
        <li class="menublokken"><a class="menulinks" onmouseover="displayDropdownOverig()" onmouseleave="hideDropdownOverig()" href="overige_visualisaties.html">placeholder</a>
        <ul class="dropdown_menu" id="overig" onmouseover="displayDropdownOverig()" onmouseleave="hideDropdownOverig()">
            <li class="menublokken_dropdown"><a class="menulinks" href="overige_visualisaties.html#infographics">placeholder</a></li>
        </ul>
        </li>
        <li class="menublokken"><a class="menulinks" href="fotobrowser.html">placeholder</a></li>
        <li class="menublokken"><a class="menulinks" href="conclusie.html">placeholder</a></li>
    </ul>
</div>