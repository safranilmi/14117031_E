<?php 



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<div>
    	<h1>Login</h1>
        <div>
            <div>
                <h2>Welcome</h2>
                <h4>User Info: </h4>
                <p>Name : <?= $row['fname']; ?></p>
                <p>Username : <?= $row['username']; ?></p>
                <p>Password : <?= $row['password']; ?></p>
                <a href="logout.php"><span></span> Logout</a>
            </div>
        </div>
    </div>
 
 </body>
 </html>