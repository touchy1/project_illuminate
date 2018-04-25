<?php
if(empty($_SESSION['user'])){
    redirect('/');
}
$id=$_GET['id'];
$category= Category::find($id);
$message='';
if(isset($_POST['category'])){
    $category->name= $_POST['category'];
    $category->save();
    $message='Your category Update successfully';
}

?>




<?php require 'header.php' ?>
<div class="container">
    <div class="p-5 bg-info text-white mt-5">
        <h2>Edit Category</h2>
    </div>
    <?php if(!empty($message)):?>
    <div class="alert alert-success">
        <p><?php echo $message;?></p>
    </div>
<?php endif;?>
    <form action="" method="post">
        <div class="form-group">
            <label for="category">Category</label>
            <input value="<?php echo $category->name; ?>" name="category" id="category" type="text" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-info">Update category</button>
        </div>
    </form>
</div>
<?php require 'footer.php';?>