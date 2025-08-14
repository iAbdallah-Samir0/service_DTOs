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
    <link rel="stylesheet" href="{{asset('assets/css/style_home.css')}}">
</head>

<body>

<!--start header-->
<header class="active">
    <a href="{{route('portfolio.home')}}" class="logo">Portfolio.</a>
    <i class="bx bx-menu" id="menu-icon"></i>
    <nav>
        <a href="{{route('portfolio.home')}}" class="active">Home</a>
        <a href="{{route('portfolio.services')}}" class="">Services</a>
        <a href="{{route('portfolio.resume')}}" class="">Resume</a>
        <a href="{{route('portfolio.portfolio')}}" class="">Portfolio</a>
        <a href="{{route('portfolio.emails.contact')}}" class="">Contact</a>
    </nav>
</header>
<!--end header-->


<!-- bars background -->
<div class="bars-box active">
    <div class="bar" style="--i:6;"></div>
    <div class="bar" style="--i:5;"></div>
    <div class="bar" style="--i:4;"></div>
    <div class="bar" style="--i:3;"></div>
    <div class="bar" style="--i:2;"></div>
    <div class="bar" style="--i:1;"></div>
</div>


<!--start Home Section -->
<section class="home active">
    <div class="home-detail">
        <h1>Abdallah Samir</h1>
            <h2>I'm a
                <span style="--i:4;" data-text="Software Engineer">Software Engineer</span>
                <span style="--i:3;" data-text="Coder">Coder</span>
                <span style="--i:2;"  data-text="Backend Developer">Backend Developer</span>
                <span style="--i:1;" data-text="PHP Developer | Laravel">PHP Developer | Laravel</span>
            </h2>
            <p>Skilled Back-end developer who's passionate about his work,
                learning new skills, and solving problems. Knowledgeable in testing and debugging processes.
                Bringing forth expertise in the design, installation, testing, and maintenance of web systems.</p>
            <div class="btn-sci">
            <a href="{{asset('assets/cv/Abdallah-Samir-Resume.pdf')}}" download="Abdallah-Samir-Resume.pdf" class="btn">Download CV</a>
            <div class="sci">
                <a href="https://github.com/iAbdallah-Samir0"><i class="bx bxl-github"></i> </a>
                <a href="https://www.linkedin.com/in/abdallah-samir-745918224?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="bx bxl-linkedin"></i> </a>
                <a href="mailto:abdallahsamir370@gmail.com"><i class="bx bxl-gmail"></i> </a>
                <a href="https://wa.me/+2001155331309"><i class="bx bxl-whatsapp"></i> </a>
            </div>
        </div>
    </div>

    <!--start Home img-->
    <div class="home-img">
        <div class="img-box">
            <div class="img-item">
                <img src="{{asset('assets/img/my-picture2.png')}}" alt="My picture" width="20px" height="20px" ">
            </div>
        </div>
    </div>
    <!--end Home img-->

</section>
<!--end Home Section -->



<!-- custom js -->
<script src="{{asset('assets/js/script.js')}}"></script>

</body>
</html>
