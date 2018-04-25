<?php
$users= User::all();
$categories= Category::all(); 
?>
<div class="card my-3">
    <div class="card-header">
        <h2>Category</h2>
    </div>
    <div class="card-body">
        <ul class="list-group">
            <?php foreach($categories as $category):?>
            <li class="list-group-item">
                <a href="category?id=<?php echo $category->id?>"><?php echo $category->name;?></a>
            </li>
<?php endforeach;?>
        </ul>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h2>Authors</h2>
    </div>
    <div class="card-body">
        <ul class="list-group">
            <?php foreach($users as $user):?>
            <li class="list-group-item">
            <a href="author?id=<?php echo $user->id?>"><?php echo $user->name;?></a>
            </li>
<?php endforeach;?>
        </ul>
    </div>
</div>