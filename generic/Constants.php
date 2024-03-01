<?php

$titleBarText = "Exam Portal by STQC";
$COPYRIGHT_STR = "Copyright © STQC IT Services, ETDC Agartala - All Rights Reserved.";
$stqcofc = "STQC";
$timeout_faculty = 1800;

function getHeaderMenu(String $relPath, String $usrName,String $fullName, String $findTree, String $replaceTree, String $findId, String $replaceId, String $findSubId, String $replaceSubId){
    $titleBar = "Exam Portal by STQC";
    //     try{
        $s = "<header class=\"main-header\">\n".
"            <title>".$titleBar."</title>\n".
"            <a class=\"logo\" style=\"cursor:pointer;\">\n".
"                <span class=\"logo-mini\">
                    <img class=\"img-circle elevation-2\" src=\"".$relPath."/res/images/exam-logo-mini.jpg\" width='40' alt=\"SEP\">
                    </span>\n".
"                <span class=\"logo-lg\">
                    <img class=\"img-circle elevation-2\" src=\"".$relPath."/res/images/exam-logo-mini.jpg\" width='40' alt=\"SEP\">
                    <b>Exam Point</b>
                </span>\n".  //<img src='res/images/jh-tagline-invert.jpg' width='150'>
"            </a>\n".
"            <nav class=\"navbar navbar-static-top\" role=\"navigation\">\n".
"                <!-- Sidebar toggle button-->\n".
"                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">\n".
"                    <span class=\"sr-only\">Toggle navigation</span>\n".
"                </a>\n".
"                <div class=\"navbar-custom-menu\">\n".
"                    <ul class=\"nav navbar-nav\">\n".
"                        <li class=\"messages-menu\">\n".
"                            <a href=\"".$relPath."/exammaster/facultyhome.php\">\n".
"                                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>\n".
"                                <span class=\"hidden-xs\">Home</span>\n".
"                            </a>\n".
"                        </li>\n".
"                        <li class=\"dropdown user user-menu\">\n".
"                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">\n".
"                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>\n".
"                                <span class=\"hidden-xs\">Welcome ".$usrName."</span>\n".
"                            </a>\n".
"                            <ul class=\"dropdown-menu\">\n".
"                                <!-- User image -->\n".
"                                <li class=\"user-header\">\n".
"                                    <i class=\"fa fa-user fa-4x\" aria-hidden=\"true\" style=\"color: white;\"></i>\n".
"                                    <p>\n".
"                                        ".$fullName."\n".
"                                        <small>section</small>\n".
"                                        <small>STQC IT Services</small>\n".
"                                    </p>\n".
"                                </li>\n".
"                                <li class=\"user-footer\" style=\"background-color:rgba(126, 123, 123, 0.37)\">\n".
"                                    <div class=\"text-center\">\n".
"                                        <a class=\"btn btn-danger btn-flat\" href=\"".$relPath."/logout.php\">Sign out</a>\n".
"                                    </div>\n".
"                                </li>\n".
"                            </ul>\n".
"                        </li>\n".
"                    </ul>\n".
"                </div>\n".
"            </nav>\n".
"        </header>\n".
"      \n".
"           \n".
"        <aside class=\"main-sidebar\" style=\"top: auto;padding-top:0px !important;\">\n".
"            <section class=\"sidebar\">\n".
"                <ul class=\"sidebar-menu\">\n".
"                    <li class='treeview' id='dasboard'>\n".
"                        <a href=\"".$relPath."/exammaster/facultyhome.php\">\n".
"                            <i class=\"fa fa-dashboard\"></i><span>Dashboard</span>\n".
"                        </a>\n".
"                    </li>\n".
"                    <li class='treeview' id='01'>\n".
"                        <a href=\"#\">\n".
"                            <i class='fa fa-users' aria-hidden='true'></i>\n".
"                            <span>Master entries</span>\n".
"                            <i class='fa fa-angle-left pull-right'></i>\n".
"                        </a>\n".
"                        <ul class='treeview-menu'>\n".
"                            <li id='0102'>\n".
"                                <a href=\"".$relPath."/master/emp_entry.php\"><i class=\"fa fa-circle-o\"></i>Faculty</a>\n".
"                            </li>\n".
"                            <li id='0101'>\n".
"                                <a href=\"".$relPath."/master/cnd_entry.php\"><i class=\"fa fa-circle-o\"></i>Candidate</a>\n".
"                            </li>\n".
"                            <li id='0103'>\n".
"                                <a href=\"".$relPath."/master/course_reg.php\"><i class=\"fa fa-circle-o\"></i>Candidate Course Regn.</a>\n".
"                            </li>\n".
"                        </ul>\n".
"                    </li>\n".
"                    <li class='treeview' id='02'>\n".
"                        <a href=\"#\">\n".
"                            <i class='fa fa-book' aria-hidden='true'></i>\n".
"                            <span>Manage Courses</span>\n".
"                            <i class='fa fa-angle-left pull-right'></i>\n".
"                        </a>\n".
"                        <ul class='treeview-menu'>\n".
"                            <li id='0201'>\n".
"                                <a href=\"".$relPath."/exammaster/courses.php\"><i class=\"fa fa-circle-o\"></i>Course</a>\n".
"                            </li>\n".
"                            <li id='0202'>\n".
"                                <a href=\"".$relPath."/exammaster/modules.php\"><i class=\"fa fa-circle-o\"></i>Modules Course Map</a>\n".
"                            </li>\n".
"                            <li id='0203'>\n".
"                                <a href=\"".$relPath."/exammaster/prep_questions.php\"><i class=\"fa fa-circle-o\"></i>Questions</a>\n".
"                            </li>\n".
"                            <li id='0204'>\n".
"                                <a href=\"".$relPath."/exammaster/qspaper.php\"><i class=\"fa fa-circle-o\"></i>Paper Set</a>\n".
"                            </li>\n".
"                            <li id='0205'>\n".
"                                <a href=\"".$relPath."/exammaster/showqsppr.php\"><i class=\"fa fa-circle-o\"></i>Show Papers</a>\n".
"                            </li>\n".
"                        </ul>\n".
"                    </li>\n".
"                    <li class='treeview' id='03'>\n".
"                        <a href=\"#\">\n".
"                            <i class='fa fa-calendar' aria-hidden='true'></i>\n".
"                            <span>Manage Exam</span>\n".
"                            <i class='fa fa-angle-left pull-right'></i>\n".
"                        </a>\n".
"                        <ul class='treeview-menu'>\n".
"                            <li id='0301'>\n".
"                                <a href=\"".$relPath."/exammaster/schedule.php\"><i class=\"fa fa-circle-o\"></i>Exam schedule</a>\n".
"                            </li>\n".
"                            <li id='0302'>\n".
"                                <a href=\"".$relPath."/exammaster/examctrl.php\"><i class=\"fa fa-circle-o\"></i>Exam Control Panel</a>\n".
"                            </li>\n".
"                        </ul>\n".
"                    </li>\n".
"                    <li class='treeview' id='04'>\n".
"                        <a href=\"#\">\n".
"                            <i class='fa fa-table' aria-hidden='true'></i>\n".
"                            <span>Reports</span>\n".
"                            <i class='fa fa-angle-left pull-right'></i>\n".
"                        </a>\n".
"                        <ul class='treeview-menu'>\n".
"                            <li id='0401'>\n".
"                                <a href=\"".$relPath."/reports/summary.php\"><i class=\"fa fa-circle-o\"></i>Summary report</a>\n".
"                            </li>\n".
"                            <li id='0402'>\n".
"                                <a href=\"".$relPath."/reports/detailed_rep.php\"><i class=\"fa fa-circle-o\"></i>Detailed report</a>\n".
"                            </li>\n".
"                        </ul>\n".
"                    </li>\n".
"                    <li class='treeview' id='07'>\n".
"                        <a href=\"#\">\n".
"                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>\n".
"                            <span>Account Management</span>\n".
"                            <i class=\"fa fa-angle-left pull-right\"></i>\n".
"                        </a>\n".
"                        <ul class=\"treeview-menu\">\n".
"                            <li id='0701'>\n".
"                                <a href=\"".$relPath."/master/chngpwd.php\"><i class=\"fa fa-circle-o\"></i>Change Password</a>\n".
"                            </li>\n".
"                        </ul>\n".
"                    </li>\n".
"                </ul>\n".
"            </section>\n".
"        </aside>";
        
            //s = s.replace(findTree, replaceTree);

            $s = str_replace($findTree, $replaceTree, $s);
            if ($findId != "" && $replaceId != "") {
                //s = s.replace(findId, replaceId);
                $s = str_replace($findId, $replaceId, $s);
            }
            if ($findSubId != "" && $replaceSubId != "") {
                //s = s.replace(findSubId, replaceSubId);
                $s = str_replace($findSubId, $replaceSubId, $s);
            }

            return $s;
  /*      } catch (Exception e) {
            e.printStackTrace();;
        }
        
        return "Hello";*/
    }


    

?>


