<div class="login-page">
    <div class="login-box">
        <div class="card card-outline card-info">
            <div class="login-logo">
                <img src="public/views/resources/img/techsupp-logo.png" class="img-responsive" style="padding:15px 50px 0px 50px">
            </div>
            <div class="card-body">
                <p class="login-box-msg font-weight-bold h5 text-secondary">Sistema de Soporte Técnico Informático - HNSEB <br><span class="font-italic h6">v.2022.01.05</span></p>
                <form action="" method="post" id="frmLoginQS">
                    <div id="mensajeLogSTW" class="d-none">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-ban"></i> ¡ATENCIÓN!</h5>
                            El usuario ingresado no existe.
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fas fa-user-lock"></span>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Ingrese usuario" id="usuarioLogSTW" name="usuarioLogSTW" autocomplete="off" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fas fa-key"></span>
                            </div>
                        </div>
                        <input type="password" class="form-control" placeholder="Ingrese contraseña" id="usuarioPassSTW" name="usuarioPassSTW" autocomplete="off" required>
                    </div>
                    <div class="row">
                        <div class="col-8 ml-5">
                            <button type="submit" class="btn btn-info btn-block btn-flat rounded" id="btnLoginSTW"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</button>
                        </div>
                    </div>
                    <?php
                    $login = new UsuariosControlador();
                    $login->ctrLoginUsuario();
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>