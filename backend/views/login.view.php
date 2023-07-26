<section>
    <div class="height-100-vh bg-primary-trans">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <img src="../assets/images/fitveggie.png" class="logo-auth">
                    <div class="login-div">
                       <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="login" id="needs-validation" novalidate>  
                            <?=$csrf->input('login-token');?>

                            <div class="form-group">
                                <label>UTILIZADOR</label>
                                <input class="form-control input-lg" placeholder="Utilizador" name="manager_email" type="text" required>
                                <div class="invalid-feedback">This field is required</div>
                            </div>
                            <div class="form-group">
                                <label>SENHA</label>
                                <input class="form-control input-lg" placeholder="Password" name="manager_password" type="password" required>
                                <div class="invalid-feedback">This field is required</div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label>DIGITE O CAPTCHA</label>
                                    <input type="text" class="form-control" placeholder="Digite Captcha" name="captcha" required>
                                    <div class="invalid-feedback">This field is required</div>
                                </div>
                                <div class="form-group col-6">
                                    <label>Captcha Code</label>
                                    <img src="../controller/captcha.php" style="width: 100%; border-radius: 4px; height: 38px;">
                                </div>
                            </div>

                            <button class="btn btn-primary mt-2" type="submit" style="width: 100%">Entrar</button>

                            <?php if( !empty($errors)): ?>

							<div class="alert alert-danger animated fadeIn alert-login" role="alert">
    
    						<?php echo $errors; ?>
    
							</div>
							
							<?php endif; ?>

                        </form>
                    </div>
                    <div class="copyright-text">
                    <span>Desenvolvido com carinho por Pedro Viegas</span><br>
                    <span>&copy; <?php echo date("Y"); ?> FitVeggie </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>