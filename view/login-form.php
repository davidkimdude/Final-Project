<?php
    require_once(__DIR__ . "/../model/config.php");
?>
<!--Form for the login-->
<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"; ?>">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" />
    </div>
    
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" />
    </div>
    
    <div class="form-group">
        <button type="submit">Submit</button>
    </div>
</form>