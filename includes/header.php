<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/Logo/Girls in Tech Nigeria Logo Icon.png" sizes="32x32" type="png/jpg">
    <title> <?php echo $title ?> </title>

    <!-- Link Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Link CSS files -->
    <?php echo $css_file ?>
    <!-- <link rel="stylesheet" href="css/career_guide.css">
    <link rel="stylesheet" href="css/companies.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/cyber.css">
    <link rel="stylesheet" href="css/partners.css">
    <link rel="stylesheet" href="css/mentorship.css">
    <link rel="stylesheet" href="css/bootcamp.css">
    <link rel="stylesheet" href="css/about.css"> -->
    <!-- <link rel="stylesheet" href="css/home_body.css"> -->
    
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/news_and_event.css">
    <!-- AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Link Font -->
    <!-- <script defer src="https://kit.fontawesome.com/96a70be8ea.js" crossorigin="anonymous"></script> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet"> -->
    
</head>
<body>
    <!-- Header section -->
    <main>
        <header>
            <div class="left-nav">
                <div class="logo">
                    <a href="index.php">
                        <img src="./images/Logo/Girls in Tech Nigeria Logo.png" alt="logo">
                    </a>
                </div>
                <nav>
                    <ul class="list-items">
                        <li class="lists"><a href="index.php">Home</a></li>
                        <li class="lists"><a href="about.php">About Us</a></li>
                        <li class="lists"><a href="news_and_event.php">News and Events</a></li>
                        <li class="lists clickable">
                            <div class="drop-down">
                                <p>Members Corner</p>
                                <span><img src="./images/613d04d8b24c43b3cc84d134_expand_more_black_24dp.svg" alt="drop-down"></span>
                            </div>
                            <ul class="drop">
                                <li><a href="./mentorship.php">Mentorship</a></li>
                                <li><a href="./cyber.php">Cyber Academy</a></li>
                                <li><a href="./programs.php">Programs</a></li>
                                <!-- <li><a href="career_guide.php">Career</a></li> -->
                            </ul>
                        </li>
                        <li class="lists"><a href="companies.php">Merch</a></li>
                        <!-- <li class="lists"><a href="partners.php">Partners</a></li> -->
                        <li class="lists"><a href="./sponsorship.php">Sponsorship</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right-nav">
                <div class="donate">Donate</div>
                <div class="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </header>
    </main>