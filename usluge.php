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
            <p class="crumbs"><a href="index.php">Naslovnica</a> / Naše usluge</p>
            <h1>Usluge koje možete naručiti danas</h1>
            <p class="lead">Tri jasna paketa: pregled vaše stranice, edukacija zaposlenika i podrška nakon neželjenog događaja. Cijene su u tablici na dnu stranice.</p>
            <div class="actions">
                <a class="btn btn-primary" href="#analiza">Pošaljite URL</a>
                <a class="btn btn-outline" href="#cjenik">Otvori cjenik</a>
            </div>
        </div>

        <div class="services-overview">
            <div class="wrap grid-3">
                <article class="card">
                    <h2>Analiza web stranice</h2>
                    <p>Vi pošaljete adresu. Mi pregledamo što posjetitelj vidi i što bi ga moglo zbuniti ili izložiti riziku: obrasci, poruke o pogrešci, HTTPS, pretjerano prikupljanje podataka, slabe lozinke na demo računima.</p>
                    <p>Izvještaj pišemo rečenicom „vidim otpor, pa napredujem“: svaki problem ima što je uočeno, zašto smeta i koji je sljedeći korak.</p>
                </article>
                <article class="card">
                    <img class="cover" src="assets/edukacija.jpg" alt="Radionica za zaposlenike u učionici">
                    <h2>Edukacija zaposlenika</h2>
                    <p>Dolazimo u škole, vrtiće, urede i slične ustanove. Tema: lažne poruke, sigurne lozinke, dijeljenje dokumenata i što reći učeniku ili roditelju koji je kliknuo sumnjivu poveznicu.</p>
                    <p>Grupe do 24 osobe. Materijali ostaju vama.</p>
                </article>
                <article class="card">
                    <h2>Pomoć nakon incidenta</h2>
                    <p>Ako je netko već zlorabio e-poštu, stranicu ili račun, vodimo vas kroz prve odluke: što sačuvati, koga obavijestiti, kako vratiti povjerenje posjetitelja.</p>
                    <p>Ovo nije tajni „napad na napadača“, nego miran plan obavijesti i obnove.</p>
                </article>
            </div>
        </div>

        <section class="section-sand" id="analiza">
            <div class="wrap grid-2">
                <div>
                    <h2>Pošaljite svoju stranicu</h2>
                    <p>Upišite punu adresu (počinje s https://). Javit ćemo se na e-poštu s terminom pregleda. Sva su polja obavezna.</p>
                    <p class="muted">Na ovoj vježbenoj stranici obrazac vodi na zahvalnu stranicu. U stvarnom radu zahtjev bi stizao u naš sandučić i evidenciju naloga.</p>
                </div>
                <form class="card" action="hvala-analiza.php" method="post">
                    <label>Ime i prezime
                        <input name="ime" type="text" required minlength="2" autocomplete="name">
                    </label>
                    <label>E-adresa
                        <input name="email" type="email" required autocomplete="email" placeholder="npr. ravnatelj@skola.hr">
                    </label>
                    <label>Adresa vaše stranice
                        <input name="url" type="url" required placeholder="https://www.primjer.hr" autocomplete="url">
                    </label>
                    <label>Što vas najviše brine
                        <textarea name="poruka" required minlength="10" placeholder="Npr. roditelji unose podatke u obrazac, nismo sigurni je li to pametno."></textarea>
                    </label>
                    <button class="btn btn-primary" type="submit">Pošalji na analizu</button>
                </form>
            </div>
        </section>

        <section id="edukacija">
            <div class="wrap grid-2">
                <img src="assets/edukacija.jpg" alt="Odrasli polaznici na edukaciji" style="border-radius: 14px; width:100%; object-fit:cover; max-height: 360px;">
                <div>
                    <h2>Edukacija u školama i ustanovama</h2>
                    <p>Program prilagođavamo publici: nastavnici, administracija, učenici trećeg razreda srednje škole. Ne učimo „kako hakirati“, nego kako prepoznati prijevaru i kome se javiti.</p>
                    <ul class="icon-list">
                        <li>Uvod od 15 minuta bez slajdova punih kratica.</li>
                        <li>Vježba prepoznavanja sumnjive poruke na papiru.</li>
                        <li>Jedna stranica „što napraviti ako…“ za oglasnu ploču.</li>
                    </ul>
                    <a class="btn btn-primary" href="kontakt.php">Dogovorite termin</a>
                </div>
            </div>
        </section>

        <section class="section-sand" id="cjenik">
            <div class="wrap">
                <h2>Cjenik</h2>
                <p class="lead">Cijene su bez PDV-a. Točan iznos za veću školu dogovaramo nakon kratkog razgovora.</p>
                <div class="price-table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Usluga</th>
                                <th>Što je uključeno</th>
                                <th>Trajanje</th>
                                <th>Cijena</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Analiza početne stranice</td>
                                <td>Pregled javne naslovnice i obrazaca, PDF s nalazima na hrvatskom</td>
                                <td>5 radnih dana</td>
                                <td class="price">890 €</td>
                            </tr>
                            <tr>
                                <td>Analiza cijelog sjedišta</td>
                                <td>Do 15 podstranica, razgovor o prioritetima, 45 min objašnjenja nalaza</td>
                                <td>10 radnih dana</td>
                                <td class="price">1.790 €</td>
                            </tr>
                            <tr>
                                <td>Edukacija zaposlenika</td>
                                <td>Radionica na vašoj adresi, do 24 osobe, tiskani podsjetnik</td>
                                <td>90 minuta</td>
                                <td class="price">620 €</td>
                            </tr>
                            <tr>
                                <td>Edukacija za učenike</td>
                                <td>Dva školska sata, materijali za razrednika</td>
                                <td>90 minuta</td>
                                <td class="price">480 €</td>
                            </tr>
                            <tr>
                                <td>Pomoć nakon incidenta</td>
                                <td>Poziv isti radni dan, pisani plan obavijesti, jedan tjedan pitanja e-poštom</td>
                                <td>po dogovoru</td>
                                <td class="price">od 1.200 €</td>
                            </tr>
                            <tr>
                                <td>Godišnji pregled</td>
                                <td>Dva kraća pregleda stranice i jedna edukacija</td>
                                <td>12 mjeseci</td>
                                <td class="price">2.450 €</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

<?php include 'podnozje.php'; ?>
</body>
</html>