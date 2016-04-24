<script> 
    $(document).ready(function() {
        pakprofiel();
        init();
    });
    
    function pakprofiel(){
        $.ajax({
            url: "<?php echo base_url('index.php/Main/getProfiles'); ?>",
            type: "POST",
            dataType: 'json',            
            success: function(dingetje){
                var i;
                
                for(i = 0; i < 6; i++){                    
                    
                    naam = dingetje[i].gebruiker;
                    geb = getLeeftijd(dingetje[i].gebdatum);
                    geslacht = dingetje[i].geslacht;
                    beschrijving = dingetje[i].beschrijving.substring(0, 30) + '...';
                    profielfoto = dingetje[i].profielfoto;
                    persType = dingetje[i].persType;
                    merkVk = dingetje[i].merkVk;
                    id = dingetje[i].id;
                    
                    var randpic = document.getElementById('img'+[i+1]);
                    var randhref = document.getElementById('a'+[i+1]);
                    var rand = document.getElementById('u'+[i+1]);
                    
                    if(geslacht == 'M'){
                        gender = 'Man';
                    }
                    else{
                        gender = 'Vrouw';
                    }
                    
                    
                    if(profielfoto == null){
                        
                        if(geslacht == 'M'){
                            randpic.src= 'https://www.students.science.uu.nl/~5636981/Hinder/css/images/male_silhouette.jpg';
                            /*(function(randpic){
                                randhref.addEventListener('mouseover', function(){
                                    randpic.src= 'https://www.students.science.uu.nl/~5636981/Hinder/css/images/male_silhouette_hover.jpg';
                                });
                                randhref.addEventListener('mouseout', function(){
                                    randpic.src= 'https://www.students.science.uu.nl/~5636981/Hinder/css/images/male_silhouette.jpg';
                                });
                            })(randpic);*/
                        }
                        else{
                            randpic.src= 'https://www.students.science.uu.nl/~5636981/Hinder/css/images/female_silhouette.jpg';
                            /*(function(randpic){
                                randhref.addEventListener('mouseover', function(){
                                    randpic.src= 'https://www.students.science.uu.nl/~5636981/Hinder/css/images/female_silhouette_hover.jpg';
                                });
                                randhref.addEventListener('mouseout', function(){
                                    randpic.src= 'https://www.students.science.uu.nl/~5636981/Hinder/css/images/female_silhouette.jpg';
                                });
                            })(randpic);*/
                        }
                    }
                    else{
                        randpic.src = 'https://www.students.science.uu.nl/~5636981/Hinder/' + profielfoto;
                    }
                    
                    rand.innerHTML = "<div>"+naam+"<br>"+geb+" jaar<br>"+gender+"<br>"+beschrijving+"<br>"+persType+"<br>"+merkVk+"<br><div class='margin_top_15'>Klik voor meer info!</div></div>"; 
                    randhref.href = "https://www.projects.science.uu.nl/INFOB1PICA/2015/02/Hinder/index.php/User/anderAccount/"+id;
                }
            }
        });
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
</script>
<div class="content">
    <h1>Welkom op Hinder</h1>
    <hr width="80%">
    <p class="schuingedrukt width_80">Hinder is een dating site die krachtige algoritmes gebruikt om de perfecte match voor jou te vinden.</p>
    <p>Hieronder staan zes willekeurige profielen:</p>
    <hr width="80%">
    <a class="verzendknop" onclick="pakprofiel()">Laat meer profielen zien</a>
    <div class="random_user_container margin_top_15">
        <a class="random_user centreer_alles" id='a1' href="">
            <img class="home_afb" id="img1" width="150" height="150">
            <p id='u1' ></p>
        </a>
        <a class="random_user centreer_alles margin_left_50" id='a2' href="">
            <img class="home_afb" id="img2" width="150" height="150">
            <p id='u2'></p>
        </a>
        <a class="random_user centreer_alles margin_left_50" id='a3' href="">
            <img class="home_afb" id="img3" width="150" height="150">
            <p id='u3'></p> 
        </a>
    </div>
    <div class="random_user_container margin_top_50 margin_bottom_20">
        <a class="random_user centreer_alles" id='a4' href="">
            <img class="home_afb" id="img4" width="150" height="150">
            <p id='u4'></p> 
        </a>
        <a class="random_user centreer_alles margin_left_50" id='a5' href="">
            <img class="home_afb" id="img5" width="150" height="150">
            <p id='u5'></p> 
        </a>
        <a class="random_user centreer_alles margin_left_50" id='a6' href="">
            <img class="home_afb" id="img6" width="150" height="150">
            <p id='u6'></p> 
        </a>
    </div>
    <a class="verzendknop" onclick="pakprofiel()">Laat meer profielen zien</a>
</div>
