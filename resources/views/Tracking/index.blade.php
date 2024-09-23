


@extends("lay/Racine")


@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/tracking.css">
  

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <section id="Tracking">
        <h1>Tracking <box-icon type='solid' name='map-pin'></box-icon></h1><br>
        <h2 style="color: #EA6D27" >Ici vous pourrez suivre vos commandes
        </h2>
        <form action="">
        <input type="text" name="Nom_project" id="" class="form-control mb-3 mt-3 ml-8 w-50 p-4" style="margin-left: 25%" placeholder="Entrer votre code de suivi" required>
        <button type="submit" class="btn btn-warning text-light ml-8 " style="width: 400px">Suivre</button>
    </form>
    </section>

    <script src="{{asset('js/accueil.js')}}"></script>
</body>
</html>
@endsection
