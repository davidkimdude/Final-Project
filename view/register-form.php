<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<!--Form for the registration-->
<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Email" />
    </div>
    
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" />
    </div>
    
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" />
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>