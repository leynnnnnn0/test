<div class="login-form">
<form class="form-login" action="includes/editprofile.inc.php" method="post">
    <h1 class="title">Edit Profile</h1>
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="form3Example3" class="form-control" value="<?php echo $_SESSION['user']['email']?>"  name="email"/>
        <label class="form-label" for="form3Example3" >Email address</label>
    </div>

     <!-- username input -->
     <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" id="form3Example3" class="form-control" name="username" value="<?php echo $_SESSION['user']['username']?>"/>
        <label class="form-label" for="form3Example3" >Username</label>
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="form3Example4" class="form-control" name="password"/>
        <label class="form-label" for="form3Example4">Password</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">
        Confirm Changes
    </button>
    <?php 
    require_once 'views/editprofile.view.php';
     ?>
    </div>
</form>
</div>