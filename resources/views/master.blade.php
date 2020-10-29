<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
   <title> @yield('title') </title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/css/all.css">


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="/css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="/css/Style.css">

    @yield('categoryortagcreate')

<head>
<body>

   <!-- ----------------------------  Navigation ---------------------------------------------- -->

   <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="/" class="text-gray">Ethio<span style="color: red; font-size:35px; ">pika</span> </a>
            </div >
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="/">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="/about" >About-us</a>
                    </li>
                    
                    <li class="nav-link">
                        <a href="/contact">Contact-Us</a>
                    </li>
                    <li class="nav-link">
                        <a href="/privacy">Privacy </a>
                    </li>
                    @auth
                    <li class="nav-link">
                        <a href="/home">main</a>
                    </li>
                    @endauth
                </ul>
            </div>
            <div class="social text-gray">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#">  <i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                
            </div>
        </div>
    </nav>

    <div>

    <br>
    </div>

    <!-- <hr  style="padding-bottom: 20px; padding-top: 10px;"> -->

    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    @yield('content')


<!-- --------------------------- Footer ---------------------------------------- -->

<footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p>Lorem ipsum dolordus.</p>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
         <h2>Follow us</h2>
            <p>Let us be Social</p>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                   
                </div>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
            <a  href="/privacy"><h2> Privacy Policy </h2> </a> 
               
               
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
               <a  href="/terms"><h2 >Terms and Conditions</h2> </a> 
            </div>
           
     
        </div>

        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2020 All rights reserved | made by
                <a href="" target="_black">Ajaib </a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>

    <!-- -------------x------------- Footer --------------------x------------------- -->






 <!-- Jquery Library file -->
 <script src="/js/Jquery3.4.1.min.js"></script>

<!-- --------- Owl-Carousel js ------------------->
<script src="/js/owl.carousel.min.js"></script>

<!-- ------------ AOS js Library  ------------------------- -->
<script src="/js/aos.js"></script>

<!-- Custom Javascript file -->
<script src="/js/main.js"></script>
</body>
</html>