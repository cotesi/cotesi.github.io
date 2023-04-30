<section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="events-slider-content">
                    <div class="swiper-wrapper">
                        <?php foreach($eventos as $key => $evento) : ?>
                            <?php if(isset($evento->current)) : ?>
                                <?php foreach ($evento->eventos as $subkey => $subevent) : ?>
                                    <div class="swiper-slide">
                                        <div class="inner">
                                            <div class="date">
                                                <figure>
                                                    <img src="public/images/icon-date.svg" alt="Image">
                                                </figure>
                                                <span><?= $date->format($evento->data) ?> - <?= $subevent->hora ?></span>
                                            </div>
                                            <!-- end date -->
                                            <h2><?= $subevent->titulo ?></h2>

                                            <?php if(!empty($subevent->links)): ?>
                                                <a href="<?= $subevent->links[0]->url ?>" target="_blank" class="slider-button">
                                                    <span class="circle" aria-hidden="true">
                                                        <span class="icon arrow"></span>
                                                    </span>
                                                    <span class="button-text">INSCREVA-SE</span>
                                                </a>
                                            <?php endif; ?>
                                            <div class="location">
                                                <div class="icon">
                                                    <img src="public/images/icon-location.svg" alt="Image">
                                                </div>
                                                <span>IFSP - VOTUPORANGA</span>
                                            </div>
                                            <!-- end location -->
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <!-- end swiper-wrapper -->
                </div>
                <!-- end events-slider-content -->
            </div>
            <!-- end col-6 -->
            <div class="col-lg-6">
                <div class="events-slider-images">
                    <div class="swiper-wrapper">
                        <?php foreach($eventos as $key => $evento) : ?>
                            <?php if(isset($evento->current)) : ?>
                                <?php foreach ($evento->eventos as $subkey => $subevent) : ?>
                                    <div class="swiper-slide">
                                        <div class="slide-image" data-background="public/images/slide-image01.jpg"></div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <!-- end swiper-wrapper -->
                    <div class="button-prev">
                        <span class="icon arrow"></span>
                    </div>
                    <div class="button-next">
                        <span class="icon arrow"></span>
                    </div>
                </div>
                <!-- end events-slider-content -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end slider -->