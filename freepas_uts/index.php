<?php
require "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
</head>
<body>
<body class="text-center">
<br>
<div class="container">
    <form id="loginForm" class="form-signin" method="POST" action="loginProcess.php">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <div class="alert alert-danger display-error" style="display: none">
        </div>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username">
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
        <br>
        <button class="btn btn-lg btn-primary btn-block"
                type="submit"
                id="submit">
            Sign in
        </button>
    </form>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#loginForm").validate({
            rules: {
                username: "required",
                password: "required"
            },
            messages: {
                username: "username is empty",
                password: "username is empty"
            },
            submitHandler: async function () {
                await $.ajax({
                    url: "loginProcess.php",
                    type: "POST",
                    data: $('#loginForm').serialize(),
                    success: function (data) {
                        let {success, message} = JSON.parse(data);
                        Swal.fire({
                                icon: success ? 'success' : 'error',
                                title: message,
                            }
                        ).then(() => {
                            if (success) window.location.href = "home.php"
                        });
                    }
                });
            },
        });
    });
</script>

</html>