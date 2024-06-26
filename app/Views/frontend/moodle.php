<?= $this->extend('frontend/template/main'); ?>

<?= $this->section('content'); ?>

<div class="mt-5">
    <img class="img-fluid" src="<?php echo base_url('assets/img/moodle/imagen2.png'); ?>" alt="">
</div>

<div class="card p-3 text-center floating-form-container">
    <img class="px-5 py-3" src="<?= base_url('assets/img/moodle/imagen3.png') ?>" alt="">
    <a style="width: 100%" href="https://campus-virtual.upn212teziutlan.edu.mx/login/index.php" class="btn btn-primary"
       target="_blank">Ingresar</a>
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
</div>


<div>
    <img class="img-fluid" src="<?php echo base_url('assets/img/moodle/imagen1.png') ?>" alt="">
    <div class="textoabajo">
        <h5>Atención a la Comunidad Universitaria</h5>

        <div class="row mt-5">
            <div class="col-md-6">
                <h6>
                    <a class="link-offset-2 text-white link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                       href="mailto:entornovirtualupn212@gmail.com?subject=Requiero ayuda en Plataforma Moodle"><span class="fas fa-envelope"></span> entornovirtualupn212@gmail.com</a>
                </h6>
            </div>
            <div class="col-md-6">
                <h6><span class="fas fa-calendar-day shadow-sm"></span> Lunes a viernes de 12:00 a 20:00 hrs.</h6>
            </div>
        </div>


    </div>
</div>





<?= $this->endSection() ?>
