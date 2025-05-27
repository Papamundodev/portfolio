<?php
get_header();
$object = get_queried_object();
$theme_template_name = basename(__FILE__, ".php");
$content = get_the_content();
$title = get_the_title();
?>

    <main id="main-<?=$theme_template_name?>" class="content">

    <div class="container">

        <section>
            <!-- Page Title -->
            <div class="wrapper flex-center">
                <div class="page-title title-gradient">
                    <h1><?=$title; ?></h1>
                </div><!-- End Page Title -->
            </div>

        </section>

        <section>
            <div class="wrapper wrapper-border-inline section-intro">
                <div class=""><?=$content;?></div>
                <div class="button-container-gradient flex-center">
                    <button class="button">Essayer gratuitement</button>
                </div>  
                <div class="button-container-shadow-top-right flex-center">
                    <button class="button">Button c'est un gros bouton graphique</button>
                </div>
                <div class="button-container-primary flex-center">
                    <button class="button">Button c'est un gros bouton graphique</button>
                </div>
                <nav aria-label="navigation" tabindex="0" class="dropdown-hover dropdown">
                    <div class="dropdown-link ">
                        <div class="img-container-circle-icon-sm">
                            <div class="svg-container">
                                <svg class="light-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"/></svg>
                                <svg class="dark-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"/></svg>
                            </div>
                        </div>
                        <button class="dropdown-title btn button">This is a nice dropdown hover.</button> 
                        
                    </div>
                    <ul class="dropdown-menu">
                        <li><p>that allows the header/summary to be clickable.</p></li>
                        <li><p>the content of the header is limited to 1 line and therefor the width of the dropdown is limited to the width of the container.
                            You can always add a scroll if its really needed.
                        </p></li>
                        <li><p>ist supported in all platform</p></li>
                        <li><a href="">you have to be carefull of the content under it and the superposition.</a></li>
                        <li><a href="">links on 2 lignes look weirds, reduce the offset.</a></li>
                    </ul>
                </nav>
                <details id="dropdown-hover" aria-label="navigation" tabindex="0" class="dropdown">
                    <summary class="dropdown-link ">
                        <div class="img-container-circle-icon-sm">
                            <div class="svg-container">
                                <svg class="light-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"/></svg>
                                <svg class="dark-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"/></svg>
                            </div>
                        </div>
                        <span role="button" class="dropdown-title btn button">This is a nice dropdown hover.</span> 
                    </summary>
                    <ul class="dropdown-menu">
                        <li><p>that allows the header/summary to be clickable.</p></li>
                        <li><p>the content of the header is limited to 1 line and therefor the width of the dropdown is limited to the width of the container.
                            You can always add a scroll if its really needed.
                        </p></li>
                        <li><p>ist supported in all platform</p></li>
                        <li><a href="">you have to be carefull of the content under it and the superposition.</a></li>
                        <li><a href="">links on 2 lignes look weirds, reduce the offset.</a></li>
                    </ul>
                </details>
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
                    <div class="wrapper wrapper-border-inline dropdown-system">
            <div class="design-system-header ">
                <h2 class="">Dropdowns</h2>
            </div>
            <div class=" flex-auto">
                <div>
                    <div class="">
                        <div class="">
                            <h3 class="">Hover desktop</h3>
                            <div class="flex-center">
                                <nav id="dropdown-hover" aria-label="navigation" tabindex="0" class="dropdown-hover dropdown">
                                    <div class="dropdown-link ">
                                        <div class="img-container-circle-icon-sm">
                                            <div class="svg-container">
                                                <svg class="light-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"/></svg>
                                                <svg class="dark-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"/></svg>
                                            </div>
                                        </div>
                                        <span role="button" class="dropdown-title btn button">This is a nice dropdown hover.</span> 
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li><p>that allows the header/summary to be clickable.</p></li>
                                        <li><p>the content of the header is limited to 1 line and therefor the width of the dropdown is limited to the width of the container.
                                            You can always add a scroll if its really needed.
                                        </p></li>
                                        <li><p>ist supported in all platform</p></li>
                                        <li><a href="">you have to be carefull of the content under it and the superposition.</a></li>
                                        <li><a href="">links on 2 lignes look weirds, reduce the offset.</a></li>
                                    </ul>
                                </nav>

                                <details id="dropdown-hover" aria-label="navigation" tabindex="0" class="dropdown">
                                    <summary class="dropdown-link ">
                                        <div class="img-container-circle-icon-sm">
                                            <div class="svg-container">
                                                <svg class="light-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"/></svg>
                                                <svg class="dark-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"/></svg>
                                            </div>
                                        </div>
                                        <span role="button" class="dropdown-title btn button">This is a nice dropdown hover.</span> 
                                    </summary>
                                    <ul class="dropdown-menu">
                                        <li><p>that allows the header/summary to be clickable.</p></li>
                                        <li><p>the content of the header is limited to 1 line and therefor the width of the dropdown is limited to the width of the container.
                                            You can always add a scroll if its really needed.
                                        </p></li>
                                        <li><p>ist supported in all platform</p></li>
                                        <li><a href="">you have to be carefull of the content under it and the superposition.</a></li>
                                        <li><a href="">links on 2 lignes look weirds, reduce the offset.</a></li>
                                    </ul>
                                </details>

                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section>
            <div class="wrapper wrapper-border-inline bg-primary-color-surface-1">
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
                    <div class="button-container-primary flex-center">
                        <button class="button">Button c'est un gros bouton graphique</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();