  <div class="smooth-scroll">
      <aside class="mobile-menu">
          <svg viewBox="0 0 600 1080" preserveAspectRatio="none" version="1.1">
              <path d="M540,1080H0V0h540c0,179.85,0,359.7,0,539.54C540,719.7,540,899.85,540,1080z"></path>
          </svg>
          <div class="inner">
              <div class="site-menu">
                  <ul>
                      <li>
                          <a href="#eventos" data-scroll-to>Eventos</a>
                      </li>
                  </ul>
              </div>
              <!-- end site-menu -->
          </div>
          <!-- end inner -->
      </aside>
      <!-- end mobile-menu -->
      <nav class="navbar" id="navbar">
          <div class="container">
              <div class="logo">
                  <a href="#">
                      <img src="public/images/logo-bsi.png" alt="Image">
                      <img src="public/images/logo.png" alt="Image">
                  </a>
              </div>
              <!-- end logo -->
              <div class="site-menu"></div>
              <!-- end site-menu -->

              <div class="navbar-button">
                  <a href="#eventos" data-scroll-to>
                      <figure>
                          <img src="public/images/icon-navbar-button.png" alt="Image">
                      </figure> Eventos
                  </a>
              </div>
              <!-- end navbar-button -->
          </div>
          <!-- end container -->
      </nav>
      <!-- end navbar -->
      <div class="section-wrapper" data-scroll-section>

          <!-- INICIO DOS SLIDES -->
          <?php $slides->render() ?>
          <!-- FIM DOS SLIDES -->

          <section class="content-section">
              <!-- end section-bg -->
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-lg-8">
                          <div data-scroll data-scroll-speed="-0.5">
                              <div class="side-content left">
                                  <h6>VENHA CONHECER</h6>
                                  <h2>COTESI</h2>
                                  <p>
                                    O IX Congresso de Tecnologia e Sistemas de Informação (COTESI) é um evento concebido pelo corpo 
                                    docente da área de informática do Câmpus Votuporanga. O COTESI é constituído por palestras e
                                    minicursos. Atualmente a Comissão Organizadora é composta por representantes do corpo docente e 
                                    discente dos cursos de graduação de Sistemas de Informação instituída pela portaria 
                                    nº. VTP.15/2024, de 21 de fevereiro de 2024. Este evento tem como intuito complementar a formação 
                                    acadêmica dos alunos e discutir temas atuais da área da Tecnologia da Informação relacionados com o 
                                    Ensino, Pesquisa e Extensão, além de fatos e episódios recentes relacionados a aspectos 
                                    transversais, como Meio Ambiente & Sustentabilidade e Responsabilidade Social. O evento é gratuito e 
                                    aberto à comunidade.
                                  </p>
                                  <a href="#eventos" data-scroll-to class="custom-button">
                                      <span class="circle" aria-hidden="true">
                                          <span class="icon arrow"></span>
                                      </span>
                                      <span class="button-text">AGENDA</span>
                                  </a>
                              </div>
                              <!-- end side-content -->
                          </div>
                          <!-- end data-scroll -->
                      </div>
                      <!-- end col-6 -->
                      <div class="col-lg-4">
                          <div data-scroll data-scroll-speed="0.5">
                              <figure class="side-image">
                                  <img src="public/images/side-image01.png" alt="Image">
                              </figure>
                              <!-- end side-image -->
                          </div>
                          <!-- end data-scroll -->
                      </div>
                      <!-- end col-6 -->
                  </div>
                  <!-- end row -->
              </div>
              <!-- end container -->
          </section>
          <!-- end content-section -->

          <section class="content-section" data-background="#F6FAFB" id="eventos">
              <span class="section-bg" data-background="public/images/section-bg02.png" data-scroll data-scroll-speed="2"></span>
              <!-- end section-bg -->
              <div class="container">
                  <div class="row">
                      <div class="col-12">
                          <div data-scroll data-scroll-speed="-0.5">
                              <div class="section-title">
                                  <h6>AGENDA DE EVENTOS</h6>
                                  <h2>Fique por dentro de <br> nossa agenda </h2>
                              </div>
                              <!-- end section-title -->
                          </div>
                          <!-- end data-scroll -->
                      </div>
                      <!-- end col-12 -->
                      <div class="col-12">
                          <div data-scroll data-scroll-speed="0.5">
                              <div class="schedule-box">
                                  <div class="nav">
                                      <?php foreach ($eventos as $key => $evento) { ?>
                                          <div <?= (!empty($evento->current) ? 'class="active"' : '') ?> data-bs-toggle="tab" data-bs-target="#tab-content-<?= $slugify->slugify($evento->titulo) ?>">
                                              <span class="day"><?= $evento->titulo ?></span>
                                              <small class="date"><?= $date->format($evento->data);  ?></small>
                                          </div>
                                          <!-- tab-nav -->
                                      <?php } ?>

                                  </div>
                                  <!-- end nav -->
                                  <div class="tab-content">

                                      <?php foreach ($eventos as $key => $evento) { ?>
                                          <div <?= ( !empty($evento->current ) ? 'class="tab-pane active"' : 'class="tab-pane"') ?> id="tab-content-<?= $slugify->slugify($evento->titulo) ?>">
                                              <?php foreach ($evento->eventos as $subkey => $subevent) { ?>
                                                  <div class="timeline">
                                                      <div class="event-time">
                                                          <img src="public/images/icon-time.svg" alt="Image"><?= $subevent->hora ?> (<?= $subevent->tipo ?>)
                                                      </div>
                                                      <!-- end event-time -->
                                                      <div class="event-description">
                                                          <h5><?= $subevent->titulo ?></h5>
                                                          <p><?= $subevent->autor ?></p>
                                                          <?php if (!empty($subevent->descricao)) : ?>
                                                            <p><?= $subevent->descricao ?></p>
                                                          <?php endif; ?>

                                                          <?php if (!empty($subevent->links)) : ?>
                                                              <?php foreach ($subevent->links as $link) : ?>
                                                                  <!-- INICIO DO BOTÃO COM EFEITO -->
                                                                  <div class="d-block w-100 mb-3">
                                                                      <a href="<?= $link->url ?>" target="_blank" class="custom-button small">
                                                                          <span class="circle" aria-hidden="true">
                                                                              <span class="icon arrow"></span>
                                                                          </span>
                                                                          <span class="button-text"><?= $link->pagina ?></span>
                                                                      </a>
                                                                  </div>
                                                                  <!-- FIM DO BOTÃO COM EFEITO -->
                                                              <?php endforeach; ?>
                                                          <?php endif; ?>

                                                          <?php if (!empty($subevent->oficina)) : ?>
                                                              <?php foreach ($subevent->oficina as $oficina) : ?>
                                                                  <!-- INICIO DO BOTÃO COM EFEITO -->
                                                                  <div class="d-block w-100 mb-3">
                                                                      <h5><?= $oficina->titulo ?></h5>
                                                                      <p><?= $oficina->ministrante ?></p>                                                
                                                                  </div>
                                                                  <!-- FIM DO BOTÃO COM EFEITO -->
                                                              <?php endforeach; ?>
                                                          <?php endif; ?>
                                                      </div>
                                                      <!-- end event-description -->
                                                  </div>
                                                  <!-- end timeline -->
                                              <?php } ?>
                                          </div>
                                      <?php } ?>
                                      <!-- end event-description -->
                                  </div>
                                  <!-- end tab-content -->
                              </div>
                              <!-- end schedule-box -->
                          </div>
                          <!-- end data-scroll -->
                      </div>
                      <!-- end col-12 -->
                  </div>
                  <!-- end row -->
              </div>
              <!-- end container -->
          </section>
          <!-- end content-section -->
          <section class="content-section">
              <div class="section-bg" data-background="public/images/section-bg02.png" data-scroll data-scroll-speed="1"></div>
              <!-- end section-bg -->
              <div class="container">
                  <div class="row justify-content-center text-center">
                      <div class="col-12">
                          <div data-scroll data-scroll-speed="0.5">
                              <div id="apoiadores" class="section-title text-center">
                                  <figure>
                                      <img src="public/images/title-shape.png" alt="Image">
                                  </figure>
                                  <h6>ACREDITAM NA EDUCAÇÃO</h6>
                                  <h2>APOIADORES</h2>
                              </div>
                              <!-- end section-title -->
                          </div>
                          <!-- end data-scroll -->
                      </div>
                      <!-- end col-12 -->

                      <!-- PATROCINADORES -->
                      <?php $emps->render() ?>
                      <!-- FIM PATROCINADORES -->


                      <div class="py-4"></div>

                  </div>
                  <!-- end row -->
              </div>
              <!-- end container -->
          </section>
          <!-- end content-section -->
