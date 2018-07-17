<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('template/head') ?>
    <style>
        nav.original {
            background: white;
            box-shadow: 0px 4px 3px rgba(0, 0, 0, 0.05);
            top: 34px;
    padding-bottom: 10px
        }
    
        nav.original .navbar-nav>li>a:not(.btn) {
            color: #bbb;
        }
    </style>
<body>

<?php
    $nav['playlist'] = $playlist;
    $this->load->view('template/nav',$nav); 
?>

<div class="top-padding" style="width:100%;background-color: white">
   
</div>
<section id="services" class="section playlist-list">
    <div class="container">
        <div class="row">
        <h4 class="channelSection"><?php echo $title ?></h4>
            <?php 
            $count = 0;
            foreach ($data as $video) { 
                if($count == 4){
                    echo "</div><div class='row'>";
                    $count = 0;
                }    
            ?>
            <div class="col-md-3 col-sm-3 video">
                <img style="width:100%" src="<?php echo $video['thumbnail'] ?>" alt="">
                <span class="videoTitle">
                    <a href="<?php echo base_url("video/".$video['idVideo']) ?>">
                        <?php echo $video['title'] ?>
                    </a>
                </span>
            </div>
           <?php $count++; } ?>
        </div>
        <div class="row">
            <div class="col-sm-2 col-md-2 col-sm-offset-5 col-md-offset-5">
                <ul class="pagination">
                    <li class="<?php echo ($prevPage == "#") ? "disabled" : '' ?>">
                        <a href="<?php echo ($prevPage == "#") ? $prevPage : site_url("playlist/".$idPlaylist."/".$prevPage) ?>">Prev</a>
                    </li>
                    <li class="<?php echo ($nextPage == "#") ? "disabled" : '' ?>">
                        <a href="<?php echo ($nextPage == "#") ? $nextPage : site_url("playlist/".$idPlaylist."/".$nextPage) ?>">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>



<?php $this->load->view('template/footer') ?> 

<script>
    $(document).ready(function () {
        $(".top-padding").css("padding-top", ($("nav").height() + 80) + "px");
    })
</script>
</body>
</html>