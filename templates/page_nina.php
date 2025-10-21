
<?php
/**
 * Template Name: Page Nina
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

        <section class="bg-white">

            <div class="wrapper wrapper-border-inline nina-intro flex-column-start">
                <p>Salut !</p>
                <p>Je m’appelle Nina et j’ai 8 ans 💕</p>
                <p>J’ai perdu mon araignée télécommandée (elle fait un peu peur, mais elle est entièrement gentille !) dans le garage de l’immeuble.</p>
                <p>Si tu l’as vue ou ramassée par erreur, pourrais-tu appeler mon papa au 0629163255 ? Je suis vraiment triste sans elle…</p>
                <p>Et je suis sûre qu’elle a très peur sans moi aussi 🕷️😢</p>
                <p>Un énorme merci pour ton aide 🤗</p>
                <p>— Nina</p>


                <img src="<?=get_template_directory_uri();?>/assets/images/arraigne.jpg" alt="Nina"> 
            </div>

            

        </section>

    </div>
    </main>

<?php
get_footer();