
<div id="hero" class="hero route bg-image" style="background-image: url(assets/img/jaafar1.jpeg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
        <div class="table-cell">
            <div class="container">
                <!--<p class="display-6 color-d">Hello, world!</p>-->
                <h1 class="hero-title mb-4">I am <?php echo $result["name"] ?></h1>
                <p class="hero-subtitle">
                <span class="typed" data-typed-items="<?php echo implode(', ', array_column($resultProfessions, 'profession_name')); ?>"></span>
                </p>
                <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
            </div>
        </div>
    </div>
</div>