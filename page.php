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
            <div class="wrapper flex-center">
                <div class="page-title title-gradient">
                    <h1><?=$title; ?></h1>
                </div><!-- End Page Title -->
                <div class="img-container-logo-sm">
                    <a href="<?=home_url();?>" aria-label="<?=get_bloginfo('name');?>">
                        <img src="<?=get_template_directory_uri();?>/assets/images/logo.jpg" title="logo" alt="logo">
                    </a>
                </div>
            </div>

        </section>

        <section>
            <div class="wrapper wrapper-border-inline">
                <div class=""><?=$content;?></div>
            </div>
        </section>

        <section>
            <div class="wrapper wrapper-border-inline table-component text-color-system">
                <div class="section-title">
                    <h2 class="">Color</h2>
                </div>
                <div class="grid-table">
                    <div class="element-ratio-calculating">
                        <div class="">
                            <p class="default-color">default-color</p>
                            <div class="text-color default-color">
                                <p class="color-computed"></p>
                            </div>
                        </div>
                    </div>
                    <p class="default-color ">Lorem ipsum dolor.</p>
                </div>
                <div class="grid-table">
                    <div class="element-ratio-calculating">
                        <div class="">
                            <p class="gray-color">gray-color</p>
                            <div class="text-color gray-color">
                                <p class="color-computed"></p>
                            </div>
                        </div>
                    </div>
                    <p class="gray-color ">Lorem ipsum dolor.</p>
                </div>
                <div class="grid-table">
                    <div class="element-ratio-calculating">
                        <div class="">
                            <p class="link-color">link-color</p>
                            <div class="text-color link-color">
                                <p class="color-computed"></p>
                            </div>
                        </div>
                    </div>
                    <p class="link-color ">Lorem ipsum dolor.</p>
                </div>
                <div class="grid-table">
                    <div class="element-ratio-calculating">
                        <div class="">
                            <p class="link-hover-color">link-hover-color</p>
                            <div class="text-color link-hover-color">
                                <p class="color-computed"></p>
                            </div>
                        </div>
                    </div>
                    <p class="link-hover-color ">Lorem ipsum dolor.</p>
                </div>
                <div class="grid-table">
                    <div class="element-ratio-calculating">
                        <div class="">
                            <p class="link-active-color">link-active-color</p>
                            <div class="text-color link-active-color">
                                <p class="color-computed"></p>
                            </div>
                        </div>
                    </div>
                    <p class="link-active-color ">Lorem ipsum dolor.</p>
                </div>
                <div class="bg-background-color element-ratio-calculating grid-table">
                    <div class="">
                        <p class="">Background Color</p>
                        <div class="bg-color-computed"></div>
                    </div>
                    <div class="flex-center">
                        <p class=" default-color text-color"><span class="ratio"></span></p>
                        <p class=" gray-color text-color"><span class="ratio"></span></p>
                        <p class=" link-color text-color"><span class="ratio"></span></p>
                        <p class=" link-hover-color text-color"><span class="ratio"></span></p>
                        <p class=" link-active-color text-color"><span class="ratio"></span></p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="wrapper wrapper-border-inline background-color-system ">
                <div class="section-title">
                    <h2 class="">Background Color</h2>
                </div>
                <div class="flex-auto">
                    <div>
                        <div class="bg-primary-color-surface-1 element-ratio-calculating">
                            <div class="">
                                <p class="">primary-color-surface-1</p>
                                <div class="bg-color-computed"></div>
                            </div>  
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                                                        <p class="gradient-1 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-2 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-3 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                    <div>
                        <div class="bg-primary-color-surface-2 element-ratio-calculating">
                            <div class="">
                                <p class="">primary-color-surface-2</p>
                                <div class="bg-color-computed"></div>
                            </div>
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-1 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-2 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-3 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                    <div>
                        <div class="bg-primary-color-surface-3 element-ratio-calculating">
                            <div class="">
                                <p class="">primary-color-surface-3</p>
                                <div class="bg-color-computed"></div>
                            </div>
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-1 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-2 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-3 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>


                    <div>
                        <div class="bg-secondary-color-surface-1 element-ratio-calculating">
                            <div class="">
                                <p class="">secondary-color-surface-1</p>
                                <div class="bg-color-computed"></div>
                            </div>  
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-1 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-2 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-3 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                    <div>
                        <div class="bg-secondary-color-surface-2 element-ratio-calculating">
                            <div class="">
                                <p class="">secondary-color-surface-2</p>
                                <div class="bg-color-computed"></div>
                            </div>
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-1 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-2 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-3 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                    <div>
                        <div class="bg-secondary-color-surface-3 element-ratio-calculating">
                            <div class="">
                                <p class="">secondary-color-surface-3</p>
                                <div class="bg-color-computed"></div>
                            </div>
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-1 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-2 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-3 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>


                    <div>
                        <div class="bg-tertiary-color-surface-1 element-ratio-calculating">
                            <div class="">
                                <p class="">tertiary-color-surface-1</p>
                                <div class="bg-color-computed"></div>
                            </div>  
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-1 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-2 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-3 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                    <div>
                        <div class="bg-tertiary-color-surface-2 element-ratio-calculating">
                            <div class="">
                                <p class="">tertiary-color-surface-2</p>
                                <div class="bg-color-computed"></div>
                            </div>
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-1 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-2 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-3 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                    <div>
                        <div class="bg-tertiary-color-surface-3 element-ratio-calculating">
                            <div class="">
                                <p class="">tertiary-color-surface-3</p>
                                <div class="bg-color-computed"></div>
                            </div>
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-1 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-2 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-3 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                    <div>
                        <div class="bg-background-color element-ratio-calculating">
                            <div class="">
                                <p class="">background-color</p>
                                <div class="bg-color-computed"></div>
                            </div>
                            <p class="gradient-1 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-2 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gradient-3 text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                    <div>
                        <div class="bg-gradient-1 element-ratio-calculating">
                            <div class="">
                                <p class="">gradient-1</p>
                                <div class="bg-color-computed"></div>
                            </div>
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="background-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                    <div>
                        <div class="bg-gradient-2 element-ratio-calculating">
                            <div class="">
                                <p class="">gradient-2</p>
                                <div class="bg-color-computed"></div>
                            </div>
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="background-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                    <div>
                        <div class="bg-gradient-3 element-ratio-calculating">
                            <div class="">
                                <p class="">gradient-3</p>
                                <div class="bg-color-computed"></div>
                            </div>
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="background-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                                        <div>
                        <div class="bg-primary-color element-ratio-calculating">
                            <div class="">
                                <p class="">primary-color</p>
                                <div class="bg-color-computed"></div>
                            </div>
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="background-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                    <div>
                        <div class="bg-secondary-color element-ratio-calculating">
                            <div class="">
                                <p class="">secondary-color</p>
                                <div class="bg-color-computed"></div>
                            </div>
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="background-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                    <div>
                        <div class="bg-tertiary-color element-ratio-calculating">
                            <div class="">
                                <p class="">tertiary-color</p>
                                <div class="bg-color-computed"></div>
                            </div>
                            <p class="default-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="background-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="gray-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-hover-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                            <p class="link-active-color text-color">Lorem ipsum dolor. <span class="ratio"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="wrapper wrapper-border-inline">
                <div class="section-title">
                    <h2 class="">Button</h2>
                </div>
                <div class="flex-column-center">
                    <div class="button-container-gradient flex-center">
                        <button class="button">Essayer gratuitement</button>
                    </div>                
                    <div class="button-container-shadow-top-right flex-center">
                        <button class="button">Button c'est un gros bouton graphique</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();