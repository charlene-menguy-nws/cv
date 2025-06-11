<?php

// Informations personnelles
$nom = "Menguy Charlène";
$email = "cmnovapro@gmail.com";
$telephone = "07 54 20 50 52";
$permis = "Permis B, véhicule personnel";
$linkedin = "https://www.linkedin.com/in/CMNN";

// À propos
$apropos = "Si je devais me résumer en une phrase ? J’aime créer, innover et challenger l’existant.
Passionnée de marketing digital, SEO et stratégies de marque, actuellement étudiante à la Normandie Web School. J’ai une obsession : aller au bout de mes ambitions et construire quelque chose de grand.
Le challenge, c’est mon moteur. Aller plus loin, viser plus haut et concrétiser mes idées, c’est ce qui me fait vibrer au quotidien.";

// Formations
$formations = [
    [
        "date" => "2025-2027",
        "titre" => "Bachelor Chef de projets digitaux",
        "ecole" => "Normandie Web School - Le Havre",
        "description" => [
            "Formation centrée sur les techniques et stratégies de marketing et communication digitale."
        ]
    ],
    [
        "date" => "2023",
        "titre" => "Bootcamp SEO",
        "ecole" => "The Bridge - Nanterre",
        "description" => [
            "Formation intensive en référencement naturel et stratégies de contenu optimisées."
        ]
    ],
    [
        "date" => "2017",
        "titre" => "BAC PRO Commerce",
        "ecole" => "Lycée Jules Lescene - Le Havre",
        "description" => []
    ],
];

// Compétences
$competences = [
    "Techniques" => [
        "SEO & Contenu : Audits, optimisation (balises, maillage, Core Web Vitals, SEO local), stratégie éditoriale (blogs, réseaux sociaux, acquisition multi-canal).",
        "Analyse & Growth : Suivi des performances, benchmark, recommandations, optimisation du tunnel de conversion.",
        "Marketing Digital : Emailing, UX/UI, création contenus (rédaction, graphisme, vidéo)."
    ],
    "Outils" => [
        "Google Analytics, Search Console, Semrush, Ahrefs, Screaming Frog, Majestic, Yourtextguru.",
        "WordPress, Canva, VS Code, CapCut, Pack Office, Creative Cloud (Illustrator, Indesign), HTML/CSS."
    ],
    "Gestion de projets" => [
        "KANBAN, Trello, Slack, Google Meet.",
        "Planification, suivi des délais, documentation (charte graphique, interviews), veille."
    ]
];

// Expériences professionnelles
$experiences = [
    [
        "poste" => "Consultante SEO",
        "entreprise" => "Dipsé, Le Havre",
        "type" => "Stage",
        "date" => "06/2024 - 07/2023",
        "missions" => [
            "Réalisation d'audits SEO et élaboration d'une stratégie éditoriale.",
            "Rédaction d'articles de blog optimisés SEO.",
            "Participation au lancement d'une marque."
        ]
    ],
    [
        "poste" => "Consultante SEO",
        "entreprise" => "Yulli&Friends, Paris",
        "type" => "Stage",
        "date" => "11/2023 - 12/2023",
        "missions" => [
            "Réalisation de benchmarks et audits SEO.",
            "Configuration d'outils d'analyse.",
            "Rédaction d'articles de blog optimisés SEO."
        ]
    ],
    [
        "poste" => "Chef d'équipe",
        "entreprise" => "Normal, Boulogne-Billancourt",
        "type" => "CDD",
        "date" => "07/2023 - 10/2023",
        "missions" => [
            "Management.", "Gestion des stocks.", "Merchandising."
        ]
    ],
    [
        "poste" => "Vente & gestion commerciale",
        "entreprise" => "Picard Surgelés, Printemps, Le temps des Cerises",
        "type" => "CDD",
        "date" => "12/2017 - 05/2023",
        "missions" => [
            "Encaissements, gestion des stocks, fidélisation client.",
            "Analyse des performances commerciales.",
            "Conseils clientèle et merchandising."
        ]
    ]
];

