<?php 
if ($_GET["state"] == 'Iowa') {
    include 'E:\Program Files\xampp\htdocs\schmitzreport\local\iowa\var.php';
} elseif ($_GET["state"] == 'California') {
    include 'E:\Program Files\xampp\htdocs\schmitzreport\local\california\var.php';
}
?>
<html>
    <head>
        <title><?php echo $state?> News</title>
        <link rel="icon" type="image/gif" href="/schmitzreport/cdn/logo/favicon1.png">
    </head>
    <body>
        <style>
            a {
                color: black;
            }
            .navbar1 {
                background: url("/schmitzreport/cdn/buttons/1.png");
            }
            .navbar1:hover {
                background: url("/schmitzreport/cdn/buttons/1f.png");
            }
            .navbar2 {
                background: url("/schmitzreport/cdn/buttons/2.png");
            }
            .navbar2:hover {
                background: url("/schmitzreport/cdn/buttons/2f.png");
            }
            .navbar3 {
                background: url("/schmitzreport/cdn/buttons/3.png");
            }
            .navbar3:hover {
                background: url("/schmitzreport/cdn/buttons/3f.png");
            }
            .navbar4 {
                background: url("/schmitzreport/cdn/buttons/4.png");
            }
            .navbar4:hover {
                background: url("/schmitzreport/cdn/buttons/4f.png");
            }
            .left {
                border-color: black;
                border-style: solid;
                border-width: 1px;

                border-left-color: white;
                border-left-style: none;
                border-left-width: 0px;

                border-top-color: white;
                border-top-style: none;
                border-top-width: 0px;
            }
            .center {
                border-color: black;
                border-style: solid;
                border-width: 1px;

                border-left-color: white;
                border-left-style: none;
                border-left-width: 0px;

                border-right-color: white;
                border-right-style: none;
                border-right-width: 0px;

                border-top-color: white;
                border-top-style: none;
                border-top-width: 0px;
            }
            .right {
                border-color: black;
                border-style: solid;
                border-width: 1px;

                border-right-color: white;
                border-right-style: none;
                border-right-width: 0px;

                border-top-color: white;
                border-top-style: none;
                border-top-width: 0px;
            }
            .back {
                background: url("/schmitzreport/cdn/buttons/5.png");
            }
            .back:hover {
                background: url("/schmitzreport/cdn/buttons/5f.png");
            }
            .forward {
                background: url("/schmitzreport/cdn/buttons/7.png");
            }
            .forward:hover {
                background: url("/schmitzreport/cdn/buttons/7f.png");
            }
            .backhome {
                background: url("/schmitzreport/cdn/buttons/6.png");
            }
            .backhome:hover {
                background: url("/schmitzreport/cdn/buttons/6f.png");
            }
        </style>
        <font face="Verdana,Helvetica,Arial">
        <center>
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td>
                            <a href="#" onclick="window.history.back();" width="90" height="30"><img src="/schmitzreport/cdn/bg/blank.png" width="90" height="30" class="back"></a>
                            <a href="/schmitzreport/featured/"><img src="/schmitzreport/cdn/bg/blank.png" width="90" height="30" class="navbar1"></a><a href="/schmitzreport/contributers/"><img src="/schmitzreport/cdn/bg/blank.png" width="90" height="30" class="navbar2"></a><a href="/schmitzreport/local/"><img src="/schmitzreport/cdn/bg/blank.png" width="90" height="30" class="navbar3"></a><img src="/schmitzreport/cdn/bg/blank.png" width="90" height="30" class="navbar4">
                            <a href="#" onclick="window.history.forward();" width="90" height="30"><img src="/schmitzreport/cdn/bg/blank.png" width="90" height="30" class="forward"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="/schmitzreport/cdn/bg/blank.png" width="225" height="1">
                            <a href="/schmitzreport/">
                                <img src="/schmitzreport/cdn/bg/blank.png" width="90" height="30" class="backhome">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </center>
        <font size="2">
            <a href="#">
                <?php echo $topheadline ?>
            </a>
        </font>
        <br><br><br>
        <center>
            <font size="6">
                <a href="#">
                    <?php echo $bigtopheadline ?>
                </a>
            </font><br>
            <a href="/schmitzreport/">
                <img src="/schmitzreport/cdn/logo/logo2.png" width="610" height="85">
            </a>
        </center>
        </font>
        <center>
           <font size="2" face="Verdana,Helvetica,Arial">
               <table cellspacing="0" cellpadding="4" width="25%" align="left">
                       <tbody>
                           <tr>
                               <td class="left">
                                   <a href="<?php echo $story1link ?>">
                                       <?php  echo $story1 ?>
                                   </a>
                               </td>
                           </tr>
                           <tr>
                               <td class="left">
                                   <a href="<?php echo $story4link ?>">
                                       <?php echo $story4 ?>
                                   </a>
                               </td>
                           </tr>
                           <tr>
                               <td class="left">
                                   <a href="<?php echo $story7link ?>">
                                       <?php echo $story7 ?>
                                   </a>
                               </td>
                           </tr>
                           <tr>
                               <td class="left">
                                   <a href="<?php echo $story10link ?>">
                                       <?php echo $story10 ?>
                                   </a>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   <table cellspacing="0" cellpadding="4" width="50%" align="left">
                       <tbody>
                           <tr>
                               <td class="center">
                                   <a href="<?php echo $story2link ?>">
                                       <?php echo $story2 ?>
                                   </a>
                               </td>
                           </tr>
                           <tr>
                               <td class="center">
                                   <a href="<?php echo $story5link ?>">
                                       <?php echo $story5 ?>
                                   </a>
                               </td>
                           </tr>
                           <tr>
                               <td class="center">
                                   <a href="<?php echo $story8link ?>">
                                       <?php echo $story8 ?>
                                   </a>
                               </td>
                           </tr>
                           <tr>
                               <td class="center">
                                   <a href="<?php echo $story11link ?>">
                                       <?php echo $story11 ?>
                                   </a>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   <table cellspacing="0" cellpadding="4" width="25%" align="right">
                       <tbody>
                           <tr>
                               <td class="right">
                                   <a href="<?php echo $story3link ?>">
                                       <?php echo $story3 ?>
                                   </a>
                               </td>
                           </tr>
                           <tr>
                               <td class="right">
                                   <a href="<?php echo $story6link ?>">
                                       <?php echo $story6 ?>
                                   </a>
                               </td>
                           </tr>
                           <tr>
                               <td class="right">
                                   <a href="<?php echo $story9link ?>">
                                       <?php echo $story9 ?>
                                   </a>
                               </td>
                           </tr>
                           <tr>
                               <td class="right">
                                   <a href="<?php echo $story12link ?>">
                                       <?php echo $story12 ?>
                                   </a>
                               </td>
                           </tr>
                    </tbody>
                </table>
        </center>
        </font>
    </body>
</html>