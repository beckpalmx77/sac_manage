<!DOCTYPE html>
<html lang="en">

<?php include 'includes/header.php'; ?> >

<body class="sidebar-mini fixed">
<div class="loader-bg">
    <div class="loader-bar">
    </div>
</div>

<div class="wrapper">
    <!-- Navbar-->
    <header class="main-header-top hidden-print">
        <a href="index.html" class="logo"><img src="img/logo/logo-text-01.png" width="100" height="40" alt="Theme-logo"></a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <ul class="top-nav lft-nav">
                <li>
                    <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                       class="dropdown-toggle drop icon-circle drop-image">
                        <i class="ti-files"> </i><span> Files</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                       class="dropdown-toggle drop icon-circle drop-image">
                        <span>Dropdown </span><i class=" icofont icofont-simple-down"></i>
                    </a>
                    <ul class="dropdown-menu settings-menu">
                        <li><a href="#">List item 1</a></li>
                        <li><a href="#">List item 2</a></li>
                        <li><a href="#">List item 3</a></li>
                        <li><a href="#">List item 4</a></li>
                        <li><a href="#">List item 5</a></li>
                    </ul>
                </li>
                <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                    <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                        <i class="ti-search"></i>
                    </a>
                </li>
            </ul>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu f-right">
                <!--div class="upgrade-button">
                    <a href="#" class="icon-circle txt-white btn btn-sm btn-primary upgrade-button">
                        <span>Upgrade To Pro</span>
                    </a>
                </div-->

                <ul class="top-nav">
                    <!--Notification Menu-->

                    <li class="dropdown notification-menu">
                        <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                            <i class="icon-bell"></i>
                            <span class="badge badge-danger header-badge">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media">
                              <span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-1.png" alt="User Image">
                  </span>
                                    <div class="media-body"><span class="block">Lisa sent you a mail</span><span
                                                class="text-muted block-time">2min ago</span></div>
                                </a>
                            </li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media">
                              <span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-2.png" alt="User Image">
                  </span>
                                    <div class="media-body"><span class="block">Server Not Working</span><span
                                                class="text-muted block-time">20min ago</span></div>
                                </a>
                            </li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media"><span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-3.png" alt="User Image">
                  </span>
                                    <div class="media-body"><span class="block">Transaction xyz complete</span><span
                                                class="text-muted block-time">3 hours ago</span></div>
                                </a>
                            </li>
                            <li class="not-footer">
                                <a href="#!">See all notifications.</a>
                            </li>
                        </ul>
                    </li>
                    <!-- chat dropdown -->
                    <li class="pc-rheader-submenu ">
                        <a href="#!" class="drop icon-circle displayChatbox">
                            <i class="icon-bubbles"></i>
                            <span class="badge badge-danger header-badge">5</span>
                        </a>

                    </li>
                    <!-- window screen -->
                    <li class="pc-rheader-submenu">
                        <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                            <i class="icon-size-fullscreen"></i>
                        </a>

                    </li>
                    <!-- User Menu-->
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                           class="dropdown-toggle drop icon-circle drop-image">
                            <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;"
                                       alt="User Image"></span>
                            <span>John <b>Doe</b> <i class=" icofont icofont-simple-down"></i></span>

                        </a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                            <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                            <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                            <li class="p-0">
                                <div class="dropdown-divider m-0"></div>
                            </li>
                            <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                            <li><a href="login1.html"><i class="icon-logout"></i> Logout</a></li>

                        </ul>
                    </li>
                </ul>

                <!-- search -->
                <div id="morphsearch" class="morphsearch">
                    <form class="morphsearch-form">

                        <input class="morphsearch-input" type="search" placeholder="Search..."/>

                        <button class="morphsearch-submit" type="submit">Search</button>

                    </form>
                    <div class="morphsearch-content">
                        <div class="dummy-column">
                            <h2>People</h2>
                            <a class="dummy-media-object" href="#!">
                                <img class="round"
                                     src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G"
                                     alt="Sara Soueidan"/>
                                <h3>Sara Soueidan</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img class="round"
                                     src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G"
                                     alt="Shaun Dona"/>
                                <h3>Shaun Dona</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Popular</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect"/>
                                <h3>Page Preloading Effect</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow"/>
                                <h3>Draggable Dual-View Slideshow</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Recent</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration"/>
                                <h3>Tooltip Styles Inspiration</h3>
                            </a>
                            <a class="dummy-media-object" href="#!">
                                <img src="assets/images/avatar-1.png" alt="NotificationStyles"/>
                                <h3>Notification Styles Inspiration</h3>
                            </a>
                        </div>
                    </div>
                    <!-- /morphsearch-content -->
                    <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                </div>
                <!-- search end -->
            </div>
        </nav>
    </header>

    <?php include "includes/sidebar.php"; ?>

    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Dashboard</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="row dashboard-header">
                <div class="col-lg-12 col-md-12">
                    <div class="card dashboard-product">
                        <span>Products</span>
                        <h2 class="dashboard-total-products">4500</h2>
                        <span class="label label-warning">Sales</span>Arriving Today
                        <div class="side-box">
                            <i class="ti-signal text-warning-color"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4-blocks row end -->

            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table m-b-0 photo-table">
                                    <thead>
                                    <tr class="text-uppercase">
                                        <th>Photo</th>
                                        <th>Project</th>
                                        <th>Completed</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle" src="assets/images/avatar-2.png"
                                                 alt="User">
                                        </th>
                                        <td>Appestia Project
                                            <p><i class="icofont icofont-clock-time"></i>Created 14.9.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">226,134</span>
                                            <svg class="peity" height="30" width="30">
                                                <path d="M 15.000000000000002 0 A 15 15 0 1 1 4.209902994920235 25.41987555688496 L 15 15"
                                                      fill="#2196F3"></path>
                                                <path d="M 4.209902994920235 25.41987555688496 A 15 15 0 0 1 14.999999999999996 0 L 15 15"
                                                      fill="#ccc"></path>
                                            </svg>
                                        </td>
                                        <td>50%</td>
                                        <td>October 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle" src="assets/images/avatar-4.png"
                                                 alt="User">
                                        </th>
                                        <td>Contract with belife Company
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">0.52/1.561</span>
                                            <svg class="peity" height="30" width="30">
                                                <path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                      fill="#2196F3"></path>
                                                <path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                      fill="#ccc"></path>
                                            </svg>
                                        </td>
                                        <td>70%</td>
                                        <td>November 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle" src="assets/images/avatar-1.png"
                                                 alt="User">
                                        </th>
                                        <td>Web Consultancy project
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">1,4</span>
                                            <svg class="peity" height="30" width="30">
                                                <path d="M 15.000000000000002 0 A 15 15 0 0 1 29.265847744427305 10.36474508437579 L 15 15"
                                                      fill="#2196F3"></path>
                                                <path d="M 29.265847744427305 10.36474508437579 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                      fill="#ccc"></path>
                                            </svg>
                                        </td>
                                        <td>40%</td>
                                        <td>September 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle" src="assets/images/avatar-3.png"
                                                 alt="User">
                                        </th>
                                        <td>Contract with belife Company
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">0.52/1.561</span>
                                            <svg class="peity" height="30" width="30">
                                                <path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                      fill="#2196F3"></path>
                                                <path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                      fill="#ccc"></path>
                                            </svg>
                                        </td>
                                        <td>70%</td>
                                        <td>November 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle" src="assets/images/avatar-1.png"
                                                 alt="User">
                                        </th>
                                        <td>Contract with belife Company
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">0.52/1.561</span>
                                            <svg class="peity" height="30" width="30">
                                                <path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                      fill="#2196F3"></path>
                                                <path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                      fill="#ccc"></path>
                                            </svg>
                                        </td>
                                        <td>70%</td>
                                        <td>November 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle" src="assets/images/avatar-2.png"
                                                 alt="User">
                                        </th>
                                        <td>Contract with belife Company
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">0.52/1.561</span>
                                            <svg class="peity" height="30" width="30">
                                                <path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                      fill="#2196F3"></path>
                                                <path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                      fill="#ccc"></path>
                                            </svg>
                                        </td>
                                        <td>70%</td>
                                        <td>November 21, 2015</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Main content ends -->
        <!-- Container-fluid ends -->
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web
            browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Jqurey -->
    <script src="assets/plugins/Jquery/dist/jquery.min.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="assets/plugins/classie/classie.js"></script>

    <!-- notification -->
    <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

    <!-- Sparkline charts -->
    <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

    <!-- Counter js  -->
    <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

    <!-- Echart js -->
    <script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.min.js"></script>
    <script type="text/javascript" src="assets/pages/dashboard.js"></script>
    <script type="text/javascript" src="assets/pages/elements.js"></script>
    <script src="assets/js/menu.min.js"></script>
    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function () {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            } else {
                nav.removeClass('active');
            }
        });
    </script>


    <script>
        $(document).ready(function () {
            let formData = {action: "GET_MAIN_MENU", sub_action: "GET_MASTER"};
            let dataRecords = $('#TableRecordList').DataTable({
                'lengthMenu': [[5, 10, 20, 50, 100], [5, 10, 20, 50, 100]],
                'language': {
                    search: 'ค้นหา', lengthMenu: 'แสดง _MENU_ รายการ',
                    info: 'หน้าที่ _PAGE_ จาก _PAGES_',
                    infoEmpty: 'ไม่มีข้อมูล',
                    zeroRecords: "ไม่มีข้อมูลตามเงื่อนไข",
                    infoFiltered: '(กรองข้อมูลจากทั้งหมด _MAX_ รายการ)',
                    paginate: {
                        previous: 'ก่อนหน้า',
                        last: 'สุดท้าย',ๅ
                        next: 'ต่อไป'
                    }
                },
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url': 'model/manage_menu_main_process.php',
                    'data': formData
                },
                'columns': [
                    {data: 'main_menu_id'},
                    {data: 'label'},
                    {data: 'link'},
                    {data: 'icon'},
                    {data: 'privilege'},
                    {data: 'update'},
                    {data: 'delete'}
                ]
            });

            <!-- *** FOR SUBMIT FORM *** -->
            $("#recordModal").on('submit', '#recordForm', function (event) {
                event.preventDefault();
                $('#save').attr('disabled', 'disabled');
                let formData = $(this).serialize();
                $.ajax({
                    url: 'model/manage_menu_main_process.php',
                    method: "POST",
                    data: formData,
                    success: function (data) {
                        alertify.success(data);
                        $('#recordForm')[0].reset();
                        $('#recordModal').modal('hide');
                        $('#save').attr('disabled', false);
                        dataRecords.ajax.reload();
                    }
                })
            });
            <!-- *** FOR SUBMIT FORM *** -->
        });
    </script>

</body>

</html>
