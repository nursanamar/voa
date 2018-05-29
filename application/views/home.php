<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('template/head',$channel) ?>
<body>
<?php $this->load->view('template/nav',$channel) ?>



    <div class="slide">
        <?php foreach ($data as $value) {
            $video = $value['video'][0];
            ?>
            <header class="banner" style="background-image:url('<?php echo $video['image']; ?>')"  id="intro" >
            <div class="table" style="background:linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9)) 0% 0%">
                    <div class="header-text">
                        <span><?php echo $value['playlist'] ?></span>
                        <h3 style="text-shadow: 2px 2px 5px #000;" class="light white" ><a style="color:white" href="<?php echo base_url("video/".$video['idVideo']) ?> " ><?php echo $video['title']; ?></a></h3>
                        <hr style="color:red;width:100%;border: 1px solid red" >
                    </div>
                </div>
            </header>
        <?php } ?>
    </div>
            
            <!-- <div class="table">
                <div class="header-text" >
                    <h1>Lorem</h1>
                </div>
            </div>
            <div class="table">
                <div class="header-text" >
                    <h1>Lorem</h1>
                </div>
            </div>
            <div class="table">
                <div class="header-text" >
                    <h1>Lorem</h1>
                </div>
            </div> -->
    
	<section id="services" class="section ">
		<div class="container">
            <div class="col-sm-9 col-md-9" >
            <?php foreach ($data as $playlist) { ?>
            <div class="row">
                <h4 class="channelSection"><?php echo ucfirst($playlist['playlist']) ?></h4>
           <?php 
                $count = 0;
                foreach ($playlist['video'] as $video) {
                    if($count === 4){
                        echo "</div><div class='row'>";
                    }
                    ?>
                     <div class="col-md-3 col-sm-3 video">
                         <img style="width:100%" src="<?php echo $video['thumbnail'] ?>" alt="">
                         <span class="videoTitle" > <a href="<?php echo base_url("video/".$video['idVideo']) ?>"><?php echo $video['title'] ?></a></span>
                     </div>
               <?php 
                    $count++;
                }
             ?>
            </div>
           <?php } ?>
            </div>
            <div class="col-sm-3 col-md-3" >
            <div class="fb-page" data-href="https://www.facebook.com/channelvoicealauddin" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
            </div>
			
                
                <!-- <div class="col-md-5ths col-sm-5ths video"> -->
                    <!-- <img style="width:100%" src="assets/img/team/team-cover1.jpg" alt=""> -->
                    <!-- <span>lorem   mkdskdsjdkj</span> -->
                <!-- </div> -->
                <!-- <div class="col-md-5ths col-sm-5ths video"> -->
                    <!-- <img style="width:100%" src="assets/img/team/team-cover1.jpg" alt=""> -->
                    <!-- <span>lorem   mkdskdsjdkj</span> -->
                <!-- </div> -->
                <!-- <div class="col-md-5ths col-sm-5ths video"> -->
                    <!-- <img style="width:100%" src="assets/img/team/team-cover1.jpg" alt=""> -->
                    <!-- <span>lorem   mkdskdsjdkj</span> -->
                <!-- </div> -->
                <!-- <div class="col-md-5ths col-sm-5ths video"> -->
                    <!-- <img style="width:100%" src="assets/img/team/team-cover1.jpg" alt=""> -->
                    <!-- <span>lorem   mkdskdsjdkj</span> -->
                <!-- </div> -->
                <!-- <div class="col-md-5ths col-sm-5ths video"> -->
                    <!-- <img style="width:100%" src="assets/img/team/team-cover1.jpg" alt=""> -->
                    <!-- <span>lorem   mkdskdsjdkj</span> -->
                <!-- </div> -->
                <!-- <div class="col-md-5ths col-sm-5ths video"> -->
                    <!-- <img style="width:100%" src="assets/img/team/team-cover1.jpg" alt=""> -->
                    <!-- <span>lorem   mkdskdsjdkj</span> -->
                <!-- </div> -->
                <!-- <div class="col-md-5ths col-sm-5ths video"> -->
                    <!-- <img style="width:100%" src="assets/img/team/team-cover1.jpg" alt=""> -->
                    <!-- <span>lorem   mkdskdsjdkj</span> -->
                <!-- </div> -->
                <!-- <div class="col-md-5ths col-sm-5ths video"> -->
                    <!-- <img style="width:100%" src="assets/img/team/team-cover1.jpg" alt=""> -->
                    <!-- <span>lorem   mkdskdsjdkj</span> -->
                <!-- </div> -->
                <!-- <div class="col-md-5ths col-sm-5ths video"> -->
                    <!-- <img style="width:100%" src="assets/img/team/team-cover1.jpg" alt=""> -->
                    <!-- <span>lorem   mkdskdsjdkj</span> -->
                <!-- </div> -->
            <!-- </div> -->
		</div>
    </section>


<?php $this->load->view('template/footer') ?>   
<script>
    $(document).ready(function(){
        $(".slide").slick({
            autoplay : true,
            arrows: false
        })
        $('.slide').on('beforeChange', function(event, slick, currentSlide, nextSlide){
  console.log(slick);
});
    })
</script> 
</body>
</html>



