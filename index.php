<?php

if(!isset($_COOKIE['idiomaUsuario'])){
    $pagina = "pedirIdioma.html";
} elseif ($_COOKIE["idiomaUsuario"] == "sp") {
    $pagina = "spanish.html";
} else {
    $pagina = "english.html";
}

?>

<html>
    <head>
        <script>
            location.href = "<?php echo $pagina; ?>"
        </script>
    </head>
</html>