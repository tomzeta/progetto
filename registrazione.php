<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
    <meta charset="utf-8" />
    <title id="title">ASAP-FESTIVAL</title>
    <meta name="title" content="As Soon As Possible-Festival" />
    <meta name="description" content="Sito festival musicale" />
    <link rel="stylesheet" type="text/css" href="homepage.css" />
    <link rel="stylesheet" type="text/css" href="registrazione.css" />
</head>
<body>
    <div id="header">
        <img src="images/asapdef.png" id="logo" alt="ASAP festival logo" />
        <div class="dropdown">
            <button id="menubutton">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <div class="dropdown-content">
                <ul>
                    <li><a href="homepage.html">HOME</a></li>
                    <li><a href="line-up.html">LINE-UP</a></li>
                    <li><a href="#tickets">TICKETS</a></li>
                    <li><a href="news.html">NEWS</a></li>
                    <li><a href="info.html">INFO</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="breadcrumb">
        <p>Ti trovi in: <span xml:lang="eng">Login</span></p>
    </div>
    <div class="mainBody">
        <div id="topTitle">
            <h2>Registrati</h2>
			<h3>Crea un account per poter accedere a tutti i servizi e rimanere in contatto con noi! </h3>
        </div>
        <div class="paragraph">
			<form name="form_registrazione" method="post" action="registrazioneavvenuta.php">
			<p>Nome: <input type="text" name="nome_reg"></p>
			<br/>
			<p>Cognome: <input type="text" name="cognome_reg"></p>
			<br/>
			<p>E-mail: <input type="text" name="email_reg"></p>
			<br/>
			<p>Username: <input type="text" name="username_reg"></p>
			<br/>
			<p>Password: <input type="password" name="password_reg"></p>
			<br/>
			<input type="submit" value="Registrati">
			</form>
        </div>

    </div>
    <div id="footer">
        <div id="Fleft">
            <h3>PER I PROFESSIONISTI</h3>
            <ul>
                <li>
                    <a href="#Contatt">Contatti</a>
                </li>
                <li>
                    <a href="#Partner">Partner</a>
                </li>
            </ul>
        </div>
        <div id="Fcenter">
            <a href="homepage.html">
                <img src="images/asapdef.png" alt="ASAP festival logo" />
            </a>
            <div id="content">
                <span id="zero">QUANDO</span>
                <span id="one">DAL 15 AL 18</span>
                <span id="two">LUG</span>
                <span id="three">2017</span>
                <span id="four">DOVE</span>
                <span id="five">POMPEI</span>
                <span id="six">NAPOLI</span>
                <span id="seven">IT</span>
            </div>
        </div>
        <div id="Fright">
            <h3>SOCIAL</h3>
            <a href="#facebook">
                <img id="fblogo" src="images/fblogo.png" alt="Facebook logo" />
            </a>
            <a href="#instagram">
                <img id="instalogo" src="images/instalogo.png" alt="Instagram logo" />
            </a>
        </div>
    </div>
</body>
</html>