<?php 
/*
Template Name: About
*/ 
?>
<?php get_header(); ?>
<section class="page-header curve-bg yellow-head">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                    <h2 class="main-title">About Us</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/apps/img/foodplate.png" alt="">
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="content-half pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="media-wrap">
                    <img src="<?php echo get_template_directory_uri();?>/apps/img/chef.png" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="content ">
                    <h2 class="title">Only quality products for you</h2>
                    <p>If you ask the average person sufferign from overweight, gastritis, ulcers or other problems that caused this condition of the body, he will certainly indicate employement. Realizing how badly low calorie food is needed for people who are struggling with various problems or a banal lack of time, we have thought the nauncens of providing food that provides healthy nutrition at home.</p> 
                    <ul>
                        <li>People who want to lose weight.</li>
                        <li>Athletes and those who lead an active lifestyle.</li>
                        <li>Pregnant and lactating women.</li>
                        <li>Vegetarians and vegan.</li>
                        <li>Fasting.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="counter curve-bg">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="count">
                    <h2 class="number">1200</h2>
                    <p>Happy Clients</p>
                </div>
            </div>
            <div class="col-3">
                <div class="count">
                    <h2 class="number">500</h2>
                    <p>Orders Everyday</p>
                </div>
            </div>
            <div class="col-3">
                <div class="count">
                    <h2 class="number">32</h2>
                    <p>Professionals</p>
                </div>
            </div>
            <div class="col-3">
                <div class="count">
                    <h2 class="number">651</h2>
                    <p>Working Days</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>