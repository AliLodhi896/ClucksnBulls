<?php

session_start();

if (!isset($_SESSION["role"]) && $_SESSION["role"] != 'Admin') {
  header('location:login.php');
} elseif (!isset($_SESSION["role"]) && $_SESSION["role"] != 'Staff') {
  header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- META DATA -->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Sash – Bootstrap 5  Admin & Dashboard Template"
    />
    <meta name="author" content="Spruko Technologies Private Limited" />
    <meta
      name="keywords"
      content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit."
    />

    <!-- FAVICON -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/images/brand/favicon.ico"
    />

    <!-- TITLE -->
    <title>Dashboard</title>

    <!-- BOOTSTRAP CSS -->
    <link
      id="style"
      href="assets/plugins/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/dark-style.css" rel="stylesheet" />
    <link href="assets/css/transparent-style.css" rel="stylesheet" />
    <link href="assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link
      id="theme"
      rel="stylesheet"
      type="text/css"
      media="all"
      href="assets/colors/color1.css"
    />

    <!-- INTERNAL SWITCHER CSS -->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="assets/switcher/demo.css" rel="stylesheet" />

    <link
      rel="stylesheet"
      href="assets/fontawesome-free-6.2.0-web/css/all.css"
    />

    <link
      rel="stylesheet"
      href="assets/DataTable/DataTables-1.12.1/css/jquery.dataTables.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/DataTable/DataTables-1.12.1/css/dataTables.bootstrap5.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"
    />

    <style>
      #bEdit {
        background: #6c5ffc !important;
        color: #fff !important;
        border-color: #6c5ffc !important;
      }
      #bDelete {
        background: #e82646 !important;
        color: #fff !important;
        border-color: #e82646 !important;
      }

      @media screen and (max-width: 577px) {
        .mybox {
          height: 70px;
          /*margin-left:480px !important*/
        }
      }

      @media screen and (max-width: 991px) {
        .mylogo {
          position: relative;
          left: 295px;
        }
      }
      @media screen and (max-width: 830px) {
        .mylogo {
          position: relative;
          left: 225px;
          font-size: 28px;
        }
      }
      @media screen and (max-width: 720px) {
        .mylogo {
          position: relative;
          left: 170px;
        }
      }
      @media screen and (max-width: 620px) {
        .mylogo {
          position: relative;
          left: 130px;
        }
      }
      @media screen and (max-width: 540px) {
        .mylogo {
          position: relative;
          left: 80px;
        }
      }
      @media screen and (max-width: 480px) {
        .mylogo {
          position: relative;
          left: 30px;
        }
      }
      @media screen and (max-width: 420px) {
        .mylogo {
          position: relative;
          left: 25px;
          font-size: 26px;
        }
      }
      @media screen and (max-width: 370px) {
        .mylogo {
          position: relative;
          left: -5px;
          font-size: 24px;
        }
      }
      @media screen and (max-width: 330px) {
        .mylogo {
          position: relative;
          left: -20px;
        }
      }
      @media screen and (max-width: 280px) {
        .mylogo {
          position: relative;
          left: -35px;
          font-size: 22px;
        }
      }
      @media screen and (max-width: 255px) {
        .mylogo {
          position: relative;
          left: -40px;
          font-size: 20px;
        }
      }
      @media screen and (max-width: 240px) {
        .mylogo {
          position: relative;
          left: -45px;
          font-size: 18px;
        }
      }

      .crosscontainer {
        display: inline-block;
        cursor: pointer;
      }

      .bar1,
      .bar2,
      .bar3 {
        width: 20px;
        height: 1.8px;
        background-color: #6c5ffc;
        margin: 6px 0;
        transition: 0.4s;
      }

      .change .bar1 {
        transform: translate(0, 9px) rotate(-45deg);
      }

      .change .bar2 {
        opacity: 0;
      }

      .change .bar3 {
        transform: translate(0, -7px) rotate(45deg);
      }
    </style>
  </head>

  <body class="app sidebar-mini ltr light-mode">
    <!-- SWITCHER -->

    <div class="switcher-wrapper">
      <div class="demo_changer">
        <div class="form_holder sidebar-right1">
          <div class="row">
            <div class="predefined_styles">
              <div class="swichermainleft">
                <h4>Navigation Style</h4>
                <div class="skin-body">
                  <div class="switch_section">
                    <div class="switch-toggle d-flex">
                      <span class="me-auto">Vertical Menu</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch15"
                          id="myonoffswitch34"
                          class="onoffswitch2-checkbox"
                          checked
                        />
                        <label
                          for="myonoffswitch34"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle d-flex mt-2">
                      <span class="me-auto">Horizontal Click Menu</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch15"
                          id="myonoffswitch35"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch35"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle d-flex mt-2">
                      <span class="me-auto">Horizontal Hover Menu</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch15"
                          id="myonoffswitch111"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch111"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swichermainleft">
                <h4>LTR and RTL VERSIONS</h4>
                <div class="skin-body">
                  <div class="switch_section">
                    <div class="switch-toggle d-flex">
                      <span class="me-auto">LTR Version</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch7"
                          id="myonoffswitch23"
                          class="onoffswitch2-checkbox"
                          checked
                        />
                        <label
                          for="myonoffswitch23"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle d-flex mt-2">
                      <span class="me-auto">RTL Version</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch7"
                          id="myonoffswitch24"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch24"
                          class="onoffswitch2-label"
                        ></label>
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
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch1"
                          id="myonoffswitch1"
                          class="onoffswitch2-checkbox"
                          checked
                        />
                        <label
                          for="myonoffswitch1"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle d-flex">
                      <span class="me-auto">Light Primary</span>
                      <div class="">
                        <input
                          class="w-30p h-30 input-color-picker color-primary-light"
                          value="#6c5ffc"
                          id="colorID"
                          oninput="changePrimaryColor()"
                          type="color"
                          data-id="bg-color"
                          data-id1="bg-hover"
                          data-id2="bg-border"
                          data-id7="transparentcolor"
                          name="lightPrimary"
                        />
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
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch1"
                          id="myonoffswitch2"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch2"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle d-flex mt-2">
                      <span class="me-auto">Dark Primary</span>
                      <div class="">
                        <input
                          class="w-30p h-30 input-dark-color-picker color-primary-dark"
                          value="#6c5ffc"
                          id="darkPrimaryColorID"
                          oninput="darkPrimaryColor()"
                          type="color"
                          data-id="bg-color"
                          data-id1="bg-hover"
                          data-id2="bg-border"
                          data-id3="primary"
                          data-id8="transparentcolor"
                          name="darkPrimary"
                        />
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
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch1"
                          id="myonoffswitchTransparent"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitchTransparent"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle d-flex mt-2">
                      <span class="me-auto">Transparent Primary</span>
                      <div class="">
                        <input
                          class="w-30p h-30 input-transparent-color-picker color-primary-transparent"
                          value="#6c5ffc"
                          id="transparentPrimaryColorID"
                          oninput="transparentPrimaryColor()"
                          type="color"
                          data-id="bg-color"
                          data-id1="bg-hover"
                          data-id2="bg-border"
                          data-id3="primary"
                          data-id4="primary"
                          data-id9="transparentcolor"
                          name="tranparentPrimary"
                        />
                      </div>
                    </div>
                    <div class="switch-toggle d-flex mt-2">
                      <span class="me-auto">Transparent Background</span>
                      <div class="">
                        <input
                          class="w-30p h-30 input-transparent-color-picker color-bg-transparent"
                          value="#362bb1"
                          id="transparentBgColorID"
                          oninput="transparentBgColor()"
                          type="color"
                          data-id5="body"
                          data-id6="theme"
                          data-id9="transparentcolor"
                          name="transparentBackground"
                        />
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
                      <input
                        class="w-30p h-30 input-transparent-color-picker color-primary-transparent"
                        value="#6c5ffc"
                        id="transparentBgImgPrimaryColorID"
                        oninput="transparentBgImgPrimaryColor()"
                        type="color"
                        data-id="bg-color"
                        data-id1="bg-hover"
                        data-id2="bg-border"
                        data-id3="primary"
                        data-id4="primary"
                        data-id9="transparentcolor"
                        name="tranparentPrimary"
                      />
                    </div>
                  </div>
                  <div class="switch-toggle d-flex mt-2">
                    <a
                      class="bg-img1"
                      href="javascript:void(0);"
                      onclick="bgImage(this)"
                      ><img
                        src="assets/images/media/bg-img1.jpg"
                        alt="Bg-Image"
                        id="bgimage1"
                    /></a>
                    <a
                      class="bg-img2"
                      href="javascript:void(0);"
                      onclick="bgImage(this)"
                      ><img
                        src="assets/images/media/bg-img2.jpg"
                        alt="Bg-Image"
                        id="bgimage2"
                    /></a>
                    <a
                      class="bg-img3"
                      href="javascript:void(0);"
                      onclick="bgImage(this)"
                      ><img
                        src="assets/images/media/bg-img3.jpg"
                        alt="Bg-Image"
                        id="bgimage3"
                    /></a>
                    <a
                      class="bg-img4"
                      href="javascript:void(0);"
                      onclick="bgImage(this)"
                      ><img
                        src="assets/images/media/bg-img4.jpg"
                        alt="Bg-Image"
                        id="bgimage4"
                    /></a>
                  </div>
                </div>
              </div>
              <div class="swichermainleft">
                <h4>Menu Styles</h4>
                <div class="skin-body">
                  <div class="switch_section">
                    <div class="switch-toggle lightMenu d-flex">
                      <span class="me-auto">Light Menu</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch2"
                          id="myonoffswitch3"
                          class="onoffswitch2-checkbox"
                          checked
                        />
                        <label
                          for="myonoffswitch3"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle colorMenu d-flex mt-2">
                      <span class="me-auto">Color Menu</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch2"
                          id="myonoffswitch4"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch4"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle darkMenu d-flex mt-2">
                      <span class="me-auto">Dark Menu</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch2"
                          id="myonoffswitch5"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch5"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle gradientMenu d-flex mt-2">
                      <span class="me-auto">Gradient Menu</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch2"
                          id="myonoffswitch19"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch19"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swichermainleft">
                <h4>Header Styles</h4>
                <div class="skin-body">
                  <div class="switch_section">
                    <div class="switch-toggle lightHeader d-flex">
                      <span class="me-auto">Light Header</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch3"
                          id="myonoffswitch6"
                          class="onoffswitch2-checkbox"
                          checked
                        />
                        <label
                          for="myonoffswitch6"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle colorHeader d-flex mt-2">
                      <span class="me-auto">Color Header</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch3"
                          id="myonoffswitch7"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch7"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle darkHeader d-flex mt-2">
                      <span class="me-auto">Dark Header</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch3"
                          id="myonoffswitch8"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch8"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>

                    <div class="switch-toggle darkHeader d-flex mt-2">
                      <span class="me-auto">Gradient Header</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch3"
                          id="myonoffswitch20"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch20"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swichermainleft">
                <h4>Layout Width Styles</h4>
                <div class="skin-body">
                  <div class="switch_section">
                    <div class="switch-toggle d-flex">
                      <span class="me-auto">Full Width</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch4"
                          id="myonoffswitch9"
                          class="onoffswitch2-checkbox"
                          checked
                        />
                        <label
                          for="myonoffswitch9"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle d-flex mt-2">
                      <span class="me-auto">Boxed</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch4"
                          id="myonoffswitch10"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch10"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swichermainleft">
                <h4>Layout Positions</h4>
                <div class="skin-body">
                  <div class="switch_section">
                    <div class="switch-toggle d-flex">
                      <span class="me-auto">Fixed</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch5"
                          id="myonoffswitch11"
                          class="onoffswitch2-checkbox"
                          checked
                        />
                        <label
                          for="myonoffswitch11"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle d-flex mt-2">
                      <span class="me-auto">Scrollable</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch5"
                          id="myonoffswitch12"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch12"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swichermainleft leftmenu-styles">
                <h4>Sidemenu layout Styles</h4>
                <div class="skin-body">
                  <div class="switch_section">
                    <div class="switch-toggle d-flex">
                      <span class="me-auto">Default Menu</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch6"
                          id="myonoffswitch13"
                          class="onoffswitch2-checkbox default-menu"
                          checked
                        />
                        <label
                          for="myonoffswitch13"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>

                    <div class="switch-toggle d-flex mt-2">
                      <span class="me-auto">Icon Overlay</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch6"
                          id="myonoffswitch15"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch15"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                    <div class="switch-toggle d-flex mt-2">
                      <span class="me-auto">Closed Sidemenu</span>
                      <p class="onoffswitch2">
                        <input
                          type="radio"
                          name="onoffswitch6"
                          id="myonoffswitch16"
                          class="onoffswitch2-checkbox"
                        />
                        <label
                          for="myonoffswitch16"
                          class="onoffswitch2-label"
                        ></label>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swichermainleft">
                <h4>Reset All Styles</h4>
                <div class="skin-body">
                  <div class="switch_section my-4">
                    <button
                      class="btn btn-danger btn-block"
                      onclick="localStorage.clear();
                                            document.querySelector('html').style = '';
                                            names() ;
                                            resetData() ;"
                      type="button"
                    >
                      Reset All
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END SWITCHER -->

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
      <img src="assets/images/loader.svg" class="loader-img" alt="Loader" />
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
      <div class="page-main">
        <!-- APP-HEADER -->

        <div class="app-header header sticky">
          <div class="container-fluid main-container">
            <div class="d-flex">
              <a
                aria-label="Hide Sidebar"
                data-bs-toggle="sidebar"
                href="javascript:void(0)"
              >
                &nbsp;&nbsp;
                <div class="crosscontainer" onclick="myFunction(this)">
                  <div class="bar1"></div>
                  <div class="bar2"></div>
                  <div class="bar3"></div>
                </div>
              </a>
              <!-- sidebar-toggle-->

              <a
                href="index.php"
                class="logo-name"
                style="position: relative; left: 120px"
              >
                <h1
                  class="header-brand-img light-logo1 mylogo"
                  style="margin-left: -35px; font-weight: bold"
                >
                  Clucks & Bulls
                </h1>
              </a>

              <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <div class="dropdown d-none">
                  <a
                    href="javascript:void(0)"
                    class="nav-link icon"
                    data-bs-toggle="dropdown"
                  >
                    <i class="fa fa-search"></i>
                  </a>
                  <div class="dropdown-menu header-search dropdown-menu-start">
                    <div class="input-group w-100 p-2">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Search...."
                      />
                      <div class="input-group-text btn btn-primary">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- SEARCH -->
                <button
                  class="navbar-toggler navresponsive-toggler d-lg-none ms-auto"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent-4"
                  aria-controls="navbarSupportedContent-4"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span
                    class="navbar-toggler-icon fa-solid fa-ellipsis-vertical"
                  ></span>
                </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                  <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent-4"
                  >
                    <div class="d-flex order-lg-2 mybox">
                      <div class="d-flex country">
                        <a
                          class="nav-link icon theme-layout nav-link-bg layout-setting"
                        >
                          <span class="dark-layout"
                            ><i class="fa fa-moon"></i
                          ></span>
                          <span class="light-layout"
                            ><i class="fa fa-sun"></i
                          ></span>
                        </a>
                      </div>

                      <div
                        class="dropdown d-flex"
                        style="background-color: red"
                      >
                        <a class="nav-link icon full-screen-link nav-link-bg">
                          <i class="fa fa-minimize fullscreen-button"></i>
                        </a>
                      </div>

                      <!-- SIDE-MENU -->
                      <div class="dropdown d-flex profile-1">
                        <a
                          href="javascript:void(0)"
                          data-bs-toggle="dropdown"
                          class="nav-link leading-none d-flex"
                        >
                          <!--<img src="assets/images/users/21.jpg" alt="profile-user"-->
                          <!--    class="avatar  profile-user brround cover-image">-->

                          <i
                            class="fas fa-user avatar profile-user brround cover-image"
                            style="font-size: 19px"
                            aria-hidden="true"
                          ></i>
                        </a>
                        <div
                          class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                        >
                          <div class="drop-heading">
                            <div class="text-center">
                              <?php

                              if (isset($_SESSION["role"]) && $_SESSION["role"] == "1") {
                                ?>
                                <h5 class="text-dark mb-0 fs-14 fw-semibold">
                                  Ali Lodhi
                                </h5>
                                <small class="text-muted">Admin</small>
                                <?php
                              } elseif (isset($_SESSION["role"]) && $_SESSION["role"] == "Staff") {
                                ?>
                                <h5 class="text-dark mb-0 fs-14 fw-semibold">
                                  <?php echo $_SESSION["name"] ?>
                                </h5>
                                <small class="text-muted">Staff</small>
                                <?php
                              } else {
                                echo "error";
                              }


                              ?>
                            </div>
                          </div>

                          <a class="dropdown-item" href="logout.php">
                            <i class="dropdown-icon fa fa-alert-circle"></i>
                            Sign out
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="demo-icon nav-link icon">
                  <i class="fa fa-cog fa-spin text_primary"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /APP-HEADER -->

        <!--APP-SIDEBAR-->

        <div class="sticky">
          <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
          <div class="app-sidebar">
            <div class="side-header">
              <a class="header-brand1" href="index.php">
                <h2
                  class="header-brand-img desktop-logo"
                  style="margin-left: -12px; font-weight: bold; color: white"
                >
                  Clucks & Bulls
                </h2>
                <h6
                  class="header-brand-img toggle-logo"
                  style="margin-left: -35px; font-weight: bold"
                >
                  Clucks & Bulls
                </h6>
                <h6
                  class="header-brand-img light-logo"
                  style="margin-left: -12px; font-weight: bold"
                >
                  Clucks & Bulls
                </h6>
                <h2
                  class="header-brand-img light-logo1"
                  style="margin-left: -35px; font-weight: bold"
                >
                  Clucks & Bulls
                </h2>
              </a>
              <!-- LOGO -->
            </div>

            <div class="main-sidemenu">
              <div class="slide-left disabled" id="slide-left">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="#7b8191"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"
                  />
                </svg>
              </div>
              <ul class="side-menu">
                <li class="sub-category">
                  <h3>Main</h3>
                </li>
                <li class="slide">
                  <a
                    class="side-menu__item has-link"
                    data-bs-toggle="slide"
                    href="index.php"
                    ><i class="side-menu__icon fa fa-home"></i
                    ><span class="side-menu__label">Dashboard</span></a
                  >
                </li>

                <!-- my list -->

                <li class="sub-category">
                  <h3>Create</h3>
                </li>

                <li class="slide">
                  <a class="side-menu__item" href="create_category.php"
                    ><i class="side-menu__icon fa fa-user"></i
                    ><span class="side-menu__label">Add Category</span></a
                  >
                </li>

                <li class="slide">
                  <a class="side-menu__item" href="create_menu.php"
                    ><i class="side-menu__icon fa fa-user"></i
                    ><span class="side-menu__label">Add Menu</span></a
                  >
                </li>

                <li class="slide">
                  <a class="side-menu__item" href="create_deals.php"
                    ><i class="side-menu__icon fa fa-user"></i
                    ><span class="side-menu__label">Add Deals</span></a
                  >
                </li>

                <li class="sub-category">
                  <h3>View The Details</h3>
                </li>

                <?php

                if (isset($_SESSION["role"]) && $_SESSION["role"] == "Admin") {
                  ?>
                  <?php
                }
                ?>

                <li class="slide">
                  <a class="side-menu__item" href="manage_category.php"
                    ><i class="side-menu__icon fa-solid fa-pen-to-square"></i
                    ><span class="side-menu__label">Manage Category</span></a
                  >
                </li>

                <li class="slide">
                  <a class="side-menu__item" href="manage_deals.php"
                    ><i class="side-menu__icon fa-solid fa-pen-to-square"></i
                    ><span class="side-menu__label">Manage Deals</span></a
                  >
                </li>

                <li class="slide">
                  <a class="side-menu__item" href="manage_menu.php"
                    ><i class="side-menu__icon fa-solid fa-pen-to-square"></i
                    ><span class="side-menu__label">Manage Menu</span></a
                  >
                </li>

                <li class="slide">
                  <a class="side-menu__item" href="manage_review.php"
                    ><i class="side-menu__icon fa-solid fa-pen-to-square"></i
                    ><span class="side-menu__label">Manage Review</span></a
                  >
                </li>
              </ul>
              <div class="slide-right" id="slide-right">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="#7b8191"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"
                  />
                </svg>
              </div>
            </div>
          </div>
          <!--/APP-SIDEBAR-->
        </div>
        <!--/APP-SIDEBAR-->

        <script>
          function myFunction(x) {
            x.classList.toggle("change");
          }
        </script>
      </div>
    </div>
  </body>
</html>
