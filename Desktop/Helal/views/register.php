<?php 
$oldvalues=[
    'name'=>'',
    'email'=>'',
    'password'=>''
];
$errors=[];
$message='';
if(isset($_POST['name'])&&
isset($_POST['email'])){
    $name=$_POST['name'];
    $email=$_POST['emil'];
    $password=$_POST['password'];
    $oldvalues=[
        'name'=>$name,
        'email'=>$emil,
        'password'=>$password
    ];
    if (!validate_string($name,3)){
        $errors['name']='Your name shouldn\'t less then 4 character';
    }
    if(!validate_email($email)){
        $errors['email']='Your email already taken';
    }
    if(!validate_string($password)){
        $errors='Your password shouldn\'t less then 4 character';
    }
    if(empty($errors)){
        User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>password_hash($password,PASSWORD_BCRYPT),
        ]);
        $message='You have successfuly registered';
    }
}
?>



<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body class="bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Register</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input value="<?php echo $oldvalues['name']?>" type="text" name="name" id="name" class="form-control">
                            </div>
                            <?php if(isset($errors['name'])): ?>
                            <p class="text-danger"><?php echo $errors['name']?></p>
<?php endif;?>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input value="<?php echo $oldvalues['email']?>" id="email" name="email" type="text" class="form-control">
                            </div>
                            <?php if(isset($errors['email'])):?>
                            <p class="text-danger"><?php echo $errors['email']?></p>
<?php endif;?>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" name="passowrd" type="text" class="form-control">
                            </div>
                            <p>
                                Already registered? <a href="login">login here</a>
                            </p>
                            <button type="submit" class="btn btn-outline-info">
                                Register
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>