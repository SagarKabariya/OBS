<?php
                            require_once 'conn.php';
                            $no=$_REQUEST['id'];
                                $name=$_REQUEST['city'];
                                $in=mysql_query("delete from city where id=$no");
                                header('location:showcity.php');
?>