<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Home</title>
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="{{asset('assets/ico/favicon.png')}}" type="image/x-icon">
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/style_portfolio.css')}}">
</head>

<body>


<!--start header-->
<header>
    <a href="{{route('portfolio.home')}}" class="logo">Portfolio.</a>
    <i class="bx bx-menu" id="menu-icon"></i>
    <nav>
        <a href="{{route('portfolio.home')}}" class="active">Home</a>
        <a href="{{route('portfolio.services')}}" class="">Services</a>
        <a href="{{route('portfolio.resume')}}" class="">Resume</a>
        <a href="{{route('portfolio.portfolio')}}" class="">Portfolio</a>
        <a href="" class="">Contact</a>
    </nav>
</header>
<!--end header-->


<!--start Portfolio Section -->
<section class="portfolio active">
    <h2 class="heading">Latest <span>Project</span></h2>

    <div class="portfolio-container">
        <div class="portfolio-box">
            <div class="portfolio-detail active">
                <p class="numb">01</p>
                <h3>Backend Project</h3>
                <p>Backend Project Backend Project Backend Project Backend Project Backend Project Backend Project Backend Project</p>
                <div class="tech">
                    <p>PHP , Laravel , MySql</p>
                </div>
                <div class="live-github">
                    <a href="#"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
                    <a href="#"><i class="bx bxl-github"></i><span>Github Repository</span></a>
                </div>
            </div>

            <div class="portfolio-detail">
                <p class="numb">02</p>
                <h3>Backend Project</h3>
                <p>Backend Project Backend Project Backend Project Backend Project Backend Project Backend Project Backend Project</p>
                <div class="tech">
                    <p>PHP , Laravel , MySql</p>
                </div>
                <div class="live-github">
                    <a href="#"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
                    <a href="#"><i class="bx bxl-github"></i><span>Github Repository</span></a>
                </div>
            </div>

            <div class="portfolio-detail">
                <p class="numb">03</p>
                <h3>Backend Project</h3>
                <p>Backend Project Backend Project Backend Project Backend Project Backend Project Backend Project Backend Project</p>
                <div class="tech">
                    <p>PHP , Laravel , MySql</p>
                </div>
                <div class="live-github">
                    <a href="#"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
                    <a href="#"><i class="bx bxl-github"></i><span>Github Repository</span></a>
                </div>
            </div>

            <div class="portfolio-detail">
                <p class="numb">04</p>
                <h3>Backend Project</h3>
                <p>Backend Project Backend Project Backend Project Backend Project Backend Project Backend Project Backend Project</p>
                <div class="tech">
                    <p>PHP , Laravel , MySql</p>
                </div>
                <div class="live-github">
                    <a href="#"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
                    <a href="#"><i class="bx bxl-github"></i><span>Github Repository</span></a>
                </div>
            </div>

            <div class="portfolio-detail">
                <p class="numb">05</p>
                <h3>Backend Project</h3>
                <p>Backend Project Backend Project Backend Project Backend Project Backend Project Backend Project Backend Project</p>
                <div class="tech">
                    <p>PHP , Laravel , MySql</p>
                </div>
                <div class="live-github">
                    <a href="#"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
                    <a href="#"><i class="bx bxl-github"></i><span>Github Repository</span></a>
                </div>
            </div>
        </div>

        <div class="portfolio-box">
            <div class="portfolio-carousel">
                <div class="img-slide">
                    <div class="img-item">
                        <img src="{{asset('assets/img/hos_sys_1.png')}}" alt="">
                    </div>
                    <div class="img-item">
                        <img src="{{asset('assets/img/hos_sys_2.png')}}" alt="">
                    </div>
                    <div class="img-item">
                        <img src="{{asset('assets/img/hos_sys_3.png')}}" alt="">
                    </div>
                    <div class="img-item">
                        <img src="{{asset('assets/img/hos_sys_4.png')}}" alt="">
                    </div>
                    <div class="img-item">
                        <img src="{{asset('assets/img/hos_sys_5.png')}}" alt="">
                    </div>
                </div>

                <div class="navigation">
                    <button class="arrow-left disabled"><i class='bx bx-chevron-left'></i></button>
                    <button class="arrow-right"><i class='bx bx-chevron-right'></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end Portfolio Section -->






<!-- custom js -->
<script src="{{asset('assets/js/script.js')}}"></script>

</body>

</html>
