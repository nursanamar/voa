<!DOCTYPE html>
<html lang="en">
    <?php 
    
        $this->load->view('template/head_video',$snippet) 
        
    ?>
<body>
<style>
    .original li a {
        color : #bbb
    }
</style>
<?php
    $nav['playlist'] = $playlist;
    $this->load->view('template/nav', $nav);
 ?>

            
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
                <div id="videoWraper" class="col-sm-9 col-md-9">
                    <iframe id="video" src="https://www.youtube.com/embed/<?php echo $id ?>" frameborder="0" allow="autoplay; encrypted-media"
                        allowfullscreen></iframe>
                    <div class="col-md-12 col-md-12" style="margin-top:2%">
                        <div class="col-sm-6 col-md-6">
                            <script src="https://apis.google.com/js/platform.js"></script>
                            <div class="g-ytsubscribe" data-channelid="UCO-zxU3Yu1NbgGhyZ4KMkRA" data-layout="full" data-theme="dark" data-count="default"></div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div style="margin-top: 1%">
                                <div id="fb-root"></div>
                                <script>(function (d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                
                                <!-- Your share button code -->
                                <div class="fb-share-button" data-href="<?php echo current_url() ?>" data-layout="button_count">
                                </div>
                            </div>
                            <div style="margin-top: 1%">
                                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 description" style="margin-top:2%">
                        <p style="color: #000">
                            <?php echo nl2br($snippet['description']) ?>
                        </p>
                    </div>
                    <div id="disqus_thread"></div>
                    <script>

                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    
                        var disqus_config = function () {
                        this.page.url = "<?php echo current_url() ?>";  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = "video/<?php echo current_url() ?>"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        (function () { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://voice-alauddin.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the
                        <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
                    </noscript>
                
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
    function urlify(text) {
            var urlRegex = /(https?:\/\/[^\s]+)/g;
            return text.replace(urlRegex, function (url) {
                return '<a href="' + url + '">' + url + '</a>';
            })
            // or alternatively
            // return text.replace(urlRegex, '<a href="$1">$1</a>')
        }

</script> 
</body>
</html>