// Centres d’intérêt
$interets = [
    "Voyages : États-Unis, Afrique du Sud, Europe.",
    "Art et Design : Illustration, art déco.",
    "Nouvelles technologies : IA, veille digitale.",
    "Langues : Anglais, Espagnol."
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Charlene Menguy</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/style.css">

</head>


<body>

    <a id="top"></a>

    <header>

        <div id="titreCv"></div>

        <div>
        
            <h1>Menguy Charlène</h1> 
            <p>Si je devais me résumer en une phrase ? J’aime créer, innover et challenger l’existant.
                Passionnée de marketing digital, SEO et stratégies de marque, actuellement étudiante à la Normandie Web School. J’ai une obsession : aller au bout de mes ambitions et construire quelque chose de grand.
                Le challenge, c’est mon moteur. Aller plus loin, viser plus haut et concrétiser mes idées, c’est ce qui me fait vibrer au quotidien.
             </p>

        </div>
        
   

    <img src="assets/images/Design sans titre-13.png" id="myPhoto" alt="photo-profil-charlene-menguy">

    <a href="#top" class="back-to-top">↑</a>
    

        <nav>
            <div class="burger-menu">
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="burger-icon">&#9776;</label>
                <ul class="menu">
                    <li><a href="#about">A propos</a></li>
                    <li><a href="#formation">Formation</a></li>
                    <li><a href="#ExperiencesPro">Expériences professionnelles</a></li>
                    <li><a href="#Competences">Compétences</a></li>
                    <li><a href="#centerOfInterest">Centres d'intérêt</a></li>
                </ul>
            </div>
        </nav>

    </header>

    <main>
        <div id="info" class="contour-seul">

            <ul>
                <li>cmnovapro@gmail.com</li>
                <li>07 54 20 50 52</li>
                <li>Permis B, véhicule personnel</li>
                <li><a href= "https://www.linkedin.com/in/CMNN">linkedin</a></li>
            </ul>

        </div>


 <div id="educationCenterOfInterest">

    <section id="formation" class="section-blanche">

        <h2>Formation</h2>


        <article>
            <h3>2025-2027 - NORMANDIE WEB SCHOOL - LE HAVRE</h3>
            <ul>
                <li>Bachelor Chef de projets digitaux.</li>
                <li>Formation centrée sur les techniques et stratégies de marketing et communication digitale.</li>
            </ul>
        </article>


        <article>
        <h3>2023 - BOOTCAMP SEO - THE BRIDGE - NANTERRE</h3>
        <ul>
            <li>Formation intensive en référencement naturel et stratégies de contenu optimisées.</li>
        </ul>
        </article>


        <article>
        <h3>2017 - BAC PRO COMMERCE - LYCEE JULES LESCENE - LE HAVRE</h3>
        </article>


    </section>

</div>
    <a href="#top" class="back-to-top">↑</a> 



<div id="Competences" class="section-beige">

        <h2>Compétences</h2>

        <article>

        <h3>T E C H N I Q U E S :</h3>
            <ul>
                <li> SEO & Contenu : Audits, optimisation (balises, maillage, Core Web Vitals, SEO local), stratégie éditoriale (blogs, réseaux sociaux, acquisition multi-canal).</li>
                <li> Analyse & Growth : Suivi des performances, benchmark, recommandations, opti-
                    misation du tunnel de conversion.</li>
                <li>  Marketing Digital : Emailing, UX/UI, création contenus (rédaction, graphisme,
                    vidéo).</li>
            </ul>

        </article>


        <article>

        <h3>O U T I L S :</h3>
            <ul>

                <li> SEO & Analytics : Google Analytics, Search Console, Semrush, Ahrefs, Screaming
                    Frog, Majestic, Yourtextguru.</li>
                <li> CMS & Création : WordPress, Canva, VS Code, CapCut, Pack Office, Creative Cloud (Illustrator, indesign) ,HTML/CSS.</li>
            </ul>

        </article>


        <article>

         <h3>G E S T I O N D E P R O J E T S :</h3>   
         <ul>

                <li> Agilité & Collaboration : KANBAN, Trello, Slack, Google Meet.</li>
                <li> Stratégie & Coordination : Planification, suivi des délais, documentation (charte graphique, interviews ) veille.</li>

        </ul>

        </article>

    </div>
    <a href="#top" class="back-to-top">↑</a>


 <div id= "professionalExperienceCompetences"> 
        <section id="ExperiencesPro" class="section-blanche"> 
        
            <h2>Expériences professionelles</h2>

        <article>

            <h3>Dipsé, Le Havre - Consultante SEO - Stage, 06/2024-07/2023 </h3>
        <ul> 

              <li>Réalisation d'audits SEO et élaboration d'une stratégie éditoriale.</li>
              <li>Rédaction d'articles de blog optimisés SEO.</li>
              <li>Participation au lancement d'une marque.</li>

        </ul>

        </article>

        <article>

         <h3>Yulli&Friends, Paris - Consultante SEO - Stage, 11/2023-12/2023</h3>
        <ul> 

              <li>Réalisation de benchmarks et audits SEO.</li>
              <li>Configuration d'utils d'analyse.</li>
              <li>Rédaction d'articles de blog optimisés SEO.</li>

        </ul>

    </article>

    <article>

        <h3>Normal, Boulogne-Billancourt - Chef d'équipe - CDD,07/2023-10/2023</h3>
         <ul> 

             <li>Management.</li>
             <li>gestion des stocks.</li>
             <li>Merchandising.</li>

         </ul>

        </article>

        <article>

    <h3>Expériences variées en vente et gestion commercial - (Picard Surgelés, Printemps, Le temps des Cerises) - CDD 12/2017-05/2023</h3>
    <ul>  
           <li>Encaissements, gestion des stocks et fidélisation client.</li>
           <li>Analyse des performances commerciales et gestion des opérations en point de vente.</li>
           <li>Conseils clientèle et mise en place de merchandising.</li>

    </ul> 

    </article>  

    </section>

 </div>
    <a href="#top" class="back-to-top">↑</a>



    <div id="centerOfInterest" class="section-beige">

    <section>

    <h2>Centres d'interêt</h2>
    
    
    <ul>  

          <li>Voyages : Etats-Unis, Afrique du Sud, Europe.</li>
          <li>Art et Design : Illustration, art déco.</li>
          <li>Nouvelles technologies : IA, veille digitale.</li>
          <li>Langues : Anglais, espagnol.</li>

    </ul>
    
    </section>

</div>

    </main>

    <footer>
      
        <p>
            &copy; 2024 Exemple de Page Web. Tous droits réservés.
        </p>
    </footer>
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
 
  <script src="assets/js/script.js"></script>



</body>

</html>

  
