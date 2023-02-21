<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Advanced Form Components</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
      <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
      <link rel="stylesheet" type="text/css" href="assets/colorpicker/css/bootstrap-colorpicker.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/jquery-multi-select/css/multi-select.css" />

    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css" />

    <!-- switchery-->
    <link rel="stylesheet" type="text/css" href="assets/switchery/switchery.css" />

    <!--select 2-->
    <link rel="stylesheet" type="text/css" href="assets/select2/css/select2.min.css"/>

    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!--  summernote -->
      <link href="assets/summernote/summernote-bs4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <i class="fa fa-bars"></i>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo">Flat<span>lab</span></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
              <!--  notification start -->
              <ul class="nav top-menu">
                  <!-- settings start -->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <i class="fa fa-tasks"></i>
                          <span class="badge badge-success">6</span>
                      </a>
                      <ul class="dropdown-menu extended tasks-bar">
                          <div class="notify-arrow notify-arrow-green"></div>
                          <li>
                              <p class="green">You have 6 pending tasks</p>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="task-info">
                                      <div class="desc">Dashboard v1.3</div>
                                      <div class="percent">40%</div>
                                  </div>
                                  <div class="progress">
                                      <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                          <span class="sr-only">40% Complete (success)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="task-info">
                                      <div class="desc">Database Update</div>
                                      <div class="percent">60%</div>
                                  </div>
                                  <div class="progress">
                                      <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                          <span class="sr-only">60% Complete (warning)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="task-info">
                                      <div class="desc">Iphone Development</div>
                                      <div class="percent">87%</div>
                                  </div>
                                  <div class="progress">
                                      <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                          <span class="sr-only">87% Complete</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="task-info">
                                      <div class="desc">Mobile App</div>
                                      <div class="percent">33%</div>
                                  </div>
                                  <div class="progress">
                                      <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                          <span class="sr-only">33% Complete (danger)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="task-info">
                                      <div class="desc">Dashboard v1.3</div>
                                      <div class="percent">45%</div>
                                  </div>
                                  <div class="progress">
                                      <div class="progress-bar progress-bar-striped"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                          <span class="sr-only">45% Complete</span>
                                      </div>
                                  </div>

                              </a>
                          </li>
                          <li class="external">
                              <a href="#">See All Tasks</a>
                          </li>
                      </ul>
                  </li>
                  <!-- settings end -->
                  <!-- inbox dropdown start-->
                  <li id="header_inbox_bar" class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <i class="fa fa-envelope-o"></i>
                          <span class="badge badge-danger">5</span>
                      </a>
                      <ul class="dropdown-menu extended inbox">
                          <div class="notify-arrow notify-arrow-red"></div>
                          <li>
                              <p class="red">You have 5 new messages</p>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                  <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                    <span class="time">Just now</span>
                                    </span>
                                  <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                  <span class="subject">
                                    <span class="from">Jhon Doe</span>
                                    <span class="time">10 mins</span>
                                    </span>
                                  <span class="message">
                                     Hi, Jhon Doe Bhai how are you ?
                                    </span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                  <span class="subject">
                                    <span class="from">Jason Stathum</span>
                                    <span class="time">3 hrs</span>
                                    </span>
                                  <span class="message">
                                        This is awesome dashboard.
                                    </span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                  <span class="subject">
                                    <span class="from">Jondi Rose</span>
                                    <span class="time">Just now</span>
                                    </span>
                                  <span class="message">
                                        Hello, this is metrolab
                                    </span>
                              </a>
                          </li>
                          <li>
                              <a href="#">See all messages</a>
                          </li>
                      </ul>
                  </li>
                  <!-- inbox dropdown end -->
                  <!-- notification dropdown start-->
                  <li id="header_notification_bar" class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <i class="fa fa-bell-o"></i>
                          <span class="badge badge-warning">7</span>
                      </a>
                      <ul class="dropdown-menu extended notification">
                          <div class="notify-arrow notify-arrow-yellow"></div>
                          <li>
                              <p class="yellow">You have 7 new notifications</p>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                  Server #3 overloaded.
                                  <span class="small italic">34 mins</span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                  Server #10 not respoding.
                                  <span class="small italic">1 Hours</span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                  Database overloaded 24%.
                                  <span class="small italic">4 hrs</span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                                  New user registered.
                                  <span class="small italic">Just now</span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-info"><i class="fa fa-bullhorn"></i></span>
                                  Application error.
                                  <span class="small italic">10 mins</span>
                              </a>
                          </li>
                          <li>
                              <a href="#">See all notifications</a>
                          </li>
                      </ul>
                  </li>
                  <!-- notification dropdown end -->
              </ul>
              <!--  notification end -->
          </div>
          <div class="top-nav ">
              <!--search & user info start-->
              <ul class="nav pull-right top-menu">
                  <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img alt="" src="img/avatar1_small.jpg">
                          <span class="username">Jhon Doue</span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout dropdown-menu-right">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                          <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                          <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                          <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                  <li class="sb-toggle-right">
                      <i class="fa  fa-align-right"></i>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
              <!--search & user info end-->
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-laptop"></i>
                          <span>Layouts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="boxed_page.html">Boxed Page</a></li>
                          <li><a  href="horizontal_menu.html">Horizontal Menu</a></li>
                          <li><a  href="header-color.html">Different Color Top bar</a></li>
                          <li><a  href="mega_menu.html">Mega Menu</a></li>
                          <li><a  href="language_switch_bar.html">Language Switch Bar</a></li>
                          <li><a  href="email_template.html" target="_blank">Email Template</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-book"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="modal.html">Modal</a></li>
                          <li><a  href="toastr.html">Toastr Notifications</a></li>
                          <li><a  href="widget.html">Widget</a></li>
                          <li><a  href="slider.html">Slider</a></li>
                          <li><a  href="nestable.html">Nestable</a></li>
                          <li><a  href="tree.html">Tree View</a></li>
                          <li><a  href="font_awesome.html">Font Awesome</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="grids.html">Grids</a></li>
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                          <li><a  href="draggable_portlet.html">Draggable Portlet</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="active" >
                          <i class="fa fa-tasks"></i>
                          <span>Form Stuff</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                          <li class="active"><a  href="advanced_form_components.html">Advanced Components</a></li>
                          <li><a  href="form_wizard.html">Form Wizard</a></li>
                          <li><a  href="form_validation.html">Form Validation</a></li>
                          <li><a  href="dropzone.html">Dropzone File Upload</a></li>
                          <li><a  href="inline_editor.html">Inline Editor</a></li>
                          <li><a  href="image_cropping.html">Image Cropping</a></li>
                          <li><a  href="file_upload.html">Multiple File Upload</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                          <li><a  href="dynamic_table.html">Dynamic Table</a></li>

                          <li><a  href="editable_table.html">Editable Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-envelope"></i>
                          <span>Mail</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="inbox.html">Inbox</a></li>
                          <li><a  href="inbox_details.html">Inbox Details</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                          <li><a  href="flot_chart.html">Flot Charts</a></li>
                          <li><a  href="xchart.html">xChart</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-shopping-cart"></i>
                          <span>Shop</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="product_list.html">List View</a></li>
                          <li><a  href="product_details.html">Details View</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="google_maps.html" >
                          <i class="fa fa-map-marker"></i>
                          <span>Google Maps </span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-comments-o"></i>
                          <span>Chat Room</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="lobby.html">Lobby</a></li>
                          <li><a  href="chat_room.html"> Chat Room</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-glass"></i>
                          <span>Extra</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="sidebar_closed.html">Sidebar Closed</a></li>
                          <li><a  href="people_directory.html">People Directory</a></li>
                          <li><a  href="coming_soon.html">Coming Soon</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                          <li><a  href="profile.html">Profile</a></li>
                          <li><a  href="invoice.html">Invoice</a></li>
                          <li><a  href="project_list.html">Project List</a></li>
                          <li><a  href="project_details.html">Project Details</a></li>
                          <li><a  href="search_result.html">Search Result</a></li>
                          <li><a  href="pricing_table.html">Pricing Table</a></li>
                          <li><a  href="faq.html">FAQ</a></li>
                          <li><a  href="fb_wall.html">FB Wall</a></li>
                          <li><a  href="404.html">404 Error</a></li>
                          <li><a  href="500.html">500 Error</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="login.html">
                          <i class="fa fa-user"></i>
                          <span>Login Page</span>
                      </a>
                  </li>

                  <!--multi level menu start-->
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-sitemap"></i>
                          <span>Multi level Menu</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="javascript:;">Menu Item 1</a></li>
                          <li class="sub-menu">
                              <a  href="boxed_page.html">Menu Item 2</a>
                              <ul class="sub">
                                  <li><a  href="javascript:;">Menu Item 2.1</a></li>
                                  <li class="sub-menu">
                                      <a  href="javascript:;">Menu Item 3</a>
                                      <ul class="sub">
                                          <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                          <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <!-- page start-->

              <!--Summernote start-->
              <div class="row">
                  <div class="col-md-12">
                      <section class="card">
                          <header class="card-header head-border">
                              Summernote Editor
                          </header>
                          <div class="card-body">
                              <div class="summernote">Hello Summernote</div>
                          </div>
                      </section>
                  </div>
              </div>
              <!--Summernote end-->

              <!--wysihtml5 start-->
              <div class="row">
                  <div class="col-md-12">
                      <section class="card">
                          <header class="card-header">
                              WYSIWYG Editors
                              <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                              </span>
                          </header>
                          <div class="card-body">
                              <form action="#" class="form-horizontal tasi-form">
                                  <div class="form-group">
                                      <label class="control-label col-md-3">WYSIHTML5 Editor</label>
                                      <div class="col-md-9">
                                          <textarea class="wysihtml5 form-control" rows="10"></textarea>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!--wysihtml5 end-->

              <!--bootstrap switcher start-->
              <div class="row">
                  <div class="col-md-12">
                      <section class="card">
                          <header class="card-header">
                              Bootstrap Switcher
                          <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                          </span>
                          </header>
                          <div class="card-body">
                              <div class="row m-bot20">
                                  <div class="col-md-12">
                                      <div class="make-switch switch-large">
                                          <input type="checkbox" checked>
                                      </div>

                                      <div class="make-switch">
                                          <input type="checkbox" checked>
                                      </div>

                                      <div class="make-switch switch-small">
                                          <input type="checkbox" checked>
                                      </div>

                                      <div class="make-switch switch-mini">
                                          <input type="checkbox" checked>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="make-switch" data-on="primary" data-off="info">
                                          <input type="checkbox" checked>
                                      </div>

                                      <div class="make-switch" data-on="info" data-off="success">
                                          <input type="checkbox" checked>
                                      </div>

                                      <div class="make-switch" data-on="success" data-off="warning">
                                          <input type="checkbox" checked>
                                      </div>

                                      <div class="make-switch" data-on="warning" data-off="danger">
                                          <input type="checkbox" checked>
                                      </div>

                                      <div class="make-switch" data-on="danger" data-off="default">
                                          <input type="checkbox" checked>
                                      </div>

                                      <div class="make-switch" data-on="default" data-off="primary">
                                          <input type="checkbox" checked>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              <!--bootstrap switcher end-->

              <!--switchery start-->
              <div class="row">
                  <div class="col-md-12">
                      <section class="card">
                          <header class="card-header">
                               Switchey
                          <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                          </span>
                          </header>
                          <div class="card-body">
                              <div class="row m-bot20">
                                  <div class="col-md-6">
                                      <p>Default with different sizes</p>
                                      <input type="checkbox" class="js-switch-large" checked />
                                      <input type="checkbox" class="js-switch" checked />
                                      <input type="checkbox" class="js-switch-small" checked />
                                  </div>

                                  <div class="col-md-6">
                                      <p>Colored</p>
                                      <input type="checkbox" class="js-switch-blue" checked />
                                      <input type="checkbox" class="js-switch-red" checked />
                                      <input type="checkbox" class="js-switch-yellow" checked />
                                  </div>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              <!--switchery end-->

              <!--select2 start-->
              <div class="row">
                  <div class="col-md-12">
                      <section class="card">
                          <header class="card-header">
                              Select2
                          <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                          </span>
                          </header>
                          <div class="card-body">

                              <form action="#" class="">
                                  <div class="form-group">
                                      <label class="">Basic Single Select Box </label>
                                      <select class="js-example-basic-single">
                                          <option value="AL">Alabama</option>
                                          ...
                                          <option value="WY">Wyoming</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label class="">Multiple Single Select Box </label>

                                      <select class="js-example-basic-multiple" multiple="multiple">
                                          <option value="AL">Alabama</option>
                                          ...
                                          <option value="WY">Wyoming</option>
                                      </select>
                                  </div>
                              </form>

                          </div>
                      </section>
                  </div>
              </div>
              <!--select2 end-->



              <!--multiple select start-->
              <div class="row">
              <div class="col-md-12">
                  <section class="card">
                      <header class="card-header">
                          Multiple Select
                          <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                          </span>
                      </header>
                      <div class="card-body">
                      <form action="#" class="form-horizontal tasi-form">
                              <div class="form-group row">
                                  <label class="control-label col-md-3">Default</label>
                                  <div class="col-md-9">
                                      <select multiple="multiple" class="multi-select" id="my_multi_select1" name="my_multi_select1[]">
                                          <option>Dallas Cowboys</option>
                                          <option>New York Giants</option>
                                          <option selected>Philadelphia Eagles</option>
                                          <option selected>Washington Redskins</option>
                                          <option>Chicago Bears</option>
                                          <option>Detroit Lions</option>
                                          <option>Green Bay Packers</option>
                                          <option>Minnesota Vikings</option>
                                          <option selected>Atlanta Falcons</option>
                                          <option>Carolina Panthers</option>
                                          <option>New Orleans Saints</option>
                                          <option>Tampa Bay Buccaneers</option>
                                          <option>Arizona Cardinals</option>
                                          <option>St. Louis Rams</option>
                                          <option>San Francisco 49ers</option>
                                          <option>Seattle Seahawks</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="control-label col-md-3">Grouped Options</label>
                                  <div class="col-md-9">
                                      <select multiple="multiple" class="multi-select" id="my_multi_select2" name="my_multi_select2[]">
                                          <optgroup label="NFC EAST">
                                              <option>Dallas Cowboys</option>
                                              <option>New York Giants</option>
                                              <option>Philadelphia Eagles</option>
                                              <option>Washington Redskins</option>
                                          </optgroup>
                                          <optgroup label="NFC NORTH">
                                              <option>Chicago Bears</option>
                                              <option>Detroit Lions</option>
                                              <option>Green Bay Packers</option>
                                              <option>Minnesota Vikings</option>
                                          </optgroup>
                                          <optgroup label="NFC SOUTH">
                                              <option>Atlanta Falcons</option>
                                              <option>Carolina Panthers</option>
                                              <option>New Orleans Saints</option>
                                              <option>Tampa Bay Buccaneers</option>
                                          </optgroup>
                                          <optgroup label="NFC WEST">
                                              <option>Arizona Cardinals</option>
                                              <option>St. Louis Rams</option>
                                              <option>San Francisco 49ers</option>
                                              <option>Seattle Seahawks</option>
                                          </optgroup>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row last">
                                    <label class="control-label col-md-3">Searchable</label>
                                    <div class="col-md-9">
                                    <select name="country" class="multi-select" multiple="" id="my_multi_select3" >
                                      <option value="AF">Afghanistan</option>
                                      <option value="AL">Albania</option>
                                      <option value="DZ">Algeria</option>
                                      <option value="AS">American Samoa</option>
                                      <option value="AD">Andorra</option>
                                      <option value="AO">Angola</option>
                                      <option value="AI">Anguilla</option>
                                      <option value="AQ">Antarctica</option>
                                      <option value="AR">Argentina</option>
                                      <option value="AM">Armenia</option>
                                      <option value="AW">Aruba</option>
                                      <option value="AU">Australia</option>
                                      <option value="AT">Austria</option>
                                      <option value="AZ">Azerbaijan</option>
                                      <option value="BS">Bahamas</option>
                                      <option value="BH">Bahrain</option>
                                      <option value="BD">Bangladesh</option>
                                      <option value="BB">Barbados</option>
                                      <option value="BY">Belarus</option>
                                      <option value="BE">Belgium</option>
                                      <option value="BZ">Belize</option>
                                      <option value="BJ">Benin</option>
                                      <option value="BM">Bermuda</option>
                                      <option value="BT">Bhutan</option>
                                      <option value="BO">Bolivia</option>
                                      <option value="BA">Bosnia and Herzegowina</option>
                                      <option value="BW">Botswana</option>
                                      <option value="BV">Bouvet Island</option>
                                      <option value="BR">Brazil</option>
                                      <option value="IO">British Indian Ocean Territory</option>
                                      <option value="BN">Brunei Darussalam</option>
                                      <option value="BG">Bulgaria</option>
                                      <option value="BF">Burkina Faso</option>
                                      <option value="BI">Burundi</option>
                                      <option value="KH">Cambodia</option>
                                      <option value="CM">Cameroon</option>
                                      <option value="CA">Canada</option>
                                      <option value="CV">Cape Verde</option>
                                      <option value="KY">Cayman Islands</option>
                                      <option value="CF">Central African Republic</option>
                                      <option value="TD">Chad</option>
                                      <option value="CL">Chile</option>
                                      <option value="CN">China</option>
                                      <option value="CX">Christmas Island</option>
                                      <option value="CC">Cocos (Keeling) Islands</option>
                                      <option value="CO">Colombia</option>
                                      <option value="KM">Comoros</option>
                                      <option value="CG">Congo</option>
                                      <option value="CD">Congo, the Democratic Republic of the</option>
                                      <option value="CK">Cook Islands</option>
                                      <option value="CR">Costa Rica</option>
                                      <option value="CI">Cote d'Ivoire</option>
                                      <option value="HR">Croatia (Hrvatska)</option>
                                      <option value="CU">Cuba</option>
                                      <option value="CY">Cyprus</option>
                                      <option value="CZ">Czech Republic</option>
                                      <option value="DK">Denmark</option>
                                      <option value="DJ">Djibouti</option>
                                      <option value="DM">Dominica</option>
                                      <option value="DO">Dominican Republic</option>
                                      <option value="EC">Ecuador</option>
                                      <option value="EG">Egypt</option>
                                      <option value="SV">El Salvador</option>
                                      <option value="GQ">Equatorial Guinea</option>
                                      <option value="ER">Eritrea</option>
                                      <option value="EE">Estonia</option>
                                      <option value="ET">Ethiopia</option>
                                      <option value="FK">Falkland Islands (Malvinas)</option>
                                      <option value="FO">Faroe Islands</option>
                                      <option value="FJ">Fiji</option>
                                      <option value="FI">Finland</option>
                                      <option value="FR">France</option>
                                      <option value="GF">French Guiana</option>
                                      <option value="PF">French Polynesia</option>
                                      <option value="TF">French Southern Territories</option>
                                      <option value="GA">Gabon</option>
                                      <option value="GM">Gambia</option>
                                      <option value="GE">Georgia</option>
                                      <option value="DE">Germany</option>
                                      <option value="GH">Ghana</option>
                                      <option value="GI">Gibraltar</option>
                                      <option value="GR">Greece</option>
                                      <option value="GL">Greenland</option>
                                      <option value="GD">Grenada</option>
                                      <option value="GP">Guadeloupe</option>
                                      <option value="GU">Guam</option>
                                      <option value="GT">Guatemala</option>
                                      <option value="GN">Guinea</option>
                                      <option value="GW">Guinea-Bissau</option>
                                      <option value="GY">Guyana</option>
                                      <option value="HT">Haiti</option>
                                      <option value="HM">Heard and Mc Donald Islands</option>
                                      <option value="VA">Holy See (Vatican City State)</option>
                                      <option value="HN">Honduras</option>
                                      <option value="HK">Hong Kong</option>
                                      <option value="HU">Hungary</option>
                                      <option value="IS">Iceland</option>
                                      <option value="IN">India</option>
                                      <option value="ID">Indonesia</option>
                                      <option value="IR">Iran (Islamic Republic of)</option>
                                      <option value="IQ">Iraq</option>
                                      <option value="IE">Ireland</option>
                                      <option value="IL">Israel</option>
                                      <option value="IT">Italy</option>
                                      <option value="JM">Jamaica</option>
                                      <option value="JP">Japan</option>
                                      <option value="JO">Jordan</option>
                                      <option value="KZ">Kazakhstan</option>
                                      <option value="KE">Kenya</option>
                                      <option value="KI">Kiribati</option>
                                      <option value="KP">Korea, Democratic People's Republic of</option>
                                      <option value="KR">Korea, Republic of</option>
                                      <option value="KW">Kuwait</option>
                                      <option value="KG">Kyrgyzstan</option>
                                      <option value="LA">Lao People's Democratic Republic</option>
                                      <option value="LV">Latvia</option>
                                      <option value="LB">Lebanon</option>
                                      <option value="LS">Lesotho</option>
                                      <option value="LR">Liberia</option>
                                      <option value="LY">Libyan Arab Jamahiriya</option>
                                      <option value="LI">Liechtenstein</option>
                                      <option value="LT">Lithuania</option>
                                      <option value="LU">Luxembourg</option>
                                      <option value="MO">Macau</option>
                                      <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                      <option value="MG">Madagascar</option>
                                      <option value="MW">Malawi</option>
                                      <option value="MY">Malaysia</option>
                                      <option value="MV">Maldives</option>
                                      <option value="ML">Mali</option>
                                      <option value="MT">Malta</option>
                                      <option value="MH">Marshall Islands</option>
                                      <option value="MQ">Martinique</option>
                                      <option value="MR">Mauritania</option>
                                      <option value="MU">Mauritius</option>
                                      <option value="YT">Mayotte</option>
                                      <option value="MX">Mexico</option>
                                      <option value="FM">Micronesia, Federated States of</option>
                                      <option value="MD">Moldova, Republic of</option>
                                      <option value="MC">Monaco</option>
                                      <option value="MN">Mongolia</option>
                                      <option value="MS">Montserrat</option>
                                      <option value="MA">Morocco</option>
                                      <option value="MZ">Mozambique</option>
                                      <option value="MM">Myanmar</option>
                                      <option value="NA">Namibia</option>
                                      <option value="NR">Nauru</option>
                                      <option value="NP">Nepal</option>
                                      <option value="NL">Netherlands</option>
                                      <option value="AN">Netherlands Antilles</option>
                                      <option value="NC">New Caledonia</option>
                                      <option value="NZ">New Zealand</option>
                                      <option value="NI">Nicaragua</option>
                                      <option value="NE">Niger</option>
                                      <option value="NG">Nigeria</option>
                                      <option value="NU">Niue</option>
                                      <option value="NF">Norfolk Island</option>
                                      <option value="MP">Northern Mariana Islands</option>
                                      <option value="NO">Norway</option>
                                      <option value="OM">Oman</option>
                                      <option value="PK">Pakistan</option>
                                      <option value="PW">Palau</option>
                                      <option value="PA">Panama</option>
                                      <option value="PG">Papua New Guinea</option>
                                      <option value="PY">Paraguay</option>
                                      <option value="PE">Peru</option>
                                      <option value="PH">Philippines</option>
                                      <option value="PN">Pitcairn</option>
                                      <option value="PL">Poland</option>
                                      <option value="PT">Portugal</option>
                                      <option value="PR">Puerto Rico</option>
                                      <option value="QA">Qatar</option>
                                      <option value="RE">Reunion</option>
                                      <option value="RO">Romania</option>
                                      <option value="RU">Russian Federation</option>
                                      <option value="RW">Rwanda</option>
                                      <option value="KN">Saint Kitts and Nevis</option>
                                      <option value="LC">Saint LUCIA</option>
                                      <option value="VC">Saint Vincent and the Grenadines</option>
                                      <option value="WS">Samoa</option>
                                      <option value="SM">San Marino</option>
                                      <option value="ST">Sao Tome and Principe</option>
                                      <option value="SA">Saudi Arabia</option>
                                      <option value="SN">Senegal</option>
                                      <option value="SC">Seychelles</option>
                                      <option value="SL">Sierra Leone</option>
                                      <option value="SG">Singapore</option>
                                      <option value="SK">Slovakia (Slovak Republic)</option>
                                      <option value="SI">Slovenia</option>
                                      <option value="SB">Solomon Islands</option>
                                      <option value="SO">Somalia</option>
                                      <option value="ZA">South Africa</option>
                                      <option value="GS">South Georgia and the South Sandwich Islands</option>
                                      <option value="ES">Spain</option>
                                      <option value="LK">Sri Lanka</option>
                                      <option value="SH">St. Helena</option>
                                      <option value="PM">St. Pierre and Miquelon</option>
                                      <option value="SD">Sudan</option>
                                      <option value="SR">Suriname</option>
                                      <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                      <option value="SZ">Swaziland</option>
                                      <option value="SE">Sweden</option>
                                      <option value="CH">Switzerland</option>
                                      <option value="SY">Syrian Arab Republic</option>
                                      <option value="TW">Taiwan, Province of China</option>
                                      <option value="TJ">Tajikistan</option>
                                      <option value="TZ">Tanzania, United Republic of</option>
                                      <option value="TH">Thailand</option>
                                      <option value="TG">Togo</option>
                                      <option value="TK">Tokelau</option>
                                      <option value="TO">Tonga</option>
                                      <option value="TT">Trinidad and Tobago</option>
                                      <option value="TN">Tunisia</option>
                                      <option value="TR">Turkey</option>
                                      <option value="TM">Turkmenistan</option>
                                      <option value="TC">Turks and Caicos Islands</option>
                                      <option value="TV">Tuvalu</option>
                                      <option value="UG">Uganda</option>
                                      <option value="UA">Ukraine</option>
                                      <option value="AE">United Arab Emirates</option>
                                      <option value="GB">United Kingdom</option>
                                      <option value="US">United States</option>
                                      <option value="UM">United States Minor Outlying Islands</option>
                                      <option value="UY">Uruguay</option>
                                      <option value="UZ">Uzbekistan</option>
                                      <option value="VU">Vanuatu</option>
                                      <option value="VE">Venezuela</option>
                                      <option value="VN">Viet Nam</option>
                                      <option value="VG">Virgin Islands (British)</option>
                                      <option value="VI">Virgin Islands (U.S.)</option>
                                      <option value="WF">Wallis and Futuna Islands</option>
                                      <option value="EH">Western Sahara</option>
                                      <option value="YE">Yemen</option>
                                      <option value="ZM">Zambia</option>
                                      <option value="ZW">Zimbabwe</option>
                                    </select>
                              </div>

                          </div>
                      </form>
                  </div>
                  </section>
              </div>
          </div>
              <!--multiple select end-->

              <!--date picker start-->
              <div class="row">
              <div class="col-md-12">
                  <section class="card">
                      <header class="card-header">
                          Date Pickers
                          <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                      </header>
                      <div class="card-body">
                          <form class="picker-form">
                              <div class="form-group row">
                                  <label class="col-form-label col-lg-3 col-sm-12 ">Input</label>
                                  <div class="col-lg-6 col-md-9 col-sm-12">
                                      <input type="text" class="form-control date-picker-input" value="Select Date">
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label class="col-form-label col-lg-3 col-sm-12 ">Input Group</label>
                                  <div class="col-lg-6 col-md-9 col-sm-12">
                                      <div class="input-group date dpYears" data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="03-10-2018">
                                          <input type="text" class="form-control" placeholder="03-10-2018" aria-label="Right Icon" aria-describedby="dp-ig">
                                          <div class="input-group-append">
                                              <button id="dp-ig" class="btn btn-outline-secondary" type="button"><i class="fa fa-calendar f14"></i></button>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label class="col-form-label col-lg-3 col-sm-12 ">Months &amp; Date Only</label>
                                  <div class="col-lg-6 col-md-9 col-sm-12">
                                      <div class="input-group date dpMonths" data-date-viewmode="months" data-date-format="mm/yyyy" data-date="12-08-2017">
                                          <input type="text" class="form-control" placeholder="03-07" aria-label="Right Icon" aria-describedby="dp-mdo">
                                          <div class="input-group-append">
                                              <button id="dp-mdo" class="btn btn-primary" type="button"><i class="fa fa-calendar f14"></i></button>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label class="col-form-label col-lg-3 col-sm-12 ">Helper Buttons</label>
                                  <div class="col-lg-6 col-md-9 col-sm-12">
                                      <div class="input-group date" id="helper-datepicker">
                                          <input type="text" class="form-control" value="02/25/2018">
                                          <div class="input-group-append">
                                              <button class="btn btn-success" type="button"><i class="fa fa-calendar f14"></i></button>
                                          </div>
                                      </div>
                                      <span class="text-muted">
                                             clear and today helper buttons added
                                        </span>
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label class="col-form-label col-lg-3 col-sm-12 ">Date Range</label>
                                  <div class="col-lg-6 col-md-9 col-sm-12">
                                      <div class="input-group" data-date="12/07/2017" data-date-format="mm/dd/yyyy">
                                          <input type="text" class="form-control rounded dpd1" name="from">
                                          <span class="px-3 py-2">To</span>
                                          <input type="text" class="form-control rounded dpd2" name="to">
                                      </div>
                                  </div>
                              </div>

                          </form>
                      </div>
                  </section>
              </div>
          </div>
              <!--date picker end-->

              <!--datetime picker start-->
              <div class="row">
                  <div class="col-md-12">
                      <section class="card">
                          <header class="card-header">
                              Datetime Pickers
                              <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                          </header>
                          <div class="card-body">
                              <form class="picker-form">
                                  <div class="form-group row">
                                      <label class="col-form-label col-lg-3 col-sm-12 ">Default input Datetimepicker</label>
                                      <div class="col-lg-6 col-md-9 col-sm-12">
                                          <input type="text" value="2017-12-05 12:45" class="form_datetime form-control">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="col-form-label col-lg-3 col-sm-12 ">Component Datetimepicker </label>
                                      <div class="col-lg-6 col-md-9 col-sm-12">
                                          <div class="input-group date form_datetime-component">
                                              <input type="text" class="form-control date-set" aria-label="Right Icon" aria-describedby="basic-addon12">
                                              <div class="input-group-append">
                                                  <button id="basic-addon12" class="btn btn-outline-secondary" type="button"><i class="fa fa-calendar f14"></i></button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="col-form-label col-lg-3 col-sm-12 ">Advance Datetimepicker</label>
                                      <div class="col-lg-6 col-md-9 col-sm-12">
                                          <div data-date="2017-12-21T15:25:00Z" class="input-group date form_datetime-adv">
                                              <input type="text" class="form-control rounded mr-2" size="16">
                                              <div class="input-group-btn">
                                                  <button type="button" class="btn btn-dark date-reset"><i class="fa fa-times"></i></button>
                                                  <button type="button" class="btn btn-danger date-set"><i class="fa fa-calendar f14"></i></button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="col-form-label col-lg-3 col-sm-12 ">Meridian Format</label>
                                      <div class="col-lg-6 col-md-9 col-sm-12">
                                          <div data-date="2017-12-21T15:25:00Z" class="input-group date form_datetime-meridian">
                                              <input type="text" class="form-control rounded mr-2" size="16">
                                              <div class="input-group-btn">
                                                  <button type="button" class="btn btn-dark date-reset"><i class="fa fa-times"></i></button>
                                                  <button type="button" class="btn btn-info date-set"><i class="fa fa-calendar f14"></i></button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!--datetime picker end-->

              <!--time picker start-->
              <div class="row">
                  <div class="col-md-12">
                      <section class="card">
                          <header class="card-header">
                              Time Pickers
                              <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                          </header>
                          <div class="card-body">
                              <form class="picker-form">
                                  <div class="form-group row">
                                      <label class="col-form-label col-lg-3 col-sm-12 ">Default Timepicker</label>
                                      <div class="col-lg-6 col-md-9 col-sm-12">
                                          <div class="input-group bootstrap-timepicker">
                                              <input type="text" class="form-control timepicker-default rounded mr-3" aria-label="Right Icon" aria-describedby="basic-addon15">
                                              <span class="input-group-addon btn btn-primary" id="basic-addon15"><i class="fa fa-clock-o f14"></i></span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="col-form-label col-lg-3 col-sm-12 ">24hr Timepicker</label>
                                      <div class="col-lg-6 col-md-9 col-sm-12">
                                          <div class="input-group bootstrap-timepicker">
                                              <input type="text" class="form-control timepicker-24 rounded mr-3" aria-label="Right Icon" aria-describedby="basic-addon16">
                                              <span class="input-group-addon btn btn-success" id="basic-addon16"><i class="fa fa-clock-o f14"></i></span>
                                          </div>

                                      </div>
                                  </div>

                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!--time picker end-->

              <!--color picker start-->
              <div class="row">
                  <div class="col-md-12">
                      <section class="card">
                          <header class="card-header">
                              Color Pickers
                              <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                          </header>
                          <div class="card-body">
                              <form class="picker-form">

                                  <div class="form-group row">
                                      <label class="col-form-label col-lg-3 col-sm-12 ">Simple usage </label>
                                      <div class="col-lg-6 col-md-9 col-sm-12">
                                          <input id="cp1" type="text" class="form-control input-lg colorpicker-element" value="" data-colorpicker-id="1">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="col-form-label col-lg-3 col-sm-12 ">Setting the initial color  </label>
                                      <div class="col-lg-6 col-md-9 col-sm-12">
                                          <div id="cp2" class="input-group colorpicker-component mb-3 colorpicker-element" title="Using input value" data-colorpicker-id="2">
                                              <input type="text" class="form-control input-lg" value="#328dff">
                                              <div class="input-group-append">
                                                  <span class="input-group-addon btn btn-outline-secondary"><i style="background-color: rgb(50, 141, 255);"></i></span>
                                              </div>
                                          </div>

                                          <div id="cp3a" class="input-group colorpicker-component mb-3 colorpicker-element" data-color="#3dba6f" title="Using data-color attribute in the colorpicker element" data-colorpicker-id="3">
                                              <input type="text" class="form-control input-lg">
                                              <div class="input-group-append">
                                                  <span class="input-group-addon btn btn-outline-secondary"><i style="background-color: rgb(61, 186, 111);"></i></span>
                                              </div>
                                          </div>

                                          <div id="cp3b" class="input-group colorpicker-component mb-3 colorpicker-element" title="Using data-color attribute in the input" data-colorpicker-id="4">
                                              <input type="text" class="form-control input-lg" data-color="#fe413b">
                                              <div class="input-group-append">
                                                  <span class="input-group-addon btn btn-outline-secondary"><i style="background-color: rgb(254, 65, 59);"></i></span>
                                              </div>
                                          </div>

                                          <div id="cp4" class="input-group colorpicker-component mb-3 colorpicker-element" title="Using color option" data-colorpicker-id="5">
                                              <input type="text" class="form-control input-lg">
                                              <div class="input-group-append">
                                                  <span class="input-group-addon btn btn-outline-secondary"><i style="background-color: rgb(234, 196, 89);"></i></span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>



                                  <div class="form-group row">
                                      <label class="col-form-label col-lg-3 col-sm-12 ">Automatic format detection</label>
                                      <div class="col-lg-6 col-md-9 col-sm-12">
                                          <div id="cp5" class="input-group colorpicker-component colorpicker-element" title="Using format option" data-colorpicker-id="6">
                                              <input type="text" class="form-control input-lg" value="#fab63f">
                                              <div class="input-group-append">
                                                  <span class="input-group-addon btn btn-outline-secondary"><i style="background-color: rgb(250, 182, 63);"></i></span>
                                              </div>
                                          </div>
                                          <small>
                                              Whenever the <code>format</code> option is <var>false</var> (default), the first parsed color format will be
                                              detected and used as default, but when the option equals <var>null</var> or empty string,
                                              the format is recalculated every time.
                                          </small>
                                      </div>
                                  </div>


                                  <div class="form-group row">
                                      <label class="col-form-label col-lg-3 col-sm-12 ">Force a format</label>
                                      <div class="col-lg-6 col-md-9 col-sm-12">
                                          <div id="cp5b" class="input-group colorpicker-component colorpicker-element" title="Using format option" data-colorpicker-id="7">
                                              <input type="text" class="form-control input-lg" value="#31c3b2">
                                              <div class="input-group-append">
                                                  <span class="input-group-addon btn btn-outline-secondary"><i style="background-color: rgb(49, 195, 178);"></i></span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="form-group row">
                                      <label class="col-form-label col-lg-3 col-sm-12 ">Horizontal mode </label>
                                      <div class="col-lg-6 col-md-9 col-sm-12">
                                          <div id="cp6" class="input-group colorpicker-component colorpicker-element" title="Using horizontal option" data-colorpicker-id="8">
                                              <input type="text" class="form-control input-lg" value="#b756ff">
                                              <div class="input-group-append">
                                                  <span class="input-group-addon btn btn-outline-secondary"><i style="background-color: rgb(183, 86, 255);"></i></span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!--color picker end-->

              <!--Spinner start-->
              <div class="row">
                  <div class="col-md-12">
                      <section class="card">
                          <header class="card-header">
                              Spinner
                              <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                          </header>
                          <div class="card-body">
                              <form action="#" class="form-horizontal tasi-form">
                                      <div class="form-group row">
                                          <label class="control-label col-md-3">Spinner 1</label>
                                          <div class="col-md-2">
                                              <div id="spinner1">
                                                  <div class="input-group input-small">
                                                      <input type="text" class="spinner-input form-control" maxlength="3" readonly>
                                                      <div class="spinner-buttons input-group-btn btn-group-vertical">
                                                          <button type="button" class="btn spinner-up btn-xs btn-default">
                                                              <i class="fa fa-angle-up"></i>
                                                          </button>
                                                          <button type="button" class="btn spinner-down btn-xs btn-default">
                                                              <i class="fa fa-angle-down"></i>
                                                          </button>
                                                      </div>
                                                  </div>
                                              </div>
                                             <span class="help-block">
                                                basic example
                                             </span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="control-label col-md-3">Spinner 2</label>
                                          <div class="col-md-2">
                                              <div id="spinner2">
                                                  <div class="input-group input-small">
                                                      <input type="text" class="spinner-input form-control" maxlength="3" readonly>
                                                      <div class="spinner-buttons input-group-btn btn-group-vertical">
                                                          <button type="button" class="btn spinner-up btn-xs btn-danger">
                                                              <i class="fa fa-angle-up"></i>
                                                          </button>
                                                          <button type="button" class="btn spinner-down btn-xs btn-danger">
                                                              <i class="fa fa-angle-down"></i>
                                                          </button>
                                                      </div>
                                                  </div>
                                              </div>
                                             <span class="help-block">
                                                disabled state
                                             </span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="control-label col-md-3">Spinner 3</label>
                                          <div class="col-md-9">
                                              <div id="spinner3">
                                                  <div class="input-group" style="width:150px;">
                                                      <input type="text" class="spinner-input form-control mr-2" maxlength="3" readonly>
                                                      <div class="spinner-buttons input-group-btn">
                                                          <button type="button" class="btn btn-default spinner-up">
                                                              <i class="fa fa-angle-up"></i>
                                                          </button>
                                                          <button type="button" class="btn btn-default spinner-down">
                                                              <i class="fa fa-angle-down"></i>
                                                          </button>
                                                      </div>
                                                  </div>
                                              </div>
                                 <span class="help-block">
                                 with max value: 10
                                 </span>
                                          </div>
                                      </div>
                                      <div class="form-group row ">
                                          <label class="control-label col-md-3">Spinner 4</label>
                                          <div class="col-md-9">
                                              <div id="spinner4">
                                                  <div class="input-group" style="width:150px;">
                                                      <div class="spinner-buttons input-group-btn">
                                                          <button type="button" class="btn spinner-up btn-warning">
                                                              <i class="fa fa-plus"></i>
                                                          </button>
                                                      </div>
                                                      <input type="text" class="spinner-input form-control mx-2" maxlength="3" readonly>
                                                      <div class="spinner-buttons input-group-btn">
                                                          <button type="button" class="btn spinner-down btn-danger">
                                                              <i class="fa fa-minus"></i>
                                                          </button>
                                                      </div>
                                                  </div>
                                              </div>
                                             <span class="help-block">
                                                with step: 5
                                             </span>
                                          </div>
                                      </div>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!--Spinner end-->

              <!--Advanced File Input start-->
              <div class="row">
                  <div class="col-md-12">
                      <section class="card">
                          <header class="card-header">
                              Advanced File Input
                                  <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                </span>
                          </header>
                          <div class="card-body">
                              <form action="#" class="form-horizontal tasi-form">
                                      <div class="form-group row">
                                          <label class="control-label col-md-3">Default</label>
                                          <div class="col-md-4">
                                              <input type="file" class="default" />
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="control-label col-md-3">Without input</label>
                                          <div class="controls col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" class="default" />
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group row last">
                                          <label class="control-label col-md-3">Image Upload</label>
                                          <div class="col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" />
                                                   </span>
                                                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                                  </div>
                                              </div>
                                              <span class="badge badge-danger">NOTE!</span>
                                             <span>
                                             Attached image thumbnail is
                                             supported in Latest Firefox, Chrome, Opera,
                                             Safari and Internet Explorer 10 only
                                             </span>
                                          </div>
                                      </div>

                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!--Advanced File Input end-->

          <!-- page end-->
          </section>
      </section>
      <!--main content end-->

      <!-- Right Slidebar start -->
      <div class="sb-slidebar sb-right sb-style-overlay">
          <h5 class="side-title">Online Customers</h5>
          <ul class="quick-chat-list">
              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/chat-avatar2.jpg" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <strong>John Doe</strong>
                          <small>Dream Land, AU</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/chat-avatar.jpg" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-important">3</span>
                          </div>
                          <strong>Jonathan Smith</strong>
                          <small>United States</small>
                      </div>
                  </div><!-- media -->
              </li>

              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/pro-ac-1.png" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge badge-success">5</span>
                          </div>
                          <strong>Jane Doe</strong>
                          <small>ABC, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/avatar1.jpg" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <strong>Anjelina Joli</strong>
                          <small>Fockland, UK</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/mail-avatar.jpg" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-warning">7</span>
                          </div>
                          <strong>Mr Tasi</strong>
                          <small>Dream Land, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
          </ul>
          <h5 class="side-title"> pending Task</h5>
          <ul class="p-task tasks-bar">
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">40%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-striped bg-success">
                              <span class="sr-only">40% Complete (success)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Database Update</div>
                          <div class="percent">60%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-striped bg-warning">
                              <span class="sr-only">60% Complete (warning)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Iphone Development</div>
                          <div class="percent">87%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 87%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-striped bg-info">
                              <span class="sr-only">87% Complete</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Mobile App</div>
                          <div class="percent">33%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-striped bg-danger">
                              <span class="sr-only">33% Complete (danger)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">45%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-striped">
                              <span class="sr-only">45% Complete</span>
                          </div>
                      </div>

                  </a>
              </li>
              <li class="external">
                  <a href="#">See All Tasks</a>
              </li>
          </ul>
      </div>
      <!-- Right Slidebar end -->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2018 &copy; FlatLab by VectorLab.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
  
    <!--this page plugins-->

  <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

  <!--select2-->
  <script type="text/javascript" src="assets/select2/js/select2.min.js"></script>

  <!--summernote-->
  <script src="assets/summernote/summernote-bs4.min.js"></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>


  <!--multiselect start + spinner + wysihtml5 scripts-->
  <script src="js/advanced-form-components.js"></script>
  <!--pickers script-->
  <script src="js/pickers/init-date-picker.js"></script>
  <script src="js/pickers/init-datetime-picker.js"></script>
  <script src="js/pickers/init-color-picker.js"></script>

  <!--bootstrap-switch-->
  <script src="assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>

  <!--bootstrap-switch-->
  <script src="assets/switchery/switchery.js"></script>

  <!--common script for all pages-->
  <script src="js/common-scripts.js"></script>

  <script>

      jQuery(document).ready(function(){

          $('.summernote').summernote({
              height: 200,                 // set editor height

              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor

              focus: true                 // set focus to editable area after initializing summernote
          });
      });

  </script>

    <!--select2-->
  <script type="text/javascript">

      $(document).ready(function () {
          $(".js-example-basic-single").select2();

          $(".js-example-basic-multiple").select2();
      });
  </script>

  <!--bootstrap swither-->
  <script type="text/javascript">
      $(document).ready(function () {
          // Resets to the regular style
          $('#dimension-switch').bootstrapSwitch('setSizeClass', '');
          // Sets a mini switch
          $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-mini');
          // Sets a small switch
          $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-small');
          // Sets a large switch
          $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-large');


          $('#change-color-switch').bootstrapSwitch('setOnClass', 'success');
          $('#change-color-switch').bootstrapSwitch('setOffClass', 'danger');
      });
  </script>

  <!-- swithery-->
  <script type="text/javascript">
      $(document).ready(function () {
          //default
          var elem = document.querySelector('.js-switch');
          var init = new Switchery(elem);


          //small
          var elem = document.querySelector('.js-switch-small');
          var switchery = new Switchery(elem, { size: 'small' });

          //large
          var elem = document.querySelector('.js-switch-large');
          var switchery = new Switchery(elem, { size: 'large' });


          //blue color
          var elem = document.querySelector('.js-switch-blue');
          var switchery = new Switchery(elem, { color: '#7c8bc7', jackColor: '#9decff' });

          //green color
          var elem = document.querySelector('.js-switch-yellow');
          var switchery = new Switchery(elem, { color: '#FFA400', jackColor: '#ffffff' });

          //red color
          var elem = document.querySelector('.js-switch-red');
          var switchery = new Switchery(elem, { color: '#ff6c60', jackColor: '#ffffff' });


      });
  </script>


  </body>
</html>

