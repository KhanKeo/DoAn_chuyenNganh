<?php 
session_start();
        if(isset($_REQUEST['m_user'])){
        //connection
                  include("condb.php");
        //รับค่า user & password
                  $m_user = $_POST['m_user'];
                  $m_pass = $_POST['m_pass'];
        //query 
                  $sql="SELECT * FROM tbl_member Where m_user='".$m_user."' and m_pass='".$m_pass."' ";

                  $result = mysqli_query($conn,$sql);

                
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["member_id"];
                      $_SESSION["User"] = $row["m_name"];
                      // $_SESSION["Userlevel"] = $row["Userlevel"];

                      if($_SESSION["UserID"]!=''){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php


                        Header("Location: index_m.php");

                      }

                      // if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                      //   Header("Location: user_page.php");

                      // }

                  }else{
                    echo "<script>";
                        echo "alert(\" user or password is not found\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{
             Header("Location: form.php"); //user & password incorrect back to login again

        }
?>