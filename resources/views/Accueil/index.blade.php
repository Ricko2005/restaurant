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


</head>
<body>
 {{-- ============== Menu==================================== --}}

 @extends("lay/Racine")
 @section("content")


 {{-- =================== Presentation===================== --}}




 <section id="Present">


<div class="sideleft">

    <h1>Nous preparons la meilleur <br> nourriture pour vous</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicies,  inventore odit sunt ipsum?  veritatis dolor, labore aut maxim adipisci?</p>
  
          
        <button class="btn1">Menu</button>
        <button class="btn2">Book Table</button>

        <div class="sociaux">
            <ion-icon name="logo-facebook" id="icon"></ion-icon>
            <ion-icon name="logo-whatsapp" id="icon"></ion-icon>
            <ion-icon name="logo-tiktok" id="icon"></ion-icon>
        </div>
</div>



<div class="sideright">
<img src="{{asset("images/second.jpg")}}" alt="">


</div>


 </section>

{{-- =============== image déplacés===================== --}}

<div class="deplacer">
 <span><img src="{{asset("images/dish-2 1.png")}}" alt=""></span>
 <img src="{{asset("assets/Group.png")}}" alt="" id="scnd">
 <img src="{{asset("assets/Group (5).png")}}" alt="" id="three">
</div>



{{-- ======================== Nos mets ============ --}}


<section id="Mets">
<div class="box">
    <h1>Nos spécialitées</h1>
    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, ipsab <br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, ipsab  </span>
    
</div>
        <img src="{{asset("assets/Group (5).png")}}" alt="" id="four">
        <img src="{{asset("assets/Group (6).png")}}" alt="" id="five">
       

{{-- ======================= Les plats dispo======================== --}}

        <div id="Plats">


            <div class="plat">
                <p>Lumpia with Suace</p>
                <h4>Lorem ipsum dolor sit amm provident esse <br> nemo. Qui, ab, apemolestiasimpedit!</h4>
            
                <img src="{{asset("images/dish-1_1.png")}}" alt="">
                <span>2000f</span>
            </div>
            <div class="plat">
                <p>Fish and Veggie</p>
                <h4>Lorem ipsum dolor sit amm provident esse <br> nemo. Qui, ab, apemolestiasimpedit!</h4>
                <img src="{{asset("images/dish-3 1.png")}}" alt="">
                <span>5000f</span>
            </div>
            <div class="plat">
                <p>Tofu Chili</p>
                <h4>Lorem ipsum dolor sit amm provident esse <br> nemo. Qui, ab, apemolestiasimpedit!</h4>
                <img src="{{asset("images/dish-4.png")}}" alt="">
                <span>4000f</span>
            </div>
            <div class="plat">
                <p>Egg and Cocumber</p>
                <h4>Lorem ipsum dolor sit amm provident esse <br> nemo. Qui, ab, apemolestiasimpedit!</h4>
                <img src="{{asset("images/dish-5.png")}}" alt="">
                <span>3000f</span>
            </div>


        </div>

<div class="deplacement">
    <img src="{{asset("images/Group.png")}}" alt="" id="six">
    <img src="{{asset("images/Group (2).png")}}" alt="" id="seven">
    <img src="{{asset("images/Group (3).png")}}" alt="" id="eight">
    <img src="{{asset("images/Group (1).png")}}" alt="" id="nine">
</div>


</section>




<section id="welcome">
 

<div class="right">
<img src="{{asset("images/dish-2 1.png")}}" alt="" id="piture">
<img src="{{asset("images/leaf-1.png")}}" alt="" id="ten">
<img src="{{asset("images/leaf-2.png")}}" alt="" id="eleven">
<img src="{{asset("images/leaf-3.png")}}" alt="" id="twelve">
<img src="{{asset("images/leaf-4.png")}}" alt="" id="fourteen">
</div>

<div class="left">
<h2>Bienvenue au  restaurant The lark</h2>
<p>Lorem ipsum dolor sit amet consectetLorem ipsum dolor sit ameet <br>Lorem ipsum dolor sit amet consectetLorem ipsum dolor sit ameet <br>Lorem ipsum dolor sit amet consectetLorem ipsum dolor sit ameet</p>


        <button class="btn1">Menu</button>
        <button class="btn2">Book Table</button>
        <img src="{{asset("images/Group (5).png")}}" alt="" id="fiveteen">
        <img src="{{asset("images/Group (7).png")}}" alt="" id="sixeteen">

</div>

</section>






<section id="Chief">


    <div class="gauche">
        <img src="{{asset("images/Group (1).png")}}" alt="" width="300px">
        <img src="{{asset("images/Group (8).png")}}" alt="" id="seventeen">
<h2>
    Nos Chefs experts
</h2>

