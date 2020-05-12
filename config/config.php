<?php

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'rhr');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   $tbl_users='tbl_users' ;
   $tbl_lang='tbl_site_languages' ;
   $tbl_emp_lang='tbl_languages' ;
   $tbl_roles='tbl_roles' ;
   $tbl_employees='tbl_employees' ;
   $tbl_education='tbl_employee_education' ;
   $tbl_qualification_dic='tbl_qualification_dic' ;
   $tbl_universities='tbl_universities';
   $tbl_lang_level='tbl_lang_level';   
   $tbl_certification='tbl_employee_certification';  
   $tbl_employee_skills='tbl_employee_skills';
   $tbl_language_knowledge='tbl_language_knowledge'; 
   $tbl_employee_family_info='tbl_employee_family_info'; 
   $tbl_sex='tbl_sex';
   $tbl_family_member_types='tbl_family_member_types';
   
   $sql_lang  = "select * from $tbl_lang where status=1 order  by position";
   $sql_roles = "select * from $tbl_roles where status=1 order  by position";				
   $sql_qua_dic = "select * from $tbl_qualification_dic ";
   $sql_university= "select * from $tbl_universities where status=1 ";
   $sql_emp_lang= "select * from $tbl_emp_lang ";

   $sql_employees= "select * from $tbl_employees where  emp_status=1 ";

   
?>