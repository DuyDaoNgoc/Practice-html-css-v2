<!DOCTYPE html>
<html lang="en,vi">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
   <link rel="icon" href="/fountain/img/icon.png">
        <link rel="stylesheet" href="/Fountain/css/home.css">
        <link rel="stylesheet" href="/fountain/css/Top_cartegories.css">
        <link rel="stylesheet" href="/fountain/css/Learning_Institution.css">
        <link rel="stylesheet" href="\fountain\css\Explore_our_popular_course.css">
        <link rel="stylesheet" href="\fountain\css\Our_online_examination_is _top-notch.css">
        <link rel="stylesheet" href="\fountain\css\Popular_examination.css">
        <link rel="stylesheet" href="\fountain\css\footer.css">
        <link rel="stylesheet" href="\fountain\css\Competate_with_various_scholars_around_the_globe.css">
        <link rel="stylesheet" href="\fountain\css\Featured_Competition.css">
        <link rel="stylesheet" href="\fountain\Get Publicstions from best Aurtors around the  Globe\Get_Publicstions_from_best_Aurtors_around_the_Globe.css">
        <link rel="stylesheet" href="\fountain\css\review.css">
</head>
<script>
        document.addEventListener("DOMContentLoaded", function() {
                const loginButton = document.querySelector('.submit_login');
                const popupLogin = document.querySelector('.form_login');
                const overlay = document.createElement('div');


                overlay.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
        z-index: 9998;
        display: none;
    `;
                document.body.appendChild(overlay);

                loginButton.addEventListener('click', function() {
                        popupLogin.style.display = 'block';
                        overlay.style.display = 'block';
                });


                overlay.addEventListener('click', function() {
                        popupLogin.style.display = 'none';
                        overlay.style.display = 'none';
                });
        });
</script>

<body>
        <header>
                <h1><a href="#" class="text_menu">Fountain</a></h1>
                <nav class="nav_menu">
                        <ul class="menu"     jutgjujutg>
                                <li>
                                        <a href="#">Home</a>
                                        <ul class="submenu">
                                                <li><a href="#">Home </a></li>

                                        </ul>
                                </li>
                                <li>
                                        <a href="#">Courses</a>
                                        <ul class="submenu">
                                                <li><a href="#"> Courses </a></li>

                                        </ul>
                                </li>
                                <li>
                                        <a href="#">Instructors</a>
                                        <ul class="submenu">
                                                <li><a href="#"> Instructors </a></li>

                                        </ul>
                                </li>
                                <li>
                                        <a href="#">Schedules</a>
                                        <ul class="submenu">
                                                <li><a href="#">Schedules </a></li>

                                        </ul>
                                </li>
                                <li>
                                        <a href="#">Contact Us</a>
                                        <ul class="submenu">
                                                <li><a href="#"> Contact Us </a></li>

                                        </ul>

                                </li>

                        </ul>
                </nav>


                <form action="" class="form">
                        <img src="/Fountain/img/Remove_find.png" alt="Remove" class="remove">

                        <input type="search" name="username" class="input_login">
                        <button type="button" class="submit_login">Login</button>
                        <button type="submit" class="Register">Register</button>
                </form>

                <div class="form_login">
                        <label for="">Đăng nhập</label>
                        <input type="text" name="username" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">
                        <input type="submit" value="Submit">
                </div>



        </header>
        <section class="img_index">
                <img src="/Fountain/img/menu_home.png" alt="Menu ảnh" class="img_home">
                <div class="index-text">
                        <h2>A Classical Education for the Future</h2>
                        <p class="content_index">We prepare you to engage in the world that is and to help bring about a world that ought to be.</p>
                        <a href="#" class="get-button">Get Started</a>
                </div>
        </section>

        <div class="support">
                <div class="support_index">
                        <div class="live_chat">
                                <p>Live chat</p>
                                <div class="Remove_Chat">
                                        <img src="/Fountain/img/Remove_Chat.png" alt="">
                                </div>
                        </div>
                        <div class="Examination">
                                <p>Examination</p>
                                <div class="Remove_Examination">
                                        <img src="/Fountain/img/Remove_Examination1.png" alt="">
                                </div>
                        </div>
                        <div class="Competition">
                                <p>Competition</p>
                                <div class="Remove_Competition">
                                        <img src="/Fountain/img/Remove_Competition.png" alt="">
                                </div>
                        </div>
                </div>

                <div class="br_cursor">
                        <div class="cursor_black">
                                <a href="#"> <img src="/fountain/svg/right.svg" alt=""></a>
                        </div>
                </div>
        </div>


        <!--Top cartegories-->

        <h1 class="top_cartegories">Top cartegories</h1>

        <article class="article_content">
                <div class="article_background">
                        <a href="#" class="see_all">See all</a>

                        <figure class="figure_Top_cartegories">


                                <a href="#">
                                        <div>
                                                <img src="/fountain\Top_cartegories\Marketing.png" alt="Marketing">
                                        </div>
                                        <figcaption class="fig_Makerting">
                                                <h3>Makerting</h3>
                                        </figcaption>
                                        <div class="Content_marketing">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nibh netus auctor consect massa.
                                                        Maecen vivamus sed nibh enim sed. Hac ridiculus tellus urna quam odio quis montes, diam.
                                                    Malesuada ut urna eu faucibus</p>
                                        </div>
                                </a>

                        </figure>
                        <figure class="figure_Top_cartegories">


                                <a href="#">
                                        <div>
                                                <img src="\fountain\Top_cartegories\Design.jpg" alt="Design">
                                        </div>
                                        <figcaption class="fig_Makerting">
                                                <h3>Design</h3>
                                        </figcaption>
                                        <div class="Content_marketing">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nibh netus auctor consect massa. Maecen vivamus sed nibh enim sed.
                                                        Hac ridiculus tellus urna quam odio quis montes, diam. Malesuada ut urna eu faucibus faucibus faucibus u</p>
                                        </div>

                                </a>

                        </figure>
                        <figure class="figure_Top_cartegories">
                                <a href="#">
                                        <div>
                                                <img src="\fountain\Top_cartegories\Programming.jpg" alt="Programming">
                                        </div>
                                        <figcaption class="fig_Makerting">
                                                <h3>Programming</h3>
                                        </figcaption>
                                        <div class="Content_marketing">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nibh netus auctor consect massa.
                                                        Maecen vivamus sed nibh enim sed.
                                                        Hac ridiculus tellus urna quam odio quis montes, diam. Malesuada ut urna eu faucibus faucibus faucibus u</p>
                                        </div>

                                </a>

                        </figure>
                        <figure class="figure_Top_cartegories">
                                <a href="#">
                                        <div>
                                                <img src="\fountain\Top_cartegories\Technology.jpg" alt="Technology">
                                        </div>
                                        <figcaption class="fig_Makerting">
                                                <h3>Technology</h3>
                                        </figcaption>
                                        <div class="Content_marketing">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nibh netus auctor consect massa.
                                                        Maecen vivamus sed nibh enim sed.
                                                        Hac ridiculus tellus urna quam odio quis montes, diam. Malesuada ut urna eu faucibus faucibus faucibus u</p>
                                        </div>

                                </a>

                        </figure>
                        <figure class="figure_Top_cartegories">
                                <a href="#">
                                <div>
                                                <img src="\fountain\Top_cartegories\Technology.jpg" alt="Technology">
                                        </div>
                                        <figcaption class="fig_Makerting">
                                                <h3>Technology</h3>
                                        </figcaption>
                                        <div class="Content_marketing">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nibh netus auctor consect massa.
                                                        Maecen vivamus sed nibh enim sed.
                                                        Hac ridiculus tellus urna quam odio quis montes, diam. Malesuada ut urna eu faucibus faucibus faucibus u</p>
                                        </div>

                                </a>

                        </figure>
                        <figure class="figure_Top_cartegories">
                                <a href="#">
                                        <div>
                                                <img src="\fountain\Top_cartegories\Technology.jpg" alt="Technology">
                                        </div>
                                        <figcaption class="fig_Makerting">
                                                <h3>Technology</h3>
                                        </figcaption>
                                        <div class="Content_marketing">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nibh netus auctor consect massa.
                                                        Maecen vivamus sed nibh enim sed.
                                                        Hac ridiculus tellus urna quam odio quis montes, diam. Malesuada ut urna eu faucibus faucibus faucibus u</p>
                                        </div>

                                </a>

                        </figure>


                        <div class="LR_content">

                                <div class="background_left">
                                        <label for="slide4" class="left">
                                                <img src="/fountain/img/left.png" alt="Left">
                                        </label>
                                </div>
                                <div class="background_right">
                                        <label for="slide2" class="right">
                                                <img src="/fountain/img/right.png" alt="Right">
                                        </label>
                                </div>


                        </div>


        </article>
        <!--We are Experts Learning Institution-->
        <article class="background_institution">
                <div class="background_learning_institution">
                        <div class="circle-container">
                                <div class="circle-border"></div>
                                <div class="circle_color"> </div>
                                <img src="/fountain/Learning_Institution/institution.png" alt="Institution" class="circle-image">

                        </div>
                        <div class="content">
                                <div class="title">
                                        <p>We are <span class="Experts_hr"> Experts </span> Learning Institution</p>
                                </div>
                                <div class="description">
                                        <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit elit, bibendum volutpat platea mi,
                                                adipiscing eget magna. Eu nulla ut urna venenatis velit et tincidunt. Id vitae velit.
                                        </p>
                                </div>
                                <div>
                                        <form action=" " method="">
                                                <input type="submit" name="" id="" value="Enroll now" class="button_Experts">
                                        </form>
                                </div>
                        </div>
                </div>
                <!-- Hinh tron  background -->
                <div class="">
                        <div class="background_Learning_institution">

                        </div>
                </div>

                <!--gach chan-->
                <div class="Hr">
                        <div class="hr">

                        </div>
                </div>
                <!--Outstanding-->
                <div class="background-outstanding">
                        <div>
                                <img src="/fountain/img/Remove_Competition.png" alt="Competition" class="Competition_outstanding">
                        </div>
                        <div class="trans_text">
                                <div class="text-outstanding">
                                        <p> Outstanding
                                                <span style="font-family: Poppins;
                                                                font-size: 20px;
                                                                font-weight: 400;
                                                                line-height: 30px;
                                                                text-align: center;
                                                                text-underline-position: from-font;
                                                                text-decoration-skip-ink: none;
                                                                color:black;

                                                "> Instructors </span>
                                        </p>
                                </div>
                        </div>
                        <div class="background_Instructors">
                                <div>
                                        <img src="\fountain\Learning_Institution\Instructors.jpg" alt="Instructors" class="Instructors">
                                </div>
                                <div>
                                        <img src="\fountain\Learning_Institution\Instructors.jpg" alt="Instructors" class="Instructors_2">
                                </div>
                                <div>
                                        <img src="\fountain\Learning_Institution\Instructors.jpg" alt="Instructors" class="Instructors_3">
                                </div>
                        </div>
                        <div>
                                <div class="hr_instructors">

                                </div>
                        </div>

                </div>
                <!-- Hinh tron  background -->
                <div class="">
                        <div class="background_Learning_institution_2">

                        </div>
                </div>
        </article>
        <!--Explore our popular course-->
        <div class="Explore_our_popular_course">
                <p>Explore our popular course</p>
        </div>


        <div class="sort_by_background">
                <div class="sort_by_img">
                        <img src="/fountain/img/bottom.png" alt="bottom">
                </div>
                <div class="sort_by_text">
                        <p>Sort by</p>

                </div>
        </div>

        <article class="article_sort_by">


                <figure class="figure_star">
                        <a href="#" class="a_star">
                                <img src="/fountain/Explore_our_popular_course\Learn_Marketing_from_Top_Instructors..jpg">
                                <div class="display_star">
                                        <figcaption class="ficaption_star">
                                                <h3>Learn Marketing from Top Instructors</h3>
                                        </figcaption>
                                        <div class="review_star">
                                                <img src="/fountain/img/star.png" alt="star">
                                                <p>4.5</p>
                                        </div>
                                </div>
                                <div class="content_star">
                                        <div>
                                                <p>6 weeks</p>
                                        </div>
                                        <div>
                                                <p>1.5k Students</p>

                                        </div>
                                        <div class="money">
                                                <p>30.5$</p>
                                        </div>
                                </div>

                        </a>
                </figure>


                <figure class="figure_star">
                        <a href="#" class="a_star">
                                <img src="\fountain\Explore_our_popular_course\Front-end_development.jpg">
                                <div class="display_star">
                                        <figcaption class="ficaption_star">
                                                <h3>Front-end development is not hard as you think</h3>
                                        </figcaption>
                                        <div class="review_star">
                                                <img src="/fountain/img/star.png" alt="star">
                                                <p>4.5</p>
                                        </div>
                                </div>
                                <div class="content_star">
                                        <div>
                                                <p>6 weeks</p>
                                        </div>
                                        <div>
                                                <p>1.5k Students</p>

                                        </div>
                                        <div class="money">
                                                <p>30.5$</p>
                                        </div>

                                </div>

                        </a>
                </figure>

                <figure class="figure_star">
                        <a href="#" class="a_star">
                                <img src="\fountain\Explore_our_popular_course\Everrything_you_need_to_know_in_UX.jpg">
                                <div class="display_star">
                                        <figcaption class="ficaption_star">
                                                <h3>Everrything you need to know in UX</h3>
                                        </figcaption>
                                        <div class="review_star">
                                                <img src="/fountain/img/star.png" alt="star">
                                                <p>4.5</p>
                                        </div>
                                </div>
                                <div class="content_star">
                                        <div>
                                                <p>6 weeks</p>
                                        </div>
                                        <div>
                                                <p>1.5k Students</p>

                                        </div>
                                        <div class="money">
                                                <p>30.5$</p>
                                        </div>

                                </div>

                        </a>
                </figure>

                <figure class="figure_star">
                        <a href="#" class="a_star">
                                <img src="\fountain\Explore_our_popular_course\Learn_photography.jpg">
                                <div class="display_star">
                                        <figcaption class="ficaption_star">
                                                <h3>Learn photography with ease</h3>
                                        </figcaption>
                                        <div class="review_star">
                                                <img src="/fountain/img/star.png" alt="star">
                                                <p>4.5</p>
                                        </div>
                                </div>
                                <div class="content_star">
                                        <div>
                                                <p>6 weeks</p>
                                        </div>
                                        <div>
                                                <p>1.5k Students</p>

                                        </div>
                                        <div class="money">
                                                <p>30.5$</p>
                                        </div>

                                </div>

                        </a>
                </figure>

                <figure class="figure_star">
                        <a href="#" class="a_star">
                                <img src="\fountain\Explore_our_popular_course\Be_a_pro_in_data_analysis.jpg">
                                <div class="display_star">
                                        <figcaption class="ficaption_star">
                                                <h3>Be a pro in data analysis</h3>
                                        </figcaption>
                                        <div class="review_star">
                                                <img src="/fountain/img/star.png" alt="star">
                                                <p>4.5</p>
                                        </div>
                                </div>
                                <div class="content_star">
                                        <div>
                                                <p>6 weeks</p>
                                        </div>
                                        <div>
                                                <p>1.5k Students</p>

                                        </div>
                                        <div class="money">
                                                <p>30.5$</p>
                                        </div>

                                </div>

                        </a>
                </figure>

                <figure class="figure_star">
                        <a href="#" class="a_star">
                                <img src="\fountain\Explore_our_popular_course\Ethical_Harking.jpg">
                                <div class="display_star">
                                        <figcaption class="ficaption_star">
                                                <h3>Ethical Harking is not hard as you think </h3>
                                        </figcaption>
                                        <div class="review_star">
                                                <img src="/fountain/img/star.png" alt="star">
                                                <p>4.5</p>
                                        </div>
                                </div>
                                <div class="content_star">
                                        <div>
                                                <p>6 weeks</p>
                                        </div>
                                        <div>
                                                <p>1.5k Students</p>

                                        </div>
                                        <div class="money">
                                                <p>30.5$</p>
                                        </div>

                                </div>

                        </a>
                </figure>

        </article>
        <!--Our online examination is top-notch-->
        <article class="background_Our_online_examination_istop-notch">
                <div class="background_learning_institution">
                        <div class="circle-container_our">
                                <div class="circle-border"></div>
                                <div class="circle_color">
                                        <img src="\fountain\examination\examination.png" alt="Institution" class="circle-image_our">
                                </div>
                        </div>
                        <div class="content">
                                <div class="title_our">
                                        <p>Our online <span class="examination-hr"> examination </span> is top-notch</p>
                                </div>
                                <div class="content_our_onl">
                                        <p>
                                                Prepare your self for greater challenges with our online examination.
                                        </p>
                                </div>
                                <div>
                                        <form action=" " method="" class="form_our">
                                                <input type="submit" name="" id="" value="Take a test" class="button_Experts">
                                        </form>
                                </div>
                        </div>
                </div>
                <!-- Hinh tron  background -->
                <div class="">
                        <div class="background_Learning_institution">

                        </div>
                </div>


                <!--Increase-->
                <div class="background-Increase">
                        <div>
                                <img src="/fountain/img/Increase.png" alt="Competition" class="Competition_outstanding">
                        </div>
                        <div class="trans_text_increase">
                                <div class="text-Instrctors">
                                        <p> Increase <span class="content_Icrease"> Your Job opportunity </span> </p>
                                </div>
                        </div>

                        <div>
                                <div class="hr_Increase">

                                </div>
                        </div>

                </div>
                <!-- Hinh tron  background -->
                <div class="">
                        <div class="background_Learning_institution_2">

                        </div>
                </div>
        </article>


        <!--Popular examination-->
        <h1 class="title_Popular_examination">Popular examination</h1>
        <article class="Popular_examination">

                <a href="#" class="see_all_popular_examination">See all</a>

                <!--NATURE of Science-->
                <figure class="figure_Popular_examination">
                        <a href="#">
                                <img src="\fountain\Popular_examination\NATURE_of_Sciencecbd.png" alt=" NATURE_of_Sciencecbd">
                                <figcaption>NATURE of Science</figcaption>
                        </a>
                </figure>

                <!-- 2022 Astro Report-->
                <figure class="figure_Popular_examination">
                        <a href="#">
                                <img src="\fountain\Popular_examination\2022_Astro_Reportpng.png" alt="2022_Astro_Reportpng">
                                <figcaption>2022 Astro Report</figcaption>
                        </a>
                </figure>

                <!-- Data Analysis With Python -->
                <figure class="figure_Popular_examination">
                        <a href="#">
                                <img src="\fountain\Popular_examination\Data_Analysis_With_Python.png" alt="Data_Analysis_With_Python">
                                <figcaption>Data Analysis With Python</figcaption>
                        </a>
                </figure>

                <!-- Advanced UX Designs -->
                <figure class="figure_Popular_examination">
                        <a href="#">
                                <img src="\fountain\Popular_examination\UX_Designs.png" alt="UX_Designs">
                                <figcaption>Advanced UX Designs</figcaption>
                        </a>
                </figure>


                <div class="LR_content_exam">
                        <div class="background_left_exam">
                                <label for="slide4" class="left_exam">
                                        <img src="/fountain/img/left.png" alt="Left">
                                </label>
                        </div>
                        <div class="background_right_exam">
                                <label for="slide2" class="right_exam">
                                        <img src="/fountain/img/right.png" alt="Right">
                                </label>
                        </div>
                </div>


                </div>
        </article>
        <!--Competate with various scholars around the globe-->
        <h1 class="h1_Competate">Competate with various scholars around the globe</h1>
        <article class="background_Competate_with_various_scholars_around_the_globe">
                <div class="background_Den">
                        <div class="circle-container_competate">
                                <div class="circle-border"></div>
                                <div class="circle_color"></div>
                                <img src="\fountain\Competate_with_various_scholars_around_the_globe\Den.png" alt="Institution" class="circle-image">
                        </div>

                </div>
                <!-- Hinh tron  background -->
                <div class="">
                        <div class="background_Learning_institution">

                        </div>
                </div>



                <!--Den of Schorlars-->
                <div class="background-Competate">
                        <div>
                                <img src="/fountain/img/Remove_Competition.png" alt="Competition" class="Competition_Competate ">
                        </div>
                        <div class="trans_text_den">
                                <div class="text-Competate">
                                        <p> Den
                                                <span style="font-family: Poppins;
                                                             font-size: 22px;
                                                             font-weight: 400;
                                                             line-height: 30px;
                                                             text-align: center;
                                                             text-underline-position: from-font;
                                                             text-decoration-skip-ink: none;
                                                             color: black;

                                                "> of Schorlars </span>
                                        </p>
                                </div>
                        </div>

                        <div>
                                <div class="hr_Den">

                                </div>
                        </div>

                </div>
                <!-- Hinh tron  background -->
                <div class="">
                        <div class="background_Learning_institution_2">

                        </div>
                </div>
                <form action="" class="form_den">
                        <label for="">Registration to get notified about new competition and article we publish.</label>
                        <input type="text" name="" id="" placeholder="Full name" class="form_input">
                        <input type="email" name="" id="" placeholder="Email" class="form_input">
                        <input type="tel" name="" id="" placeholder="Phone number" class="form_input">
                        <select name="Select" class="form_slect">
                                <option value="default" selected hidden> Select a course</option>
                                <option value="List of courses goes here">
                                        List of courses goes here
                                </option>
                                <option value="List of courses goes here">
                                        List of courses goes here
                                </option>
                                <option value="List of courses goes here">
                                        List of courses goes here
                                </option>
                        </select>
                        <input type="submit" name="" id="" value="Register" class="button_Den">
                </form>
        </article>
        <!--Featured Competition-->
        <h1 class="Featured ">Featured Competition</h1>
        <article class="article_content_Featured">
                <div class="article_background_Featured">
                        <a href="#" class="see_all_Featured">See all</a>

                        <figure class="figure_Featured">


                                <a href="#">
                                        <div>
                                                <img src="/fountain\Top_cartegories\Marketing.png" alt="Marketing">
                                        </div>

                                        <figcaption class="fig_Contest">
                                                <h3>Marketing Contest</h3>
                                                <p>The Future Economy</p>
                                        </figcaption>

                                        <div class="Content_Contest">
                                                <p>Eligibility: For designers Price:
                                                        $60 Deadline:
                                                        26/8/2022</p>
                                        </div>

                                </a>

                        </figure>
                        <figure class="figure_Featured">


                                <a href="#">
                                        <div>
                                                <img src="\fountain\Top_cartegories\Design.jpg" alt="Design">
                                        </div>
                                        <figcaption class="fig_Contest">
                                                <h3>UI/UX Design Contest</h3>
                                                <p>Accessibility in design</p>
                                        </figcaption>
                                        <div class="Content_Contest">
                                                <p>Eligibility: For designers
                                                        Price: $60
                                                        Deadline: 26/8/2022</p>
                                        </div>

                                </a>

                        </figure>
                        <figure class="figure_Featured">
                                <a href="#">
                                        <div>
                                                <img src="\fountain\Featured Competition\Programming_Contest.jpg" alt="Programming">
                                        </div>
                                        <figcaption class=" fig_Contest ">
                                                <h3>Programming Contest</h3>
                                                <p>The Future of AI</p>
                                        </figcaption>
                                        <div class="Content_Contest">
                                                <p>Eligibility: For designers
                                                        Price: $60
                                                        Deadline: 26/8/2022</p>
                                        </div>

                                </a>

                        </figure>
                        <figure class="figure_Featured">
                                <a href="#">
                                        <div>
                                                <img src="\fountain\Top_cartegories\Programming.jpg" alt="Technology">
                                        </div>
                                        <figcaption class="fig_Contest ">
                                                <h3>Photography Contest</h3>
                                                <p>The Beauty of Art</p>
                                        </figcaption>
                                        <div class="Content_Contest">
                                                <p>Eligibility: For designers
                                                        Price: $60
                                                        Deadline: 26/8/2022</p>
                                        </div>

                                </a>

                        </figure>
                        <figure class="figure_Featured">
                                <a href="#">
                                        <div>
                                                <img src="\fountain\Top_cartegories\Technology.jpg" alt="Technology">
                                        </div>

                                        <figcaption class="fig_Contest ">
                                                <h3>Biology Contest</h3>
                                        </figcaption>
                                        <div class="Content_Contest">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nibh netus auctor consect massa.
                                                        Maecen vivamus sed nibh enim sed.
                                                        Hac ridiculus tellus urna quam odio quis montes, diam. Malesuada ut urna eu faucibus faucibus faucibus u</p>
                                        </div>

                                </a>

                        </figure>
                        <figure class="figure_Featured">
                                <a href="#">
                                        <div>
                                                <img src="\fountain\Top_cartegories\Technology.jpg" alt="Technology">
                                        </div>
                                        <figcaption class="fig_Contest ">
                                                <h3>Data Analysis Contest</h3>
                                                <p></p>
                                        </figcaption>
                                        <div class="Content_Contest">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nibh netus auctor consect massa.
                                                        Maecen vivamus sed nibh enim sed.
                                                        Hac ridiculus tellus urna quam odio quis montes, diam. Malesuada ut urna eu faucibus faucibus faucibus u</p>
                                        </div>

                                </a>

                        </figure>
                        <figure class="figure_Featured">
                                <a href="#">
                                        <div>
                                                <img src="\fountain\Top_cartegories\Technology.jpg" alt="Technology">
                                        </div>
                                        <figcaption class="fig_Contest ">
                                                <h3>Conteng Writing Contest</h3>
                                                <p></p>
                                        </figcaption>
                                        <div class="Content_Contest">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nibh netus auctor consect massa.
                                                        Maecen vivamus sed nibh enim sed.
                                                        Hac ridiculus tellus urna quam odio quis montes, diam. Malesuada ut urna eu faucibus faucibus faucibus u</p>
                                        </div>

                                </a>

                        </figure>

                        <div class="LR_content_Featured">

                                <div class="background_left_Featured">
                                        <label for="slide4" class="left_Featured ">
                                                <img src="/fountain/img/left.png" alt="Left">
                                        </label>
                                </div>
                                <div class="background_right_Featured ">
                                        <label for="slide2" class="right_Featured">
                                                <img src="/fountain/img/right.png" alt="Right">
                                        </label>
                                </div>


                        </div>


        </article>

        <article class="background_institution">
                <div class="background_Nature">
                        <div class="circle-container-Nature">
                                <div class="circle-border"></div>
                                <div class="circle_color"> </div>
                                <img src="\fountain\Popular_examination\NATURE_of_Sciencecbd.png" alt="Institution" class="circle-image_nature">

                        </div>
                        <div class="content_nature">
                                <div class="title">
                                        <p>Get <span class="Experts_hr">Publicstions</span> from best Aurtors around the Globe</p>
                                </div>
                                <div class="content_get_publicstions">
                                        <p>
                                                Lorem ipsum dolor sit at, consectetur adipielit. Facilisi fermentum, dignissim pharetra. pharetra. Aliquam
                                        </p>
                                </div>
                                <div>
                                        <form action=" " method="" class="form_narute">
                                                <input type="submit" name="" id="" value="Register" class="button_Experts">
                                        </form>
                                </div>
                        </div>
                </div>
                <!-- Hinh tron  background -->
                <div class="">
                        <div class="background_Learning_institution">

                        </div>
                </div>

                <!--gach chan-->
                <div class="Hr_Readers_are_leaders">
                        <div class="hr_leader">

                        </div>
                </div>
                <!--Readers_are_leaders-->
                <div class="background-Readers_are_leaders">
                        <div>
                                <img src="/fountain/img/Remove_Competition.png" alt="Competition" class="Competition_outstanding">
                        </div>
                        <div class="trans_text_Readers_are_leaders">
                                <div class="text-Readers_are_leaders">
                                        <p>Readers
                                                are
                                                <span style="color:#F77E23 ;">leaders</span>

                                        </p>
                                </div>
                        </div>

                        <div>
                                <div class="hr_text_Readers_are_leaders">

                                </div>
                        </div>

                </div>
                <!-- Hinh tron  background -->
                <div class="">
                        <div class="background_Learning_institution_2">

                        </div>
                </div>
        </article>
        <h1 class="Featured ">Recent Publications</h1>
        <article class="Popular_examination">

                <a href="#" class="see_all_popular_examination">See all</a>

                <!--NATURE of Science-->
                <figure class="figure_Popular_examination">
                        <a href="#">
                                <img src="\fountain\Popular_examination\NATURE_of_Sciencecbd.png" alt=" NATURE_of_Sciencecbd">
                                <figcaption>NATURE of Science</figcaption>
                        </a>
                </figure>

                <!-- 2022 Astro Report-->
                <figure class="figure_Popular_examination">
                        <a href="#">
                                <img src="\fountain\Popular_examination\2022_Astro_Reportpng.png" alt="2022_Astro_Reportpng">
                                <figcaption>2022 Astro Report</figcaption>
                        </a>
                </figure>

                <!-- Data Analysis With Python -->
                <figure class="figure_Popular_examination">
                        <a href="#">
                                <img src="\fountain\Popular_examination\Data_Analysis_With_Python.png" alt="Data_Analysis_With_Python">
                                <figcaption>Data Analysis With Python</figcaption>
                        </a>
                </figure>

                <!-- Advanced UX Designs -->
                <figure class="figure_Popular_examination">
                        <a href="#">
                                <img src="\fountain\Popular_examination\UX_Designs.png" alt="UX_Designs">
                                <figcaption>Advanced UX Designs</figcaption>
                        </a>
                </figure>
                <div class="LR_content_exam">
                        <div class="background_left_exam">
                                <label for="slide4" class="left_exam">
                                        <img src="/fountain/img/left.png" alt="Left">
                                </label>
                        </div>
                        <div class="background_right_exam">
                                <label for="slide2" class="right_exam">
                                        <img src="/fountain/img/right.png" alt="Right">
                                </label>
                        </div>
                </div>


                </div>
        </article>
        <!--review-->

        <article class="review_article">
                <h1 class="review">Reviews</h1>
                <div>
                        <h1>
                                What our <span class="Experts_hr">Students</span> say about us
                        </h1>
                </div>
                <div class="hr_students">

                </div>
                <div>
                        <figure class="review_figure">
                                <div class="div_review_father">
                                        <div class="div_review">
                                                <img src="\fountain\review\Mohh_Jumah.jpg" alt="Mohh_Jumah">
                                                <p class="review_p">Mohh Jumah
                                                        <span class="review_color">Senior Developer</span>
                                                </p>


                                        </div>
                                        <div class="content_review">
                                                <p>

                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur ac blandit nam massa massa
                                                        elementum mollis lectus. Sit ultricies nisl amet non, quis enim velit tempus. Interdum duis imperdiet venenatis
                                                </p>
                                        </div>
                                </div>


                        </figure>

                </div>
                <div>
                        <figure class="review_figure">
                                <div class="div_review_father">
                                        <div class="div_review">
                                                <img src="\fountain\review\Mohh_Jumah.jpg" alt="Mohh_Jumah">
                                                <p class="review_p">Mohh Jumah
                                                        <span class="review_color">Senior Developer</span>
                                                </p>


                                        </div>
                                        <div class="content_review">
                                                <p>

                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur ac blandit nam massa massa
                                                        elementum mollis lectus. Sit ultricies nisl amet non, quis enim velit tempus. Interdum duis imperdiet venenatis
                                                </p>
                                        </div>
                                </div>


                        </figure>

                </div>
                <div>
                        <figure class="review_figure">
                                <div class="div_review_father">
                                        <div class="div_review">
                                                <img src="\fountain\review\Mohh_Jumah.jpg" alt="Mohh_Jumah">
                                                <p class="review_p">Mohh Jumah
                                                        <span class="review_color">Senior Developer</span>
                                                </p>


                                        </div>
                                        <div class="content_review">
                                                <p>

                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur ac blandit nam massa massa
                                                        elementum mollis lectus. Sit ultricies nisl amet non, quis enim velit tempus. Interdum duis imperdiet venenatis
                                                </p>
                                        </div>
                                </div>


                        </figure>

                </div>



                <div class="LR_content_review">

                        <div class="background_left_review">
                                <label for="slide4" class="left_review ">
                                        &lt;
                                </label>
                        </div>
                        <div class="background_right_review ">
                                <label for="slide2" class="right_review">
                                        &gt;
                                </label>
                        </div>


                </div>
        </article>

        <footer class="footer">
                <div class="div_footer">
                        <h1><a href="">Fountain</a></h1>
                        <p>We are not here to sell you products, we sell value through our expertise.</p>
                        <div class="fb">
                                <img src="\fountain\svg\facebook.svg" alt="facbook">
                        </div>
                </div>
        </footer>
</body>

</html>