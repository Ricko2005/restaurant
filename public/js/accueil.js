const swiper = new Swiper('.swiper', {
 // Espace entre les slides (ajuste si nécessaire)
  autoplay: {
    delay: 7000,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true, // Permet de cliquer sur les bullets pour naviguer
  },
});




// ================ scroll============



var scrollTopBtn = document.getElementById("scrollTopBtn");

window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollTopBtn.style.display = "block";
    } else {
        scrollTopBtn.style.display = "none";
    }
};

scrollTopBtn.onclick = function() {
   
    scrollTopBtn.classList.add("animate");
    
    
    setTimeout(function() {
        scrollTopBtn.classList.remove("animate");
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }, 500); // 
};

window.addEventListener('scroll', function() {
    var menu = document.getElementById('menu');
    if (window.scrollY > 0) {
        // Si l'utilisateur a défilé vers le bas
        menu.style.boxShadow = '0px 5px 15px gray'; // Ajoute le box-shadow
    } else {
        // Si l'utilisateur est revenu en haut de la page
        menu.style.boxShadow = 'none'; // Supprime le box-shadow
    }
});


// Votre clé API Google Maps
const GOOGLE_MAPS_API_KEY = 'VOTRE_CLE_API_GOOGLE';

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(getCoordinates, showError);
    } else {
        alert("La géolocalisation n'est pas prise en charge par ce navigateur.");
        return false;
    }
    return false; // Empêche la soumission immédiate du formulaire pour attendre la géolocalisation
}

function getCoordinates(position) {
    // Récupérer les coordonnées
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;

    document.getElementById("latitude").value = latitude;
    document.getElementById("longitude").value = longitude;

    // Appel à l'API Google Maps pour obtenir l'adresse à partir des coordonnées
    const geocodeUrl = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${latitude},${longitude}&key=${GOOGLE_MAPS_API_KEY}`;

    fetch(geocodeUrl)
        .then(response => response.json())
        .then(data => {
            if (data.status === "OK") {
                const address = data.results[0].formatted_address;
                document.getElementById("adresse").value = address;

                // Soumettre le formulaire après avoir obtenu l'adresse
                document.querySelector("form").submit();
            } else {
                alert("Impossible de récupérer l'adresse.");
            }
        })
        .catch(error => {
            console.error('Erreur lors de la géolocalisation inverse :', error);
            alert("Erreur lors de la récupération de l'adresse.");
        });
}

function showError(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            alert("L'utilisateur a refusé la demande de géolocalisation.");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Les informations de localisation ne sont pas disponibles.");
            break;
        case error.TIMEOUT:
            alert("La demande de géolocalisation a expiré.");
            break;
        case error.UNKNOWN_ERROR:
            alert("Une erreur inconnue est survenue.");
            break;
    }
}
