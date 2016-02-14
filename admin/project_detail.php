<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Anthony Fernando</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                   <?php include_once("sidebarmenu.php");?>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">John Doe
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Project Detail <small> design</small></h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>New Partner Contracts Consultancy</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">

                                    <div class="col-md-9 col-sm-9 col-xs-12">

                                        <ul class="stats-overview">
                                            <li>
                                                <span class="name"> Estimated budget </span>
                                                <span class="value text-success"> 2300 </span>
                                            </li>
                                            <li>
                                                <span class="name"> Total amount spent </span>
                                                <span class="value text-success"> 2000 </span>
                                            </li>
                                            <li class="hidden-phone">
                                                <span class="name"> Estimated project duration </span>
                                                <span class="value text-success"> 20 </span>
                                            </li>
                                        </ul>
                                        <br />

                                        <div id="mainb" style="height:350px;"></div>

                                        <div>

                                            <h4>Recent Activity</h4>

                                            <!-- end of user messages -->
                                            <ul class="messages">
                                                <li>
                                                    <img src="images/img.jpg" class="avatar" alt="Avatar">
                                                    <div class="message_date">
                                                        <h3 class="date text-info">24</h3>
                                                        <p class="month">May</p>
                                                    </div>
                                                    <div class="message_wrapper">
                                                        <h4 class="heading">Desmond Davison</h4>
                                                        <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                        <br />
                                                        <p class="url">
                                                            <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                            <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="images/img.jpg" class="avatar" alt="Avatar">
                                                    <div class="message_date">
                                                        <h3 class="date text-error">21</h3>
                                                        <p class="month">May</p>
                                                    </div>
                                                    <div class="message_wrapper">
                                                        <h4 class="heading">Brian Michaels</h4>
                                                        <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                        <br />
                                                        <p class="url">
                                                            <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                            <a href="#" data-original-title="">Download</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="images/img.jpg" class="avatar" alt="Avatar">
                                                    <div class="message_date">
                                                        <h3 class="date text-info">24</h3>
                                                        <p class="month">May</p>
                                                    </div>
                                                    <div class="message_wrapper">
                                                        <h4 class="heading">Desmond Davison</h4>
                                                        <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                        <br />
                                                        <p class="url">
                                                            <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                            <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- end of user messages -->


                                        </div>


                                    </div>

                                    <!-- start project-detail sidebar -->
                                    <div class="col-md-3 col-sm-3 col-xs-12">

                                        <section class="panel">

                                            <div class="x_title">
                                                <h2>Project Description</h2>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="panel-body">
                                                <h3 class="green"><i class="fa fa-paint-brush"></i> Gentelella</h3>

                                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                                <br />

                                                <div class="project_detail">

                                                    <p class="title">Client Company</p>
                                                    <p>Deveint Inc</p>
                                                    <p class="title">Project Leader</p>
                                                    <p>Tony Chicken</p>
                                                </div>

                                                <br />
                                                <h5>Project files</h5>
                                                <ul class="list-unstyled project_files">
                                                    <li><a href=""><i class="fa fa-file-word-o"></i> Functional-requirements.docx</a>
                                                    </li>
                                                    <li><a href=""><i class="fa fa-file-pdf-o"></i> UAT.pdf</a>
                                                    </li>
                                                    <li><a href=""><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a>
                                                    </li>
                                                    <li><a href=""><i class="fa fa-picture-o"></i> Logo.png</a>
                                                    </li>
                                                    <li><a href=""><i class="fa fa-file-word-o"></i> Contract-10_12_2014.docx</a>
                                                    </li>
                                                </ul>
                                                <br />

                                                <div class="text-center mtop20">
                                                    <a href="#" class="btn btn-sm btn-primary">Add files</a>
                                                    <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                                                </div>
                                            </div>

                                        </section>

                                    </div>
                                    <!-- end project-detail sidebar -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
                            <span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>

    <!-- echart -->
    <script src="js/echart/echarts-all.js"></script>
    <script src="js/echart/green.js"></script>

    <script>
        var myChart9 = echarts.init(document.getElementById('mainb'), theme);
        myChart9.setOption({
            title: {
                x: 'center',
                y: 'top',
                padding: [0, 0, 20, 0],
                text: 'Project Perfomance :: Revenue vs Input vs Time Spent',
                textStyle: {
                    fontSize: 15,
                    fontWeight: 'normal'
                }
            },
            tooltip: {
                trigger: 'axis'
            },
            toolbox: {
                show: true,
                feature: {
                    dataView: {
                        show: true,
                        readOnly: false
                    },
                    restore: {
                        show: true
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            calculable: true,
            legend: {
                data: ['Revenue', 'Cash Input', 'Time Spent'],
                y: 'bottom'
            },
            xAxis: [
                {
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            }
        ],
            yAxis: [
                {
                    type: 'value',
                    name: 'Amount',
                    axisLabel: {
                        formatter: '{value} ml'
                    }
            },
                {
                    type: 'value',
                    name: 'Hours',
                    axisLabel: {
                        formatter: '{value} °C'
                    }
            }
        ],
            series: [
                {
                    name: 'Revenue',
                    type: 'bar',
                    data: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3]
            },
                {
                    name: 'Cash Input',
                    type: 'bar',
                    data: [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3]
            },
                {
                    name: 'Time Spent',
                    type: 'line',
                    yAxisIndex: 1,
                    data: [2.0, 2.2, 3.3, 4.5, 6.3, 10.2, 20.3, 23.4, 23.0, 16.5, 12.0, 6.2]
            }
        ]
        });
    </script>

</body>

</html>