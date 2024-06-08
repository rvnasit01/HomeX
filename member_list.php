<!--This member_list is for admin_page-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HomeX</title>

    <!-- Favicons -->
    <link href="img/1.ico" rel="icon">
    <link href="img/1.ico">

    <!-- Bootstrap core CSS -->

    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
    <link href="dist/jquery.bootgrid.css" rel="stylesheet" />
    <script src="dist/jquery-1.11.1.min.js"></script>
    <script src="dist/bootstrap.min.js"></script>
    <script src="dist/jquery.bootgrid.min.js"></script>


</head>

<body>
    <section id="container">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo"><b>Home<span>X</span></b></a>
            <!--logo end-->

            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="#"><img src="img/3.jpg" class="img-circle" width="80"></a></p>

                    <li class="mt">
                        <a href="admin_page.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a class="active" href="javascript:;">
                            <i class="fa fa-address-book-o"></i>
                            <span>Society Members</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a href="member_list.php">Society Members Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-address-card-o"></i>
                            <span>Committee Members</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Committee.php">Committee Members Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cc-paypal"></i>
                            <span>Maintance</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Maintance_Pay.php">Maintance Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cogs"></i>
                            <span>Components</span>
                        </a>
                        <ul class="sub">
                            <li><a href="calendar.php">Calendar</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-ambulance"></i>
                            <span>Emergency Contact</span>
                        </a>
                        <ul class="sub">
                            <li><a href="emergency_contact.php">Contact</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-user-secret"></i>
                            <span>Security</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Security.php">Security Gurd Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-car"></i>
                            <span>Visitor</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Visitor_data.php">Visitor Records</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-bullhorn"></i>
                            <span>Notice Board</span>
                        </a>
                        <ul class="sub">
                            <li><a href="notice_board.php">Notice</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-balance-scale"></i>
                            <span>Complaints</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Complaints.php">Complaints</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-facebook"></i>
                            <span>Financial</span>
                        </a>
                        <ul class="sub">
                            <li><a href="add_expense.php">Add income/expense</a></li>
                            <li><a href="manage_expense.php">Manage expense</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cart-plus"></i>
                            <span>Service Providers</span>
                        </a>
                        <ul class="sub">
                            <li><a href="service_providers.php">Contact</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-info-circle"></i>
                            <span>Society info</span>
                        </a>
                        <ul class="sub">
                            <li><a href="society_info.php">Information</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="google_maps.php">
                            <i class="fa fa-map-marker"></i>
                            <span>Google Maps </span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
                <br>

                <div class="container">
                    <div class="">
                        <div class="col-sm-8">
                            <div class="well clearfix">
                                <center>
                                    <h1>Society Member List</h1>
                                </center>
                                <div class="pull-right"><button type="button" class="btn btn-xs btn-primary"
                                        id="command-add" data-row-id="0">
                                        <span class="glyphicon glyphicon-plus"></span> Record</button></div>
                            </div>
                            <table id="employee_grid" class="table table-condensed table-hover table-striped"
                                width="60%" cellspacing="0" data-toggle="bootgrid">
                                <thead>
                                    <tr>
                                        <th data-column-id="id" data-type="numeric" data-identifier="true">id</th>
                                        <th data-column-id="member_name">Name</th>
                                        <th data-column-id="flat_no">Flat_no</th>
                                        <th data-column-id="member_no">Member_no</th>
                                        <th data-column-id="commands" data-formatter="commands" data-sortable="false">
                                            Commands</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

                <div id="add_model" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Add Member</h4>
                            </div>
                            <div class="modal-body">
                                <form method="post" id="frm_add">
                                    <input type="hidden" value="add" name="action" id="action">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Name:</label>
                                        <input type="text" class="form-control" id="name" name="name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="salary" class="control-label">Flat_no:</label>
                                        <input type="text" class="form-control" id="flat_no" name="flat_no" />
                                    </div>
                                    <div class="form-group">
                                        <label for="salary" class="control-label">Member_no:</label>
                                        <input type="text" class="form-control" id="member_no" name="member_no" />
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" id="btn_add" class="btn btn-primary">Save</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="edit_model" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Edit member</h4>
                            </div>
                            <div class="modal-body">
                                <form method="post" id="frm_edit">
                                    <input type="hidden" value="edit" name="action" id="action">
                                    <input type="hidden" value="0" name="edit_id" id="edit_id">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Name:</label>
                                        <input type="text" class="form-control" id="edit_name" name="edit_name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="salary" class="control-label">Flat_no:</label>
                                        <input type="text" class="form-control" id="edit_flat" name="edit_flat" />
                                    </div>
                                    <div class="form-group">
                                        <label for="salary" class="control-label">Member_no:</label>
                                        <input type="text" class="form-control" id="edit_number" name="edit_number" />
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" id="btn_edit" class="btn btn-primary">Save</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


            </section>
            <!-- /wrapper -->
        </section>
        <!-- /MAIN CONTENT -->
        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                <p>
                    &copy; Copyrights <strong>HomeX</strong>. All Rights Reserved
                </p>
                <a href="blank.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster ///--<script src="lib/jquery/jquery.min.js"></script>--/// -->

    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="lib/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <!--script for this page-->

