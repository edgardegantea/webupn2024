
<?php
/*$pageId = '100064162057334'; // ID de la página de Facebook (UPN 212 Teziutlán)
$numPosts = 10; // Número de publicaciones a mostrar

$url = "https://graph.facebook.com/v17.0/$pageId?fields=name,category";
$response = file_get_contents($url);
$newsData = json_decode($response, true);
*/?>

<div id="mainCarousel" class="carousel slide" data-ride="carousel">
</div>

<!--<div class="container mt-5">
    <h2>Noticias de Facebook</h2>
    <div id="newsCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

           <?php /*foreach ($newsData as $key => $news): */?>
                <div class="carousel-item <?php /*($key == 0) ? 'active' : '' */?>">
                    <div class="card">
                        <?php /*if (isset($news['full_picture'])): */?>
                            <img src="<?php /*$news['full_picture'] */?>" class="card-img-top">
                        <?php /*endif; */?>
                        <div class="card-body">
                            <p class="card-text"><?php /*$news['message'] */?></p>
                        </div>
                    </div>
                </div>
            <?php /*endforeach; */?>
        </div>
        <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
</div>-->



<div class="container marketing">
    <div class="row mb-5 text-center">
        <div class="col-lg-3">
            <img src="<?php echo base_url('assets/img/logos/moodle-icon-2.png') ?>" width="140" height="140">
            <h5 class="mt-3">Plataforma Educativa</h5>
        </div>
        <div class="col-lg-3">
            <img src="<?php echo base_url('assets/img/logos/convocatoria.png') ?>"
                 class="rounded-circle border border-primary"
                 width="140" height="140">
            <h5 class="mt-3">Convocatorías</h5>
        </div>
        <div class="col-lg-3">
            <img src="<?php echo base_url('assets/img/logos/oferta.png') ?>"
                 class="rounded-circle border border-primary"
                 width="140" height="140">
            <h5 class="mt-3">Oferta Educativa</h5>
        </div>

        <div class="col-lg-3">
            <img src="<?php echo base_url('assets/img/logos/oferta.png') ?>"
                 class="rounded-circle border border-primary"
                 width="140" height="140">
            <h5 class="mt-3">Comunidad</h5>
        </div>
    </div>




    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="divoferta h-100 p-5 text-bg-light rounded-0">
                <h2 class="featurette-heading fw-normal lh-1">Universidad Pedagógica Nacional, <span
                            class="text-body-secondary">Unidad Teziutlán.</span></h2>
                <p class="lead text-justify">Es una Institución Pública de Educación Superior que dirige sus
                    funciones a la Formación, Actualización y Superación de Profesionales de la Educación, generando
                    sinergia, para intervenir, bajo un enfoque humanista, incluyente y sustentable en los procesos
                    educativos, dando respuesta a las necesidades sociales.</p>

                <p class="lead">
                    Los que integramos la UPN, Unidad Teziutlán, nos comprometemos a ofrecer servicios de calidad en
                    la formación, capacitación y profesionalización integral de los usuarios a través de la mejora
                    continua de sus funciones de docencia, investigación, difusión y extensión universitaria.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 bg-body-tertiary border rounded-3">
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
            <div class="divoferta h-100 p-5 text-bg-light rounded-0">
                <h2 class="featurette-heading fw-normal lh-1">Nuestra <span class="text-body-secondary">Misión.</span>
                </h2>
                <p class="lead">Es una institución pública de educación superior con vocación nacional y plena
                    autonomía académica; se orienta a la formación y desarrollo de profesionales de la educación y a
                    la generación de conocimiento de acuerdo con las necesidades del país considerando la diversidad
                    sociocultural. A partir de sus funciones sustantivas se vincula con el sector educativo, con
                    organizaciones sociales e instituciones nacionales e internacionales, con el fin de atender la
                    problemática educativa y el fomento a la cultura.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 bg-body-tertiary border rounded-0">
                <div class="image-container">
                    <img src="<?php echo base_url('assets/img/fotos/imagen13.jpg') ?>" alt=""
                         class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <hr class="featurette-divider">

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="divoferta h-100 p-5 text-bg-light rounded-0">
                <h2 class="featurette-heading fw-normal lh-1">Nuestra <span class="text-body-secondary">Visión.</span>
                </h2>
                <p class="lead">Es una institución pública de educación superior, autónoma y líder en el ámbito
                    educativo, que ha ganado prestigio nacional y reconocimiento internacional debido a la calidad y
                    pertinencia de su oferta educativa, la relevancia de su producción científica y su capacidad de
                    intervención en esta área. Tiene un lugar estratégico en la discusión e instrumentación crítica
                    de las políticas públicas educativas, y la atención a temas y problemas emergentes. Se distingue
                    por su vocación social y su compromiso ético con la justicia, la equidad y su especial
                    consideración a los grupos en situación de discriminación o exclusión social.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 bg-body-tertiary border rounded-0">
                <div class="image-container">
                    <img src="<?php echo base_url('assets/img/fotos/imagen10.jpg') ?>" alt=""
                         class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->
