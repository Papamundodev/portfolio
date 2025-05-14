<?php
get_header();
$object = get_queried_object();
$theme_template_name = basename(__FILE__, ".php");
$content = get_the_content();
$title = get_the_title();
?>

    <main id="main-<?=$theme_template_name?>">

    <div class="container">

        <section>
            <!-- Page Title -->
            <div class="wrapper">
                <div class="page-title">
                    <h1><?=$title; ?></h1>
                </div><!-- End Page Title -->
            </div>

        </section>

        <section>
            <div class="wrapper">
                <div class=""><?=$content;?></div>
            </div>
        </section>

    </div>



    </main>

<?php
get_footer();