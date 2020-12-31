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

<section class="main-counter curve-bg">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="count">
                    <span class="counter">1200</span>
                    <span>+</span>
                    <p>Happy Clients</p>
                </div>
            </div>
            <div class="col-3">
                <div class="count">
                    <span class="counter">500</span>
                    <span>+</span>
                    <p>Orders Everyday</p>
                </div>
            </div>
            <div class="col-3">
                <div class="count">
                    <span class="counter">32</span>
                    <p>Professionals</p>
                </div>
            </div>
            <div class="col-3">
                <div class="count">
                    <span class="counter">651</span>
                    <p>Working Days</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video content-half">
    <div class="container">
        <div class="row align-item-center">
            <div class="col-4">
                <div class="content ">
                        <h2 class="title">You can watch cooking process translation</h2>
                        <p>Health can be tasty. This is the credo by which our friendly community lives.</p>
                        <p>We declare a diet, we eat after 6pm and sometimes miss workouts because we just want to relax at home with our family. We free your time from grocery shopping and cooking so that you can do those things that you enjoy.</p>  
                    </div>
                    <a href="#" class="main-btn">play video</a>
                </div>
            <div class="col-8">
                <div class="media-wrap">
                    <img src="<?php echo get_template_directory_uri();?>/apps/img/cooking-demonstration.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sponser pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-3">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/apps/img/sponsor1.png" alt="umami">    
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/apps/img/sponsor2.png" alt="">
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/apps/img/sponsor3.png" alt="">
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/apps/img/sponsor4.png" alt="">
                </a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>