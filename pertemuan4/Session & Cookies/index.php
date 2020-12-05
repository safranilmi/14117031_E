<?php 

session_start();
// direct ke home jika punya session
if(isset($_SESSION['user'])){
    header('location:home.php');
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login Authentication</title>
 </head>
 <body>

    <h3><span></span>Enter Login Details</h3>
    <form action="login.php" method="POST">
        <div>
            <input type="text" name="username" placeholder="Username..." autofocus required>
        </div>
        <div>
            <input type="password" name="password" placeholder="Password.." required>
        </div>
        <button type="submit" name="login"><span></span> Submit</button>
    </form>

    <?php 

    if(isset($_SESSION['message'])){
        ?>
        <div>
            <?= $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']);
    }

     ?>
 
 </body>
 </html>