<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" style="color: red;">Trung Tâm Anh Ngữ Á Châu</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
    	<li>
            <a>
                <span class="glyphicon glyphicon-user"></span> Xin chào: <?php echo $_SESSION['user_name']; ?>
            </a>
        </li>
    	<li>
            <a href="?thread=logout">
                <span class="glyphicon glyphicon-log-out"></span> Thoát
            </a>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="index.php"><i class="fa fa-home fa-fw"></i> Trang chủ</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-calendar fa-fw"></i> Quản lý chung<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="?thread=levels"><i class="fa fa-road fa-fw"></i> Cấp độ</a>
                        </li>
                       <!--  <li>
                            <a href="?thread=classes"><i class="fa fa-desktop fa-fw"></i> Mã lớp</a>
                        </li> -->
                        <li>
                            <a href="?thread=schedule"><i class="fa fa-list-alt fa-fw"></i> Lịch học</a>
                        </li>
                        <li>
                            <a href="?thread=times"><i class="fa fa-clock-o fa-fw"></i> Giờ học</a>
                        </li>
                    </ul>
                </li>  

                <li>
                    <a href="?thread=tutors"><i class="fa fa-male fa-fw"></i> Quản lý Giáo viên</a>
                </li>  

                <li>
                    <a href="?thread=employee"><i class="fa fa-users fa-fw"></i> Quản lý Nhân viên</a>
                </li>

                <li>
                    <a href="?thread=students"><i class="fa fa-child fa-fw"></i> Quản lý Học viên</a>
                </li>

                <li>
                    <a href="?thread=dayoff"><i class="fa fa-exclamation-circle fa-fw"></i> Quản lý ngày nghỉ</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý lớp học<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="?thread=auto_classes">Lớp học chuyển</a>
                        </li>
                        <li>
                            <a href="?thread=manual_classes">Lớp học không chuyển</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="?thread=fee"><i class="fa fa-search fa-fw"></i> Tìm kiếm<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <!-- <li>
                            <a href="?thread=get-fee">Thu học phí</a>
                        </li> -->
                        <!-- <li>
                            <a href="?thread=fee-table">Tìm học phí</a>
                        </li> -->
                        <li>
                            <a href="?thread=students-search">Tìm kiếm học viên</a>
                        </li>
                        <li>
                            <a href="?thread=classes-search">Tìm kiếm lớp học</a>
                        </li>
                        <li>
                            <a href="?thread=expried">Học phí hết hạn</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>