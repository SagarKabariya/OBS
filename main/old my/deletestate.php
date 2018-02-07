<?php
                            require_once 'conn.php';
                            $no=$_REQUEST['id'];
                                $name=$_REQUEST['state'];
                                $in=mysql_query("delete from state where id=$no");
                                header('location:showstate.php');
?>