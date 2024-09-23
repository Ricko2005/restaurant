@extends("lay/Racine")
@section("content")





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/reservation.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>

  
<section id="reservation" class="d-flex">

  <div class="left">
    <img src="images/reservation.jpg" alt="" width="550px" height="550px">
  </div>

  <div class="right">
    <form action="">
        <h1 style="">Reservation <ion-icon name="wine-outline"></ion-icon></h1>
<section id="one">

<div class="input-field">

<input type="text" name="" id="" required spellcheck="false  ">

<label for="">Enter your name</label>


</div>

<div class="input-field">

    <input type="email" name="" id="" required spellcheck="false  ">
    
    <label for="">Entrer votre Adresse-mail</label>
    
    
    </div>

</section>

<section id="two">








    <div class="input-field">

        <input type="datetime-local" name="" id="" required spellcheck="false  ">
        
        <label for="">Entrer la date et l'heure</label>
        
        
        </div>
   
        <div class="input-field">

            <input type="number" name="" id="" required  >
            
            <label for="">Entrer le nombre de personne</label>
            
            
            </div> 
    </section>

        


            <div class="input-field">

                <input type="text" name="" id="fac" width=""  spellcheck="false  "style="padding: 50px">
                
                <label for="">Requête spéciale (Faculatif)</label>
                
                
                </div> 

<button type="submit">Réservé une table</button>
    </form>
  
</section>







<script src="{{asset('js/accueil.js')}}"></script>
    @endsection
    

</body>
</html>

