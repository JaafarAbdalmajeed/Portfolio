    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                <h3 class="title-a">
                    Eductions
                </h3>
                <div class="line-mf"></div>
                </div>
            </div>
            </div>
            <div class="row">
                <?php 
                    for ($i = 0; $i < count($resultsEduction); $i++) {
                    ?>
                <div class="col-md-4">
                    <div class="work-box">
                    <a href="assets/img/work-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <div class="work-img">
                        <img src="assets/img/work-6.jpg" alt="" class="img-fluid">
                        </div>
                    </a>
                    <div class="work-content">
                        <div class="row">
                        <div class="col-sm-8">
                            <h2 class="w-title"><?php echo $resultsEduction[$i]['foundation'] ?></h2>
                            <div class="w-more">
                            <span class="w-ctegory"><?php echo $resultsEduction[$i]['education'] ?></span> / <span class="w-date"><?php echo $resultsEduction[$i]['date'] ?></span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="w-like">
                            <a href="portfolio-details.html"></a>
                            </div>
                        </div>
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