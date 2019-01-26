<?php
    require 'connect.php';

    function getRegion(){
        global $db;
        $res=mysqli_query($db, "SELECT ter_name FROM t_koatuu_tree WHERE ter_type_id='0' AND reg_id<>'80' AND reg_id<>'85'");
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

    $oblasti = getRegion();