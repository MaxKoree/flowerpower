<?php

if (!session_status() == PHP_SESSION_NONE) {
    header('location: welcome.php');
}

?>

<!DOCTYPE html>
<html lang="">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Title</title>
    <meta charset="utf-8">
    <script src="../script.js"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<nav class="navbarContainer" id="navbar">
    <ul id="navbarList" class="nav justify-content-center">
        <li>
            <h2 id="titleButton" onclick="goWelcome()">Kansrijker</h2>
        </li>
        <li>
            <a id="createNewAccountButton" class="nav-link" onclick="goJongeren()">Jongeren toevoegen</a>
        </li>
        <li>
            <a id="createNewAccountButton" class="nav-link" onclick="goActiviteiten()">Activiteiten toevoegen</a>
        </li>
        <li>
            <a id="loginButton" class="nav-link" href="logout.php">Uitloggen</a>
        </li>
    </ul>
</nav>

<body id="body">

<button id="activiteitKoppelButton" onclick="goActiviteitKoppelen()">Activiteit koppelen</button>
<button id="deleteJongerenButton" type="reset" onclick="goDeleteJongeren()">Jongeren verwijderen</button>
<button id="button" type="reset" onclick="goDeleteActiviteit()">Activiteit verwijderen</button>
<button id="button" type="reset" onclick="goOverzicht()">Overzicht activiteiten en jongeren</button>


<script type="text/javascript" src="../script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
</html>