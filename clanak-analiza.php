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
            <p class="crumbs"><a href="index.php">Naslovnica</a> / <a href="clanci.php">Članci</a> / Što vidimo kad pregledamo vašu stranicu</p>
            <h1>Što vidimo kad pregledamo vašu stranicu</h1>
            <p class="meta">Autor: Petar Horvat · Objavljeno: 1. rujna 2026.</p>
        </div>
        <div class="article-hero">
            <div class="wrap">
                <img src="assets/clanak-analiza.jpg" alt="Pregled skice web stranice na monitoru" style="border-radius:14px; max-height:420px; width:100%; object-fit:cover;">
            </div>
        </div>
        <section>
            <div class="wrap prose">
                <p class="lead">Kako izgleda izvještaj "vidim otpor, pa napredujem" i što s njim napraviti.</p>
                
                <h2>Što točno pregledavamo</h2>
                <p>Naša analiza fokusira se na elemente koje korisnik vidi i s kojima interakcira. Ne tražimo izvorni kod – tražimo vidljive slabosti.</p>
                
                <h2>Ključna područja analize</h2>
                
                <h3>1. HTTPS i certifikati</h3>
                <p>Provjeravamo je li stranica zaštićena HTTPS-om. Neispravni certifikati, mješani sadržaj (HTTP i HTTPS) i zastarjeli protokoli su redovni problemi.</p>
                
                <h3>2. Obrasci i prijava</h3>
                <p>Ispitujemo obrasc za prijavu, kontakt i newsletter. Tražimo nešifrirano slanje podataka, nedostatak CSRF zaštite i previdne poruke o pogreškama.</p>
                
                <h3>3. Prijave korisnika</h3>
                <p>Provjeravamo snagu lozinki, mogućnost brute-force napada, nedostatak ograničenja pokušaja prijave i izloženost korisničkih podataka.</p>
                
                <h3>4. Prijenos podataka</h3>
                <p>Analiziramo korištenje kolačića, praćenje korisnika, nešifrirane API pozive i pretjerano prikupljanje osobnih podataka.</p>
                
                <h2>Struktura izvještaja</h2>
                <p>Svaki izvještaj prati princip "vidim otpor, pa napredujem":</p>
                
                <h3>Što je uočeno</h3>
                <p>Jasan opis problema na hrvatskom jeziku, bez tehničkog žargona. Primjer: "Stranica za prijavu šalje lozinku nešifrirano."</p>
                
                <h3>Zašto to smeta</h3>
                <p>Objašnjenje rizika za korisnike i poslovanje. Primjer: "Napadač može presresti lozinku na mreži i pristupiti korisničkom računu."</p>
                
                <h3>Što napraviti</h3>
                <p>Konkretni korak za rješavanje. Primjer: "Omogućite HTTPS za stranicu za prijavu i šifrirajte sve podatke."</p>
                
                <h2>Nakon izvještaja</h2>
                <p>Naš cilj nije stvoriti listu problema, već putokaz rješenja. Svakom nalazu slijedi razgovor o prioritetima i praktičnim koracima za poboljšanje.</p>
                
                <div class="note">
                    <strong>Imate pitanja?</strong> Pošaljite URL vaše stranice na <a href="usluge.php#analiza">analizu</a> i uvjerite se u naš pristup.
                </div>
            </div>
        </section>
    </main>

<?php include 'podnozje.php'; ?>
</body>
</html>