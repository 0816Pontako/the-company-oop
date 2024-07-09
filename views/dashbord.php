<?php
include '../classes/User.php';
session_start();

$user = new User;
$all_users = $user->getAllUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="container">
                <a href="" class="navbar-brand">
                <h1 class="h3">The Company</h1>
                </a>
                <div class="navbar-nav">
                    <span class="navbar-text"><?=$_SESSION['fullname']?></span>
                    <form action="../actions/logout-action.php" method="post" class="d-flex ms-2">
                        <button type="submit" class="btn btn-danger border-0">Log out</button>
                    </form>
                </div>
            </div>
        </nav>
        <main class="row justify-content-center">
            <div class="text-center col-6">
                <h2 class="text-center mt-4 mb-4">USER LIST</h2>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($user = $all_users->fetch_assoc()){
                    ?>
                    <tr>
                        <td>
                            <?php
                            if($user['photo']){
                            ?>
                                <img src="../assets/images/<?=$user['photo']?>" alt="" class="img-fluid dashboard-photo">
                            <?php
                            }else{
                            ?>
                            <i class="fa-solid fa-user"></i>
                            <?php
                            }
                            ?>
  
                        </td>
                        <td><?=$user['id'];?></td>
                        <td><?=$user['first_name'];?></td>
                        <td><?=$user['last_name'];?></td>
                        <td><?=$user['username'];?></td>
                        <td>
                            <?php
                            if($user['id']==$_SESSION['id']){
                                ?>
                                <a href="edit-user.php" class="btn btn-outline-warning">
                                    <i class="fa-solid fa-pencil "></i>
                                </a>
                                <a href="delete-user.php" class="btn btn-outline-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>

    </div>
    
</body>
</html>