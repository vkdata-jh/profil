<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Václav Klimeš VK Data</title>
    <link rel="icon" href="./icons/logoII.png" width="150px" type="image/icon type">
    <link rel="stylesheet" href="./fonts/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,300,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Questrial">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./js/js.js">


</head>

<body>



    <nav class="navbar navbar-expand-md px-4 sticky-top">
        <div class="container ml-auto">
            <a href="#" class="navbar-brand">
                <h3 class="mb-0">VK Data</h3>
            </a>
            
            <div class="message container">
                <?php
                // Include form submission script 
                include_once 'submit.php';
                ?>
            </div>
            <button class="navbar-toggler mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span><svg
                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-card-list" viewBox="0 0 16 16">
                        <path
                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                        <path
                            d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                    </svg></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">


                <!-- <li class="nav-item"><a href="#" class="nav-link">Domů</a></li> -->

                <li class="nav-item" aria-controls="about"><a href="#about" class="nav-link">O
                        mně</a></li>
                <li class="nav-item"><a href="#projects" class="nav-link">Projekty</a></li>
                <li class="nav-item"><a href="#hobbies" class="nav-link">Koníčky</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Kontakt</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img height="25px" width="25px" src="./icons/czech.png" alt="czech">cz</a>

                    <ul class="dropdown-menu dropdown-menu-dark justify-content-center">
                        <!--<li><a class="dropdown-item" href="#"><img class="language" height="25px" width="25"
                                    src="../icons/czech.png" alt="czech">cz</a></li>-->
                        <li><a class="dropdown-item" href="./index_en.php"><img class="language" height="25px"
                                    width="25px" src="./icons/english.png" alt="english">en</a></li>
                        <!--<li><a class="dropdown-item" href="#"><img height="25px" class="language" width="25px"
                                    src="./icons/german.png" alt="german">DE</a></li> -->
                    </ul>
            </ul>
        </div>
    </nav>
    <section id="about" class="about movedT about shadowed d-flex justify-content-center align-items-center">
        <div class="overlay"></div>
        <div id="header" class="head container text-white text-left">
            <h3 class="d-md-block display-5 mb-0">
                Václav
                K., České Budějovice
            </h3>
            <div class="row d-flex align-items-left">
                <div class="col-2">
                    <div class="avatar img-fluid align-content-left"><img src="./icons/Cartoon-Man-Avatar-2.svg"
                            width="100px" alt="avatar"></div>
                </div>
                <div class="col-4 align-content-right">
                    <p class="lead d-none d-md-block">

                        Mým
                        celoživotním koníčkem je IT. Aktuálně absolvuji rekvalifikační
                        kurz, pořádaný VŠB-TU, zaměřený na tvorbu www stránek, správu serverů, objektové
                        programování.
                    </p>
                </div>
                <div class="col"></div>
                <div class="row">
                    <ul class="knowledges lead">
                        <li>Programování www aplikací: HTML5, CSS3, JavaScript, PHP+MySQL, frameworky JQuery, React,
                            Nette,
                            Bootstrap)</li>
                        <li>Programování desktopových aplikací: Python (základy), OOP v C# a Javě</li>
                        <li>Pokročilé technologie: reflexe, XML, vlákna, klient-server, JUnit testy, delegáty,
                            regulární
                            výrazy, verzovací systém Git, <br>repository GitHub, Spring framework, ASP .Net</li>
                        <li>Databáze (Access, Oracle, programování v PL/SQL, MS SQL Server)</li>
                        <li>Programování mobilních aplikací (Xamarin, Android Studio)</li>
                        <li>Programování automatických testů v Selenium a SpecFlow (Gherkin)</li>
                        <li>Cloudové technologie: MS Azure, Docker</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <container id="desktop" class="desktop d-flex flex-column">
        <section class="skills">

            <container class="d-flex align-items-left">

                <div class="border shadowed first">
                    <div class="overlay-lang"></div>
                    <div class="row d-flex  text-left">
                        <div class="skill_type col-2 col-lg-3 align-content-left d-md-inline">
                            <h2>Jazyky</h2>
                        </div>
                        <div class="col">
                            <img src="./icons/sharp.png" alt="C#" class="img-fluid  md-inline">
                            </img>
                            <div id="name">C#</div>
                        </div>
                        <div class="col">
                            <img src="./icons/xamarin.png" alt="XAMARIN" class="img-fluid  md-inline">
                            </img>
                            <div id="name">Xamarin</div>
                        </div>
                        <div class="col">
                            <img src="./icons/android.png" alt="Android" class="img-fluid  md-inline">
                            </img>
                            <div id="name">Android</div>
                        </div>
                        <div class="col">
                            <img src="./icons/java.png" alt="Java" class="img-fluid  md-inline">
                            <div id="name">Java</div>
                            </img>
                        </div>
                        <div class="col">
                            <img src="./icons/python.png" alt="Python" class="img-fluid  md-inline">
                            <div id="name">Python</div>
                            </img>
                        </div>
                    </div>
                </div>
                <div class="border shadowed second">
                    <div class="overlay-lang"></div>
                    <div class="row d-flex text-left">
                        <div class="skill_type col-2 col-lg-3 align-content-left d-md-inline">
                            <h2>Databáze</h2>
                        </div>
                        <div class="col">
                            <img src="./icons/MSSQL.png" alt="MS SQL" class="img-fluid  d-md-inline">
                            </img>
                            <div id="name">MS SQL</div>
                        </div>
                        <div class="col">
                            <img src="./icons/MySQL.png" alt="MySQL" class="img-fluid  d-md-inline">
                            <div id="name">MySQL</div>
                            </img>
                        </div>
                        <div class="col">
                            <img src="./icons/oracledatabase.png" alt="Oracle DB" class="img-fluid  d-md-inline">
                            <div id="name">Oracle DB</div>
                            </img>
                        </div>
                        <div class="col">
                            <img src="./icons/access.png" alt="Access" class="img-fluid  d-md-inline">
                            <div id="name">Access</div>
                            </img>
                        </div>
                    </div>
                </div>
            </container>

            <container class="skill d-flex align-items-left">
                <div class="border shadowed first">
                    <div class="overlay-lang"></div>
                    <div class="row d-flex text-left">
                        <div class="skill_type col-2 col-lg-3 align-content-left d-md-inline">
                            <h2>www</h2>
                        </div>
                        <div class="col">
                            <img src="./icons/php.png" alt="PHP" class="img-fluid  md-inline">
                            <div id="name">PHP</div>
                            </img>
                        </div>
                        <div class="col">
                            <img src="./icons/react.png" alt="React" class="img-fluid md-inline">
                            <div id="name">React</div>
                            </img>
                        </div>
                        <div class="col">
                            <img src="./icons/html5.png" alt="HTML5" class="img-fluid  d-md-inline">
                            </img>
                            <div id="name">HTML5</div>
                        </div>
                        <div class="col">
                            <img src="./icons/css.png" alt="CSS" class="img-fluid  d-md-inline">
                            <div id="name">CSS</div>
                            </img>
                        </div>
                        <!-- <div class="col">
                            <img src="./icons/jquery.png" alt="JQuery" class="img-fluid  d-md-inline">
                            <div id="name">JQuery</div>
                            </img>
                        </div> -->
                        <div class="col">
                            <img src="./icons/bootstrap.png" alt="Bootstrap" class="img-fluid  d-md-inline">
                            </img>
                            <div id="name">Bootstrap</div>
                        </div>
                        <div class="col">
                            <img src="./icons/JavaScript.png" alt="Java Script" class="img-fluid  d-md-inline">
                            <div id="name">JavaScript</div>
                            </img>
                        </div>
                    </div>
                </div>
                <div class="border shadowed second">
                    <div class="overlay-lang"></div>
                    <div class="row d-flex text-left">
                        <div class="skill_type col-2 col-lg-3 align-items-left d-md-inline">
                            <h2>Správa</h2>
                        </div>
                        <div class="col">
                            <img src="./icons/MSserver.png" alt="MS Server" class="img-fluid  d-md-inline">
                            </img>
                            <div id="name">MS Server</div>
                        </div>
                        <div class="col">
                            <img src="./icons/Linux.png" alt="Linux" class="img-fluid  d-md-inline">
                            <div id="name">Linux</div>
                            </img>
                        </div>
                        <div class="col">
                            <img src="./icons/redhat.png" alt="RedHat" class="img-fluid  d-md-inline">
                            <div id="name">RedHat</div>
                            </img>
                        </div>

                    </div>
                </div>
            </container>
        </section>


        <section class="projects">
            <p id="projects" class="section_text">Projekty</p>
            <div class="border shadowed">
                <div class="overlay"></div>
                <div class="row project d-flex-block justify-content-center align-items-stretch">
                    <div class="d-col-12 col-md-6 col-lg-5 col-xl-3 align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title d-none d-md-block">školní projekt - JavaScript</h2>
                                <a href="./cviko02012023/index.html" target="_blank" rel="noopener noreferrer"><img
                                        src="./images/profil.PNG" alt="školní projekt"></a>
                                <p class="card-text">vytvoření formuláře v rámci výuky - projekt s časovým limitem 3
                                    hodin.</p>
                                <div class="writtenin d-flex justify-content-center"><i
                                        class="fa-sharp fa-solid fa-code"></i>&nbsp;<img src="./icons/css.png"
                                        height="50px" alt="CSS"><img src="./icons/html5.png" alt="HTML5"><img
                                        src="./icons/JavaScript.png" alt="JavaScript"><i
                                        class="fa-sharp fa-solid fa-code"></i>
                                </div>
                                <a name="#projektCSS" href="https://github.com/vkdata-jh/school_project" target="_blank"
                                    rel="noopener noreferrer" class="btn btn-primary"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-file-earmark-code-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z" />
                                    </svg>&nbsp;source code</a>
                            </div>
                        </div>
                    </div>

                     <div class="d-col-12 col-md-6 col-lg-5 col-xl-3 align-items-stretch">
                        <div class="card">
                            <div class="card-body d-block justify-content-center">
                                <!-- <div class="construction">
                                    <p>under construction</p> -->
                                <!-- </div> -->
                                <h2 class="card-title d-none d-md-block">školní projekt - Bootstrap</h2>
                                <a href="./projekt_firma/index.html" target="_blank" rel="noopener noreferrer"><img src="./images/projekt_firma.png"
                                        alt="firma"></a>
                                <p class="card-text">vytvoření prezentace firmy v rámci vyuky.
                                </p>
                                <div class="writtenin d-flex justify-content-center"><i
                                        class="fa-sharp fa-solid fa-code"></i>&nbsp;<img src="./icons/css.png"
                                        height="50px" alt="CSS"><img src="./icons/html5.png" alt="HTML5"><img
                                        src="./icons/bootstrap.png" alt="Bootstrap"><i class="fa-sharp fa-solid fa-code"></i>
                                </div>
                                <a name="#projekt_firma" href="https://github.com/vkdata-jh/school_firma" target="_blank"
                                    rel="noopener noreferrer" class="btn btn-primary"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-file-earmark-code-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z" />
                                    </svg>&nbsp;source code</a>
                            </div>
                        </div>
                    </div>

                    <div class="d-col-12 col-md-6 col-lg-5 col-xl-3 align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title d-none d-md-block">portfolio</h2>
                                <a href="http://www.vkdata.cz" target="_blank" rel="noopener noreferrer"><img
                                        src="./images/Rim.png" alt="profesní profil" class="d-size-small"></a>
                                <p class="card-text">vytvoření webové prezentace - profesního profilu</p>
                                <div class="writtenin d-flex justify-content-center"><i
                                        class="fa-sharp fa-solid fa-code"></i>&nbsp;<img src="./icons/css.png"
                                        height="50px" alt="CSS"><img src="./icons/html5.png" alt="HTML5"><img
                                        src="./icons/JavaScript.png" alt="JavaScript"><img src="./icons/jquery.png"
                                        alt="JQuery"><i class="fa-sharp fa-solid fa-code"></i></div>
                                <a href="https://github.com/vkdata-jh/profil" target="_blank" rel="noopener noreferrer"
                                    class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-file-earmark-code-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z" />
                                    </svg>&nbsp;source code</a>
                            </div>
                        </div>
                    </div>

                   
                    <div class="d-col-12 col-md-6 col-lg-5 col-xl-3 align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <!-- <div class="construction">
                                    <p>under construction</p>
                                </div> -->
                                <h2 class="card-title d-none d-md-block">JavaScript hra</h2>
                                <a href="./JShra/index.html" target="_blank" rel="noopener noreferrer"><img
                                        src="./images/profil.PNG" alt="JavaScript hra"></a>
                                <p class="card-text">vytvoření hry v Java Scriptu.</p>
                                <div class="writtenin d-flex justify-content-center"><i
                                        class="fa-sharp fa-solid fa-code"></i>&nbsp;<img src="./icons/css.png"
                                        height="50px" alt="CSS"><img src="./icons/html5.png" alt="HTML5"><img
                                        src="./icons/JavaScript.png" alt="JavaScript"><i
                                        class="fa-sharp fa-solid fa-code"></i>
                                </div>
                                <a name="#projektCSS" href="https://github.com/vkdata-jh/JavaScript-hra" target="_blank"
                                    rel="noopener noreferrer" class="btn btn-primary"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-file-earmark-code-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z" />
                                    </svg>&nbsp;source code</a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- druhá řada projektů-->

                <div class="row project d-flex-block justify-content-center align-items-stretch my-2">
                    <div class="d-col-12 col-md-6 col-lg-5 col-xl-3 align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title d-none d-md-block">aktuální počasí -Java Script API</h2>
                                <a href="./weather_api/index.html" target="_blank" rel="noopener noreferrer"><img
                                        src="./images/weather.png" alt="weather API"></a>
                                <p class="card-text">jednoduché infostránky o počasí - konektor na API</p>
                                <div class="writtenin d-flex justify-content-center"><i
                                        class="fa-sharp fa-solid fa-code"></i>&nbsp;<img src="./icons/css.png"
                                        height="50px" alt="CSS"><img src="./icons/html5.png" alt="HTML5"><img
                                        src="./icons/JavaScript.png" alt="JavaScript"><i
                                        class="fa-sharp fa-solid fa-code"></i>
                                </div>
                                <a name="#projektWeather" href="https://github.com/vkdata-jh/weather_api"
                                    target="_blank" rel="noopener noreferrer" class="btn btn-primary"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-file-earmark-code-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z" />
                                    </svg>&nbsp;source code</a>
                            </div>
                        </div>
                    </div>

                    <div class="d-col-12 col-md-6 col-lg-5 col-xl-3 align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title d-none d-md-block">Bouncing balls - JavaScript</h2>
                                <a href="./playBalls/index.html" target="_blank" rel="noopener noreferrer"><img
                                        src="./images/bouncingBalls.png" alt="bouncing balls" class="d-size-small"></a>
                                <p class="card-text">vytvoření JS hry - sledování kolize umístění objektů</p>
                                <div class="writtenin d-flex justify-content-center"><i
                                        class="fa-sharp fa-solid fa-code"></i>&nbsp;<img src="./icons/css.png"
                                        height="50px" alt="CSS"><img src="./icons/html5.png" alt="HTML5"><img
                                        src="./icons/JavaScript.png" alt="JavaScript"><i
                                        class="fa-sharp fa-solid fa-code"></i></div>
                                <a href="https://github.com/vkdata-jh/bouncingBalls" target="_blank"
                                    rel="noopener noreferrer" class="btn btn-primary"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-file-earmark-code-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z" />
                                    </svg>&nbsp;source code</a>
                            </div>
                        </div>
                    </div>

                    <div class="d-col-12 col-md-6 col-lg-5 col-xl-3 align-items-stretch">
                        <div class="card">
                            <div class="card-body d-block justify-content-center">
                                <!-- <div class="construction">
                                    <p>under construction</p>
                                </div> -->
                                <h2 class="card-title d-none d-md-block">školní projekt - React</h2>
                                <a href="https://vkdata.cz/work-planning/" target="_blank" rel="no opener noreferrer"><img src="./images/react.png" alt="react"></a>
                                <p class="card-text">vytvoření aplikace v Reactu v rámci výuky - (8 hod.)
                                </p>
                                <div class="writtenin d-flex justify-content-center"><i
                                        class="fa-sharp fa-solid fa-code"></i>&nbsp;<img src="./icons/css.png"
                                        height="50px" alt="CSS"><img src="./icons/html5.png" alt="HTML5"><img
                                        src="./icons/react.png" alt="React"><i class="fa-sharp fa-solid fa-code"></i>
                                </div>
                                <a name="#react" href="https://github.com/vkdata-jh/work-planning-code" target="_blank" rel="noopener noreferrer"
                                    class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-file-earmark-code-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z" />
                                    </svg>&nbsp;source code</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-col-12 col-md-6 col-lg-5 col-xl-3 align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <div class="construction">
                                    <p>under construction</p>
                                </div>
                                <h2 class="card-title d-none d-md-block">školní projekt</h2>
                                <a href="#" target="_blank" rel="noopener noreferrer"><img src="#"
                                        alt="projekt PHP"></a>
                                <p class="card-text">projekt PHP</p>
                                <div class="writtenin d-flex justify-content-center"><i
                                        class="fa-sharp fa-solid fa-code"></i>&nbsp;<img src="./icons/css.png"
                                        height="50px" alt="CSS"><img src="./icons/html5.png" alt="HTML5"><img
                                        src="./icons/JavaScript.png" alt="JavaScript"><i
                                        class="fa-sharp fa-solid fa-code"></i>
                                </div>
                                <a name="#projektCSS" href="https://github.com/vkdata-jh/JavaScript-hra" target="_blank"
                                    rel="noopener noreferrer" class="btn btn-primary"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-file-earmark-code-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z" />
                                    </svg>&nbsp;source code</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <p id="hobbies" class="section_text">Koníčky</p>
        <section class="hobby shadowed">

            <div class="overlay"></div>


            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Cestování</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Turistika</button>
                    <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#nav-history"
                        type="button" role="tab" aria-controls="nav-history" aria-selected="false">Literatura</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-4 d-md-block">
                            <div id="CarouselTravel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img src="./images/florencie.png" alt="Spréva"
                                            class="d-block w-100"></div>
                                    <div class="carousel-item"><img src="./images/florencie2.png" alt="Dolomity"
                                            class="d-block w-100"></div>
                                    <div class="carousel-item"><img src="./images/rim2.png" alt="Dolomity 2"
                                            class="d-block w-100"></div>
                                    <div class="carousel-item"><img src="./images/rim3.png" alt="Florencie"
                                            class="d-block w-100"></div>
                                    <div class="carousel-item"><img src="./images/DiTrevi.png" alt="Dolomity"
                                            class="d-block w-100"></div>
                                    <div class="carousel-item"><img src="./images/siena.png" alt="Dolomity 2"
                                            class="d-block w-100"></div>
                                    <div class="carousel-item"><img src="./images/siena2.png" alt="Florencie"
                                            class="d-block w-100"></div>
                                </div>
                                <button class="carousel-control-prev bg-dark" type="button"
                                    data-bs-target="#CarouselTravel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next bg-dark" type="button"
                                    data-bs-target="#CarouselTravel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-8 d-md-block">
                            <p class="lead">
                                Velmi rád cestuji po Evropě. Nejvíce mi přirostla k srdci Itálie, s krásnými
                                Dolomity na
                                severu, úžasnou Florencií a Sienou, a nezapomenutelným Římem.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-4 d-md-block">
                            <div id="CarouselTurism" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img src="./images/Spreva.png" alt="Spréva"
                                            class="d-block w-100"></div>
                                    <div class="carousel-item"><img src="./images/dolomity.png" alt="Dolomity"
                                            class="d-block w-100"></div>
                                    <div class="carousel-item"><img src="./images/dolomity3.png" alt="Dolomity 2"
                                            class="d-block w-100"></div>
                                    <div class="carousel-item"><img src="./images/Dolomiti.png" alt="Florencie"
                                            class="d-block w-100"></div>
                                </div>
                                <button class="carousel-control-prev bg-dark" type="button"
                                    data-bs-target="#CarouselTurism" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next bg-dark" type="button"
                                    data-bs-target="#CarouselTurism" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-8 d-md-block">
                            <p class="lead">Při výletech neopomenu uskutečnit turistický výlet do místních hor. Také
                                naše hory
                                jsou
                                krásné
                            </p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-histoty-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-4 d-md-block">

                            <div id="CarouselBook" class="carousel slide" data-bs-ride="carousel">
                                <div class="construction">
                                    <p>under construction</p>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><iframe
                                            src="https://data.knizniklub.cz/book/056/314/0563147/large.jpg"
                                            frameborder="0" title="Poslední lancknecht"><cite>Poslední
                                                Lancknecht</cite>Bedřich ze
                                            Schwarzenbergu</iframe></div>
                                    <!--<div class="carousel-item"><img src="../images/Dolomiti.png" alt="Dolomity"
                                            class="d-block w-100"></div>
                                    <div class="carousel-item"><img src="../images/DolomitiII.png" alt="Dolomity 2"
                                            class="d-block w-100"></div>
                                    <div class="carousel-item"><img src="../images/Florencie_ulicka.png" alt="Florencie"
                                            class="d-block w-100"></div>
                                </div>
                                <button class="carousel-control-prev bg-dark" type="button"
                                    data-bs-target="#CarouselBook" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next bg-dark" type="button"
                                    data-bs-target="#CarouselBook" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-8 d-none d-md-block">
                            <p class="lead">Velmi rád čtu historickou literaturu. Zvlášť se zajímám o obdbí 2.
                                světové
                                války
                                a
                                středověku.
                            </p>
                        </div>
                    </div>
                </div>

        </section>
        <p class="section_text">
            Napište mi
        </p>
         <section id="contact" class="contact border shadowed">
            <!-- <div class="overlay"></div> -->
            <div class="contactgroup">
                <div id="form" class="contactI form justify-items-right">
                    <?php
                    // Include form submission script 
                    include_once 'submit.php';
                    ?>
                    <button type="submit" class="btn btn-primary contactI" value="" name="submit" data-bs-toggle="modal"
                        data-bs-target="#myModal">Napište mi!</button>
                </div>  
                <!-- <div id="social" class="justify-items-center align-items-center py-4"> -->
                    <p class="lead contactsI">or thru social nets</p>
                    <div class="contactI">
                        <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer"><img
                                src="./icons/twitter.png" height="50px" alt="Twitter"></a>
                        <a href="https://www.linkedin.com/in/vaclav-klimes-jh/" target="_blank"
                            rel="noopener noreferrer"><img src="./icons/linkedin.png" height="50px" alt="linkedin"></a>
                        </div>
                    </div>
                <!-- </div>     -->
            </div>              
        </section>
    </container>

    <footer id="footer" class="border shadowed">
                <container class="d-flex d-inline">
                    <div class="row">
                        <div class="col-6 md-4">
                            <p>&copy;2022 VK Data</p>
                        </div>
                    </div>
                </container>
    </footer>
    <div>
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">

            <div class="modal-dialog d-flex-block">
                <div class="modal-content justify-content-center">
                    <div class="modal-header">
                        <div class="message container my-auto">
                
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body justify-content-center">
                        <p class="lead modal-title fs-5" id="myModalLabel">


                        <div id="form" class="d-flex form col d-10 md-8 justify-content-center">
                            <form method="post" action="" class="cnt-form" id="cnt-form">
                                <?php
                                // Include form submission script 
                                include_once 'submit.php';
                                ?>
                                <!-- <div class="construction">
                            <p>under construction</p>
                        </div> -->

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="email">@</span>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Zadejte Váš email" aria-label="email" aria-describedby="email"
                                        value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>"
                                        required="">
                                </div>
                                <div class="input-group mb-3 align-items-stretch justify-content-stretch">
                                    <textarea class="form-control" aria-label="message"
                                        placeholder="Zde vložte vaši zprávu" name="message" rows="3"
                                        required=""><?php echo !empty($postData['message']) ? $postData['message'] : ''; ?></textarea>
                                </div>

                                <div class="form-input captcha">
                                    <!-- Google reCAPTCHA box -->
                                    <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary" value="Submit"
                                    name="submit">Odeslat!</button>

                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</body>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<script type="text/javascript">
    $(document).on('click', '.navbar-collapse.show', function (e) {
        if ($(e.target).is('a')) {
            $(this).collapse('hide');
        }
    });
</script>

</html>