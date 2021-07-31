<?php get_header(); ?>

<section class="tm-section">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                        
                        <div class="row tm-margin-t-big">
                            <?php 
                    if(have_posts()):
                        while(have_posts()):
                                the_post();
                            ?>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                                <div class="tm-content-box">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image" class="tm-margin-b-30 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text"><?php echo get_the_title(); ?></h4>
                                    <p class="tm-margin-b-20"><?php echo get_the_excerpt(); ?></p>
                                    <a href="<?php echo the_permalink(); ?>" class="tm-btn text-uppercase">Detail</a>    
                                </div>  

                            </div>
                            <?php                             
                        endwhile;
                    endif;
                            ?>    
                        </div>
                        
                    </div>

                    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">

                        <div class="tm-aside-container">
                            <h3 class="tm-gold-text tm-title">
                                Categories
                            </h3>
                            <nav>
                                <ul class="nav">
                                    <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                    <li><a href="#" class="tm-text-link">Tincidunt non faucibus placerat</a></li>
                                    <li><a href="#" class="tm-text-link">Vestibulum tempor ac lectus</a></li>
                                    <li><a href="#" class="tm-text-link">Elementum egestas dui</a></li>
                                    <li><a href="#" class="tm-text-link">Nam in augue consectetur</a></li>
                                    <li><a href="#" class="tm-text-link">Fusce non turpis euismod</a></li>
                                    <li><a href="#" class="tm-text-link">Text Link Color #006699</a></li>
                                </ul>
                            </nav>
                            <hr class="tm-margin-t-small">   
                            <h3 class="tm-gold-text tm-title tm-margin-t-small">
                                Useful Links
                            </h3>
                            <nav>   
                                <ul class="nav">
                                    <li><a href="#" class="tm-text-link">Suspendisse sed dui nulla</a></li>
                                    <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                    <li><a href="#" class="tm-text-link">Duiss nec purus et eros</a></li>
                                    <li><a href="#" class="tm-text-link">Etiam pulvinar et ligula sed</a></li>
                                    <li><a href="#" class="tm-text-link">Proin egestas eu felis et iaculis</a></li>
                                </ul>
                            </nav>   
                            <hr class="tm-margin-t-small"> 

                            <div class="tm-content-box tm-margin-t-small">
                                <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #1</h4></a>
                                <p class="tm-margin-b-30">Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                            </div>
                            <hr class="tm-margin-t-small">
                            <div class="tm-content-box tm-margin-t-small">
                                <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #2</h4></a>
                                <p>Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                            </div>  
                            <hr class="tm-margin-t-small">
                            <div class="tm-content-box tm-margin-t-small">
                                <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #3</h4></a>
                                <p>Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                            </div>      
                        </div>
                        
                        
                    </aside>

                </div>
                
            </div>
        </section>

<?php get_footer(); ?>