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
            <p class="crumbs"><a href="index.php">Naslovnica</a> / <a href="clanci.php">Članci</a> / HTTPS i obrasci bez suvišnog koda</p>
            <h1>HTTPS i obrasci bez suvišnog koda</h1>
            <p class="meta">Autor: Luka Jurić · Objavljeno: 10. kolovoza 2026.</p>
        </div>
        <div class="article-hero">
            <div class="wrap">
                <img src="assets/clanak-css.jpg" alt="Odrasli polaznici na edukaciji" style="border-radius:14px; max-height:420px; width:100%; object-fit:cover;">
            </div>
        </div>
        <section>
            <div class="wrap prose">
                <p class="lead">Kako HTML atributi required i type="email" pomažu korisniku, a što ostaje na poslužitelju.</p>
                
                <h2>Što je HTTPS?</h2>
                <p>HTTPS (HTTP Secure) je protokol koji šifrir komunikaciju između preglednika i poslužitelja. Bez HTTPS-a, netko na istoj mreži može presresti sve što šaljete: lozinke, poruke, podatke.</p>
                
                <h2>Klijentska validacija u HTML-u</h2>
                <p>HTML nudi ugrađene atribute za validaciju obrazaca. To pomaže korisnicima i smanjuje pogreške.</p>
                
                <h3>Ključni atributi</h3>
                <pre><code>&lt;input type="email" required&gt;
&lt;input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"&gt;
&lt;input type="password" minlength="8"&gt;
&lt;textarea required minlength="10"&gt;&lt;/textarea&gt;</code></pre>
                
                <h2>Što ostaje na poslužitelju</h2>
                <p>Klijentska validacija je korisna, ali nikada nije dovoljna. Poslužitelj mora provjeriti:</p>
                
                <ul>
                    <li>Duljinu i format podataka</li>
                    <li>Postojanje korisnika u bazi</li>
                    <li>Dostupnost resursa</li>
                    <li>CSRF tokenove</li>
                    <li>Rate limiting (ograničenje pokušaja)</li>
                </ul>
                
                <h2>Bezbedne obrasci</h2>
                
                <h3>HTTPS za sve</h3>
                <p>Svi obrasci moraju biti poslani preko HTTPS-a. Nikada ne šaljite osjetljive podatke preko HTTP-a.</p>
                
                <h3>CSRF zaštita</h3>
                <p>Koristite CSRF tokene u obrascima koji mijenjaju podatke.</p>
                
                <h3>Rate limiting</h3>
                <p>Ograničite broj pokušaja prijave i slanja obrazaca.</p>
                
                <h2>Primjer sigurnog obrasca</h2>
                <pre><code>&lt;form action="/submit" method="POST"&gt;
  &lt;input type="hidden" name="csrf_token" value="..."&gt;
  
  &lt;label&gt;
    E-adresa
    &lt;input type="email" name="email" required&gt;
  &lt;/label&gt;
  
  &lt;label&gt;
    Lozinka
    &lt;input type="password" name="password" 
           minlength="8" required&gt;
  &lt;/label&gt;
  
  &lt;button type="submit"&gt;Prijava&lt;/button&gt;
&lt;/form&gt;</code></pre>
                
                <div class="note">
                    <strong>Pravilo:</strong> Nemojte se oslanjati samo na klijentsku validaciju. Uvijek ponovite provjere na poslužitelju.
                </div>
            </div>
        </section>
    </main>

<?php include 'podnozje.php'; ?>
</body>
</html>