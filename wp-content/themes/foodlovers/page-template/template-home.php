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
                        <h2 class="main-title">Salmon with asparagus</h2>
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
                            <a href="#" class="default half-btn">View Menu</a>
                        </div>
                    </div>
                    <div class="banner-content">
                        <h2 class="main-title">Boiled Egg with Toast</h2>
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
                            <a href="#" class="default half-btn">View Menu</a>
                        </div>
                    </div>
                    <div class="banner-content">
                        <h2 class="main-title">Mixed Veggie Salad</h2>
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
                            <a href="#" class="default half-btn">View Menu</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-5">
                <div class="colored-bg stretch-right">
                    <h2 class="banner-title section-head">special</h2>
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
                </div>
                <a href="#" class="main-btn">read more</a> 
            </div>
        </div>
        <div class="row align-items-center">
            <div class="selector">
                <div class="col-3 dis-ib">
                    <div class="label">
                        <p class="no-margin">choose a ration for yourself</p>
                    </div>
                </div>
                <div class="col-9 dis-ib">
                    <form>
                        <div class="form-row">
                            <div class="col-md-4">
                                <select name="custom-select" id="">
                                    <option value="woman">Woman</option>
                                    <option value="men">Men</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="custom-select" id="">
                                    <option value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="large">Large</option>
                                    <option value="xlarge">Extra Large</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="custom-select" id="">
                                    <option value="veg">Vegetarian</option>
                                    <option value="nveg">Non Vegetarian</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tabs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="breakfast-tab" data-toggle="tab" href="#breakfast" role="tab" aria-controls="breakfast" aria-selected="true">
                            <i class="fas fa-coffee fa-3x"></i>Breakfast
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="lunch-tab" data-toggle="tab" href="#lunch" role="tab" aria-controls="lunch" aria-selected="false">
                            <i class="fas fa-pizza-slice fa-3x"></i>Lunch
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="dinner-tab" data-toggle="tab" href="#dinner" role="tab" aria-controls="dinner" aria-selected="false">
                            <i class="fas fa-utensils fa-3x"></i>Dinner
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="snack-tab" data-toggle="tab" href="#snack" role="tab" aria-controls="snack" aria-selected="false">
                            <i class="fas fa-cookie-bite fa-3x"></i>Snack
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="drink-tab" data-toggle="tab" href="#drink" role="tab" aria-controls="drink" aria-selected="false">
                            <i class="fas fa-wine-bottle fa-3x"></i>Drink
                        </a>
                    </li>
                </ul>
                <div class="tab-content stretch-right" id="myTabContent">
                    <div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
                        <li class="tab-card">
                            <img src="<?php echo get_template_directory_uri();?>/apps/img/foodplate.png" alt="">
                            <div class="card-content">
                                <h3 class="card-title">Salmon with asparagus</h3>
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
                            </div>
                        </li>
                        <li class="tab-card">
                            <img src="<?php echo get_template_directory_uri();?>/apps/img/foodplate1.png" alt="">
                            <div class="card-content">
                                <h3 class="card-title">Boiled egg with toast</h3>
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
                            </div>
                        </li>
                        <li class="tab-card">
                            <img src="<?php echo get_template_directory_uri();?>/apps/img/foodplate2.png" alt="">
                            <div class="card-content">
                                <h3 class="card-title">Mixed veggie salad</h3>
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
                            </div>
                        </li>
                        <li class="tab-card">
                            <img src="<?php echo get_template_directory_uri();?>/apps/img/foodplate.png" alt="">
                            <div class="card-content">
                                <h3 class="card-title">Salmon with asparagus</h3>
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
                            </div>
                        </li>
                    </div>
                    <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
                        <li class="tab-card">
                            <img src="<?php echo get_template_directory_uri();?>/apps/img/lunch.png" alt="">
                            <div class="card-content">
                                <h3 class="card-title">Rice Set</h3>
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
                            </div>
                        </li>
                        <li class="tab-card">
                            <img src="<?php echo get_template_directory_uri();?>/apps/img/lunch2.png" alt="">
                            <div class="card-content">
                                <h3 class="card-title">South Indian Set</h3>
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
                            </div>
                        </li>
                    </div>
                    <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinner-tab"></div>
                    <div class="tab-pane fade" id="snack" role="tabpanel" aria-labelledby="snack-tab"></div>
                    <div class="tab-pane fade" id="drink" role="tabpanel" aria-labelledby="drink-tab"></div>
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

<section class="process curve-bg pt-0 mtb-50">
    <div class="container">
        <div class="row">
            <h2 class="section-head">How it works</h2>
            <div class="col-4 mt--30">
                <div class="process-wrapper">
                    <img src="<?php echo get_template_directory_uri();?>/apps/img/researching.svg" alt="">
                    <div class="process-content">
                        <h2>Choose</h2>
                        <p>Do you want to loose weight, exercise, adhere to a therapeutic diet? Our dietition will help you with choosing the right</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt--30">
                <div class="process-wrapper flip">
                    <img src="<?php echo get_template_directory_uri();?>/apps/img/cooking.svg" alt="">
                    <div class="process-content">
                        <h2>Prepare Food</h2>
                        <p>We prepare food from fresh and proven products according to the menu developed by the chef, nutritionist, and fitness trainer.</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt--30">
                <div class="process-wrapper">
                    <img src="<?php echo get_template_directory_uri();?>/apps/img/delivery.svg" alt="">
                    <div class="process-content">
                        <h2>Deliver</h2>
                        <p>Home or Office? Our courier will deliver your 5-times daily diet to anywhere in the world.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="posts">
    <h1>Related Post</h1>
</section> -->

<section class="question curve-bg pt-0 mtb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-head">Have Questions?</h2>
                <div class="column-one">
                    <h2 class="main-title">Need a free consultation?</h2>
                    <p>If you have questions, please fill out the form and we will call you back within five minutes.</p>
                    <form class="default-form">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                        <button type="submit" class="main-btn">Send</button>
                    </form>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    <img src="<?php echo get_template_directory_uri();?>/apps/img/foodbasket.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>