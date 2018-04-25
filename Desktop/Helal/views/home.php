<?php require 'header.php';?>
<?php 
$posts= Post::orderBy('id','desc')->get();
$cateogries= Category::all();
$users=User::all();
?>
<?php require 'views/nav.php';?>
<div class="container my-5">

<div class="row">
<div class="col-md-8">
<?php foreach($posts as $post):?>
<div class="card my-3">
    <div class="card-header">
        <h2><a href="post?id=<?= $post->id?>"><?=$post->title?></a></h2>
    </div>
    <div class="card-body">
    <?=substr($post->content,0,250)?>
    <a href="post?id=<?php echo $post->id?>">More.....</a>
    </div>
</div>
<?php endforeach;?>
</div>
<div class="col-md-4">
    <?php require 'sideBar.php';?>
</div>
</div>

</div>
<?php require 'footer.php';?> 