<?php
session_start();
require_once('database_connection.php');

if(isset($_POST['submit']))
{
    if(isset($_POST['name'],$_POST['surname'],$_POST['gender'],$_POST['username'],$_POST['email'],$_POST['contact_number'],$_POST['password']) 
    && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['gender']) && !empty($_POST['username']) 
    && !empty($_POST['email']) && !empty($_POST['contact_number']) && !empty($_POST['password']))
    {
        $name = trim($_POST['name']);
        $surname = trim($_POST['surname']);
        $gender = trim($_POST['gender']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $contact_number = trim($_POST['contact_number']);
        $password = trim($_POST['password']);
        
        $options = array("cost"=>4);
        $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
        $date = date('Y-m-d H:i:s');

        if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
            $sql = 'select * from users where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);
            
            if($stmt->rowCount() == 0)
            {
                $sql = "insert into users (name, surname, gender, username, email, contact_number, `password`) 
                       values
                       (:name,:surname,:gender,:username,:email,:contact_number,:pass)";
            
                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':name'=>$name,
                        ':surname'=>$surname,
                        ':gender'=>$gender,
                        ':username'=>$username,
                        ':email'=>$email,
                        ':contact_number'=>$contact_number,
                        ':pass'=>$hashPassword
                    ];
                    
                    $handle->execute($params);
                    
                    $success = 'User has been created successfully';
                    
                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
            }
            else
            {
                $valFirstName = $name;
                $valLastName = $surname;
                $valGender = $gender;
                $valUserName = $username;
                $valEmail = '';
                $valContactNumber = $contact_number;
                $valPassword = $password;

                $errors[] = 'Email address already registered';
            }
        }
        else
        {
            $errors[] = "Email address is not valid";
        }
    }
    else
    {
        if(!isset($_POST['name']) || empty($_POST['name']))
        {
            $errors[] = 'First name is required';
        }
        else
        {
            $valFirstName = $_POST['name'];
        }
        if(!isset($_POST['surname']) || empty($_POST['surname']))
        {
            $errors[] = 'Last name is required';
        }
        else
        {
            $valLastName = $_POST['surname'];
        }

        if(!isset($_POST['username']) || empty($_POST['username']))
        {
            $errors[] = 'Username is required';
        }
        else
        {
            $valUserName = $_POST['username'];
        }

        $valGender = $_POST['gender'];
        
        if(!isset($_POST['email']) || empty($_POST['email']))
        {
            $errors[] = 'Email is required';
        }
        else
        {
            $valEmail = $_POST['email'];
        }

        $valContactNumber = $_POST['contact_number'];

        if(!isset($_POST['password']) || empty($_POST['password']))
        {
            $errors[] = 'Password is required';
        }
        else
        {
            $valPassword = $_POST['password'];
        }
    }
}
?>


<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body class="bg-dark">

<div class="container h-100">
	<div class="row h-100 mt-5 justify-content-center align-items-center">
		<div class="col-md-5 mt-3 pt-2 pb-5 align-self-center border bg-light">
			<h1 class="mx-auto w-25" >Register</h1>
			<?php 
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
                }
                
                if(isset($success))
                {
                    
                    echo '<div class="alert alert-success">'.$success.'</div>';
                }
			?>
			<form method="POST" action="login.php">
                <div class="form-group">
					<label for="email">Name:</label>
					<input type="text" name="name" placeholder="First Name" class="form-control" value="<?php echo ($valFirstName??'')?>">
				</div>
                <div class="form-group">
					<label for="email">Surname:</label>
					<input type="text" name="surname" placeholder="Last Name" class="form-control" value="<?php echo ($valLastName??'')?>">
				</div>

                <div class="form-group">
                <label class="label_txt">Gender </label>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
              </div>

              <div class="form-group">
					<label for="email">Username:</label>
					<input type="text" name="username" placeholder="User Name" class="form-control" value="<?php echo ($valUserName??'')?>">
				</div>

                <div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="Email Address" class="form-control" value="<?php echo ($valEmail??'')?>">
				</div>

                <div class="form-group">
					<label for="email">Contact Number:</label>
					<input type="text" name="contact_number" placeholder="Contact Number" class="form-control" value="<?php echo ($valContactNumber??'')?>">
				</div>

				<div class="form-group">
				<label for="email">Password:</label>
					<input type="password" name="password" placeholder="Enter Password" class="form-control" value="<?php echo ($valPassword??'')?>">
				</div>

				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				<p class="pt-2"> You can login now <a href="login.php">Login</a></p>
				
			</form>
		</div>
	</div>
</div>
</body>
</html>