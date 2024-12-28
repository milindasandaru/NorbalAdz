<!-- S.A.Milinda Sandaruwan	IT23284784  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NorbelAdz.com - Online Advertising Agency</title>
    <meta name="title" content="BLOOMARK.com - Online Advertising Agency">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/Home_Page.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-..." crossorigin="anonymous" />

<style>
    .home {
    position: relative;
    width: 100%;
    justify-content: space-between;
    height: 100vh;
    background-image: url('./Image/backgroud.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    padding: 70px 10% 0;
}
</style>

</head>



<body>

<?php
  include './header.php';
  ?>

    <section class="home">
        <div class="home-content">
            <h2>Boost Your Brand's Value<br> With Us</h2>
            <h4><span class="text"></span></h4>
            <a href="create.php" class="btn-box">Reach out now</a>
        </div>
    </section>

    <div class="slide_heading">
        <h2>POPULAR <span class="heading_span">SERVICES</span></h2>
    </div>

    <!-- https://swiperjs.com -->
    <!--https://unpkg.com/browse/swiper@8.1.6/ -->
    <section class="slide">
        <div class="slide_container swiper">
            <div class="slide_content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="./Image/126735974_Online shopping e commerce technology illustration concept.jpg" alt="slide" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h4 class="name">E-Commerce</h4>
                            <p class="description">An effective e-commerce platform is essential for driving sales and expanding reach. Our solutions empower businesses to showcase products and provide seamless shopping experiences.</p>
                            <button class="slide_button" onclick="window.location.href = 'web_design.php';">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="./Image/32572778_vnu_m653_010.jpg" alt="slide" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h4 class="name">Web Design</h4>
                            <p class="description">Creating visually appealing and user-friendly websites is crucial for a strong online presence. Our web design services focus on modern, responsive interfaces tailored to your brand and audience.</p>
                            <button class="slide_button" onclick="window.location.href = 'web_design.php';">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="./Image/27527767_iso20051.jpg" alt="slide" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h4 class="name">Analysis</h4>
                            <p class="description">Data analysis provides insights into market trends and customer behavior. Our services interpret data to make informed decisions that drive growth.</p>
                            <button class="slide_button" onclick="window.location.href = 'web_design.php';">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="./Image/71979147_Programmers are building web applications.jpg"
                                    alt="slide" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h4 class="name">Software Development</h4>
                            <p class="description">Custom software solutions optimize processes and increase efficiency. We design and implement tailored applications to address specific business challenges.</p>
                            <button class="slide_button" onclick="window.location.href = 'web_design.php';">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="./Image/9808373_4249649.jpg" alt="slide" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h4 class="name">Social Media Marketing</h4>
                            <p class="description">Leveraging social media builds brand awareness and fosters customer relationships. Our strategies maximize online presence and ROI through targeted content and engagement.</p>
                            <button class="slide_button" onclick="window.location.href = 'web_design.php';">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="./Image/28973512_men_and_women_chatting_on_the_app.jpg" alt="slide" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h4 class="name">Mobile Apps</h4>
                            <p class="description">Mobile apps enhance customer engagement and accessibility. Our services specialize in creating user-centric applications across platforms.</p>
                            <button class="slide_button" onclick="window.location.href = 'web_design.php';">View More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--About section-->
    <section class="about">
        <div class="about_quote">
            <p><i>“Ignoring online marketing is like opening a business <br>but not telling anyone.”</i></p>
        </div>
        <div class="about_heading">
            <h2>What gives us more power to lead the digital marketing industry</h2>
        </div>
        <div class="about_paragraph">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum unde a, vero provident nesciunt illum
                sapiente reprehenderit voluptates. Dignissimos ipsum ducimus aperiam voluptas, debitis quam corrupti
                illum? Neque, earum. Odit?. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia culpa, eos
                vitae nam asperiores voluptatem quae rem aliquid molestiae quam minus aliquam laboriosam et quisquam
                optio ad provident! Saepe, minima!</p>
        </div>
        <div class="statistics">
            <div class="statistic">
                <h3>10+ <span>YEARS IN BUSINESS</span></h3>
            </div>
            <div class="statistic">
                <h3>700+ <span>CLIENTS</span></h3>
            </div>
            <div class="statistic">
                <h3>35 <span>AWARD WINS</span></h3>
            </div>
            <div class="statistic">
                <h3>50+ <span>OUR TEAM</span></h3>
            </div>
        </div>
        <a href="./Ourstory.php" class="about-btn">About Us</a>
    </section>

    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/Home_Page.js"></script>


    <?php
  include './footer.php';
  ?>

</body>

</html>