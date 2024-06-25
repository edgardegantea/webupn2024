<?= $this->extend('frontend/template/main'); ?>
<?= $this->section('content'); ?>

    <style>
        .imagen-recortada {
            width: 400px; /* Ancho del contenedor */
            height: 500px; /* Altura del contenedor */
            overflow: hidden;
        }

        .imagen-recortada img {
            width: auto;
            max-height: 100%;
            object-fit: contain;
        }
    </style>


    <div class="container">
        <br><br>


        <div class="mt-5 mb-4 rounded-0">
            <div class="container-fluid">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo base_url('assets/img/ofertaeducativa/03.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url('assets/img/ofertaeducativa/06.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url('assets/img/ofertaeducativa/08.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>


        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-light rounded-0">
                    <h2 class="">Licenciatura en <span
                                class="texto font-weight-bold">Administración Educativa</span></h2>
                    <p>El egresado de la Licenciatura en Administración Educativa podrá desarrollar actividades
                        profesionales en las distintas instituciones de educación básica, media superior y superior, así
                        como en dependencias y organizaciones del sector público y privado responsables de asesorar la
                        toma
                        de decisiones, evaluar políticas educativas y diseñar e instrumentar proyectos de intervención
                        en la
                        administración y gestión educativa.</p>

                    <a href="<?= base_url('oe_lae') ?>"
                       class="btn btn-primary shadow">Ver
                        más...</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 bg-body-tertiary border rounded-3">
                    <div class="image-container">
                        <img src="<?php echo base_url('assets/img/ofertaeducativa/03.jpg'); ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-light rounded-0">
                    <h2 class="">Licenciatura en <span
                                class="texto font-weight-bold">Intervención Educativa</span></h2>
                    <p>Aporta al estudiante diversos referentes y perspectivas teóricas metodológicas, para
                        el
                        análisis y reflexión de la interculturalidad con una actitud crítica, tiene la intención de
                        desarrollar en el estudiante, la capacidad de intervenir en diferentes campos educativos, a
                        través
                        de la generación de proyectos de animación e intervención, como respuesta al carácter plural de
                        la
                        sociedad actual, para favorecer el reconocimiento y aceptación de la diversidad y promover la
                        interacción y el intercambio cultural entre los individuos, grupos y comunidad que comparten un
                        mismo espacio pluricultural.</p>

                    <a href="<?= base_url('oe_lae') ?>"
                       class="btn btn-primary shadow">Ver
                        más...</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 bg-body-tertiary border rounded-0">
                    <div class="image-container">
                        <img src="<?php echo base_url('assets/img/ofertaeducativa/04.jpg'); ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>


        <hr class="featurette-divider">

        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-light rounded-0">
                    <h2>Licenciatura en <span
                                class="texto font-weight-bold">Pedagogía</span></h2>
                    <p>Formar profesionales capaces de analizar la problemática educativa y de intervenir
                        de
                        manera creativa en la resolución de la misma mediante el dominio de las políticas, la
                        organización y
                        los programas del sistema educativo mexicano, del conocimiento de las bases
                        teórico-metodológicas de
                        la pedagogía, de sus instrumentos y procedimientos técnicos.</p>


                    <a href="<?= base_url('oe_lp') ?>"
                       class="btn btn-primary shadow">Ver
                        más...</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 bg-body-tertiary border rounded-0">
                    <div class="image-container">
                        <img src="<?php echo base_url('assets/img/ofertaeducativa/08.jpg'); ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>


        <hr class="featurette-divider">

        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-light rounded-0">
                    <h2>Licenciatura en <span class="texto font-weight-bold">Psicología Educativa</span>
                    </h2>
                    <p>El egresado contará con los conocimientos generales acerca del desarrollo humano y los
                        procesos de aprendizaje para diseñar y llevar a cabo programas de intervención y apoyo
                        psicopedagógico que fortalezcan el desarrollo autónomo y capacidad de actuación de los educandos
                        y/o
                        comunidades de aprendizaje, en los ámbitos escolares y extraescolares; con especial atención a
                        la
                        diversidad social y comprendiendo los contextos socioculturales en que surgen las necesidades
                        educativas, de manera sistemática y efectiva.</p>


                    <a href="<?= base_url('oe_lpe') ?>"
                       class="btn btn-primary shadow">Ver
                        más...</a>

                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 bg-body-tertiary border rounded-0">
                    <div class="image-container">
                        <img src="<?php echo base_url('assets/img/ofertaeducativa/06.jpg'); ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>


        <hr class="featurette-divider">

        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-light rounded-0">
                    <h2>Licenciatura en <span
                                class="texto font-weight-bold">Pedagogía</span></h2>
                    <p>Formar profesionales capaces de analizar la problemática educativa y de intervenir de
                        manera creativa en la resolución de la misma mediante el dominio de las políticas, la
                        organización y
                        los programas del sistema educativo mexicano, del conocimiento de las bases
                        teórico-metodológicas de
                        la pedagogía, de sus instrumentos y procedimientos técnicos.</p>


                    <a href="<?= base_url('oe_lp') ?>"
                       class="btn btn-primary shadow">Ver
                        más...</a>

                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 bg-body-tertiary border rounded-0">
                    <div class="image-container">
                        <img src="<?php echo base_url('assets/img/ofertaeducativa/02.jpg'); ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>


        <hr class="featurette-divider">


        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-light rounded-0">
                    <h2>Maestría en <span class="texto font-weight-bold">Educación Media Superior</span>
                    </h2>
                    <p>Formar y profesionalizar docentes y directivos altamente capacitados en características,
                        cualidades y aptitudes para enfrentar los retos que hoy plantea la Educación Media Superior en
                        todos
                        sus subsistemas, dando así respuesta favorable a lo que plantea el Modelo Educativo Vigente.</p>


                    <a href="<?= base_url('oe_mems') ?>"
                       class="btn btn-primary shadow">Ver
                        más...</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 bg-body-tertiary border rounded-0">
                    <div class="image-container">
                        <img src="<?php echo base_url('assets/img/ofertaeducativa/01.jpg'); ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>


        <hr class="featurette-divider">

    </div>

    <div class="mb-5"></div>

    <!-- /END THE FEATURETTES -->

<?= $this->endSection(); ?>