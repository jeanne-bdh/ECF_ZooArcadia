import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/services", "Nos services", "/pages/services.html"),
    new Route("/habitats", "Nos habitats", "/pages/habitats.html"),
    new Route("/contact", "Contact", "/pages/contact.php", "/js/contact.js"),
    new Route("/formAvis", "Formulaire Avis", "/pages/formAvis.html"),
    new Route("/listAvis", "Liste des avis", "/pages/listAvis.html"),
    new Route("/savane", "Savane", "/pages/savane.html"),
    new Route("/jungle", "Jungle", "/pages/jungle.html"),
    new Route("/marais", "Marais", "/pages/marais.html"),
    new Route("/test", "test", "/pages/auth/test.php"),
    new Route("/login", "Connexion", "/pages/auth/login.php", "/js/auth/login.js"),
    new Route("/register", "Inscription", "/pages/admin/register.php", "/js/admin/register.js"),
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo Arcadia";