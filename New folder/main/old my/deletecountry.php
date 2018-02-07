<?php
                            require_once 'conn.php';
                            $no=$_REQUEST['id'];
                                $name=$_REQUEST['con'];
                                $in=mysql_query("delete from country where id=$no");
                                header('location:showcountry.php');
?>