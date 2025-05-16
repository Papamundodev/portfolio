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
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

    </main>

<?php
get_footer();