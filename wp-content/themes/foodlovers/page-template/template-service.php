<?php 
/*
Template Name: Service
*/ 
?>
<?php get_header(); ?>
<section class="page-header curve-bg blue-head">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Service</li>
                    </ol>
                    <h2 class="main-title">Ration</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/apps/img/foodplate1.png" alt="">
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h2 class="title">Ration for weight lose</h2>
                    <ul class="ration">
                        <li class="energy">1300 - 1500 Kcal</li>
                        <li class="day">7 days</li>
                    </ul>
                    <p>If you ask the average person sufferign from overweight, gastritis, ulcers or other problems that caused this condition of the body, he will certainly indicate employement. Realizing how badly low calorie food is needed for people who are struggling with various problems or a banal lack of time, we have thought the nauncens of providing food that provides healthy nutrition at home.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-selected="true">
                            <i class="fas fa-carrot fa-3x"></i>Monday
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday" aria-selected="false">
                                <i class="fas fa-pizza-slice fa-3x"></i>Tuesday
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday" aria-selected="false">
                            <i class="fas fa-fish fa-3x"></i>Wednesday
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="thursday" aria-selected="false">
                            <i class="fas fa-apple-alt fa-3x"></i>Thursday
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="friday-tab" data-toggle="tab" href="#friday" role="tab" aria-controls="friday" aria-selected="false">
                            <i class="fas fa-drumstick-bite fa-3x"></i>Friday
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#saturday" role="tab" aria-controls="saturday" aria-selected="false">
                                <i class="fas fa-wine-bottle fa-3x"></i>Saturday
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content stretch-right" id="myTabContent">
                        <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
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
                        <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
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
                        <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab"></div>
                        <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab"></div>
                        <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-tab"></div>
                        <div class="tab-pane fade" id="saturday" role="tabpanel" aria-labelledby="saturday-tab"></div>
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