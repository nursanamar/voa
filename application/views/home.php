<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('template/head') ?>
<body>
<?php $this->load->view('template/nav') ?>



    <div class="slide">
        <?php foreach ($data[0]['video'] as $value) {
            $video = $value;
            ?>
            <header class="banner" style="background-image:url('<?php echo $video['image']; ?>')"  id="intro" >
            <div class="table" style="background:linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9)) 0% 0%">
                    <div class="header-text">
                        <h3 style="text-shadow: 2px 2px 5px #000;" class="light white" ><?php echo $video['title']; ?></h3>
                        <hr style="color:red;width:100%;border: 1px solid red" >
                        <span><?php echo $data[0]['playlist'] ?></span>
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
            <?php foreach ($data as $playlist) { ?>
            <div class="row">
                <h4 style="font-weight:600;padding-bottom:10px;margin-bottom:20px;"><?php echo $playlist['playlist'] ?></h4>
           <?php 
                $count = 0;
                foreach ($playlist['video'] as $video) {
                    if($count === 5){
                        echo "</div><div class='row'>";
                    }
                    ?>
                     <div class="col-md-5ths col-sm-5ths video">
                         <img style="width:100%" src="<?php echo $video['thumbnail'] ?>" alt="">
                         <span><?php echo $video['title'] ?></span>
                     </div>
               <?php 
                    $count++;
                }
             ?>
            </div>
           <?php } ?>
			
                
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



