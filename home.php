<?php
session_start();
$page_name = "home";
if(empty($_SESSION)):
    header("Location: login.php");
else:
    include "init.php";
    include $tpl."header.php";
    include $tpl."navbar.php";

    $option = '';
    $option = (isset($_GET['do'])) ? $_GET['do'] : "home";
        if(isset($option) && $option == "logout"):

            session_unset($_SESSION);
            session_destroy();
            header("Location: login.php");

        elseif (isset($option) && $option == "request"):
            include "request.php";
        elseif (isset($option) && $option == "success"):
             ?>
                <div class="success-message">
                    <div class="alert alert-success text-center p-4">Residence in the university city of Tanta has been requested, please wait while the official has checked the conditions</div>
                </div>
        <?php
        else:
    ?>

    <div class="main" id="main">
            <?php 
            $conn= new db();
            $check_stage = $conn->select("SELECT stage FROM user WHERE user_id = ?",array($_SESSION['id']));
            $stage = $check_stage['stage'];
                if($stage == 0):
                    alert("primary text-center p-4","Welcome ".$_SESSION['fullname'],"You are not registered in the university city yet");
                elseif($stage == 1):
                    alert("warning text-center p-4","Welcome ".$_SESSION['fullname'],"You have requested to reside in the university city of Tanta, and it is now being reviewed with the officials according to the conditions","Please come at another time");
                endif;
            ?>
        </div>
<?php
        endif;
    include $tpl."footer.php";
endif;
?>