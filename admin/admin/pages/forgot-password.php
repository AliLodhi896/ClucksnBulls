<!doctype html>
<html lang="en" dir="ltr">

    <head>
        
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

        <!-- TITLE -->
        <title>Sash – PHP Bootstrap 5 Admin & Dashboard Template</title>

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="../assets/css/style.css" rel="stylesheet" />
        <link href="../assets/css/dark-style.css" rel="stylesheet" />
        <link href="../assets/css/transparent-style.css" rel="stylesheet">
        <link href="../assets/css/skin-modes.css" rel="stylesheet" />

        <!--- FONT-ICONS CSS -->
        <link href="../assets/css/icons.css" rel="stylesheet" />

        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

        <!-- INTERNAL SWITCHER CSS -->
        <link href="../assets/switcher/css/switcher.css" rel="stylesheet" />
        <link href="../assets/switcher/demo.css" rel="stylesheet" />
        
    </head>

    <body class="app sidebar-mini login-img ltr">

         <!-- SWITCHER -->
        
		<div class="switcher-wrapper">
			<div class="demo_changer">
				<div class="form_holder sidebar-right1">
					<div class="row">
						<div class="predefined_styles">
							<div class="swichermainleft text-center">
								<div class="p-3 d-grid gap-2">
									<a href="https://php.spruko.com/sash/" class="btn ripple btn-primary mt-0">View Demo</a>
									<a href="https://themeforest.net/item/sash-php-admin-dashboard-template/38192327" class="btn ripple btn-secondary">Buy Now</a>
									<a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink">Our Portfolio</a>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>LTR and RTL VERSIONS</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">LTR Version</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch23" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">RTL Version</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch24" class="onoffswitch2-checkbox">
												<label for="myonoffswitch24" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Light Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Theme</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch1" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Primary</span>
											<div class="">
												<input class="w-30p h-30 input-color-picker color-primary-light" value="#6c5ffc" id="colorID" oninput="changePrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor" name="lightPrimary">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Dark Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Theme</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
												<label for="myonoffswitch2" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Primary</span>
											<div class="">
												<input class="w-30p h-30 input-dark-color-picker color-primary-dark" value="#6c5ffc" id="darkPrimaryColorID" oninput="darkPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id8="transparentcolor"
													name="darkPrimary">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Transparent Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Transparent Theme</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox">
												<label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Transparent Primary</span>
											<div class="">
												<input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#6c5ffc" id="transparentPrimaryColorID" oninput="transparentPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary"
													data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
											</div>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Transparent Background</span>
											<div class="">
												<input class="w-30p h-30 input-transparent-color-picker color-bg-transparent" value="#362bb1" id="transparentBgColorID" oninput="transparentBgColor()" type="color" data-id5="body" data-id6="theme" data-id9="transparentcolor" name="transparentBackground">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Transparent Bg-Image Style</h4>
								<div class="skin-body switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Bg-Image Primary</span>
										<div class="">
											<input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#6c5ffc" id="transparentBgImgPrimaryColorID" oninput="transparentBgImgPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
										</div>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<a class="bg-img1" href="javascript:void(0);" onclick="bgImage(this)"><img src="../assets/images/media/bg-img1.jpg"  alt="Bg-Image" id="bgimage1"></a>
										<a class="bg-img2" href="javascript:void(0);" onclick="bgImage(this)"><img src="../assets/images/media/bg-img2.jpg"  alt="Bg-Image"  id="bgimage2"></a>
										<a class="bg-img3" href="javascript:void(0);" onclick="bgImage(this)"><img src="../assets/images/media/bg-img3.jpg"  alt="Bg-Image" id="bgimage3"></a>
										<a class="bg-img4" href="javascript:void(0);" onclick="bgImage(this)"><img src="../assets/images/media/bg-img4.jpg"  alt="Bg-Image" id="bgimage4"></a>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Reset All Styles</h4>
								<div class="skin-body">
									<div class="switch_section my-4">
										<button class="btn btn-danger btn-block" onclick="localStorage.clear();
											document.querySelector('html').style = '';
											names() ;
											resetData() ;" type="button">Reset All
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>        <!-- END SWITCHER -->

        <!-- BACKGROUND-IMAGE -->
        <div class="">

            <!-- GLOABAL LOADER -->
            <div id="global-loader">
                <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
            </div>
            <!-- End GLOABAL LOADER -->

            <!-- PAGE -->
            <div class="page">
                <div class="">
                    <div class="dropdown float-end custom-layout">
                        <div class="demo-icon nav-link icon mt-4">
                            <i class="fe fe-settings fa-spin text_primary"></i>
                        </div>
                    </div>
                    <!-- Theme-Layout -->

                    <!-- CONTAINER OPEN -->
                    <div class="col col-login mx-auto">
                        <div class="text-center">
                            <a href="index.php"><img src="../assets/images/brand/logo-white.png" class="header-brand-img m-0" alt=""></a>
                        </div>
                    </div>

                    <!-- CONTAINER OPEN -->
                    <div class="container-login100">
                        <div class="wrap-login100 p-6">
                            <form class="login100-form validate-form">
                                <span class="login100-form-title pb-5">
                                    Forgot Password
                                </span>
                                <p class="text-muted">Enter the email address registered on your account</p>
                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 ms-0 form-control" type="email" placeholder="Email">
                                </div>
                                <div class="submit">
                                    <a class="btn btn-primary d-grid" href="index.php">Submit</a>
                                </div>
                                <div class="text-center mt-4">
                                    <p class="text-dark mb-0">Forgot It?<a class="text-primary ms-1" href="login.php">Send me Back</a></p>
                                </div>
                                <label class="login-social-icon"><span>OR</span></label>
                                <div class="d-flex justify-content-center">
                                    <a href="javascript:void(0)">
                                        <div class="social-login me-4 text-center">
                                            <i class="fa fa-google"></i>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <div class="social-login me-4 text-center">
                                            <i class="fa fa-facebook"></i>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <div class="social-login text-center">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--END PAGE -->

        </div>
        <!-- BACKGROUND-IMAGE CLOSED -->

        
        <!-- JQUERY JS -->
        <script src="../assets/js/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- PERFECT SCROLLBAR JS-->
        <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>

        <!-- THEME COLORS JS  -->
        <script src="../assets/js/themeColors.js"></script>

        <!-- CUSTOM JS -->
        <script src="../assets/js/custom.js"></script>

        <!-- SWITCHER JS -->
        <script src="../assets/switcher/js/switcher.js"></script>
        

        <!-- SHOW PASSWORD JS -->
        <script src="../assets/js/show-password.min.js"></script>

    </body>

</html>