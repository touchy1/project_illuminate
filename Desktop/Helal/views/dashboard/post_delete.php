<?php 
if(empty($_SESSION['user'])){
    redirect('/');
}
$id=$_GET['id'];
$post= Post::find($id);
$post->delete();
redirect('/dashboard/home');
?>