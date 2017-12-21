Hastighet och användbarhet
===============================

Jag har valt att fortsätta analysen av [Systembolaget](http://www.systembolaget.se), [Biluppgifter](http://www.biluppgifter.se) 
och [Jula](http://www.jula.se), med samma motivering som tidigare; då samtliga webbplatser är välkända blir, precis som användarvänligheten, snabbhet och användbarhet viktigt.

<h3>Metod</h3>
För att samla in information har jag använt mig av Google Chrome Devtools och Google Pagespeed. För att sammanställa den insamlade informationen har jag använt Google spreadsheet, se datan [här](https://docs.google.com/spreadsheets/d/12uwybMDB_HOSLzxy3qFjYpHYa9FQFumj6EWVhQhtoVo/edit?usp=sharing).

<h2>Webbplats 1: Systembolaget.se</h2>

[FIGURE src="image/analys/systembolaget.png"]

På Systembolagets förstasida laddas i genomsnitt 37.33 resurser av storleken 1.3 MB på 3.04 sekunder. I desktopläge får webbplatsen betyget 79/100 och i mobilläge betyget 59/100 av Google Pagespeed. På sidan "Dryck och mat" laddas i genomsnitt 47.33 resurser av storleken 3.2 MB på 3.38 sekunder och på sidan "Butiker och ombud" laddas i genomsnitt 29 resurser av storleken 1.1 MB på 2.39 sekunder.

<h3>Förbättringsförslag</h3>
Sidan i mobilläge går sämre än sidan i desktopläge, men Google Pagespeed föreslår för båda sidorna att JS- och CSS-kod som blockerar renderingen från innehåll ovanför mitten ska raderas, att cachelagring i webbläsaren ska utnyttjas, att bilder ska optimeras, att synligt innehåll ska prioriteras samt att komprimering ska aktiveras. 

<h2>Webbplats 2: Biluppgifter.se</h2>

[FIGURE src="image/analys/biluppgifter.png"]

På Biluppgifters förstasida laddas i genomsnitt 19.33 resurser av storleken 0.44 MB på 0.93 sekunder. I desktopläge får webbpsatsen betyget 82/100 och i mobilläge  betyget 72/100 av Google Pagespeed. På sidan "Om" laddas i genomsnitt 19.33 resurser av storleken 0.45 MB på 0.92 sekunder och på sidan "Fordon" laddas i genomsnitt 18.33 resurser av storleken 0.44 MB på 0.81 sekunder. Sidorna fick med andra ord väldigt lika resultat.

<h3>Förbättringsförslag</h3>
Sidan i mobilläge går lite sämre än sidan i desktopläge även om båda får bra betyg. Google Pagespeed föreslår för båda sidorna att JS- och CSS-kod som blockerar renderingen från innehåll ovanför mitten ska raderas, att cachelagring i webbläsaren ska utnyttjas samt att CSS-kod ska minifieras.

<h2>Webbplats 3: Jula.se</h2>

[FIGURE src="image/analys/jula.png"]

På Julas förstasida laddas i genomsnitt 161.33 resurser av storleken 6.6 MB på 9.42 sekunder. I desktopläge får webbplatsen betyget 47/100 och i mobilläge betyget 34/100 av Google Pagespeed. På sidan "Våra varuhus" laddas i genomsnitt 121.66 resurser av storleken 2.2 MB på 3.71 sekunder och på sidan "Katalog -> Bygg och färg" laddas i genomsnitt 80 resurser av storleken 1.6 MB på 2.55 sekunder.

<h3>Förbättringsförslag</h3>
Sidan i mobilläge går sämre än sidan i desktopläge och båda får ganska dåligt betyg. Google Pagespeed föreslår för båda sidorna att cachelagring i webbläsaren ska utnyttjas, att bilder ska optimeras, att komprimering ska aktiveras samt att omdirigeringar från målsidan ska undvikas. För sidan i mobilläge föreslås dessutom att synligt innehåll ska prioriteras och att JS- och CSS-kod som blockerar renderingen från innehåll ovanför mitten ska raderas.

<h2>Sammanfattning</h2>
Google Pagespeeds vanligaste förbättringsåtgärder för de utvalda webbplatserna var att cachelagring i webbläsaren ska utnyttjas, att JS- och CSS-kod som blockerar renderingen från innehåll ovanför mitten ska raderas, att bilder ska optimeras samt att komprimering ska aktiveras. 

Baserat på mätvärdena som tagits fram kan webbplatserna rangordnas enligt följande:<br>
1. Biluppgifter<br>
2. Systembolaget<br>
3. Jula<br>

Biluppgifters webbplats fick bäst resultat på alla plan men har inte i närheten av lika mycket innehåll som de andra. Systembolagets webbplats fick helt okej resultat medan Julas fick sämre. Jag uppfattar en laddningstid på under 3-4 sekunder som snabb och därmed klarar både Systembolagets och Biluppgifters webbplatser gränsen enligt mig. Julas förstasida klarar sig inte då den laddningstiden låg på runt 9 sekunder, men sidorna "Våra varuhus" och "Katalog -> Bygg och färg" däremot hade en laddningstid på mellan 2 och 4 sekunder och klarar därmed min gräns för en snabb webbplats.

Jag har gjort analysen på egen hand.