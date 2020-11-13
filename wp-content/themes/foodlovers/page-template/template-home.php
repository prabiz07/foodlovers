<?php 
/*
Template Name: Home
*/ 
?>
<?php get_header(); ?>

<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="banner-img">
                    <img class="active" src="<?php echo get_template_directory_uri();?>/apps/img/foodplate.png" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/apps/img/foodplate1.png" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/apps/img/foodplate2.png" alt="">
                </div>
                <span class="rings"></span>
                <div class="slider-content">
                    <div class="banner-content active">
                        <h1>Salmon with asparagus</h1>
                        <p>Fragrant baked salmon with notes of citrus on a pillow of spinach and mushrooms. Perfectly in harmony with asparagus.</p>
                        <table class="nutri-fact">
                            <tbody>
                                <tr>
                                    <th>Calories</th>
                                    <td>450 kcal</td>
                                </tr>
                                <tr>
                                    <th>Fats</th>
                                    <td>4.3 gm</td>
                                </tr>
                                <tr>
                                    <th>Protein</th>
                                    <td>6.5 gm</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-group">
                            <span class="default price">$ 12</span>
                            <a href="#" class="default btn-ripple half-btn">View Menu</a>
                        </div>
                    </div>
                    <div class="banner-content">
                        <h1>Boiled Egg with Toast</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque iaculis dapibus. Sed eleifend gravida lorem non mattis. Aliquam euismod mattis elementum.</p>
                        <table class="nutri-fact">
                            <tbody>
                                <tr>
                                    <th>Calories</th>
                                    <td>80 kcal</td>
                                </tr>
                                <tr>
                                    <th>Fats</th>
                                    <td>2.5 gm</td>
                                </tr>
                                <tr>
                                    <th>Protein</th>
                                    <td>8 gm</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-group">
                            <span class="default price">$ 6.5</span>
                            <a href="#" class="default btn-ripple half-btn">View Menu</a>
                        </div>
                    </div>
                    <div class="banner-content">
                        <h1>Mixed Veggie Salad</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque iaculis dapibus. Sed eleifend gravida lorem non mattis. Aliquam euismod mattis elementum.</p>
                        <table class="nutri-fact">
                            <tbody>
                                <tr>
                                    <th>Calories</th>
                                    <td>120 kcal</td>
                                </tr>
                                <tr>
                                    <th>Fats</th>
                                    <td>6.8 gm</td>
                                </tr>
                                <tr>
                                    <th>Protein</th>
                                    <td>16 gm</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-group">
                            <span class="default price">$ 18.28</span>
                            <a href="#" class="default btn-ripple half-btn">View Menu</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-5">
                <div class="colored-bg">
                    <h2 class="banner-title">special</h2>
                </div>
            </div>
            <ul class="controls">
                <li onClick="prevSlide(); prevContentSlide();"></li>
                <li onClick="nextSlide(); nextContentSlide();"></li>
            </ul>
        </div>
    </div>
</section>

<section class="content-half ptb-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="dotted-bg">
                <span style="background: url('<?php echo get_template_directory_uri();?>/apps/img/gray-dot.png')"></span>
            </div>
            <div class="col-6">
                <div class="media-wrap">
                    <img src="<?php echo get_template_directory_uri();?>/apps/img/image1.png" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="content ">
                    <h2 class="title">About Our Company</h2>
                    <p>Health can be tasty. This is the credo by which our friendly community lives.</p>
                    <p>We declare a diet, we eat after 6pm and sometimes miss workouts because we just want to relax at home with our family. We free your time from grocery shopping and cooking so that you can do those things that you enjoy.</p>  
                    <button href="#" class="main-btn btn-ripple">read more</button>    
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>