<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/accueil.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
 {{-- ============== Menu==================================== --}}

<header>
 <section id="menu">

    <div class="logo">
        <span><img src="{{ asset('images/first.jpg') }}"  alt="Logo"></span>
        <span id="text-restaurant">The Lark</span>
    </div>

    <ul id="navbar">
        <li id="closed"><i class="fas fa-times"></i></li>
        <li><a href="/Accueil">Accueil</a></li>
        <li><a href="#says">Temoignages</a></li>
        <li><a href="/Tracking">Suivre votre commande</a></li>
        <li><a href="/Contact">Réservation</a></li>

        {{-- ================= Contact a été changé par reservation=================== --}}
    </ul>

    <ion-icon name="menu-outline" id="hamburger"></ion-icon>

    <div class="btn"><button><a href="#Paid">COMMANDER</a></button></div>



 </section>
</header>

 @yield("content")











 <section id="fin">
    <section id="footer">
    
        <div class="left">
    <h2> <img src="images/logo.jpg"style="width: 50.86px; height: 50.29px;border-raduis:50%;" alt="Logo">The Lark</h2>
    <span>Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit, sed do eiusmod tempor  incididunt ut labore et  <br>dolore .Learn more</span>
    
    <h3>Heures d'ouverture</h3>
    
    <div class="hours">
    
        <p>Monday - Friday <br>
        8:00 am to 9:00 pm</p>
    
        <p>Saturday  <br>
            8:00 am to 9:00 pm</p>
    
            <p>Sunday <br>
                CLOSED</p>
    </div>
    
    
    </div>
    
    
     <div class="center">
            <h3>Navigation </h3>
            
     <p>Menu</p><br>
     <p>About us </p><br>
     <p>Contact us</p><br>
     <p>Main dishes </p><br>
            
            
        
        </div>
    
    
    
        <div class="right">
    <h3>DISHES</h3>
    <p>Fish & Viggies</p><br>
    <p>Tofu Chili</p><br>
    <p>Egg & Cocumber</p><br>
    <p>Lumpia w/Suace</p><br>
        </div>
    
    
    
    
        <div class="reseaux">
            <h2>FOLLOW US</h2>
            <ion-icon name="logo-facebook" id="icon"></ion-icon>
            <ion-icon name="logo-whatsapp" id="icon"></ion-icon>
            <ion-icon name="logo-tiktok" id="icon"></ion-icon>
        </div>
    
        
    </section>
    <div class="line"></div>
    
    <div class="ligne">
    
        <h3>2024 Restaurants. Tout droit Reservé. Conçu par Romaric Tlf</h3>
        <h4>  Privacy Policy</h4>
    </div>
    
    
    </section>
    
    