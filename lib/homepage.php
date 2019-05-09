<?php
    $db_host    = "localhost";
    $db_name    = 'achau';
    $db_username= 'root';
    $db_password= '';
    @mysql_connect("{$db_host}", "{$db_username}", "{$db_password}") or die("Không thể kết nối CSDL!");
    @mysql_select_db("{$db_name}") or die("Không thể kết nối CSDL!");

    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }

    $result = $conn->query("SELECT * FROM tutors");
    $result1 = $conn->query("SELECT * FROM students");
    $result2 = $conn->query("SELECT * FROM classes");
    $result3 = $conn->query("SELECT * FROM employee");
?>

<div class="row" style="padding-top: 10px;">
    <img src="images/573.jpg" width="100%">
</div>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-male fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $result->num_rows; ?></div>
                        <div>Giáo viên</div>
                    </div>
                </div>
            </div>
            <a href="?thread=tutors">
                <div class="panel-footer">
                    <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $result1->num_rows; ?></div>
                        <div>Học viên</div>
                    </div>
                </div>
            </div>
            <a href="?thread=students">
                <div class="panel-footer">
                    <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-bar-chart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $result2->num_rows; ?></div>
                        <div>Lớp học</div>
                    </div>
                </div>
            </div>
            <a href="?thread=classes">
                <div class="panel-footer">
                    <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-cogs fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $result3->num_rows; ?></div>
                        <div>Nhân viên</div>
                    </div>
                </div>
            </div>
            <a href="?thread=employee">
                <div class="panel-footer">
                    <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div> 
</div>