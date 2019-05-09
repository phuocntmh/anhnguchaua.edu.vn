<?php
	if(!isset($_GET["thread"]))
  	{
    	$_GET["thread"]='home';
  	}
?>
<div class="container" style="width: 100%;">
  <div class="row">
    <?php
      if (isset($_SESSION['user_id']))
      {
        include_once("lib/header.php");
      }
      else
      {
        include_once("lib/login.php");
      }
    ?>
  </div>
  <div style="clear: both;"></div>

  <div class="row">
    <div id="page-wrapper">
      <?php
        switch($_GET["thread"])
        {
          case "home":
          {
            if (isset($_SESSION['user_id']))
            {
              include_once("lib/homepage.php");
              break;
            }
            else
            {
              include_once("lib/login.php");
              break;
            }
          }
          case "do_login":
          {
            include_once("do/do_login.php");
            break;
          }
          case "logout":
          {
            include_once("do/logout.php");
            break;
          }
          case "schedule":
          {
            include_once("lib/schedule.php");
            break;
          }
          
          case "levels":
          {
            include_once("lib/levels.php");
            break;
          }
          
          case "classes":
          {
            include_once("lib/classes.php");
            break;
          }
          
          case "times":
          {
            include_once("lib/times.php");
            break;
          }
          
          case "tutors":
          {
            include_once("lib/tutors.php");
            break;
          }
          
          case "employee":
          {
            include_once("lib/employee.php");
            break;
          }
          
          case "students":
          {
            include_once("lib/students.php");
            break;
          }
          
          case "dayoff":
          {
            include_once("lib/dayoff.php");
            break;
          }
          
          case "auto_classes":
          {
            include_once("lib/auto_classes.php");
            break;
          }

          case "manual_classes":
          {
            include_once("lib/manual_classes.php");
            break;
          }

          case "get-fee":
          {
            include_once("lib/fee.php");
            break;
          }

          case "fee-table":
          {
            include_once("lib/fee_table.php");
            break;
          }
          
          case "expried":
          {
            include_once("lib/expried.php");
            break;
          }

          case "fee-table-result":
          {
            include_once("lib/fee_result.php");
            break;
          }

          case "expried-search":
          {
            include_once("lib/expried_search.php");
            break;
          }

          case "students-search":
          {
            include_once("lib/students_search.php");
            break;
          }

          case "students-search-result":
          {
            include_once("lib/students_search_result.php");
            break;
          }

          case "classes-search":
          {
            include_once("lib/classes_search.php");
            break;
          }

          case "classes-search-result":
          {
            include_once("lib/classes_search_result.php");
            break;
          }
        }
      ?>
    </div>
  </div>
  <div style="clear: both;"></div>
</div>