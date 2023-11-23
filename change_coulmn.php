<?php
include_once "./inc.edittable.php";
include_once "/www/incxc/incxc.base.php"; 

   if($mode=="") $mode="gdmdata"; 

    if($todo==""||$todo=="修改") Step2InputInfos($todo,$lcdeno);
   
    elseif($todo=="record")          RecordContract();
                                     
  echo "</center></body>"; 

function Step2InputInfos($todo,$lcdeno)
{global $PHP_SELF,$cucunm,$psinfos,$mode,$_GET; 

    
$str="<html><head><title>changeColumn</title>
            </head>
            <body>   
            <div style='align:center;'>
            <FORM  action='$PHP_SELF' method='POST'
            enctype=multipart/form-data name='upfile' target='_self'  >
            <div style=\"overflos:auto;width:100%\">
                    
           <TABLE class='table' width=\"auto\" style=\"white-space:nowrap\">        
           <thead style='background-color:#F5F5F5;border:1px solid #ccc;padding-left:10px'>
           <th>库</th>
           <th>表</th>
           <th>字段序号</th>  
           <th>字段名</th>
           <th>字段类型</th>
           <th>字段说明    </th>
            <th>缺省值    </th>        
           
           </thead> 
           ";
           echo $str;


              $idnum = $i+1;
              echo "<tr style='background-color:$backcolor'>";
              
echo "
<TD>$_GET[TABLE_SCHEMA]</TD>
<TD>$_GET[TABLE_NAME]</TD>
<TD>$_GET[ORDINAL_POSITION]</TD>
<TD>$_GET[COLUMN_NAME]
<input name='var_COLUMN_NAME' value='$_GET[COLUMN_NAME]'></TD>
<TD><input name='var_COLUMN_TYPE' value='$_GET[COLUMN_TYPE]'></TD>
<TD><input name='var_COLUMN_COMMENT' value='$_GET[COLUMN_COMMENT]'></TD>
<TD><input name='var_COLUMN_DEFAULT' value='$_GET[COLUMN_DEFAULT]'></TD>


";      
            
            echo "<tr style='background-color:$backcolor'>
                <TD colspan='8'>
                <INPUT TYPE='HIDDEN'  name='todo' value='record'>
                <INPUT TYPE='HIDDEN'  name='mode' value='$mode'> 
                
                <INPUT TYPE='HIDDEN'  name='TABLE_SCHEMA' value='$_GET[TABLE_SCHEMA]'> 
                <INPUT TYPE='HIDDEN'  name='TABLE_NAME'   value='$_GET[TABLE_NAME]'> 
                <INPUT TYPE='HIDDEN'  name='COLUMN_NAME'  value='$_GET[COLUMN_NAME]'> 

                <INPUT TYPE='SUBMIT'  name='s1' value='change'>
                <INPUT TYPE='SUBMIT'  name='s2' value='addafter'>
                <INPUT TYPE='SUBMIT'  name='s3' value='drop'>
                </td></tr></table></div></form></div>";
} 

   function RecordContract()
   {global  $PHP_SELF,$cucunm,$psinfos,$mode;
    global  $_POST,$basehost;
    
    #print_r($_POST);
    if($_POST[s2]=="addafter")
     {
      $sql="ALTER TABLE 
       $_POST[TABLE_SCHEMA].`$_POST[TABLE_NAME]` 
       ADD `$_POST[var_COLUMN_NAME]` $_POST[var_COLUMN_TYPE] 
       NOT NULL DEFAULT '$_POST[var_COLUMN_DEFAULT]'          
       COMMENT '$_POST[var_COLUMN_COMMENT]' 
       AFTER `$_POST[COLUMN_NAME]`";
     }
     elseif($_POST[s1]=="change")
     {         
      $sql="ALTER TABLE 
       $_POST[TABLE_SCHEMA].`$_POST[TABLE_NAME]` 
       CHANGE `$_POST[COLUMN_NAME]` `$_POST[var_COLUMN_NAME]`
        $_POST[var_COLUMN_TYPE] NOT NULL 
        DEFAULT '$_POST[var_COLUMN_DEFAULT]'
       COMMENT '$_POST[var_COLUMN_COMMENT]' 
       ";
     }
          elseif($_POST[s3]=="drop")
     {         
      $sql="ALTER TABLE 
       $_POST[TABLE_SCHEMA].`$_POST[TABLE_NAME]` 
       drop `$_POST[COLUMN_NAME]` ";
     }
     <TD><input name='var_COLUMN_DEFAULT' value='$_GET[COLUMN_DEFAULT]'></TD>


";      
            
            echo "<tr style='background-color:$backcolor'>
                <TD colspan='8'>
                <INPUT TYPE='HIDDEN'  name='todo' value='record'>
                <INPUT TYPE='HIDDEN'  name='mode' value='$mode'> 
                
                <INPUT TYPE='HIDDEN'  name='TABLE_SCHEMA' value='$_GET[TABLE_SCHEMA]'> 
                <INPUT TYPE='HIDDEN'  name='TABLE_NAME'   value='$_GET[TABLE_NAME]'> 
                <INPUT TYPE='HIDDEN'  name='COLUMN_NAME'  value='$_GET[COLUMN_NAME]'> 

                <INPUT TYPE='SUBMIT'  name='s1' value='change'>
                <INPUT TYPE='SUBMIT'  name='s2' value='addafter'>
                <INPUT TYPE='SUBMIT'  name='s3' value='drop'>
                </td></tr></table></div></form></div>";
} 

   function RecordContract()
   {global  $PHP_SELF,$cucunm,$psinfos,$mode;
    global  $_POST,$basehost;
    
    #print_r($_POST);
    if($_POST[s2]=="addafter")
     {
      $sql="ALTER TABLE 
       $_POST[TABLE_SCHEMA].`$_POST[TABLE_NAME]` 
       ADD `$_POST[var_COLUMN_NAME]` $_POST[var_COLUMN_TYPE] 
       NOT NULL DEFAULT '$_POST[var_COLUMN_DEFAULT]'          
       COMMENT '$_POST[var_COLUMN_COMMENT]' 
       AFTER `$_POST[COLUMN_NAME]`";
     }
     elseif($_POST[s1]=="change")
     {         
      $sql="ALTER TABLE 
       $_POST[TABLE_SCHEMA].`$_POST[TABLE_NAME]` 
       CHANGE `$_POST[COLUMN_NAME]` `$_POST[var_COLUMN_NAME]`
        $_POST[var_COLUMN_TYPE] NOT NULL 
        DEFAULT '$_POST[var_COLUMN_DEFAULT]'
       COMMENT '$_POST[var_COLUMN_COMMENT]' 
       ";
     }
          elseif($_POST[s3]=="drop")
     {         
      $sql="ALTER TABLE 
       $_POST[TABLE_SCHEMA].`$_POST[TABLE_NAME]` 
       drop `$_POST[COLUMN_NAME]` ";
     }