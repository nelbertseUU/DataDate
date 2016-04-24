<script>
    window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
    }
</script>
        <div class="content">
            Weet je zeker dat je je account wil verwijderen?
            <a class="verzendknop" href="<?php echo base_url('index.php/User/verwijderGebruiker');?>">Verwijder Account</a>
        </div>
    </body>
</html>