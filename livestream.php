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
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                <div class="container">
                <div class="carousel-caption text-left">
                    <h1>Example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                <div class="container">
                <div class="carousel-caption text-right">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
                </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
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
            </div>           
            </div>
        </div>
    </section>       
    <?php require_once('footer.php'); ?> 
</body>
</html>
