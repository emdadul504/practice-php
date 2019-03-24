<?php
$message =false;
echo $_POST['email'].'<br/>';
echo $_POST['password'].'<br/>';

if(!empty($_FILES['photo']['tmp_name'])){
    $name = $_FILES['photo']['name'];
    $filename_parts = explode('.',$name);
    $extension = end ($filename_parts);
    $new_filename =uniqid('pp_',true).time().'.'.$extension;
    move_uploaded_file($_FILES['photo']['tmp_name'],'upload/profile-photo/'.$new_filename);
    $message = 'file uploaded.';
    $message .= '<img src="upload/profile-photo/'.$new_filename.'" alt="photo" width ="200"/>';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php if ($message):?>
        <div class="alert alert-success">
         <?php echo $message;?>
        </div>
    <?php endif ; ?>
        <form class="form-signin" action ="" method="post" enctype="multipart/form-data">

            <h1 class="h3 mb-3 font-weight-normal">register</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address"  autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
            <input type="email" id="inputnationality" class="form-control" name="nationality" placeholder="Nationality"  autofocus>
            <label for="inputnationality" class="sr-only">Nationality</label>
            <input type="email" id="inputage" class="form-control" name="age" placeholder="Age"  autofocus>
            <label for="input age" class="sr-only">age</label>
            <input type="email" id="inputcountry" class="form-control" name="country" placeholder=""  autofocus>
            <label for="input age" class="sr-only">age</label>
            <label for="inputphoto" class="sr-only">photo</label>
            <input type="file" id='inputphoto' name="photo" class="form-control" required>


            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
        </form>
</div>


</body>
</html>