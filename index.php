<?php session_start() ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>


<section class="signup-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="signup-left">
                    <div class="mornimg-briefing text-center">
                        <h4>Good Morning</h4>
                        <p>Here is your morning briefing</p>
                        <form method="post" action="form-submit.php">
                            <input type="email" name="email" placeholder="Enter your email address">
                            <input type="submit" name="submit" value="Sign Up">
                        </form>
                        <?php
                        $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
                        unset($_SESSION['msg']);
                        echo $statusMsg;

                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>