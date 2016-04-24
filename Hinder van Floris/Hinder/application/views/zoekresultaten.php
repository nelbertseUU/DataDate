<script>
    var min = 0;
    var max = 6;
    var iwaarde = 0;
    var dingetje = <?php echo $dingetje; ?>;
    var i;
    
    $(document).ready(function() {   
        pakprofiel(min, max);
        init(); 
    });
    
    function pakprofiel(minn, maxx){
        
        for(i = minn; i < maxx; i++){
            
            if((i in dingetje)){
                
            
            naam = dingetje[i].gebruiker;
            geb = getLeeftijd(dingetje[i].gebdatum);
            geslacht = dingetje[i].geslacht;
            beschrijving = dingetje[i].beschrijving.substring(0, 25) + '...';
            persType = dingetje[i].persType;
            merkVk = dingetje[i].merkVk;
            id = dingetje[i].id;

            var perspic = document.getElementById('img'+[i-(iwaarde*6)+1]);
            document.getElementById('a'+[i-(iwaarde*6)+1]).style.display = "";
            var pershref = document.getElementById('a'+[i-(iwaarde*6)+1]);
            var pers = document.getElementById('u'+[i-(iwaarde*6)+1]);

            if(geslacht == 'M'){
                perspic.src= 'https://www.projects.science.uu.nl/INFOB1PICA/2015/02/Hinder/css/images/male_silhouette.jpg';
                gender = 'Man';
                (function(perspic){
                    pershref.addEventListener('mouseover', function(){
                        perspic.src= 'https://www.projects.science.uu.nl/INFOB1PICA/2015/02/Hinder/css/images/male_silhouette_hover.jpg';
                    });
                    pershref.addEventListener('mouseout', function(){
                        perspic.src= 'https://www.projects.science.uu.nl/INFOB1PICA/2015/02/Hinder/css/images/male_silhouette.jpg';
                    });
                })(perspic);
            }
            else{
                perspic.src= 'https://www.projects.science.uu.nl/INFOB1PICA/2015/02/Hinder/css/images/female_silhouette.jpg';
                gender = 'Vrouw';
                (function(perspic){
                    pershref.addEventListener('mouseover', function(){
                        perspic.src= 'https://www.projects.science.uu.nl/INFOB1PICA/2015/02/Hinder/css/images/female_silhouette_hover.jpg';
                    });
                    pershref.addEventListener('mouseout', function(){
                        perspic.src= 'https://www.projects.science.uu.nl/INFOB1PICA/2015/02/Hinder/css/images/female_silhouette.jpg';
                    });
                })(perspic);
            }

            pers.innerHTML = "<div>"+naam+"<br>"+geb+" jaar<br>"+gender+"<br>"+beschrijving+"<br>"+persType+"<br>"+merkVk+"<br><div class='margin_top_15'>Klik voor meer info!</div></div>"; 
            pershref.href = "https://www.projects.science.uu.nl/INFOB1PICA/2015/02/Hinder/index.php/User/anderAccount/"+id;

            document.getElementById('meer').style.display = "";
            if(min==0){
                document.getElementById('minder').style.display = "none";
            }
        }
        else{ 
            document.getElementById('a'+[i-(iwaarde*6)+1]).style.display = "none";
            document.getElementById('meer').style.display = "none"; 
            document.getElementById('minder').style.display = "";
        }
    }
    }
    function getLeeftijd(datum){
        var vandaag = new Date();
        var gebdatum = new Date(datum.replace(/(\d{2})[-/](\d{2})[-/](\d+)/, "$2/$1/$3"));
        var leeftijd = vandaag.getFullYear() - gebdatum.getFullYear();
        var m = vandaag.getMonth() - gebdatum.getMonth();
        if (m < 0 || (m === 0 && vandaag.getDate() < gebdatum.getDate())) {
            leeftijd--;
        }
        return leeftijd;
    }
    
    function meer(){
        min = min + 6; 
        max = max + 6;
        iwaarde++;
        pakprofiel(min, max);
    }
    
    function minder(){
        if(min == 0){}else{min = min -6; max = max -6; iwaarde--;}
        pakprofiel(min, max);
    }
</script>
<div class="content">
    <h1>Zoek-resultaten</h1>
    <hr width="80%">
    <p>Op deze pagina tonen wij de zoekresultaten op basis van de door jou ingevulde zoekparameters.</p>
    <a class="verzendknop" id='minder' onclick="minder()">Laat minder profielen zien</a>
    <a class="verzendknop" id='meer' onclick="meer()">Laat meer profielen zien</a>
    <hr width="80%">
    <div class="random_user_container margin_top_15">
        <a class="random_user centreer_alles" id='a1' href="">
            <img class="home_afb" id="img1">
            <p id='u1' ></p>
        </a>
        <a class="random_user centreer_alles margin_left_50" id='a2' href="">
            <img class="home_afb" id="img2">
            <p id='u2'></p>
        </a>
        <a class="random_user centreer_alles margin_left_50" id='a3' href="">
            <img class="home_afb" id="img3">
            <p id='u3'></p> 
        </a>
    </div>
    <div class="random_user_container margin_top_50 margin_bottom_20">
        <a class="random_user centreer_alles" id='a4' href="">
            <img class="home_afb" id="img4">
            <p id='u4'></p> 
        </a>
        <a class="random_user centreer_alles margin_left_50" id='a5' href="">
            <img class="home_afb" id="img5">
            <p id='u5'></p> 
        </a>
        <a class="random_user centreer_alles margin_left_50" id='a6' href="">
            <img class="home_afb" id="img6">
            <p id='u6'></p> 
        </a>
    </div>
</div>