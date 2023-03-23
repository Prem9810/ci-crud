
    <form action="" id="register">


        <section class="vh-100" style="background-color: #eee;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                        <form class="mx-1 mx-md-4">

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                <span id="error-username"></span>
                                                    <input type="text" name="username" id="username" class="form-control" value="<?php echo set_value('username') ?>"/>
                                                    <label class="form-label" for="Username">Your Name</label>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                <span id="error-email"></span>
                                                    <input type="email" name="email" id="email" class="form-control" />
                                                    <label class="form-label" for="email">Your Email</label>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                <span id="error-password"></span>
                                                    <input type="password" name="password" id="password" class="form-control" />
                                                    <label class="form-label" for="password">Password</label>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                <span id="error-confirm_password"></span>
                                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" />
                                                    <label class="form-label" for="confirm_password">Repeat your
                                                        password</label>
                                                </div>
                                            </div>
                                            <span id="error-agree"></span>
                                            <div class="form-check d-flex justify-content-center mb-5">
                                           
                                                <label class="form-check-label" for="form2Example3">                                               
                                                <input class="form-check-input me-2" name="agree" type="checkbox" value="1"
                                                    id="agree" />   I agree all statements in <a href="#!">Terms of service</a>
                                                </label>
                                            </div>

                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <button type="button" id="submit"
                                                    class="btn btn-primary btn-lg">Register</button>
                                            </div>

                                        </form>

                                    </div>
                                    <div
                                        class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                            class="img-fluid" alt="Sample image">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </form>


  
<script>
 var baseurl = '<?php echo base_url(); ?>';
    $('#submit').on('click', function () { 
       
        $.ajax({
            
            url: baseurl + 'user/register',
            data: new FormData(document.querySelector('#register')),
            dataType: 'json',
            processData: false,
            contentType: false,
            type: 'post',
            beforeSend(xhr) {


            },
            success: function (result) {
                
                if(result.error==1){
                   
                    if(result.error_message.username){
                      $('#error-username').html(result.error_message.username);
                    }else{
                        $('#error-username').html('');
                    }

                    if(result.error_message.email){
                      $('#error-email').html(result.error_message.email);
                    }else{
                        $('#error-email').html('');
                    }

                    if(result.error_message.password){
                      $('#error-password').html(result.error_message.password);
                    }else{
                        $('#error-password').html('');
                    }

                    if(result.error_message.confirm_password){
                      $('#error-confirm_password').html(result.error_message.confirm_password);
                    }else{
                        $('#error-confirm_password').html('');
                    }

                    if(result.error_message.agree){
                      $('#error-agree').html(result.error_message.agree);
                    }else{
                        $('#error-agree').html('');
                    }
                  
                   
                }else{
                    $('#error-username').html('');
                    $('#error-email').html('');
                    $('#error-password').html('');
                    $('#error-confirm_password').html('');
                    $('#error-agree').html('');
                }

              
             //   $('#success-message').html(result.message);

            }
        });
    });
</script>