<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>
    <!-- Bootstrap -->
    <link href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets/vendors/font-awesome/css/nprogress.css')}}" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="{{asset('assets/build/css/custom.min.css')}}" rel="stylesheet">


    <!-- Custom styling plus plugins -->
    <link href="{{asset('assets/build/css/custom.min.css" rel="stylesheet')}}">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('assets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{{asset('assets/vendors/pnotify/dist/pnotify.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('assets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{asset('assets/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{asset('assets/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{asset('assets/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{asset('assets/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="{{asset('assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="{{asset('assets/vendors/normalize-css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="{{asset('assets/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="{{asset('assets/vendors/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/vendors/cropper/dist/cropper.min.css')}}" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="{{asset('assets/vendors/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/fullcalendar/dist/fullcalendar.print.css')}}" rel="stylesheet" media="print">
    <!-- Datatables -->

    <link href="{{asset('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('assets/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet" />

</head>

<body class="nav-md">
    <div class="container body">

        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Bootstrap admin template</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{asset('assets/images/img.jpg')}}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{Auth::user()->name}}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('exel')}}">impor expor exel</a></li>
                                        <li><a href="{{route ('dashboard1')}}">Dashboard2</a></li>
                                        <li><a href="{{route ('dashboard2')}}">Dashboard3</a></li>
                                        

                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('form')}}">General Form</a></li>
                                        <li><a href="{{route('form_advanced')}}">Advanced Components</a></li>
                                        <li><a href="{{route('form_validation')}}">Form Validation</a></li>
                                        <li><a href="{{route('form_wizards')}}">Form Wizard</a></li>
                                        <li><a href="{{route('form_buttons')}}">Form Buttons</a></li>
                                        <li><a href="{{route('file.upload')}}">Form Buttons</a></li>

                                    </ul>
                                </li>
                                <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('general_elements')}}">General Elements</a></li>
                                        <li><a href="{{route('media_gallery')}}">Media Gallery</a></li>
                                        <li><a href="{{route('typography')}}">Typography</a></li>
                                        <li><a href="{{route('icons')}}">Icons</a></li>
                                        <li><a href="{{route('glyphicons')}}">Glyphicons</a></li>
                                        <li><a href="{{route('widgets')}}">Widgets</a></li>
                                        <li><a href="{{route('invoice')}}">Invoice</a></li>
                                        <li><a href="{{route('inbox')}}">Inbox</a></li>

                                    </ul>
                                </li>
                                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('tables')}}">Tables</a></li>
                                        <li><a href="{{route('tables_dynamic')}}">Table Dynamic</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('chartjs')}}">Chart JS</a></li>
                                        <li><a href="{{route('chartjs2')}}">Chart JS2</a></li>
                                        <li><a href="{{route('morisjs')}}">Moris JS</a></li>
                                        <li><a href="{{route('echarts')}}">ECharts</a></li>
                                        <li><a href="{{route('other_charts')}}">Other Charts</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('fixed_sidebar')}}">Fixed Sidebar</a></li>
                                        <li><a href="{{route('fixed_footer')}}">Fixed Footer</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Live On</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('e_commerce')}}">E-commerce</a></li>

                                        <li><a href="{{route('project_detail')}}">Project Detail</a></li>
                                        <li><a href="{{route('contacts')}}">Contacts</a></li>
                                        <li><a href="{{route('profile')}}">Profile</a></li>
                                        <li><a href="{{route('projects')}}">Projects</a></li>

                                    </ul>
                                </li>
                                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('plain_page')}}">Plain Page</a></li>
                                        <li><a href="{{route('pricing_tables')}}">Pricing tables</a></li>
                                        <li><a href="{{route('loginform')}}">Login Page</a></li>
                                        <li><a href="{{route('page_403')}}">403 Error</a></li>
                                        <li><a href="{{('page_404')}}">404 Error</a></li>
                                        <li><a href="{{('page_500')}}">500 Error</a></li>


                                    </ul>
                                </li>
                                <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="#level1_1">Level One</a>
                                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li class="sub_menu"><a href="level2.html">Level Two</a>
                                                </li>
                                                <li><a href="#level2_1">Level Two</a>
                                                </li>
                                                <li><a href="#level2_2">Level Two</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#level1_2">Level One</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                            </ul>
                        </div>

                    </div>
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
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </form>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('assets/images/img.jpg')}}" alt="">{{Auth::user()->name}}
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a class="dropdown-item" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            logout
                                        </a>
                                    </form>
                                </div>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src=" {{asset('assets/images/img.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="{{asset('assets/images/img.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="{{asset('assets/images/img.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="{{asset('assets/images/img.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
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
            <div>
                @yield('contenu')
            </div>




            <!-- jQuery -->
            <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
            <!-- jQuery Sparklines -->
            <script src="{{asset('assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>

            <!-- Bootstrap -->
            <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
            <!-- FastClick -->
            <script src="{{asset('assets/vendors/fastclick/lib/fastclick.js')}}"></script>
            <!-- NProgress -->
            <script src="{{asset('assets/vendors/nprogress/nprogress.js')}}"></script>
            <!-- Chart.js -->
            <script src="{{asset('assets/vendors/Chart.js/dist/Chart.min.js')}}"></script>


            <!-- Flot -->
            <script src="{{asset('assets/vendors/Flot/jquery.flot.js')}}"></script>
            <script src="{{asset('assets/vendors/Flot/jquery.flot.pie.js')}}"></script>
            <script src="{{asset('assets/vendors/Flot/jquery.flot.time.js')}}"></script>
            <script src="{{asset('assets/vendors/Flot/jquery.flot.stack.js')}}"></script>
            <script src="{{asset('assets/vendors/Flot/jquery.flot.resize.js')}}"></script>
            <!-- Flot plugins -->
            <script src="{{asset('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
            <script src="{{asset('assets/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
            <script src="{{asset('assets/vendors/flot.curvedlines/curvedLines.js')}}"></script>
            <!-- DateJS -->
            <script src="{{asset('assets/vendors/DateJS/build/date.js')}}"></script>
            <!-- bootstrap-daterangepicker -->
            <script src="{{asset('assets/vendors/moment/min/moment.min.js')}}"></script>
            <script src="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

            <!-- Custom Theme Scripts -->
            <script src="{{asset('assets/build/js/custom.min.js')}}"></script>
            <!-- morris.js -->
            <script src="{{asset('assets/vendors/raphael/raphael.min.js')}}"></script>
            <script src="{{asset('assets/vendors/morris.js/morris.min.js')}}"></script>
            <!-- gauge.js -->
            <script src="{{asset('assets/vendors/gauge.js/dist/gauge.min.js')}}"></script>
            <!-- bootstrap-progressbar -->
            <script src="{{asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
            <!-- Skycons -->
            <script src="{{asset('assets/vendors/skycons/skycons.js')}}"></script>
            <!-- iCheck -->
            <script src="{{asset('assets/vendors/iCheck/skins/flat/green.js')}}"></script>
            <!-- bootstrap-progressbar -->
            <script src="{{asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.js')}}"></script>
            <!-- PNotify -->
            <script src="{{asset('assets/vendors/pnotify/dist/pnotify.js')}}"></script>
            <script src="{{asset('assets/vendors/pnotify/dist/pnotify.buttons.js')}}"></script>
            <script src="{{asset('assets/vendors/pnotify/dist/pnotify.nonblock.js')}}"></script>
            <!-- bootstrap-wysiwyg -->
            <script src="{{asset('assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
            <script src="{{asset('assets/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
            <script src="{{asset('assets/vendors/google-code-prettify/src/prettify.js')}}"></script>
            <!-- jQuery Tags Input -->
            <script src="{{asset('assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
            <!-- Switchery -->
            <script src="{{asset('assets/vendors/switchery/dist/switchery.min.js')}}"></script>
            <!-- Select2 -->
            <script src="{{asset('assets/vendors/select2/dist/js/select2.full.min.js')}}"></script>
            <!-- Parsley -->
            <script src="{{asset('assets/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
            <!-- Autosize -->
            <script src="{{asset('assets/vendors/autosize/dist/autosize.min.js')}}"></script>
            <!-- jQuery autocomplete -->
            <script src="{{asset('assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
            <!-- starrr -->
            <script src="{{asset('assets/vendors/starrr/dist/starrr.js')}}"></script>
            <!-- bootstrap-daterangepicker -->
            <script src="{{asset('assets/vendors/moment/min/moment.min.js')}}"></script>
            <script src="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
            <!-- bootstrap-datetimepicker -->
            <script src="{{asset('assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
            <!-- Ion.RangeSlider -->
            <script src="{{asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
            <!-- Bootstrap Colorpicker -->
            <script src="{{asset('assets/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
            <!-- jquery.inputmask -->
            <script src="{{asset('assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
            <!-- jQuery Knob -->
            <script src="{{asset('assets/vendors/jquery-knob/dist/jquery.knob.min.js')}}"></script>
            <!-- Cropper -->
            <script src="{{asset('assets/vendors/cropper/dist/cropper.min.js')}}"></script>

            <!-- Custom Theme Scripts -->
            <script src="{{asset('assets/build/js/custom.min.js')}}"></script>
            <!-- jQuery Smart Wizard -->
            <script src="{{asset('assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
            <!-- Dropzone.js -->
            <script src="{{asset('assets/vendors/dropzone/dist/min/dropzone.min.js')}}"></script>
            <!-- easy-pie-chart -->
            <script src="{{asset('assets/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>

            <!-- FullCalendar -->
            <script src="{{asset('assets/vendors/moment/min/moment.min.js')}}"></script>
            <script src="{{asset('assets/vendors/fullcalendar/dist/fullcalendar.min.js')}}"></script>
            <!-- Datatables -->
            <script src="{{asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
            <script src="{{asset('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
            <script src="{{asset('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
            <script src="{{asset('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
            <script src="{{asset('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
            <script src="{{asset('assets/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
            <script src="{{asset('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
            <script src="{{asset('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
            <script src="{{asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
            <script src="{{asset('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
            <script src="{{asset('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
            <script src="{{asset('assets/vendors/jszip/dist/jszip.min.js')}}"></script>
            <script src="{{asset('assets/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
            <script src="{{asset('assets/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
            <!-- ECharts -->
            <script src="{{asset('assets/vendors/echarts/dist/echarts.min.js')}}"></script>
            <script src="{{asset('assest/vendors/echarts/map/js/world.js')}}"></script>
            <!-- JQVMap -->
            <script src="{{asset('assets/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
            <script src="{{asset('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
            <script src="{{asset('assets/vendors/jqvmap/dist/maps/jquery.vmap.usa.js')}}"></script>
            <script src="{{asset('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
            <!-- easy-pie-chart -->
            <script src="{{asset('assets/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>



            <!-- Initialize datetimepicker -->
            <script type="text/javascript">
                $(function() {
                    $('#myDatepicker').datetimepicker();
                });

                $('#myDatepicker2').datetimepicker({
                    format: 'DD.MM.YYYY'
                });

                $('#myDatepicker3').datetimepicker({
                    format: 'hh:mm A'
                });

                $('#myDatepicker4').datetimepicker({
                    ignoreReadonly: true,
                    allowInputToggle: true
                });

                $('#datetimepicker6').datetimepicker();

                $('#datetimepicker7').datetimepicker({
                    useCurrent: false
                });

                $("#datetimepicker6").on("dp.change", function(e) {
                    $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
                });

                $("#datetimepicker7").on("dp.change", function(e) {
                    $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
                });
            </script>
</body>

</html>