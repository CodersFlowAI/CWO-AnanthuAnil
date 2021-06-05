<?php 
  session_start();

  if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) { 
?>

<!--
-----------------
  HTML CODE 
-----------------
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/0e7d5843d0.js" crossorigin="anonymous"></script>
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
</head>

<body>
  <!-- container section start -->
  <section id="container" >


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="fas fa-bars hovery"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">CCA <span class="lite">Agent Portal</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fas fa-tasks"></i>
                            <span class="badge bg-important">6</span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 6 pending letter</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="far fa-envelope"></i>
              <span class="badge bg-important">5</span>
            </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                <span class="subject">
                  <span class="from">Greg  Martin</span>
                  <span class="time">1 min</span>
                </span>
                <span class="message">
                  Done with my Case!
                </span>
              </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                  <span class="subject">
                    <span class="from">Bob   Mckenzie</span>
                    <span class="time">5 mins</span>
                  </span>
                  <span class="message">
                    Hi, What is the next step after recon?
                  </span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                  <span class="subject">
                    <span class="from">Phillip   Park</span>
                    <span class="time">2 hrs</span>
                  </span>
                  <span class="message">
                    Can I have a holiday tomo?
                  </span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                  <span class="subject">
                    <span class="from">Ray   Munoz</span>
                    <span class="time">1 day</span>
                  </span>
                  <span class="message">
                    Case Solved.
                  </span>
                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="far fa-bell"></i>
              <span class="badge bg-important">7</span>
            </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                  <span class="label label-primary"><i class="icon_profile"></i></span>
                  Friend Request
                  <span class="small italic pull-right">5 mins</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-warning"><i class="icon_pin"></i></span>
                  John location.
                  <span class="small italic pull-right">50 mins</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-danger"><i class="icon_book_alt"></i></span>
                  Project 3 Completed.
                  <span class="small italic pull-right">1 hr</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-success"><i class="icon_like"></i></span>
                  Mick appreciated your work.
                  <span class="small italic pull-right"> Today</span>
                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="profile-ava">
                    <img alt="" src="img/avatar1_small.jpg">
                </span>
                <span class="username">
                  <?php
                    echo $_SESSION['user_full_name'];
                  ?>
                </span>
            </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"><i class="fas fa-caret-up"></i></div>
              <li class="eborder-top">
                <a href="#"><i class="fas fa-id-badge"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="far fa-envelope"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="far fa-clock"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="far fa-comment-dots"></i> Chats</a>
              </li>
              <li>
                <a href="login.php"><i class="fas fa-sign-out-alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a  href="index.html">
              <i class="fas fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fas fa-users"></i>
              <span>Community</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a  href="#">Individual Message</a></li>
              <li><a  href="#">Make Announcement</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fas fa-clipboard-list"></i>
              <span>Application Forms</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a  href="#">Form 1</a></li>
              <li><a  href="#">Form 2</a></li>
              <li><a  href="#">Form 3</a></li>
            </ul>
          </li>
          <li>
            <a  href="#">
              <i class="fas fa-user-secret"></i>
              <span>Agent Details</span>
            </a>
          </li>
          <li>
            <a  href="#">
              <i class="fas fa-rupee-sign"></i>
              <span>Expenditure</span>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <i class="fas fa-photo-video"></i>
              <span>Social Media Mgt</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <!-- <ul class="sub">
              <li><a  href="profile.html">Profile</a></li>
              <li><a  href="login.html"><span>Login Page</span></a></li>
              <li><a  href="contact.html"><span>Contact Page</span></a></li>
              <li><a  href="blank.html">Blank Page</a></li>
              <li><a  href="404.html">404 Error</a></li>
            </ul> -->
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">          
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fas fa-folder-open"></i><strong>Assigned Cases </strong></h2>
                <div class="panel-actions"> 
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-times"></i></a>
                </div> 
              </div>
              <div class="panel-body-map" style="height: 423px!important;">
                <div id="map" style="height: 100%">
                  <iframe src="" scrolling="form-horizontal" class="col-lg-12 col-md-12" height="83%" onerror="Under Construction!"></iframe>
                </div>
              </div> <!-- demobox -->
            </div>
          </div>
        </div>
        <!-- Today status end -->

        <!-- Cyber Case Status -->
        <?php
          // Create connection
          $dbb = new mysqli("localhost", "root", "", "main_db");

          // Check connection
          if ($dbb->connect_error) {
            die("Connection failed: " . $dbb->connect_error);
          }

          $case = "SELECT * FROM cybercases";
          $resultcase = $dbb->query($case);
          $tcase = mysqli_fetch_assoc($resultcase);
        ?>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fas fa-sync-alt"></i>
              <div class="count">
                <?php
                  print_r($tcase["ongoing_no"]);
                ?>
              </div>
              <div class="title">Ongoing Cases</div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fas fa-folder-minus"></i>
              <div class="count">
                <?php
                  print_r($tcase["total_no"]);
                ?>
              </div>
              <div class="title">Total</div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fas fa-folder-plus"></i>
              <div class="count">
                <?php
                  print_r($tcase["new_cases"]);
                ?>
              </div>
              <div class="title">New Cases per Day</div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="far fa-thumbs-up"></i>
              <div class="count">
                <?php
                  print_r($tcase["solved_no"]);
                ?>
              </div>
              <div class="title">Solved Cases</div>
            </div>
          </div>
        </div>
        <?php
          // Close connection
          $dbb->close();
        ?>
        <!-- Cyber Case Status End -->

        <div class="row">
          <div class="col-md-3">

            <div class="social-box facebook">
              <i class="fa fa-facebook"></i>
              <ul>
                <li>
                  <strong>256k</strong>
                  <span>friends</span>
                </li>
                <li>
                  <strong>359</strong>
                  <span>feeds</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->
          </div>
          <div class="col-md-3">

            <div class="social-box linkedin">
              <i class="fab fa-linkedin"></i>
              <ul>
                <li>
                  <strong>962</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>256</strong>
                  <span>connections</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box twitter">
              <i class="fa fa-twitter"></i>
              <ul>
                <li>
                  <strong>1562k</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>2562</strong>
                  <span>tweets</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <div class="col-md-3">

            <div class="social-box instagram">
              <i class="fab fa-instagram"></i>
              <ul>
                <li>
                  <strong>603</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>256</strong>
                  <span>comments</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->
        </div>
        <!-- statics end -->




        <!-- project team & activity start -->
        <div class="row">
          <div class="col-md-4 portlets">
            <!-- Widget -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fas fa-comment-dots"></i><strong>Message </strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-times"></i></a>
                </div>
              </div>

              <div class="panel-body">
                <!-- Widget content -->
                <div class="padd sscroll">

                  <ul class="chats">

                    <!-- Chat by us. Use the class "by-me". -->
                    <li class="by-me">
                      <!-- Use the class "pull-left" in avatar -->
                      <div class="avatar pull-left">
                        <img src="img/user.jpg" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In meta area, first include "name" and then "time" -->
                        <div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
                        Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <!-- Chat by other. Use the class "by-other". -->
                    <li class="by-other">
                      <!-- Use the class "pull-right" in avatar -->
                      <div class="avatar pull-right">
                        <img src="img/user22.png" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In the chat meta, first include "time" then "name" -->
                        <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                        Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <li class="by-me">
                      <div class="avatar pull-left">
                        <img src="img/user.jpg" alt="" />
                      </div>

                      <div class="chat-content">
                        <div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
                        Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <li class="by-other">
                      <!-- Use the class "pull-right" in avatar -->
                      <div class="avatar pull-right">
                        <img src="img/user22.png" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In the chat meta, first include "time" then "name" -->
                        <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                        Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                  </ul>

                </div>
                <!-- Widget footer -->
                <div class="widget-foot">

                  <form class="form-inline">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Type your message here...">
                    </div>
                    <button type="submit" class="btn btn-info">Send</button>
                  </form>


                </div>
              </div>


            </div>
          </div>

          <div class="col-lg-8">
            <!--Project Activity start-->
            <section class="panel">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-lg-12 task-progress pull-left">
                    <h2><i class="fas fa-tasks"></i><strong>To Do List </strong></h2>
                    <div class="panel-actions">
                      <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                      <a href="index.html#" class="btn-minimize"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-hover personal-task">
                  <tbody>
                    <tr>
                      <th>Date Assigned</th>
                      <th>Name of Agent</th>
                      <th>Status</th>
                      <th><span style="float: right;">Profile Pic</span></th>
                    </tr>
                    <tr>
                      <td>Today</td>
                      <td>
                        Agent 1
                      </td>
                      <td>
                        <span class="badge bg-important">REVIEW</span>
                      </td>
                      <td>
                        <span class="profile-ava">
                          <img alt="" class="simple" src="img/avatar-mini.jpg">
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>22-06-21</td>
                      <td>
                        Agent 2
                      </td>
                      <td>
                        <span class="badge bg-primary">ACTIVE</span>
                      </td>
                      <td>
                        <span class="profile-ava">
                          <img alt="" class="simple" src="img/avatar-mini2.jpg">
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>24-01-21</td>
                      <td>
                        Agent 3
                      </td>
                      <td>
                        <span class="badge bg-info">SOLVED</span>
                      </td>
                      <td>
                        <span class="profile-ava">
                          <img alt="" class="simple"  src="img/avatar-mini3.jpg">
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>28-05-21</td>
                      <td>
                        Agent 4
                      </td>
                      <td>
                        <span class="badge bg-primary">ACTIVE</span>
                      </td>
                      <td>
                        <span class="profile-ava">
                          <img alt="" class="simple"  src="img/avatar-mini4.jpg">
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>Last week</td>
                      <td>
                        Agent 5
                      </td>
                      <td>
                        <span class="badge bg-primary">ACTIVE</span>
                      </td>
                      <td>
                        <span class="profile-ava">
                          <img alt="" class="simple"  src="img/avatar-mini5.jpg">
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
            <!--Project Activity end-->
          </div>
        </div><br><br>

        <div class="row">
          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="far fa-calendar-alt"></i><strong>Calendar</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
                <div id="calendar">
                  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
          <div class="elfsight-app-fb724332-afd5-43c5-b674-ae05b6eb34c1"></div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          Copyright CCA 
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 3100,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

    </script>

</body>

</html>


<?php 
} else {
   header("Location: login.php");
}

?>