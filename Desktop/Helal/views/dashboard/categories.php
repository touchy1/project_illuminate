<?php
if(empty($_SESSION['user'])){
    redirect('/');
}
$categories= Category::all();


?>


<?php require 'header.php';?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>All Categories</h2>
            <a href="/dashboard/categories/create" class="btn btn-outline-secondary">Create category</a>
        </div>
        <div class="card-footer">
            <?php foreach($categories as $category): ?>
            <li class="list-group-item">
                <?php echo $category->name?>
                <a href="/dashboard/categories/edit?id=<?php echo $category->id?>" class="btn btn-outline-secondary">Edit</a>
                <a onclick="return confirm('are you sure you want to delete this category?')" href="/dashboard/categories/delete?id=<?php echo $category->id?>" class="btn btn-outline-danger">Delete</a>
            </li>
<?php endforeach;?>
        </div>
    </div>
</div>
<?php require 'footer.php';?>