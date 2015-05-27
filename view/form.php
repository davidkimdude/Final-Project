<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    //If user is not authenticated, destroy the session
    if(!authenticateUser()) {
        header("Location: " . $path . "home.php");
        die();
    }
?>
<!--Form to make a post-->
<h1>Write Feedback</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Title" />
    </div>
    
    <div class="form-group">
        <label for="post">Post</label>
        <textarea name="post" class="form-control" row="3" placeholder="Feel free to write anything to suggest to make this webstie better!"></textarea>
    </div>    
    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

