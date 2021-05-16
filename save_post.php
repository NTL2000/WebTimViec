<?php 
    include("lib_db.php");
    $arr_data=array();
    $arr_data["id_poster"]=1;
    $arr_data["posted_position"]= $_POST["posted_position"];
    $arr_data["position"]= $_POST["position"][0];
    $arr_data["address"]= $_POST["address"][0];
    $arr_data["amount"]= $_POST["amount"];
    $arr_data["work_form"]= $_POST["work_form"];
    $arr_data["bonus"]= $_POST["bonus"];
    $arr_data["rank"]= $_POST["rank"];
    $arr_data["time_job_test"]= $_POST["time_job_test"];
    $arr_data["salary"]= $_POST["salary"];
    $arr_data["job_description"]= $_POST["job_description"];
    $arr_data["express_number"]=(int)$_POST["express_number"];
    $arr_data["degree"]= $_POST["degree"];
    $arr_data["gender"]= $_POST["gender"];
    $arr_data["job_required"]= $_POST["job_required"];
    $arr_data["benefit"]= $_POST["benefit"];
    $arr_data["file"]= $_POST["file"];
    $arr_data["post_file_dateline"]= $_POST["post_file_dateline"];
    $arr_data["name_hr"]= $_POST["name_hr"];
    $arr_data["address_hr"]= $_POST["address_hr"];
    $arr_data["phone_number"]= $_POST["phone_number"];
    $arr_data["email_hr"]= $_POST["email_hr"];
    $sql=data_to_sql_insert("new_recruitment",$arr_data);
    $ret = exec_update($sql);
    
    
?>