<span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit,  <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</span>
<div class="boxe">
    <ul>
        <li> <ion-icon name="checkmark-outline"></ion-icon> ipsum dolor sit amet  cursus pocé consectetur </li>
        <li> <ion-icon name="checkmark-outline"></ion-icon> ipsum dolor sit amet, cursus pocé  consectetur </li>
        <li> <ion-icon name="checkmark-outline"></ion-icon> ipsum dolor sit amet,cursus pocé  aonsectetur </li>
    </ul>
    <ul>
        <li> <ion-icon name="checkmark-outline"></ion-icon> ipsum dolor sit amet, cursus pocé  aonsectetur </li>
        <li> <ion-icon name="checkmark-outline"></ion-icon> ipsum dolor sit amet, cursus pocé consectetur </li>
        <li> <ion-icon name="checkmark-outline"></ion-icon> ipsum dolor sit  amet,cursus pocé aonsectetur </li>
    </ul>
</div>

<button class="btn1">Menu</button>
<button class="btn2">Book Table</button>
    </div>

<div class="droite">
<img src="{{asset("images/chef 1 (1).png")}}" alt="" width="320px">
    </div>
</section>



<section id="says">
    <img src="{{asset("images/Group (9).png")}}" alt="" width="350px">
    <h3>Ce que nos clients disent de nous!!!</h3>


{{-- ==================== Essaie de caroussell======================= --}}





  <!-- Swiper -->
  <div class="swiper">
    <div class="swiper-wrapper">
      
      <!-- Slide 1 avec image -->
      <div class="swiper-slide">
        <img src="{{ asset('images/Mask group.png') }}" alt="Image 1">
        <img src="{{ asset('images/Stars.png') }}" alt="Image 1" id="etoile">
       <p>Je ne peux que recommander ce restaurant. La cuisine est divine, le service est rapide et l’atmosphère est conviviale. Bravo à toute l'équipe !</p> 

        
      
      </div>
      
      <!-- Slide 2 avec image -->
      <div class="swiper-slide">
        <img src="{{ asset('images/téléchargement.jpeg') }}" alt="Image 2" width="100pw" style="border-radius: 50%">
        <img src="{{ asset('images/Stars.png') }}" alt="Image 1" id="etoile">
        <p>Un restaurant que je recommande vivement ! Les saveurs sont au rendez-vous, et l'accueil est vraiment agréable. Merci pour cette belle soirée.</p>
      </div>
      
      <!-- Slide 3 avec image -->
      <div class="swiper-slide">
        <img src="{{ asset('images/Face (1).jpeg') }}" alt="Image 3" width="100px" style="border-radius: 50%">
        <img src="{{ asset('images/Stars.png') }}" alt="Image 1" id="etoile">
        <p>Un vrai régal pour les papilles ! Chaque bouchée était un pur délice, et l'équipe est extrêmement attentionnée. Une adresse incontournable !</p>
      </div>
      
      <!-- Slide 4 avec image -->
      <div class="swiper-slide">
        <img src="{{ asset('images/Face.jpeg') }}" alt="Image 4" width="100px" style="border-radius: 50%">
        <img src="{{ asset('images/Stars.png') }}" alt="Image 1" id="etoile">
        <p>Tout était parfait, de l'entrée au dessert ! Le personnel est professionnel et souriant, et les plats sont à la hauteur de nos attentes.</p>
      </div>
    </div>
    <!-- Pagination bullets -->
    <div class="swiper-pagination"></div>
  </div>
  
     
    </div>
    <!-- Add Pagination -->
 
    <div class="swiper-pagination"></div>
   
  </div>


</section>





{{-- ================== srcoll btn========== --}}

<button id="scrollTopBtn" title="" style="display: block">&#8593</button>




<section id="Paid">

    <div class="photo">
<img src="{{asset("images/paid.jpg")}}" alt="" width="620px" height="640px">

    </div>

    <div class="formulaire_command">
        <h2>Formulaire de commande</h2>
        <h3>*Payement à la livraison <ion-icon name="bicycle-outline" id="velo"></ion-icon></h3>
        <form action="" method="POST" onsubmit="return getLocation()">
            @csrf
            <div class="inpute" style="display: flex">
            <input type="text" name="contact_number" id="contact_number" placeholder="Numéro à contacter" required>
            <input type="text" name="quartier" id="quartier" placeholder="Quartier" required>
            
        </div>
            
            <input type="text" name="order_name" id="name_commande" placeholder="Nom de la commande (ex: salade + jus)" required><br>
    
            <!-- Champ caché pour la latitude -->
            
          
    
            <button type="submit">VALIDEZ MA COMMANDE</button>
        </form>
    </div>
</section>

{{-- ===================== Footer======================== --}}






<script src="{{asset('js/accueil.js')}}"></script>
@endsection
</body>
</html>