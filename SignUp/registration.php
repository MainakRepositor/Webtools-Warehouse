<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | PHP </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div>
<?php
    if(isset($_POST['create'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO users(firstname, lastname, email, password) VALUES (?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert -> execute([$firstname, $lastname, $email, $password]);
        if($result)
        {
            echo "successfully saved";

        }
        else
        {
            echo "error";
        }
    }
?>
</div>
    <div>
        <form action="registration.php" method="post">
        <div class="container">
            <div class="row">

            <div class="col-sm-3">
            <h1>Registration</h1>
            <label for="firstname"><b>First Name</b></label>
            <input class="form-control" type="text" id="firstname" name="firstname" required>
            
            <label for="lastname"><b>Last Name</b></label>
            <input class="form-control" type="text" id="lastname"  name="lastname" required>
            
            <label for="email"><b>Email Address </b></label>
            <input class="form-control" type="email" id="email"  name="email" required>
            
            <label for="password"><b>Password</b></label>
            <input class="form-control" type="password" id="password"  name="password" required>
            <hr class="mb-3">
            <input class="btn btn-primary" type="submit" id="register" name="create"  value="Sign Up">
            </div>
            </div>
        </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
    $(function()
    {
        $("#register").click(function(){
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var password = $('#password').val();
        });
             Swal.fire({
            'title':'Namastey User 🙏',
            'text':'Would you like to sign up to this page to be a part of out team ? 😊',
            'type':'Success'
        })
            
    });
</script>
</body>
</html>