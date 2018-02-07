<?php
                            require_once 'conn.php';
                            $no=$_REQUEST['id'];
                                $name=$_REQUEST['name'];
                                $in=mysql_query("delete from publisher_master where publisher_id=$no");
                                header('location:showauthor.php');
?>