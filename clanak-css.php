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
            <p class="crumbs"><a href="index.php">Naslovnica</a> / <a href="clanci.php">Članci</a> / Pisati CSS koji drugi razumiju</p>
            <h1>Pisati CSS koji drugi razumiju</h1>
            <p class="meta">Autorica: Sara Novak · Objavljeno: 15. kolovoza 2026.</p>
        </div>
        <div class="article-hero">
            <div class="wrap">
                <img src="assets/clanak-css.jpg" alt="Odrasli polaznici na edukaciji" style="border-radius:14px; max-height:420px; width:100%; object-fit:cover;">
            </div>
        </div>
        <section>
            <div class="wrap prose">
                <p class="lead">Imena klasa, razmaci, boje s dovoljnim kontrastom i prilagodba za mobitel.</p>
                
                <h2>Imena klasa i selektora</h2>
                <p>Koristite opisna imena koja kažu što element radi, ne kako izgleda.</p>
                
                <h3>Loše primjeri</h3>
                <pre><code>.red-box { }
.big-text { }
.padding-10 { }</code></pre>
                
                <h3>Dobri primjeri</h3>
                <pre><code>.alert-danger { }
.hero-title { }
.content-section { }</code></pre>
                
                <h2>Konzistentnost i razmaci</h2>
                <p>Držite se jedne šeme za razmake, zagrade i imena varijabli. Čitljivost je ključ.</p>
                
                <h3>Šema za razmake</h3>
                <pre><code>.card {
  padding: 1.5rem;
  margin-bottom: 1rem;
  border-radius: 8px;
}

.button {
  padding: 0.75rem 1.5rem;
  background: var(--primary);
  color: white;
}</code></pre>
                
                <h2>Boje i kontrast</h2>
                <p>Koristite CSS varijable za boje i osigurajte dovoljan kontrast za pristupačnost.</p>
                
                <h3>CSS varijable</h3>
                <pre><code>:root {
  --primary: #0e1c2f;
  --secondary: #0b6e67;
  --text: #1c2430;
  --background: #fbfaf7;
}

.button {
  background: var(--primary);
  color: white;
}</code></pre>
                
                <h2>Pristupačnost</h2>
                <ul>
                    <li>Koristite semantičke HTML elemente</li>
                    <li>Osigurajte dovoljan kontrast teksta i pozadine</li>
                    <li>Testirajte s čitačem zaslona</li>
                    <li>Omogućite navigaciju tipkovnicom</li>
                </ul>
                
                <h2>Responsivni dizajn</h2>
                <p>Testirajte na različitim uređajima i koristite media queries za prilagodbu.</p>
                
                <div class="note">
                    <strong>Pravilo:</strong> CSS pišite za ljude, ne za strojeve. Dva mjeseca kasnije trebali biti u stanju razumjeti vlastiti kod.
                </div>
            </div>
        </section>
    </main>

<?php include 'podnozje.php'; ?>
</body>
</html>