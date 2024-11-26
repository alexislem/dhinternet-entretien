<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BH Internet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Logo BH Internet">
        </div>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Particuliers</a></li>
                <li><a href="#">Professionnels</a></li>
                <li><a href="#">Avis client</a></li>
                <li><a href="#">Nos réalisations</a></li>
                <li><a href="#">Contactez-nous</a></li>
            </ul>
        </nav>
        <a href="#" class="btn-devis">Devis en ligne</a>
    </header>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-grid">
                <div class="hero-text">
                    <h1>BH Internet, à votre disposition pour l'organisation de votre soirée</h1>
                </div>
                <form class="form-budget">
    <h2>Estimez gratuitement votre budget pour votre événement</h2>

    <div class="form-group">
        <div class="form-item">
            <label for="entreprise">Entreprise</label>
            <input type="text" id="entreprise" placeholder="Nom" required>
        </div>
        <div class="form-item">
            <label for="nom">Nom</label>
            <input type="text" id="nom" placeholder="Nom" required>
        </div>
    </div>

    <div class="form-group">
        <div class="form-item">
            <label for="email">E-mail</label>
            <input type="email" id="email" placeholder="E-mail" required>
        </div>
        <div class="form-item">
            <label for="telephone">Téléphone</label>
            <input type="tel" id="telephone" placeholder="Téléphone" required>
        </div>
    </div>

    <div class="form-group">
        <div class="form-item full-width">
            <label for="type-produit">Type de produit</label>
            <select class="type-produit" id="type-produit" required>
                <option value="">---- </option>
                <option value="clé-en-main">Clé en main</option>
                <option value="a-la-carte">À la carte</option>
            </select>
        </div>
    </div>

    <div class="form-button">
        <button type="submit">Envoyer</button>
    </div>
</form>

            </div>
        </div>
    </section>

    <section class="welcome">
        <h2>Bienvenue</h2>
        <p>
            Selon une enquête, 60% des personnes interrogées sont déçues de leur mariage… Mauvaise organisation, stress… 
            BH Internet est présente pour vous accompagner pour le plus beau jour de votre vie. Notre équipe s’occupe de 
            tout afin que vous puissiez profiter pleinement de votre journée et de vos convives sans vous soucier d’autre chose.
        </p>
        <p>
            Pour vos évènements professionnels ou particuliers, nous mettons à votre disposition une équipe expérimentée 
            qui saura anticiper et maîtriser chacune des situations.
        </p>
    </section>

    <section class="services">
        <div class="service">
            <img src="images/download.jpg" alt="Clé en main">
            <h3>Clé en main</h3>
        </div>
        <div class="service">
            <img src="images/download.jpg" alt="À la carte">
            <h3>À la carte</h3>
        </div>
        <div class="service">
            <img src="images/download.jpg" alt="Décoration mariage">
            <h3>Décoration mariage</h3>
        </div>
        <div class="service">
            <img src="images/download.jpg" alt="Anniversaire">
            <h3>Anniversaire</h3>
        </div>
        <div class="service">
            <img src="images/download.jpg" alt="Événement particulier">
            <h3>Événement particulier</h3>
        </div>
        <div class="service">
            <img src="images/download.jpg" alt="Événement professionnel">
            <h3>Événement professionnel</h3>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 BH Internet. Tous droits réservés.</p>
    </footer>
    <div class="phone-number">
    <a href="tel:+1234567890">01 64 57 40 43</a>
</div>
</body>
</html>
