
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Form Login</h1>
                                    </div>
                                    <?php echo $session->getFlashdata('pesan') ?>
                                    <form method="post" action="<?php echo base_url('auth/login') ?>"
                                    class="user">
                                    <label for="validationServerUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                        
                                        <input type="text" name="username" placeholder="enter username" class="form-control <?= $validation->hasError('username') ?'is-invalid':''; ?>" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                                        <?php if($validation): ?>
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            <?= $validation->getError('username') ?>
                                        </div>
                                        <?php endif; ?>
                                        </div>
                                        <label for="validationServerUsername" class="form-label mt-3">Password</label>
                                        <div class="input-group has-validation">
                                        
                                        <input type="password" name="password" placeholder="enter password" class="form-control <?= $validation->hasError('password') ?'is-invalid':''; ?>" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                                        <?php if($validation): ?>
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            <?= $validation->getError('password') ?>
                                        </div>
                                        <?php endif; ?>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary form-control mt-3">Login</button>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Belum Punya Akun? Daftar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


</html>