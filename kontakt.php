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
            <p class="crumbs"><a href="index.php">Naslovnica</a> / Kontakt</p>
            <h1>Javite nam se</h1>
            <p class="lead">Nema registracije ni prijave. Ispunite sva polja. Preglednik neće poslati poruku ako e-adresa nije ispravnog oblika (npr. ime@skola.hr).</p>
        </div>
        <section>
            <div class="wrap grid-2">
                <form class="card" action="https://formspree.io/f/mbgjnewb" method="POST">
                    <label>Ime i prezime
                        <input name="ime" type="text" required minlength="2" autocomplete="name">
                    </label>
                    <label>Ustanova ili tvrtka
                        <input name="ustanova" type="text" required autocomplete="organization">
                    </label>
                    <label>E-adresa
                        <input name="email" type="email" required autocomplete="email" placeholder="ime@domena.hr">
                        <span class="hint">Mora sadržavati znak @ i domenu.</span>
                    </label>
                    <label>Telefon
                        <input name="telefon" type="tel" required autocomplete="tel" minlength="8" placeholder="+385 …">
                    </label>
                    <label>Tema
                        <select name="tema" required>
                            <option value="">Odaberite…</option>
                            <option>Analiza stranice</option>
                            <option>Edukacija zaposlenika</option>
                            <option>Pomoć nakon incidenta</option>
                            <option>Nešto drugo</option>
                        </select>
                    </label>
                    <label>Poruka
                        <textarea name="message" required minlength="15" placeholder="Kratko opišite što trebate."></textarea>
                    </label>
                    <label>
                        <input name="privola" type="checkbox" required value="da" style="width:auto; display:inline; margin-right:0.4rem;">
                        Pročitao/la sam <a href="privatnost.php">Politiku privatnosti</a> i slažem se da me kontaktirate u vezi ovog upita.
                    </label>
                    <button class="btn btn-primary" type="submit">Pošalji poruku</button>
                </form>
                <div>
                    <div class="card">
                        <h2>Ured</h2>
                        <p>Vulnguard d.o.o.<br>Ulica grada Vukovara 269d<br>10000 Zagreb</p>
                        <p>Tel: <a href="tel:+38516177400">+385 1 6177 400</a><br>
                            E-pošta: <a href="mailto:info@vulnguard.hr">info@vulnguard.hr</a></p>
                        <p>Radno vrijeme: ponedjeljak–petak, 9–16 h</p>
                    </div>
                    <div class="map-wrap" style="margin-top:1rem;">
                        <iframe title="Karta: Vulnguard, Ulica grada Vukovara 269d, Zagreb" src="https://maps.google.com/maps?q=Ulica%20grada%20Vukovara%20269d%20Zagreb&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=&amp;output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'podnozje.php'; ?>
</body>
</html>