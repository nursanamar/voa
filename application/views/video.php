<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('template/head',$snippet) ?>
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
    
	<section id="services" class="section player-section">
		<div class="container">
            <div class="row">
                <div id="videoWraper" class="col-sm-9 col-md-9" >
                    <iframe id="video" src="https://www.youtube.com/embed/<?php echo $id ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="col-sm-3 col-md-3" >
                    <div class="fb-page" data-href="https://www.facebook.com/channelvoicealauddin" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                </div>
            </div>
        </div>
    </section>


<?php $this->load->view('template/footer') ?>   
<script>
    $(document).ready(function(){
       $(".player-section").css("padding-top",($("nav").height() + 85)+"px");
       console.log($("nav").height());
       $("#video").height(($("#videoWraper").width()) * 0.5619);
       $("#video").width(($("#videoWraper").width()));
    })
    $(window).on("resize",function() {
        $("#video").height(($("#videoWraper").width()) * 0.5619);
       $("#video").width(($("#videoWraper").width()));
    })
</script> 
</body>
</html>



