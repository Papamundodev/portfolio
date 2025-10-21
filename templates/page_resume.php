
<?php
/**
 * Template Name: Page Resume
 * Template Post Type: page
 */
?>
<?php
get_header();
$object = get_queried_object();
$theme_template_name = basename(__FILE__, ".php");
$content = get_the_content();
$title = get_the_title();
?>


    <main id="main-<?=$theme_template_name?>" class="content">
    <div class="">

        <section>

            <div class="wrapper wrapper-border-inline resume-intro flex-column-center">

                <div class="page-title ">
                    <h1>Joan Fernandez</h1>
                </div><!-- End Page Title -->

                <div class="flex-start-desktop">
                    <ul>
                        <li><p><span>Date de naissance:</span> <span>20 septembre 1989.</span></p></li>
                        <li><p><span>Ville:</span> <span>Cap d'Ail, France.</span></p></li>
                        <li><p><span>Email:</span> <a href="mailto:joan909fernandez@gmail.com">joan909fernandez@gmail.com</a></p></li>
                        <li><p><span>Contrat:</span> <span>Freelance - CDI - CDD.</span></p></li>
                    </ul>
                    <ul>
                        <li><p><span>Disponibilité:</span> <span>Immédiate.</span></p></li>
                        <li><p><span>Mobilité:</span> <span>De Menton à Sophia.</span></p></li>
                        <li><p><span>Diplôme:</span> <span>Titre professionnel développeur web.</span></p></li>
                        <li><p><span>GitHub:</span> <a href="https://github.com/Papamundodev" target="_blank" aria-label="GitHub" title="Visit GitHub">Mon code</a></p></li>
                    </ul>
                </div>

                <h2>Développeur Front-End</h2>
                <div class="cards-container">
                    <div class="card">
                        <h3>Web standards et bonnes pratiques</h3>
                        <ul>
                            <li>Compatibilité multi-navigateurs</li>
                            <li>Design responsive adapté à tous les écrans.</li>
                            <li>Accessibilité (normes WCAG/RGAA, structure sémantique, contrastes, navigation clavier).</li>
                            <li>Internationalisation (i18n).</li>
                            <li>Sécurité et confidentialité (HTTPS, CORS, protection des données).</li>
                            <li>Progressive Enhancement</li>
                            <li>Code clair, commenté et facilement maintenable</li>
                            <li>Suivi et correction des erreurs (logs, monitoring)</li>
                            <li>Conformité légale (RGPD, cookies, consentement utilisateur).</li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>Présentation</h3>
                        <ul>
                            <p>5 ans d’expérience dans le développement web et qualifié pour des missions d’intégration.</p>
                            <p>Je vise l’opportunité d'utiliser un framework dans un cadre professionnel.</p>
                            <p>Ce que je propose :</p>
                            <li>Une conscience professionnelle : le besoin de livrer un travail qui satisfait à la fois le client et l’employeur.</li>
                            <li>Une énergie que je ne compte pas pour atteindre mes objectifs</li>
                            <li>Une réelle capacité d’adaptation aux conventions de l’entreprise.</li>
                            <li>Bilingue anglais, français.</li>
                            <li>Autonome, curieux et motivé, avec une veille technologique constante.</li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>Compétences front-end</h3>
                        <ul>
                            <li>Expert en intégration : HTML, CSS et SASS</li>
                            <li>Compétences solides en JavaScript (vanilla), avec des notions de Vue.js, React.js et jQuery</li>
                            <li>Maîtrise de PHP orienté CMS et templating</li>
                            <li>Récupération et exploitation de données d’API.</li>
                            <li>SEO technique.</li>
                            <li>Design systems (Atomic Design, Design Tokens).</li>
                            <li>Outils de développement: Git, GitLab, Webpack, npm, Vite.</li>
                            <li>Outils de design: Figma, Adobe XD, Illustrator.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-border-inline resume-experience ">
                <h2>Expériences</h2>
                <div>
                    <div class="flex-column-start">
                        <div class="flex-column-start">
                            <h3>Intégrateur Front-End – <span class="gradient-3">Sophia Antipolis</span> <span class="gradient-1 fs-sm">(2025)</span></h3>
                            <h4><span class="gradient-2 fs-md">@ MATAWAN MOBILITY</span></h4>
                        </div>
                        <ul>
                            <li><p>HTML/CSS/Sass/JavaScript expert.</p></li>
                            <li><p>Application des principes de design system (atomic design, design tokens).</p></li>
                            <li><p>Templating Twig et API internes.</p></li>
                            <li><p>Utilisation quotidienne de Git/GitLab, Slack, Jira.</p></li>
                            <li><p>Collaboration avec l'équipe produit pour respecter les délais de livraison.</p></li>
                        </ul>
                    </div>
                    <div class="flex-column-start">
                        <div class="flex-column-start">
                            <h3>Développeur WordPress – <span class="gradient-3">Monaco</span> <span class="gradient-1 fs-sm">(2022 – 2025)</span></h3>
                            <h4><span class="gradient-2 fs-md">@ COM'PLUS</span></h4>
                        </div>
                        <ul>
                            <li><p>Création de plus de 10 thèmes WordPress sur mesure.</p></li>
                            <li><p>Maintenance et optimisation de plus de 20 sites.</p></li>
                            <li><p>Outils: ACF, WooCommerce, WP CLI, REST API, WPML, Yoast SEO, Rollbar, Asana.</p></li>
                            <li><p>Collaboration avec designers, PMs, et développeurs back-end.</p></li>
                            <li><p>Documentation d'un design system et création d'un boilerplate WordPress.</p></li>
                            <li><p>Développement de plugins: recherche AJAX, switch thème light/dark, color contrast checker.</p></li>
                        </ul>
                    </div>
                    <div class="flex-column-start">
                        <h3>Stage Développeur Web – <span class="gradient-3">Èze</span> <span class="gradient-1 fs-sm">(2021)</span></h3>
                        <h4><span class="gradient-2 fs-md">@ YACHT MEDIA</span></h4>
                        <ul>
                            <li><p>Interfaces dynamiques avec Vanilla JS, jQuery</p></li>
                            <li><p>Composants responsives et pages basées sur les maquettes Photoshop/Sketch.</p></li>
                            <li><p>Optimisation de la vitesse de chargement et du SEO technique (HTML5 sémantique, compression des assets, redirections 301).</p></li>
                            <li><p>Participation à l'intégration de thèmes WordPress et configuration de plugins.</p></li>
                        </ul>
                    </div>
                </div>

            </div>


            <div class="wrapper wrapper-border-inline resume-portfolio ">

            <h2>Projets récents</h2>

                <div class="flex-column-start projet">
                    <a href="https://eastside-clinic.com" target="_blank" aria-label="Projet Eastside clinic" title="Visit Eastside clinic">
                        <h3>Eastside Clinic – <span class="gradient-3 fs-md">Site web</span> <span class="gradient-1 fs-sm">(2024)</span></h3>
                    </a>
                    <div class="">
                        <div class="card-color"><p>Thème WordPress sur mesure, UX/UI design, optimisation Lighthouse.</p></div>
                    </div>
                </div>
                <div class="flex-column-start projet">
                    <a href="https://apdp.mc" target="_blank" aria-label="Projet APDP" title="Visit APDP">
                        <h3>APDP – <span class="gradient-3 fs-md">Site web</span> <span class="gradient-1 fs-sm">(2024)</span></h3>
                    </a>
                    <div class="">
                        <div class="card-color"><p>Intégration pixel-perfect, migration PrestaShop → WordPress.</p></div>
                    </div>
                </div>
                <div class="flex-column-start projet">
                    <a href="https://tourisme.aircorsica.com" target="_blank" aria-label="Projet Tourisme Aircorsica" title="Visit Tourisme Aircorsica">
                        <h3>Tourisme Aircorsica – <span class="gradient-3 fs-md">Site web</span> <span class="gradient-1 fs-sm">(2024)</span></h3>
                    </a>
                    <div class="">
                        <div class="card-color"><p>Thème sur mesure, intégration pixel-perfect, optimisation SEO.</p></div>
                    </div>
                </div>
                <div class="flex-column-start projet">
                    <a href="https://www.carat-properties.com" target="_blank" aria-label="Projet Carat Properties" title="Visit Carat Properties">
                        <h3>Carat Properties – <span class="gradient-3 fs-md">Site immobilier</span> <span class="gradient-1 fs-sm">(2024)</span></h3>
                    </a>
                    <div class="">
                        <div class="card-color"><p>Thème WordPress sur mesure, intégration, architecture CRM.</p></div>
                    </div>
                </div>
                <div class="flex-column-start projet">
                    <a href="https://github.com/Papamundodev/theme-color" target="_blank" aria-label="Projet Color checker" title="Visit Color checker">
                        <h3>Color Checker App – <span class="gradient-3 fs-md">Outil d'accessibilité</span> <span class="gradient-1 fs-sm">(2024)</span></h3>
                    </a>
                    <div class="">
                        <div class="card-color"><p>Outil personnel d'accessibilité pour tester les ratios de contraste sur les sites web.</p></div>
                    </div>
                </div>
                <div class="flex-column-start projet">
                    <a href="https://github.com/Papamundodev/chess" target="_blank" aria-label="Projet Chess app" title="Visit Chess app">
                        <h3>Chess App – <span class="gradient-3 fs-md">Application React</span> <span class="gradient-1 fs-sm">(2024)</span></h3>
                    </a>
                    <div class="">
                        <div class="card-color"><p>Application React, projet personnel.</p></div>
                    </div>
                </div>
            </div>

        </section>

    </div>
    </main>

<?php
get_footer();