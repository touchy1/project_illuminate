<?php
$oldvalues=[
    'email'=>'',
    'password'=>''
];
$errors=[];
if(isset($_POST['email'])&&
isset($_POST['password'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $oldvalues=[
        'email'=>$email,
        'password'=>$password
    ];
    if(!is_email_exists($email)){
        $errors['email']= 'your email is\'t associate whit any account';  
      }else{
          $user=User::where('email',$email)->first();
          if(password_verify($password,$user->password)){
              $data=[
                  'name'=>$user->name,
                  'email'=>$user->email,
                  'id'=> $user->id
              ];
              $_SESSION['user']=$data;
              redirect('/');
          }else{
                $errors['password']='please put correct password';
          }
      }

}


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
                        <h2>Login</h2>
                    </div>
                    <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input value="<?php echo $oldvalues['email']?>" name="email" id="email" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input value="" type="password" name="password" id="password" class="form-control">
                        </div>
                        <p>Don't you register? please <a href="register">Register here</a></p>
                        <div class="form-group">
                            <button class="btn btn-outline-primary">
                                Login
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>