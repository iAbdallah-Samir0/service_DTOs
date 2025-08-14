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

<!-- bars background -->
<div class="bars-box active">
    <div class="bar" style="--i:6;"></div>
    <div class="bar" style="--i:5;"></div>
    <div class="bar" style="--i:4;"></div>
    <div class="bar" style="--i:3;"></div>
    <div class="bar" style="--i:2;"></div>
    <div class="bar" style="--i:1;"></div>
</div>

<!--start header-->
<header class="active">
    <a href="{{route('portfolio.home')}}" class="logo">Portfolio.</a>
    <i class="bx bx-menu" id="menu-icon"></i>
    <nav>
        <a href="{{route('portfolio.home')}}" class="active">Home</a>
        <a href="{{route('portfolio.services')}}">Services</a>
        <a href="{{route('portfolio.resume')}}">Resume</a>
        <a href="{{route('portfolio.portfolio')}}">Portfolio</a>
        <a href="{{route('portfolio.emails.contact')}}">Contact</a>
    </nav>
</header>
<!--end header-->

<!--start Contact Section -->
<section class="contact active">
    <div class="contact-container">

        <div class="contact-box">
            <h2>Let's Work Together</h2>
            <p class="desc">If you are interested in working with me as a  PHP Back-end Developer Laravel , please reach out to me.
                For contact, you can message me via ...</p>

            <div class="contact-detail">
                <a href="tel:+201155331309" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
                    <i class='bx bxs-phone'></i>
                    <div class="detail">
                        <p>Phone</p>
                        <p>(+20) 11 5533 1309</p>
                    </div>
                </a>
            </div>

            <div class="contact-detail">
                <a href="mailto:abdallahsamir370@gmail.com" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
                    <i class='bx bxs-envelope'></i>
                    <div class="detail">
                        <p>Email</p>
                        <p>abdallahsamir370@gmail.com</p>
                    </div>
                </a>
            </div>

            <div class="contact-detail">
                <a href="https://www.google.com/maps/search/Soubra+Cairo+Egypt" target="_blank" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
                    <i class='bx bxs-map'></i>
                    <div class="detail">
                        <p>Address</p>
                        <p>Soubra-Cairo-Egypt</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="contact-box">
            <div id="flash-message" style="
                display:none;
                color: black;
                font-weight: bold;
                font-size: 2rem;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: yellow;
                padding: 1rem 2rem;
                border-radius: 0.6rem;
                box-shadow: 0 0.2rem 0.6rem rgba(0,0,0,0.2);
                opacity: 1;
                transition: opacity 1s ease;
                z-index: 9999;
                text-align: center;
            "></div>

            <form id="contact-form">
                @csrf
                <h2 class="heading">Contact <span>Me!</span></h2>
                <div class="field-box">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="text" name="phone" placeholder="Phone Number" required>
                    <input type="text" name="subject" placeholder="Email Subject" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>

    </div>
</section>
<!--end Contact Section -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- custom js -->
<script src="{{asset('assets/js/script.js')}}"></script>



<script>
    $(function(){
        $('#contact-form').on('submit', function(e){
            e.preventDefault();

            $.ajax({
                url: "{{ route('send.email') }}",
                type: "POST",
                data: $(this).serialize(),
                beforeSend: function(){
                    $('#flash-message').css('background','yellow').text("Sending...").fadeIn();
                },
                success: function(response){
                    $('#flash-message').css('background','yellow').text("Your message has been sent successfully!").fadeIn();
                    $('#contact-form')[0].reset();
                    setTimeout(function(){
                        $('#flash-message').fadeOut();
                    }, 1000);
                },
                error: function(){
                    $('#flash-message').css('background','#f88').text("An error occurred while sending").fadeIn();
                    setTimeout(function(){
                        $('#flash-message').fadeOut();
                    }, 1000);
                }
            });
        });
    });
</script>

</body>
</html>
