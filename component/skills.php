<section id="services" class="services-mf pt-5 route">
<div class="container">
    <div class="row">
        <?php 
        for ($i = 0; $i < count($resultsSkills); $i++) {
        ?>
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <span class="ico-circle"><?php echo $resultsSkills[$i]['icons']?></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title"><?php echo $resultsSkills[$i]['skill']?></h2>   
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
    </section>