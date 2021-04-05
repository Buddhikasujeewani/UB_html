<!DOCTYPE html>
<html>
    <head>
        <?php require_once('header.php'); ?>
    </head>
    <body class="text-center">
    <header class="masthead mb-auto fixed-top">
        <?php require_once('navbar.php'); ?>
    </header>    
    <?php require_once('booth_top.php'); ?> 
    <section id="booth_container" class="booth_container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="booth_header">WELCOME TO ECHO360</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="booth_logo_container">
                       <img src="img/Akero_Logo.png"/>
                    </div>
                    <div class="booth_content_container">
                        <p>
                        Akero is an AI-integrated self-service advertising and planning tool developed for
                        student marketers. Combining cutting-edge technology with human expertise, the 
                        software scans billions of data points simultaneously, cross-referencing advertising
                        objectives against thousands of similar campaigns, before generating bespoke media 
                        plans that offer a guaranteed minimum amount of clicks or impressions.
                        </p>
                        <p>
                        Akero already supports over 300 global colleges and universities, helping them reach,
                        engage and enrol more students by focusing on the unique challenges faced in student
                        recruitment – with technology solutions built from 10 years’ expertise in reaching,
                        attracting, nurturing and converting millions of students.
                        </p>
                    </div>      
                   
                </div>
                <div class="col-12 col-md-6">
                    <iframe src="https://vimeo.com/527354609/e66a2cea44" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 second-row-01">
                   <h2>Less guesswork, more guarantees. Get your free, bespoke Akero advertising plan.</h2>
                    <p>We understand how challenging it is to recruit students and track ROI on your campaigns, especially during these unprecedented times. That’s why we are offering a free bespoke digital advertising plan, recommending to you the best possible media selection according to your brief, with guaranteed predicted performance outcomes.</p>
                    <a href="https://akerolabs.com/lp/guaranteed-student-advertising-uk" target="_blank" rel="noopener">READ MORE</a>
                </div>
                <div class="col-12 col-md-3">
                   <div class="booth_promo_image">
                       <img src="img/Screenshot-2021-03-23-at-11.51.33.png"/>
                   </div>
                   <div class="booth_promo_text">
                       <h2>Free Download</h2>
                       <p>Share your details to receive a FREE WHITEPAPER 'The student marketer’s guide to: Omnichannel Marketing'.</p>
                   </div>
                   <div class="booth_form">
                        <?php require_once('booth_form.php'); ?> 
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="booth_website_container">
                         <a href="https://akerolabs.com/" target="_blank">akerolabs.com</a>
                    </div>                    
                    <div class="meet_the_team">
                        <div class="meet_the_team_head">
                            <h3>Meet the team</h3>
                        </div>
                        <div class="meet_the_team_inner">
                            <div class="team_inner_01">
                                <div class="team_inner_02">
                                    <img src="https://d2yz4l0oueiofy.cloudfront.net/dashboard/wp-content/uploads/2021/03/22144352/Daniel-Hulin.jpg">
                                </div>
                                <div class="team_inner_03">
                                    <div class="content_team"><strong>Dan Hulin</strong><br>
                                    Demand Generation Team Leader<br>
                                    <a href="mailto:dan.hulin@akerolabs.com">dan.hulin@akerolabs.com</a></div>
                                </div>
                            </div>                        
                        </div>                        
                    </div> 
                    <div class="booth_contact_container">
                    <a href="https://api.whatsapp.com/send?phone=447767101632" target="_blank">
                        <div class="whatapp-div-btn" id="set-btn-booth-page-001">
                            <div class="row row1">
                                <div class="col-2">
                                    <img class="booth-whatapp-img" src="https://ubuniwp.s3.eu-west-2.amazonaws.com/dashboard/wp-content/uploads/2021/01/30105423/social-whatsapp-circle-512.png">
                                </div>
                                <div class="col-8"> Click to chat in Whatsapp</div>
                                <div class="col-2"> <img class="booth-arrow-img" src="https://ubuniwp.s3.eu-west-2.amazonaws.com/dashboard/wp-content/uploads/2021/01/30105342/arrow.png"></div>
                            </div>
                        </div>
                    </a>
                    <p class="booth-whatsapp-show-text">* By clicking whatsapp, your personal watsapp information will be visible to recipient.</p>
                    </div>  
                    <div class="booth_chat_container">
                        <?php require_once('booth_chat.php'); ?>
                    </div>                     
                </div>
            </div>
        </div>
    </section>   
    <?php require_once('footer.php'); ?> 
</body>
</html>

<?php
  



?>