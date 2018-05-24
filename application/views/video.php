<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('template/head') ?>
<body>
<?php $this->load->view('template/nav') ?>

            
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

        <div class="row" >
        
           
            </div>
                <div class="col-sm-3 col-md-3" >
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                </div>
		    </div>
        </div>
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



