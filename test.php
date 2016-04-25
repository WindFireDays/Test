<?php
/**
 * Created by PhpStorm.
 * User: whxcs
 * Date: 2016/4/25
 * Time: 23:37
 */
echo 'Hello World';
session_start();
$link=mysql_connect('localhost','root','');
mysql_select_db('blog',$link);
mysql_query('set names gb2312');
if ($_POST['btn_tj']=="提交"){
    $name=htmlspecialchars($name);
    $name=str_replace('\n','<br>',$name);
    $name=str_replace('','&nbsp;',$name);
    $author=$_SESSION[username];
    $time=date('y;m;d');
    $road=$_SESSION[$road];
    $query="insert into t_pic (picname,user,time,road) values ('$name','$author','$time','$road')";
    $result=mysql_query($query);
    echo "<meta http-equiv=\"refresh\" content=\"1; url=browse_pic.php\">图片上传成功，请稍等...";
}