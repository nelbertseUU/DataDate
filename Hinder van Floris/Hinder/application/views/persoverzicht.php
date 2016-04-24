
<script>
    function beschrijvingchange(){
        var ntekst = $("#beschrijving").val();
        $.ajax({
                url: "<?php echo base_url('index.php/User/besUpdate'); ?>",
                type: "POST",
                data: {beschrijving: ntekst},                   
                success: function()
                {
                   // alert("ok");              
                }
        });
    }
</script>
<div class="content">
    <?php echo $UserID; 
          echo $perswaardes; ?>    
    <form id="beschrijvingForm" action="">
        <input type="textarea" id="beschrijving" oninput="javascript:beschrijvingchange();" value="<?php echo $bestekst; ?>"><br>
        <input name="userfile" type="file" />
    </form>
    
    <form id="" action="<?php echo base_url('index.php/Perstest/tovragenformIE'); ?>">
        <input type="submit" class="verzendknop" value="VragenIE">
    </form>
    
    <form id="" action="<?php echo base_url('index.php/Perstest/tovragenformNS'); ?>">
        <input type="submit" class="verzendknop" value="VragenNS">
    </form>  

    <form id="" action="<?php echo base_url('index.php/Perstest/tovragenformTF'); ?>">
        <input type="submit" class="verzendknop" value="VragenTF">
    </form>  

    <form id="" action="<?php echo base_url('index.php/Perstest/tovragenformJP'); ?>">
        <input type="submit" class="verzendknop" value="VragenJP">
    </form>  
</div>