<!DOCTYPE html>
<!-- TSD-4RT | DV | 22.09.2026. -->
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vulnguard d.o.o. pomaže školama, tvrtkama i građanima da razumiju digitalnu sigurnost i zaštite svoje web stranica.">
    <title>Vulnguard — digitalna zaštita na razumljiv način</title>
    <link rel="icon" href="vulnguard_icon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;600;700&family=Source+Serif+4:opsz,wght@8..60,560;8..60,650&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'zaglavlje.php'; ?>

    <main id="sadrzaj">
        <div class="wrap page-hero">
            <p class="crumbs"><a href="index.php">Naslovnica</a> / Novosti</p>
            <h1>Novosti i kutak za programere</h1>
            <p class="lead">Prvo čitajte savjete za svakoga. Ako izrađujete stranice, spustite se do Dev dijela. Klik na naslov otvara cijeli tekst na našoj domeni.</p>
        </div>
        <section>
            <div class="wrap">
                <h2>Zaštita i incidenti</h2>
                <div class="grid-3" style="margin-top: 1.2rem;">
                    <article class="card article-card">
                        <img src="assets/clanak-phishing.jpg" alt="Ruke drže telefon uz bilježnicu">
                        <p class="badge">Zaštita</p>
                        <h3><a href="clanak-phishing.php">Kako prepoznati lažnu poruku</a></h3>
                        <p class="meta">Autorica: Maja Babić</p>
                        <p>Pet znakova zbog kojih ne trebate biti stručnjak da biste zastali prije klika.</p>
                    </article>
                    <article class="card article-card">
                        <img src="assets/clanak-incident.jpg" alt="Sastanak tima u konferencijskoj sali">
                        <p class="badge">Incident</p>
                        <h3><a href="clanak-incident.php">Prvih 60 minuta nakon incidenta</a></h3>
                        <p class="meta">Autorica: Ivana Kovač</p>
                        <p>Redoslijed koraka za voditelje: sačuvati dokaze, obavijestiti ljude, vratiti mir.</p>
                    </article>
                    <article class="card article-card">
                        <img src="assets/clanak-lozinke.jpg" alt="Tipkovnica i sigurnosni ključ na stolu">
                        <p class="badge">Računi</p>
                        <h3><a href="clanak-lozinke.php">Lozinke koje se mogu pamtiti i koje štite</a></h3>
                        <p class="meta">Autor: Petar Horvat</p>
                        <p>Zašto jedna duga rečenica i poseban program za lozinke čine više od „specijalnog znaka“.</p>
                    </article>
                    <article class="card article-card">
                        <img src="assets/clanak-analiza.jpg" alt="Pregled skice web stranice na monitoru">
                        <p class="badge">Web</p>
                        <h3><a href="clanak-analiza.php">Što vidimo kad pregledamo vašu stranicu</a></h3>
                        <p class="meta">Autor: Petar Horvat</p>
                        <p>Kako izgleda izvještaj „vidim otpor, pa napredujem“ i što s njim napraviti.</p>
                    </article>
                </div>
            </div>
        </section>
        <section class="section-sand" id="dev">
            <div class="wrap">
                <h2>Kutak za programere (Dev)</h2>
                <p class="lead">Tekstovi o izradi stranica i pisanju koda. Namijenjeni učenicima i kolegama koji tek slažu HTML i CSS.</p>
                <div class="grid-3" style="margin-top: 1.2rem;">
                    <article class="card article-card">
                        <img src="assets/clanak-html.jpg" alt="Radni stol programera s dva monitora">
                        <p class="badge">Dev</p>
                        <h3><a href="clanak-html.php">Kako se gradi web stranica</a></h3>
                        <p class="meta">Autorica: Sara Novak</p>
                        <p>HTML kao kostur, CSS kao odjeća, i zašto bez JavaScripta stranica i dalje može biti kompletna.</p>
                    </article>
                    <article class="card article-card">
                        <img src="assets/hero-ured.jpg" alt="Ured s velikim monitorima">
                        <p class="badge">Dev</p>
                        <h3><a href="clanak-css.php">Pisati CSS koji drugi razumiju</a></h3>
                        <p class="meta">Autorica: Sara Novak</p>
                        <p>Imena klasa, razmaci, boje s dovoljnim kontrastom i prilagodba za mobitel.</p>
                    </article>
                    <article class="card article-card">
                        <img src="assets/clanak-https.jpg" alt="Staklena zgrada u plavom svjetlu">
                        <p class="badge">Dev</p>
                        <h3><a href="clanak-https.php">HTTPS i obrasci bez suvišnog koda</a></h3>
                        <p class="meta">Autor: Luka Jurić</p>
                        <p>Kako HTML atributi required i type="email" pomažu korisniku, a što ostaje na poslužitelju.</p>
                    </article>
                </div>
            </div>
        </section>
    </main>

<?php include 'podnozje.php'; ?>
</body>
</html>