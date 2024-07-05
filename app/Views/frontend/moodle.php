<?= $this->extend('frontend/template/main'); ?>

<?= $this->section('content'); ?>


<style>
    .fondo {
        background-image: url(<?php echo base_url('assets/img/moodle/imagen2.png'); ?>);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .tarjeta {
        width: 80%;
    }
</style>


<!--
<div class="mt-5">
    <img class="img-fluid" src="<?php echo base_url('assets/img/moodle/imagen2.png'); ?>" alt="">
</div>
-->

<div class="fondo">

    <div class="row tarjeta d-flex align-items-center text-center">
        <div class="col-md-6">

        </div>

        <div class="col-md-6 bg-dark p-2 text-white" style="--bs-bg-opacity: .7;">
        <h1>¡Bienvenidos al campus virtual!</h1>
        </div>
    </div>

<!--
    <div class="row tarjeta d-flex align-items-center text-center">
        <div class="col-md-6">

        </div>

        <div class="col-md-6 bg-dark p-2" style="--bs-bg-opacity: .7;">
            <div class="row">
                <h1 class="text-white">Plataforma educativa</h1>
                <div class="col-md-6">
                    <div class="">
                        <a href="https://campus-virtual.upn212teziutlan.edu.mx/login/index.php" class="btn btn-primary mb-2"
                           target="_blank">Licenciatura</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="">
                        <a href="#" class="btn btn-primary mb-2"
                           target="_blank">Maestría</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    -->
</div>


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-3 p-5">
        <div class="card">
            <a href="https://campus-virtual.upn212teziutlan.edu.mx/login/index.php" class="btn btn-primary mb-2"
               target="_blank">Licenciatura</a>
        </div>
    </div>

    <div class="col-md-3 p-5">
        <div class="card">
            <a href="https://campus-virtual.upn212teziutlan.edu.mx" class="btn btn-primary mb-2"
               target="_blank">Maestría</a>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>


<!--<form class="mt-3" action="https://campus-virtual.upn212teziutlan.edu.mx/login/index.php" method="post" id="login">
    <input id="anchor" type="hidden" name="anchor" value="">
    <script>document.getElementById('anchor').value = location.hash;</script>
    <input type="hidden" name="logintoken" value="1f56ZBlmNCs13cJILSjyctKhOjQZdjcm">
    <div class="form-group mb-1">
        <label for="username" class="sr-only">
            Username
        </label>
        <input type="text" name="username" id="username"
               class="form-control"
               value=""
               placeholder="Username"
               autocomplete="username">
    </div>
    <div class="form-group mb-1">
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" value=""
               class="form-control"
               placeholder="Password"
               autocomplete="current-password">
    </div>
    <div class="rememberpass mt-3">
        <input type="checkbox" name="rememberusername" id="rememberusername" value="1"/>
        <label for="rememberusername">Remember username</label>
    </div>

    <button type="submit" class="btn btn-primary btn-block mt-3" id="loginbtn">Ingresar</button>


</form>-->


<div>
    <img class="img-fluid" src="<?php echo base_url('assets/img/moodle/imagen1.png') ?>" alt="">
    <div class="textoabajo">
        <h5>Atención a la Comunidad Universitaria</h5>

        <div class="row mt-5">
            <div class="col-md-6">
                <h6>
                    <a class="link-offset-2 text-white link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                       href="mailto:entornovirtualupn212@gmail.com?subject=Requiero ayuda en Plataforma Moodle"><span
                                class="fas fa-envelope"></span> entornovirtualupn212@gmail.com</a>
                </h6>
            </div>
            <div class="col-md-6">
                <h6><span class="fas fa-calendar-day shadow-sm"></span> Lunes a viernes de 12:00 a 20:00 hrs.</h6>
            </div>
        </div>


    </div>
</div>


<?= $this->endSection() ?>
