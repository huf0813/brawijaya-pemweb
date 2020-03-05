<?php
define('RESTRICTED', true);

require('header.php');

$uname = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
</head>
<body>
<br>
<div class="container">
    <h1 class="jumbotron-heading">WELCOME <?php echo "$uname"; ?></h1>
    <a href="logout.php" class="btn btn-primary my-2">Logout</a>
    <div id="listOfPosts">
    </div>
    </p>
</div>
</body>

<script>
    $(document).ready(function () {
        let result = "";
        $.ajax({
            url: "https://jsonplaceholder.typicode.com/posts",
            type: "get",
            success: function (data) {
                for (i = 0; i < 10; i++) {
                    $("#listOfPosts").append(
                        "<div class=\"card bg-light mb-3\">\n" +
                        "<div class=\"card-body\">\n" +
                        "<h5 class=\"card-title\">" + data[i].title + "</h5>\n" +
                        "<div class=\"card text-white bg-primary mb-3\">\n" +
                        "<div class=\"card-body\">\n" +
                        "<h5 class=\"card-title\" id=\"bodyPost\">" + data[i].body + "</h5>\n" +
                        "</div>\n" +
                        "</div>\n" +
                        "</div>\n" +
                        "</div>");
                }
            }
        });
    });
</script>
</html>