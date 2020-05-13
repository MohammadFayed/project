<?php
session_start();
    $page_name = "dashboard";
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

        elseif(isset($option) && $option == "send"):
            if($_SERVER["REQUEST_METHOD"] !== "POST"):
                alert("danger text-center","You cannot browse this page directly");
            else:

                if(empty($_POST['stage-student'])):
                    alert("danger text-center","no accepted or refuse ordering");
                else:
                    $stage_student = $_POST['stage-student'];
                    $student_by_id = $_POST['student_by_id'];
                    for($i = 1; $i <= count($stage_student);$i++){
                        if($stage_student[$i] == "accepte"){
                            $conn = new db();
                            $update_stage_user = $conn->update("UPDATE user SET stage = 2 WHERE user_id =".$student_by_id[$i]);
                            $update_stage_order = $conn->update("UPDATE `order` SET stage = 1 WHERE student_id =".$student_by_id[$i]);
                                if($update_stage_user > 0){
                                    $name_student = $conn->select("SELECT fullname FROM user WHERE user_id = ".$student_by_id[$i]);
                                    alert("success text-center pl-4",$name_student['fullname'],"was accepted");
                                }
                        }else{
                            $conn = new db();
                            $delet_order_student = $conn->delete("DELETE FROM `order` WHERE student_id =".$student_by_id[$i]);
                            $set_stage_minus = $conn->update("UPDATE user SET stage = '-1' WHERE user_id =".$student_by_id[$i]);
                                if($delet_order_student > 0){
                                    $name_student = $conn->select("SELECT fullname FROM user WHERE user_id = ".$student_by_id[$i]);
                                    alert("warning text-center pl-4",$name_student['fullname'],"was refused");
                                }
                        }
                    }

                endif;
            endif;
        else:
            $conn = new db();
            $fetchall = $conn->fetchall("SELECT * FROM `order`");
            

?>
    <div class="main" id="main">
        <div class="container">
        <div class="row">
                <div class="dash col-md-12">
                    <div class="row">
                        <div class="static col-sm-12">
                            <div class="row">
                                <div class="stat col text-center">
                                    <h4>Number of students registered</h4>
                                    <hr />
                                    <p>
                                        <?php 
                                            $number_student = $conn->numrow("SELECT * FROM `order`");
                                            echo $number_student; 
                                        ?>
                                    </p>
                                </div>
                                <div class="stat col text-center">
                                    <h4>Students whose father died</h4>
                                    <hr />
                                    <p>
                                        <?php 
                                            $number_student = $conn->numrow("SELECT * FROM `order` WHERE statue_father = 'Dead'");
                                            echo $number_student; 
                                        ?>
                                    </p>
                                </div>
                                <div class="stat col text-center">
                                    <h4>Students with special needs</h4>
                                    <hr />
                                    <p>
                                        <?php 
                                            $number_student_regester = $conn->numrow("SELECT * FROM `order` WHERE special_needs = 'true'");
                                            echo $number_student_regester; 
                                        ?>
                                    </p>
                                </div>
                                <div class="stat col text-center">
                                    <h4>Number of students remaining</h4>
                                    <hr />
                                    <p>
                                        <?php 
                                            $number_student_regester = $conn->numrow("SELECT * FROM `order` WHERE stage = 0");
                                            echo $number_student_regester; 
                                        ?>
                                    </p>
                                </div>

                                
                            </div>
                        </div>
                        <?php $fetchall = $conn->fetchall("SELECT * FROM `order` WHERE stage != 1");
                            if(!empty($fetchall)): 
                         ?>
                        <div class="show-stat-user col-sm-12">
                            <form action="?do=send" method="POST">
                                <table class="table table-responsive table-hover">
                                    <thead>
                                        <tr>
                                    <?php foreach($fetchall[0] as $k => $val):
                                                    echo "<th scope='col'>".$k."</th>";
                                            endforeach;
                                    ?>
                                    <th scope='col'>Accepte</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $i = 1;
                                            foreach($fetchall as $key => $val):
                                                
                                                echo "<tr>";
                                                    foreach($val as  $v):
                                                        echo "<td>";
                                                        echo "$v";
                                                        echo "</td>";
                                                    endforeach;
                                                echo  "<td>";
                                                echo    "<div class='statue'>".
                                                    "<div class='radio'>".
                                                        "<label>".
                                                            "<input type='radio' name='stage-student[".$i."]' value='accepte' />".
                                                            "<span class='design'></span>".
                                                            "<span class='text'>Accepte</span>".
                                                            "<input type='hidden' name='student_by_id[".$i."]' value='".$fetchall[$key]['student_id']."'>".
                                                        "</label>".
                                                        "<label>".
                                                            "<input type='radio' name='stage-student[".$i."]' value='refuse' />".
                                                            "<span class='design'></span>".
                                                            "<span class='text'>refuse</span>".
                                                        "</label>".
                                                    "</div>".
                                                    "</div>".
                                                "</td>";
                                                echo "</tr>";
                                                $i++;
                                            endforeach;
                                             ?>
                                    </tbody>
                                    
                                </table>
                                <div class="col-sm-12">
                                    <input type="submit" class="btn m-auto" name="send" value="Continue info">
                                </div>
                            </form>
                        </div>
                        
                        <?php
                        else: 
                            alert("primary col-sm-12 text-center p-4","Hello ".$_SESSION['fullname'],"There are no students now");
                    
                    endif; ?>
                    </div>
                </div>
        </div>
    </div>
    </div>
<?php
    endif;
include $tpl."footer.php";
    endif;
?>
