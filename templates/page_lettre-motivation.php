
<?php
/**
 * Template Name: Page Lettre de motivation
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
                        <li><p><span>Ville:</span> <span>Cap d'Ail, France.</span></p></li>
                        <li><p><span>Statut:</span> <span>Auto-entrepreneur.</span></p></li>
                        <li><p><span>TJM:</span> <span>320€.</span></p></li>
                        <li><p><span>Contrat:</span> <span>Freelance - CDI - CDD.</span></p></li>
                        <li><p><span>Email:</span> <a href="mailto:joan909fernandez@gmail.com">joan909fernandez@gmail.com</a></p></li>

                    </ul>
                    <ul>
                        <li><p><span>Disponibilité:</span> <span>Immediatement.</span></p></li>
                        <li><p><span>Lieu:</span> <span>100% travail à distance.</span></p></li>
                        <li><p><span>Diplôme:</span> <span>Titre professionnel développeur web.</span></p></li>
                        <li><p><span>Langue:</span> <span>Français natif, Anglais bilingue.</span></p></li>
                        <li><p><span>GitHub:</span> <a href="https://github.com/Papamundodev" target="_blank" aria-label="GitHub" title="Visit GitHub">Papamundodev</a></p></li>
                    </ul>
                </div>


                <h2>Lettre de motivation</h2>
                <div class="letter">
                    <div class="card">
                        <p>Bonjour,</p>
                        <p>Développeur web intégrateur depuis 5 ans, mon projet de carrière est simple : faire de ma passion un travail. Ce qui me passionne, c’est l’intégration. Concrètement, récupérer des données (depuis n’importe quel CMS, framework, JSON, etc.), prendre ou créer un design, et utiliser HTML CSS(SASS) et JavaScript pour assembler le tout.</p>
                        <p>Je suis habile à prendre en compte les besoins des clients, créer des docs ou des guidelines pour rendre le travail de toute l’équipe plus fiable et plus productif. L’accessibilité, les performances et le SEO technique font, pour moi, partie intégrante du métier d’intégrateur.</p>
                        <p>Je cherche un poste en 100 % télétravail, en freelance. J’ai de l’expérience en remote, je suis rigoureux sur les délais, avec une forte conscience professionnelle.</p>
                        <p>Mes expériences passées m’ont permis d’être un atout dans le team building et la coopération, même à distance.</p>
                        <p>J’ai découvert Shopify pendant ma formation de développeur web (titre professionnel niveau bac+2), et je l’ai utilisé sur des projets freelance. Je n’ai peut-être pas encore trois ans d’expérience spécifiquement sur Shopify, mais j’ai cinq ans de prise en main rapide d’outils de templating comme Liquid, et d’utilisation d’API orientées CMS.</p>
                        <p>Extrêmement motivé et curieux, je cherche un nouveau challenge dans ma carrière – un poste centré sur mon rôle d’intégrateur, en tant que CSS advocate et expert design system.</p>
                        <p>Comme vous pouvez le constater, votre offre correspond parfaitement à mon projet professionnel. Je suis persuadé d’avoir les compétences, la méthode et l’état d’esprit pour contribuer efficacement à vos projets et faire gagner du temps à votre équipe.</p>
                    </div>
                </div>
            </div>

        </section>

    </div>
    </main>

<?php
get_footer();