
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
                        <li><p><span>Date of birth:</span> <span>September 20, 1989 (35 years).</span></p></li>
                        <li><p><span>City:</span> <span>Cap d'Ail, France.</span></p></li>
                        <li><p><span>Email:</span> <a href="mailto:joan909fernandez@gmail.com">joan909fernandez@gmail.com</a></p></li>
                        <li><p><span>Status:</span> <span>Freelancer (Auto-entrepreneur).</span></p></li>
                    </ul>
                    <ul>
                        <li><p><span>Availability:</span> <span>Immediate.</span></p></li>
                        <li><p><span>Mobility:</span> <span>From Menton to Nice or 100 % remote.</span></p></li>
                        <li><p><span>Diploma:</span> <span>Professional Certificate in Web Development.</span></p></li>
                        <li><p><span>GitHub:</span> <a href="https://github.com/Papamundodev" target="_blank" aria-label="GitHub" title="Visit GitHub">Papamundodev</a></p></li>
                    </ul>
                </div>

                <h2>Front-End Junior Developer</h2>
                <div class="cards-container">
                    <div class="card">
                        <h3>Web standards & best practices</h3>
                        <ul>
                            <li>Cross-browser compatibility (Chrome, Firefox, Safari, Edge).</li>
                            <li>Responsive design for all devices.</li>
                            <li>Accessibility compliance (WCAG/RGAA standards, semantic structure, contrast, keyboard navigation).</li>
                            <li>Internationalization (i18n).</li>
                            <li>Privacy and security (HTTPS, CORS, data protection).</li>
                        </ul>
                        <h3>Soft Skills</h3>
                        <ul>
                            <li>Bilingual in English and French.</li>
                            <li>Autonomous, curious and motivated.</li>
                            <li>Constant tech monitoring.</li>
                            <li>Professional awareness and teamwork.</li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>Presentation</h3>
                        <div class="p-container">
                            <p>I have 5 years of experience in web development, mainly in WordPress and integrations.</p>
                            <p>I am looking for my first experience as a full-stack developer to improve my knowledge and build solid skills on a specific stack.</p>
                            <p>During my free time and during some collaborations, I have explored React, Vue, Node, Python and Symfony, but never in a professional environment.</p> 
                            <p>organized and autonomous , i am effective in remote work environments.</p>
                        </div>
                    </div>
                    <div class="card">
                        <h3>Front-end skills</h3>
                        <ul>
                            <li>HTML5 / CSS3 / Sass / Bootstrap / Tailwind / JavaScript / jQuery.</li>
                            <li>Vue.js / React.js (Beginner level, equivalent to 1 year of experience).</li>
                            <li>API integration and dynamic interfaces.</li>
                            <li>Performance optimization and SEO (technical SEO, semantic tags, internal links).</li>
                            <li>UI Kits and design systems (Atomic Design, Design Tokens).</li>
                            <li>Development tools: Git, GitLab, Webpack, npm, Vite.</li>
                            <li>Design tools: Figma, Adobe XD, Illustrator.</li>
                            <li>CMS: WordPress, templating Twig / Blade.</li>
                            <li>Back-end knowledge: Python, Node.js, Symfony.</li>
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
                            <li><p>Tools: ACF, WooCommerce, WP CLI, REST API, WPML, Yoast SEO, Rollbar, Asana.</p></li>
                            <li><p>Collaboration with designers, PMs, and back-end devs.</p></li>
                            <li><p>Documentation of a design system and creation of a WordPress boilerplate.</p></li>
                            <li><p>Development of plugins: AJAX search autocomplete, theme light/dark switch, color contrast checker.</p></li>
                        </ul>
                    </div>
                    <div class="flex-column-start">
                        <h3>Front-End Developer Internship – <span class="gradient-3">Èze</span> <span class="gradient-1 fs-sm">(2021)</span></h3>
                        <h4><span class="gradient-2 fs-md">@ YACHT MEDIA</span></h4>
                        <ul>
                            <li><p>Dynamic web interfaces with Vanilla JS, jQuery</p></li>
                            <li><p>Responsive components and landing pages based on Photoshop/Sketch mockups.</p></li>
                            <li><p>Page speed optimization and technical SEO (semantic HTML5, asset compression, 301 redirects).</p></li>
                            <li><p>Participation in WordPress theme integration and plugin configuration.</p></li>
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
                    <a href="https://www.carat-properties.com" target="_blank" aria-label="Projet Carat Properties" title="Visit Carat Properties">
                        <h3>Carat Properties – <span class="gradient-3 fs-md">Real Estate Website</span> <span class="gradient-1 fs-sm">(2024)</span></h3>
                    </a>
                    <div class="">
                        <div class="card-color"><p>Custom WordPress theme, integration, CRM data architecture.</p></div>
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