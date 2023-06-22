<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="description" content="<?=$metaDescription?>">
    <meta charset="utf-8">
    <meta name="page de presentation de mon CV" content="CV de Marc Boillot">
    <meta name="keywords" content="CV,Marc,Boillot,photodeprofil">   
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/00e5a5a965.js" crossorigin="anonymous"></script>
    <title><?php if (isset($metaTitle)) {echo $metaTitle;} else {echo 'sans titre';}?></title>
    <link rel="icon" href="img/smiley.png">
</head>

<body>
<header>
        <div class="navname">
            <nav class="navbar">
                <a href="http://phpdebase.local/index.php?page=acceuil">ACCUEIL</a>
                <a href="http://phpdebase.local/index.php?page=hobbies">HOBBIES</a>
                <a href="http://phpdebase.local/index.php?page=contact">CONTACT</a>
            </nav>
            <h1 class="nomprenom">Marc Boillot</h1>
        </div>
        <div class="photo">
            <img src="img/photodeprofil.jpg" alt="Ma photo de profil">
        </div>
    </header>