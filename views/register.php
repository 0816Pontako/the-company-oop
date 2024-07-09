
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<!-- view -->
<body>
    <div class="container-fluid">
        <div class="card w-25 mx-auto my-5">
            <div class="card-header text-success text-center">
                <h1>REGISTER</h1>
            </div>
                <div class="card-body">
                    <form action="../actions/register-action.php" method="post">
                        <div class="row mb-2">
                            <div class="col">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <label for="username" class="form-label">User Name</label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>

                        <input type="submit" name="btn_register" class="btn btn-success w-100" value="register">

                    </form>
            </div>
        </div>
    </div>
    
</body>
</html>