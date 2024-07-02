<link rel="stylesheet" href="<?php echo base_url('assets/css/carousel.css'); ?>">


<style>
    .carousel-img {
        width: 100%;
        padding-top: 56.25%; /* Aspect ratio 16:9 */
        overflow: hidden;
        position: relative;
        height: 600px;
    }

    .carousel-img img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .carousel-caption-opacity {
        background-color: rgba(0, 92, 171, 0.7);
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 20px;
    }

    .carousel-caption h5,
    .carousel-caption p {
        color: #ffffff; /* Color del texto */
    }


    @media (max-width: 768px) {
        .carousel-caption-opacity {
            position: static;
            width: auto;
            padding: 0;
            background-color: rgba(0, 92, 171, 0.7);
            text-align: center;
        }

        .carousel-caption h5,
        .carousel-caption p {
            color: #fff;
        }
    }
</style>




<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php foreach ($images as $index => $image): ?>
            <div class="carousel-item <?= ($index === 0) ? 'active' : ''; ?>">
                <div class="carousel-img" style="height: 700px">
                    <img src="<?= base_url('uploads/' . $image['filename']); ?>" class="d-block" alt="<?= $image['filename']; ?>">

                </div>
                <div class="carousel-caption carousel-caption-opacity d-none d-md-block">
                    <h2 class="text-light"><?= $image['titulo']; ?></h2>
                    <p><?= $image['resumen']; ?></p>
                    <!-- <a href="#" class="btn btn-primary">Botón de Enlace</a> -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
