<?php
if(empty($_SESSION['user'])){
    redirect('/');
}
$posts=Post::where('user_id',$_SESSION['user']['id'])->orderBy('id','desc')->get();

?>


<?php require 'header.php';?>
<div class="container">
    <div class="card mt-5">
        <table class="table table-bordered">
            <tr>
                <th>title</th>
                <th>Action</th>
            </tr>
            <?php foreach($posts as $post): ?>
            <tr>
                <td><?php echo $post->title?></td>
                <td><a href="/dashboard/edit?id=<?php echo $post->id ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Are you sure want to delete this entry?')" href="/dashboard/delete?id=<?php echo $post->id?>" class="btn btn-info">Delete</a>
                </td>
            </tr>
<?php endforeach; ?>
        </table>
    </div>
</div>
<?php require 'footer.php';?>