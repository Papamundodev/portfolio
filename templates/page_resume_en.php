
<?php
/**
 * Template Name: Page Resume EN
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
                        <li><p><span>Date of birth:</span> <span>09/20/1989.</span></p></li>
                        <li><p><span>City:</span> <span>Austin, Texas.</span></p></li>
                        <li><p><span>Email:</span> <a href="mailto:joan909fernandez@gmail.com">joan909fernandez@gmail.com</a></p></li>
                        <li><p><span>Status:</span> <span>Freelance located in France (W8BEN).</span></p></li>
                    </ul>
                    <ul>
                        <li><p><span>Availability:</span> <span>Immediate.</span></p></li>
                        <li><p><span>Mobility:</span> <span>From Austin or 100 % remote.</span></p></li>
                        <li><p><span>Diploma:</span> <span>Certificate in Web Development.</span></p></li>
                        <li><p><span>GitHub:</span> <a href="https://github.com/Papamundodev" target="_blank" aria-label="GitHub" title="Visit GitHub">Papamundodev</a></p></li>
                    </ul>
                </div>
                <div class="cards-container">
                    <div class="card">
                        <h2>SEO</h2>
                          <div class="divider"></div>
                        <ul>
                            <li class="h3">SEO audit & optimization.</li>
                            <li class="h3">Online Advertising Campaigns.</li>
                            <li class="h3">SEO Content Writing.</li>
                            <li class="h3">Google Ads / SEA.</li>
                            <li class="h3">Email Marketing.</li>
                        </ul>
                    </div>
                    <div class="card">
                        <h2>Web Development</h2>
                        <div class="divider"></div>
                        <ul>
                            <li class="h3">Custom WordPress Theme.</li>
                            <li class="h3">WordPress Maintenance.</li>
                            <li class="h3">Front-End & web Integration.</li>
                            <li class="h3">E-Commerce Website.</li>
                        </ul>
                    </div>
                    <div class="card">
                        <h2>Graphic & Web Design</h2>
                        <div class="divider"></div>
                        <ul>
                            <li class="h3">Branding design.</li>
                            <li class="h3">Illustration.</li>
                            <li class="h3">Print & Stationery Design.</li>
                            <li class="h3">Design systems.</li>
                            <li class="h3">UX/UI Design.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="wrapper wrapper-border-inline resume-experience ">
                <h2>Experiences</h2>
                <div>
                    <div class="flex-column-start">
                        <div class="flex-column-start">
                            <h3>Front-End Integrator – <span class="gradient-3">Sophia Antipolis</span> <span class="gradient-1 fs-sm">(2025)</span></h3>
                            <h4><span class="gradient-2 fs-md">@ MATAWAN MOBILITY</span></h4>
                        </div>
                        <ul>
                            <li><p>HTML/CSS/Sass/JavaScript expert.</p></li>
                            <li><p>Application of design system principles (atomic design, design tokens).</p></li>
                            <li><p>Twig templating and internal APIs.</p></li>
                            <li><p>Daily use of Git/GitLab, Slack, Jira.</p></li>
                            <li><p>Collaboration with the product team to meet delivery deadlines.</p></li>
                        </ul>
                    </div>
                    <div class="flex-column-start">
                        <div class="flex-column-start">
                            <h3>WordPress Developer – <span class="gradient-3">Monaco</span> <span class="gradient-1 fs-sm">(2022 – 2025)</span></h3>
                            <h4><span class="gradient-2 fs-md">@ COM'PLUS</span></h4>
                        </div>
                        <ul>
                            <li><p>Creation of more than 10 custom WordPress themes.</p></li>
                            <li><p>Maintenance and optimization of more than 20 sites.</p></li>
                            <li><p>Collaboration with designers, PMs, and back-end devs.</p></li>
                            <li><p>Logo and Branding design.</p></li>
                            <li><p>UX and UI design for websites</p></li>
                        </ul>
                    </div>
                    <div class="flex-column-start">
                        <h3>SEO & web marketing specialist – <span class="gradient-3">Èze</span> <span class="gradient-1 fs-sm">(2021)</span></h3>
                        <h4><span class="gradient-2 fs-md">@ YACHT MEDIA</span></h4>
                        <ul>
                            <li><p>Audit and optimization of SEO and online advertising campaigns.</p></li>
                            <li><p>SEO Content Writing.</p></li>
                            <li><p>paid search (Google Ads / SEA).</p></li>
                            <li><p>Email marketing.</p></li>
                            <li><p>Product marketing.</p></li>
                        </ul>
                    </div>
                </div>

            </div>


            <div class="wrapper wrapper-border-inline resume-portfolio ">

            <h2>Recent projects</h2>

                <div class="flex-column-start projet">
                    <a href="https://eastside-clinic.com" target="_blank" aria-label="Projet Eastside clinic" title="Visit Eastside clinic">
                        <h3>Eastside Clinic – <span class="gradient-3 fs-md">Website</span> <span class="gradient-1 fs-sm">(2024)</span></h3>
                    </a>
                    <div class="">
                        <div class="card-color"><p>Custom WordPress theme, UX/UI design, Lighthouse performance optimization.</p></div>
                    </div>
                </div>
                <div class="flex-column-start projet">
                    <a href="https://apdp.mc" target="_blank" aria-label="Projet APDP" title="Visit APDP">
                        <h3>APDP – <span class="gradient-3 fs-md">Website</span> <span class="gradient-1 fs-sm">(2024)</span></h3>
                    </a>
                    <div class="">
                        <div class="card-color"><p>Pixel-perfect integration, migration from PrestaShop to WordPress.</p></div>
                    </div>
                </div>
                <div class="flex-column-start projet">
                    <a href="https://tourisme.aircorsica.com" target="_blank" aria-label="Projet Tourisme Aircorsica" title="Visit Tourisme Aircorsica">
                        <h3>Tourisme Aircorsica – <span class="gradient-3 fs-md">Website</span> <span class="gradient-1 fs-sm">(2024)</span></h3>
                    </a>
                    <div class="">
                        <div class="card-color"><p>Custom WordPress theme, pixel-perfect integration, SEO optimization.</p></div>
                    </div>
                </div>
                <div class="flex-column-start projet">
                    <a href="https://github.com/Papamundodev/theme-color" target="_blank" aria-label="Projet Color checker" title="Visit Color checker">
                        <h3>Color Checker App – <span class="gradient-3 fs-md">Accessibility Tool</span> <span class="gradient-1 fs-sm">(2024)</span></h3>
                    </a>
                    <div class="">
                        <div class="card-color"><p>Personal accessibility tool for testing contrast ratios on websites.</p></div>
                    </div>
                </div>
                <div class="flex-column-start projet">
                    <a href="https://github.com/Papamundodev/chess" target="_blank" aria-label="Projet Chess app" title="Visit Chess app">
                        <h3>Chess App – <span class="gradient-3 fs-md">React Application</span> <span class="gradient-1 fs-sm">(2024)</span></h3>
                    </a>
                    <div class="">
                        <div class="card-color"><p>React app, personal project.</p></div>
                    </div>
                </div>
            </div>

        </section>

    </div>
    </main>

<?php
get_footer();