<?php require 'header.php'; ?>
<?php
$user = User::find($_GET['id']);
?>

<div class="p-5 bg-info text-white">
    <h2>You are visiting <?php echo $user->name?> page</h2>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <?php foreach($user->posts as $post): ?>
            <div class="card my-3">
                <div class="card-header">
                    <h2><a href="post?id=<?php echo $post->id?>"><?php echo $post->title?></a></h2>
                </div>
                <div class="card-body">
                    <p><?php echo substr($post->content,0,250)?><a href="post?id=<?php echo $post->id?>">.....More</a></p>
                </div>
            </div>
<?php endforeach;?>
        </div>
        <div class="col-md-4">
            <?php require 'sideBar.php' ;?>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>