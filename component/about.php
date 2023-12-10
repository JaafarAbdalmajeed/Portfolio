<section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span><?php echo $result['name']?></span></p>
                        <p><span class="title-s">Profile: </span> <span><?php echo $result['profile']?></span></p>
                        <p><span class="title-s">Email: </span> <span><?php echo $result['email']?></span></p>
                        <p><span class="title-s">Phone: </span> <span><?php echo $result['mobile']?></span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                      <?php 
                        foreach($resultsAbout as $about){
                          ?>
                            <p class="lead"><?php echo $about['about_content'] ?></p>
                        <?php
                          }
                        ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>