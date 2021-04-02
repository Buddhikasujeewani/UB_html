<!DOCTYPE html>
<html>
    <head>
        <?php require_once('header.php'); ?>
    </head>
    <body class="text-center">
    <header class="masthead mb-auto fixed-top">
        <?php require_once('navbar.php'); ?>
    </header>
    <section class="twitch-code-container" id="twitch-code-container01">
        <div class="container-fluid">      
            <div class="row">
                <div class="embed-responsive embed-responsive-16by9"><iframe  class="embed-responsive-item"  src="https://player.twitch.tv/?channel=edquarterlive&parent=universitybusiness.co.uk" frameborder="0" allowfullscreen="true" scrolling="no" ></iframe></div>
            </div>
        </div>
    </section>
    <section class="event-link-container" id="event-link-container01">
        <div class="container">      
            <div class="row">       
            <div class="col-12 col-md-3"><i class="fas fa-caret-left"></i> Back to lobby</div>
            <div class="col-12 col-md-3">Take the live poll</div>
            <div class="col-12 col-md-3">Event agenda</div>
            <div class="col-12 col-md-3">Visit exhibitor booths <i class="fas fa-caret-right"></i></div>      
            </div>
        </div>
    </section>
    <section class="ad-image-container" id="ad-image-container01">
        <div class="container">      
            <div class="row"> 
                <div class="col-12 ext-center">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/echo360-booth-banner.jpg"/>
                            
                            </div>
                            <div class="carousel-item">
                                <img src="img/tec-banner.png"/>
                            </div>                        
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>                  
            </div>
        </div>
    </section> 
    <section class="main-chat-container" id="main-chat-container01">
        <div class="container">      
            <div class="row">       
            <div class="col-12 col-md-7">
                    <?php require_once('chat.php'); ?>
                    <?php require_once('poll.php'); ?>
            </div>
            <div class="col-12 col-md-5">
                <div class="img-container">
                    <img src="img/Goodie-Bag_1046x638.jpg"/>
                </div>
                <div class="link-container">
                        Collect your Goodie Bag <i class="fas fa-caret-right"></i>
                </div>
                <div class="link-container">
                        Visit our exhibitor booths <i class="fas fa-caret-right"></i>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousal-1-live"></div>
                        
                        </div>
                        <div class="carousel-item">
                            <div class="carousal-2-live"></div>
                        </div>                        
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="tw-account-container">
                    <div class="twitter-conversation">        
                        JOIN IN THE CONVERSATION       
                    </div>
                    <a href="https://twitter.com/ub_uk?lang=en" target="_blank"><i class="fab fa-twitter-square"></i> @ub_uk using #edquarterlive</a>
                </div>               
            </div>           
            </div>
        </div>
    </section>      
     
    <?php require_once('footer.php'); ?> 
</body>
</html>
