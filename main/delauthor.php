<?php
                            require_once 'conn.php';
                            $no=$_REQUEST['id'];
                                $name=$_REQUEST['name'];
                                $in=mysql_query("delete from author_master where author_id=$no");
                                header('location:showauthor.php');
?>