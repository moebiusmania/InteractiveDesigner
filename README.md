Interactive Designer - WORK IN PROGRESS
=======================================

Il tema WordPress per il mio sito personale [salvatorelaisa.net](http://www.salvatorelaisa.net)

### Librerie utilizzate
- LESS per i CSS dinamici
- Twitter Bootstrap (CSS), skin Flatstrap
- Font Awesome (CSS/Font)
- jQuery 2 (JS)
- Open Sans (FONT) tramite Google Fonts

### Assets grafici
Ad eccezione delle foto (inseribili da backend nelle pagine/articoli e come immagini in evidenza) tutto il materiale grafico è vettoriale. Il logo e' un file SVG menter le icone sono basate sull'icon font Font Awesome.

Non esistono sorgenti grafici del layout, è stato progettato direttamente a codice.

### Features di WordPress utilizzate
- Custom headers (immagine di testata modificabile da backend)
- Immagini in evidenza per pagine, articoli, home page e portfolio
- Custom post type per il portfolio
- Widget ad hoc per il tema: 'Skill box', 'Link social', 'Form contatto rapido'
- Form di contatto rapido con AJAX
- Font dell'editor di WordPress modificato

Il tema è stato progettato su WordPress 3.5 ma dovrebbe essere funzionante sulle versioni dalla 3.0 in poi.

### Template di pagina
Sono inclusi i "classici" template di WordPress (**home page, blog, pagine standard, articoli, risultati di ricerca**) e ne sono stati aggiunti di nuovi:

- Portfolio:
- Contatti:
- About: 

### Navigazione con icone
La navigazione è gestita dalla backend dall'interfaccia di WordPress presente in Aspetto -> Menu. E' possibile aggiungere delle icone ai pulsanti della navigazione abilitando la descrizione

e inserendo come descrizione il nome dell'icona desiderata:

`icon-pencil`

le icone disponibili sono quelle presenti in Font Awesome, qui trovate una [tabella di riferimento](http://fortawesome.github.io/Font-Awesome/cheatsheet/).


### Functions.php
Le funzionalità che non interessano possono essere disattivate commentando la riga dell'azione/filtro responsabile all'inizio del file functions.php .

### Compatibilità cross-browser
Il tema si basa fortemente su features CSS3 per il layout, anche se non è specificatamente pensato per la retro compatibilità (IE8 e inferiori) anche in situazioni di degrado rimane utilizzabile.

Testato su
- Chrome 28
- Firefox 21

### Dispositivi
Essendo il layout basato sulla griglia di Bootstrap in sito si adatta su 5 layout:

- 1200 pixel in su: computer laptop e desktop
- 980 pixel in su: desktop "classici" e tablet orientati in orizzontale
- 768 pixel in su: tablet orientati in verticale
- 767 pixel in giu: smartphones orientati in orizzontale
- 480 pixel in giu: smartphones orientati in verticale

### Licenza