</body>

</html>

<script type="text/javascript">
$(document).ready(function() {
    var grid = $("#employee_grid").bootgrid({
        ajax: true,
        rowSelect: true,
        post: function() {
            /* To accumulate custom parameter with the request object */
            return {
                id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
            };
        },

        url: "response.php",
        formatters: {
            "commands": function(column, row) {
                return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" +
                    row.id + "\"><span class=\"glyphicon glyphicon-edit\"></span></button> " +
                    "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" +
                    row.id + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
            }
        }
    }).on("loaded.rs.jquery.bootgrid", function() {
        /* Executes after data is loaded and rendered */
        grid.find(".command-edit").on("click", function(e) {
            //alert("You pressed edit on row: " + $(this).data("row-id"));
            var ele = $(this).parent();
            var g_id = $(this).parent().siblings(':first').html();
            var g_name = $(this).parent().siblings(':nth-of-type(2)').html();
            console.log(g_id);
            console.log(g_name);

            //console.log(grid.data());//
            $('#edit_model').modal('show');
            if ($(this).data("row-id") > 0) {

                // collect the data
                $('#edit_id').val(ele.siblings(':first')
                    .html()); // in case we're changing the key
                $('#edit_name').val(ele.siblings(':nth-of-type(2)').html());
                $('#edit_flat').val(ele.siblings(':nth-of-type(3)').html());
                $('#edit_number').val(ele.siblings(':nth-of-type(4)').html());
            } else {
                alert('Now row selected! First select row, then click edit button');
            }
        }).end().find(".command-delete").on("click", function(e) {

            var conf = confirm('Delete ' + $(this).data("row-id") + ' items?');
            alert(conf);
            if (conf) {
                $.post('response.php', {
                    id: $(this).data("row-id"),
                    action: 'delete'
                }, function() {
                    // when ajax returns (callback), 
                    $("#employee_grid").bootgrid('reload');
                });
                //$(this).parent('tr').remove();
                //$("#employee_grid").bootgrid('remove', $(this).data("row-id"))
            }
        });
    });

    function ajaxAction(action) {
        data = $("#frm_" + action).serializeArray();
        $.ajax({
            type: "POST",
            url: "response.php",
            data: data,
            dataType: "json",
            success: function(response) {
                $('#' + action + '_model').modal('hide');
                $("#employee_grid").bootgrid('reload');
            }
        });
    }

    $("#command-add").click(function() {
        $('#add_model').modal('show');
    });
    $("#btn_add").click(function() {
        ajaxAction('add');
    });
    $("#btn_edit").click(function() {
        ajaxAction('edit');
    });
});
</script>