<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 m-auto">
                <div class="card p-0">
                    <div class="card-title text-center mb-5">
                        <h3 class="text-center text-dark py-3">Login Form</h3>
                    </div>

                    <?php
                        if(@$_GET['Empty'] == true){
                    ?>
                        <div class="alert-light text-danger text-center my-3"><?php echo $_GET['Empty'] ?></div>
                    <?php
                        }
                    ?>

                    <?php
                        if(@$_GET['Invalid'] == true){
                    ?>
                        <div class="alert-light text-danger text-center my-3"><?php echo $_GET['Invalid'] ?></div>
                    <?php
                        }
                    ?>

                    <div class="card-body">
                        <form action="process.php" method="post">
                            <div class="form-group">
                                <input type="text" name="userName" placeholder="User name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="userPass" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="form-control btn btn-primary px-3" name="Login">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>