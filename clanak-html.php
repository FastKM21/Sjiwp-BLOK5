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
            <p class="crumbs"><a href="index.php">Naslovnica</a> / <a href="clanci.php">Članci</a> / Kako se gradi web stranica</p>
            <h1>Kako se gradi web stranica</h1>
            <p class="meta">Autorica: Sara Novak · Objavljeno: 20. kolovoza 2026.</p>
        </div>
        <div class="article-hero">
            <div class="wrap">
                <img src="assets/clanak-css.jpg" alt="Odrasli polaznici na edukaciji" style="border-radius:14px; max-height:420px; width:100%; object-fit:cover;">
            </div>
        </div>
        <section>
            <div class="wrap prose">
                <p class="lead">HTML kao kostur, CSS kao odjeća, i zašto bez JavaScripta stranica i dalje može biti kompletna.</p>
                
                <h2>HTML - kostur stranice</h2>
                <p>HTML (HyperText Markup Language) je osnova svake web stranice. On definira strukturu i sadržaj: naslove, paragrafe, slike, poveznice, tablice.</p>
                
                <h3>Osnovni elementi</h3>
                <pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Moja stranica&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Pozdrav svijetu&lt;/h1&gt;
    &lt;p&gt;Ovo je moja prva web stranica.&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
                
                <h2>CSS - stilovi i izgled</h2>
                <p>CSS (Cascading Style Sheets) određuje kako izgleda HTML sadržaj. Boje, fontovi, razmaci, raspored – sve je to CSS.</p>
                
                <h3>Osnovni selektori</h3>
                <pre><code>h1 {
  color: navy;
  font-size: 2rem;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}</code></pre>
                
                <h2>JavaScript - interakcija</h2>
                <p>JavaScript dodaje interaktivnost: forme, animacije, dinamički sadržaj. Ali mnoge stranice funkcioniraju i bez njega.</p>
                
                <h2>Kada je JavaScript potreban?</h2>
                <ul>
                    <li>Interaktivne forme i validacija</li>
                    <li>Dinamički sadržaj (učitavanje podataka)</li>
                    <li>Animacije i vizualni efekti</li>
                    <li>Složene korisničke aplikacije</li>
                </ul>
                
                <h2>Kada možete bez JavaScripta?</h2>
                <ul>
                    <li>Statični prezentacijski sajtovi</li>
                    <li>Bloge i novinske stranice</li>
                    <li>Dokumentacijski sajtovi</li>
                    <li>Jednostavne obrazacne forme</li>
                </ul>
                
                <div class="note">
                    <strong>Progressive Enhancement:</strong> Uvijek počnite sa čistim HTML/CSS, pa tek onda dodajte JavaScript za dodatnu funkcionalnost.
                </div>
            </div>
        </section>
    </main>

<?php include 'podnozje.php'; ?>
</body>
</html>