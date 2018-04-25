<?php
$id= $_GET['id'];
$category= Category::find($id);
$posts= Post::where('user_id',$id)->orderBy('id','desc')->get();
?>


<?php require 'header.php';?>
<?php require 'nav.php';?>

<div class="p-5 bg-info text-white">
    <h2>You are visiting <?php echo $category->name ?> page</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <?php foreach($posts as $post):?>
            <div class="card mt-3">
                <div class="card-header">
                    <h3><a href="post?id=<?php echo $post->id?>"><?php echo $post->title?></a></h3>
                </div>
                <div class="card-body">
                    <p><?php echo substr($post->content,0,250)?><a href="post?id=<?php echo $post->id?>">....More</a></p>
                </div>
            </div>
<?php endforeach;?>
        </div>
        <div class="col-md-4">
            <?php require 'sideBar.php'?>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>