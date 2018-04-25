<?php
if(empty($_SESSION['user'])){
    redirect('/');
}
$categories= Category::all(); 
$oldvalues=[
    'title'=>'',
    'content'=>''
];
$message=[];
if(isset($_POST['title'])&&
isset($_POST['content'])){
    Post::create([
        'title'=>$_POST['title'],
        'content'=>$_POST['content'],
        'user_id'=>$_SESSION['user']['id'],
        'category_id'=>$_POST['category']
    ]);
    $message['successfully']='your articale successfully posted';

}
?>




<?php require 'header.php'; ?>
<div class="container">
<?php if(!empty($message)):?>
<p class="text-success"><?php echo $message['successfully']?></p>
<?php endif;?>
    <div class="p-5 bg-info mt-5 text-white">
        <h2>Create post</h2>
    </div>
    <form action="" method="post" class="my-3">
        <div class="form-group">
            <label for="title">Title</label>
            <input value="" name="title" id="title" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control">
                <?php foreach($categories as $category):?>
                <option value="<?php echo $category->id?>"><?php echo $category->name?></option>
<?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-info">submit</button>
        </div>
    </form>
</div>
<?php require 'footer.php'; ?>