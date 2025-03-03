<?php

$data = ["email" => null, "message" => null]; // Default structure


if (isset($_POST['txtEmailAddress'])) {
    $result = doLogin();
    if (!empty($result) && is_array($result)) {
        $data = $result;
    }
}
?>

<div class="login-container">
    <h2 class="text-center mb-4">Registration</h2>
    <form id="loginform" action="<?php echo WEB_ROOT;?>register/process.php?action=register" method="post">
        <div class="text-center text-danger mb-3">
            <?php echo htmlspecialchars($data["message"]); ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email_address" class="form-control" id="email" placeholder="Enter email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Register</button>

        <div class="mb-3 text-center">
            <a type="button" href="<?php echo WEB_ROOT;?>login.php">Back to login</a>
        </div>
    </form>
</div>
