<?php get_header(); ?>

   <div class="video" id="subscription">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-6 col-sm-12 video_item">
                    <iframe   src="https://www.youtube.com/embed/QKB8i8-S2dE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col col-12 col-md-6 col-sm-12 video_item">
                    
                    <div class="form">
                    
                    <h3>Join The Exclusive Subscription Today And Get Premium Articles For Free</h3>
                    <div class="form_element">
                      <input class="form_input" type="text" id="txtFirstName" placeholder="Enter your name" />
                    </div>
                    <div class="form_element">
                      <input class="form_input" type="text" id="txtSecondName" placeholder="Enter your second" />
                    </div>
                    <div class="form_element">
                      <input class="form_input" type="text" id="txtEmail" placeholder="Enter your email address" />
                    </div>
                    
                    <div class="form_element">
                      <input class="form_input" type="text" id="txtPhoneNumber" placeholder="Enter your phone number" />
                    </div>
                    <div >
                      <input class="form_element" type="button" id="bt" value="Subscribe"  onclick="saveFile()"/>
                    </div>
                  </div> <!----.form-->
                </div>
            </div> <!----.row-->
        </div> <!----.container-->
    </div> <!----.video-->

    <div class="intro" id="intro">
        <div class="container">
            <div class="intro_text">
                <span>What is media buying?</span><br>
        Media buying is the process of purchasing ad space and time on digital and offline platforms, such as websites, YouTube, radio, and TV. A media buyer is also responsible for negotiating with publishers for ad inventory, managing budgets, and optimizing ads to improve campaign performance.
            </div> <!----.intro_text-->
        </div> <!----.container-->
    </div> <!----.intro-->

    <div class="slider" id="slider">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/media_buying_v1.jpg" class="d-block w-100" alt="...">
                    
                  </div>
                  <div class="carousel-item">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/download.jpeg" class="d-block w-100" alt="...">
                    
                  </div>
                  <div class="carousel-item">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/Media-Buying-for-2019.jpg" class="d-block w-100" alt="...">
                    
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div> <!----.container-->
    </div> <!----.slider-->

   <?php get_footer(); ?>