<?php
if(empty($_SESSION['user'])){
    redirect('/');
}
$id= $_GET['id'];
$category= Category::find($id);
$category->delete();
redirect('/dashboard/home')

?>