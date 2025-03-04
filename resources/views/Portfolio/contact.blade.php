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
    <link rel="stylesheet" href="{{asset('assets/css/style_contact.css')}}">
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
        <a href="{{route('portfolio.contact')}}" class="">Contact</a>
    </nav>
</header>
<!--end header-->


<!--start Contact Section -->
<section class="contact active">
    <div class="contact-container">
        <div class="contact-box">
            <h2>Let's Work Together</h2>
            <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, voluptatem illo magni similique velit at mollitia corporis quaerat eaque asperiores.</p>
            <div class="contact-detail">
                <i class='bx bxs-phone'></i>
                <div class="detail">
                    <p>Phone</p>
                    <p>(+20) 11 5533 1309</p>
                </div>
            </div>

            <div class="contact-detail">
                <i class='bx bxs-envelope'></i>
                <div class="detail">
                    <p>Email</p>
                    <p>abdallahsamir370@gmail.com</p>
                </div>
            </div>

            <div class="contact-detail">
                <i class='bx bxs-map'></i>
                <div class="detail">
                    <p>Address</p>
                    <p>Soubra-Cairo-Egypt</p>
                </div>
            </div>
        </div>

        <div class="contact-box">
            <form action="">
                <h2 class="heading">Contact <span>Me!</span></h2>
                <div class="field-box">
                    <input type="text" placeholder="Full Name" required>
                    <input type="email" placeholder="Email Address" required>
                    <input type="text" placeholder="Phone Number" required>
                    <input type="text" placeholder="Email Subject" required>
                    <textarea name="" id="" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </div>
</section>
<!--end Contact Section -->






<!-- custom js -->
<script src="{{asset('assets/js/script.js')}}"></script>

</body>

</html>
