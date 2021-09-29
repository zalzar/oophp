<?php
require('user_validator.php');

if(isset($_POST['btnSubmit'])){
    //validate entries
    //echo "form is submited";
    $validation= new UserValidator($_POST);
    $errors = $validation->validateForm();


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="new-user">
        <h2>Create new User</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username'])?? '' ?>">
            <div class="error">
                <?php echo $errors['username'] ?? '' ?>
            </div>
            <label>Email</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email'])?? '' ?>">
            <div class="error">
                <?php echo $errors['email'] ?? '' ?>
            </div>
            <input type="submit" value="submit" name="btnSubmit">
        </form>
    </div>
</body>
</html>