import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/services", "Nos services", "/pages/services.html"),
    new Route("/habitats", "Nos habitats", "/pages/habitats.html"),
    new Route("/contact", "Contact", "/pages/contact.php", "/public/js/contact.js"),
    new Route("/formAvis", "Formulaire Avis", "/pages/formAvis.php", "/public/js/avis.js"),
    new Route("/listAvis", "Liste des avis", "/pages/listAvis.html"),
    new Route("/savane", "Savane", "/pages/savane.html"),
    new Route("/jungle", "Jungle", "/pages/jungle.html"),
    new Route("/marais", "Marais", "/pages/marais.html"),
    new Route("/test", "test", "/pages/auth/test.php"),
    new Route("/login", "Connexion", "/pages/auth/login.php", "/public/js/auth/login.js"),
    new Route("/register", "Inscription", "/pages/admin/register.php", "/public/js/admin/register.js"),
    new Route("/sessionAdmin", "Session Admin", "/pages/admin/sessionAdmin.php"),
    new Route("/dashboard", "Dashboard", "/pages/admin/dashboard.php"),
    new Route("/servicesCRUD", "Services CRUD", "/pages/admin/servicesCRUD.php"),
    new Route("/hoursCRUD", "Hours CRUD", "/pages/admin/hoursCRUD.php"),
    new Route("/habitatsCRUD", "Habitats CRUD", "/pages/admin/habitatsCRUD.php"),
    new Route("/animalsCRUD", "Animals CRUD", "/pages/admin/animalsCRUD.php"),
    new Route("/reportVet", "Report Veterinary", "/pages/admin/reportVet.php"),
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo Arcadia";