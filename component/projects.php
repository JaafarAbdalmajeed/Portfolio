    <section id="projects" class="blog-mf sect-pt4 route">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="title-box text-center">
          <h3 class="title-a">
            PROJECTS
          </h3>
          <p class="subtitle-a">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          </p>
          <div class="line-mf"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php 
      for ($i = 0; $i < count($resultsProject); $i++) {
      ?>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="<?php echo $resultsProject[$i]['project_link']; ?>"><img src="../uploads/projects images/ <?php echo $resultsProject[$i]['project_image'] ?>" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category"><?php echo $resultsProject[$i]['project_name'] ?></h6>
                </div>
              </div>
              <h3 class="card-title"><a href="<?php echo $resultsProject[$i]['project_link']; ?>">See more ideas about Travel</a></h3>
              <p class="card-description">
                <?php echo $resultsProject[$i]['project_about']; ?>
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author"><?php echo $result['name']; ?></span>
                </a>
              </div>
              <div class="post-date">
              </div>
            </div>
          </div>
        </div>
      <?php 
      } 
      ?>
    </div>
  </div>
</section>