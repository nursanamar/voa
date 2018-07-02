<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('template/head') ?>
<body>

<?php
    $nav['playlist'] = $playlist;
    $this->load->view('template/nav',$nav); 
?>



<?php $this->load->view('template/footer') ?> 
</body>
</html>