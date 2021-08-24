<!DOCTYPE html>
<html dir="ltr">

<head>
    <!-- Custom CSS -->
    <!-- <link href="./assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="./assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="./assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" /> -->
    
    <?php include 'components/general/head.php'; ?>

</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- <?php 
        // ADD PRELOADER PHP
        include 'components/general/preloader.php'; 
    ?> -->
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(assets/images/gforce_emblem.png); background-size: contain; background-repeat: no-repeat;">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <h2 class="mt-3 text-center">Sign In</h2>
                        <p class="text-center">Enter your email address and password to access admin panel.</p>
                        
                        <form id="authForm">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="uname">Username</label>
                                        <input class="form-control" type="text"
                                            placeholder="enter your username" name="username" id="username">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">Password</label>
                                        <input class="form-control" type="password"
                                            placeholder="enter your password" name="password" id="password">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark" id="authBtn">Sign In</button>
                                </div>
                                <div class="col-lg-12 text-center" style="padding-top: .5rem;">
                                    <a href="./"><button type="button" class="btn btn-block btn-dark">Cancel</button></a>
                                </div>
                                <!-- <div class="col-lg-12 text-center mt-5">
                                    Don't have an account? <a href="#" class="text-danger">Sign Up</a>
                                </div> -->
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="./assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <!-- <script src="./assets/libs/popper.js/dist/umd/popper.min.js "></script> -->
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>

<script type="module">
        // IMPORTS
        import ApiCall from './dist/js/fetch.js';
        import Disable from './dist/js/disable.js';
        import Listener from './dist/js/listener.js';
        import Toast from './dist/js/toast.js';

        // CREATE CLASS INSTANCES
        const api = new ApiCall();
        const disabler = new Disable();
        const listener = new Listener();
        const notification = new Toast();

        const authBtn = document.getElementById('authBtn');
        listener.click(authBtn, authUser);
        
        async function authUser(e) {
            e.preventDefault();
            disabler.disableBtn(authBtn, 'Singing In...');

            const authForm = document.getElementById('authForm');
            const fields = document.forms['authForm'].getElementsByTagName('input');
            for (let index = 0; index < fields.length; index++) {
                const element = fields[index];
                element.classList.remove('is_valid');
            }

            var body = {};
            const formData = new FormData(authForm);
            formData.forEach((value, key) => body[key] = value);
            const response = await api.request('./login', 'POST', body);
            console.log(response)

            if(response.status == 'success') {
                window.location.replace("./classes");
            } else { 
                notification.error(response.message);

                if(response.fields.username) {
                    document.getElementById('username').classList.add('is_valid');
                }
                if(response.fields.password) {
                    document.getElementById('password').classList.add('is_valid');
                }

                disabler.enableBtn(authBtn, 'Sign In');
            }
        }

    </script>
</body>

</html>