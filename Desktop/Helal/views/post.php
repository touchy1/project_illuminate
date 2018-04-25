<?php require 'header.php';?>
<?php 
$id=
$posts= Post::find($_GET['id']);
?>

<div class="container">
<div class="row">
    <div class="col-md-8">
        
        <div class="card">
            <div class="card-header">
            <h2><?php echo $posts->title?></h2>
            </div>
            <div class="card-body">
            <p><?php echo $posts->content ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <?php require 'sideBar.php';?>
    </div>
</div>
</div>
<?php require 'footer.php';?>