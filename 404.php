<?php
get_header();
$object = get_queried_object();
$theme_template_name = basename(__FILE__, ".php");
?>

    <main id="main-<?=$theme_template_name?>" class="">

        <section class="">
            <div class="container">
                <div class="wrapper flex-column-center">
                    <div class="page-title title-gradient">
                        <h1>Page not found</h1>
                    </div>
                    <div class="card flex-column-center">
                        <h2>404</h2>
                        <p>The page you are looking for does not exist.</p>
                        <div class="button-container-primary flex-center">
                            <button href="<?=home_url()?>" class="button">Go back to home</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php
get_footer();