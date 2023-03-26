<?php 

include"db_conn.php";

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `crud`(`first_name`,`last_name`,`email`,`gender`) VALUES ('$first_name','$last_name','$email','$gender')";
    $result= mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php?msg= new record added");
    }
    else{
        echo "failed :" . mysqli_error($conn);
    }
}   


?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color : #00ff5573"> 
        PHP Complete CRUD
    </nav>
    <div class="container"> 
        <div class=" text-center mb-4">
            <h3>Add New User</h3>  
            <p class="text-muted">Complet the form below to add a new user </p>

        </div>
    </div>
    <div class=" container d-flex justify-content-center"> 
        <form action="" method="post" style=" width: 50vw; min-width:300px" >
            <div class="row mb-3">
                <div class ="col">
                    <label class="form-label">First name</label>
                    <input type ="text" class ="form-control" name ="first_name" placeholder="Einstein">

                </div>
                <div class ="col">
                    <label class="form-label"  >last name</label>
                    <input type ="text" class ="form-control" name ="last_name" placeholder="Einstein">

                </div>
                
            </div> 
            <div class ="mb-3">
                    <label class="form-label"  >email</label>
                    <input type ="text" class ="form-control" name ="email" placeholder="Einstein">

                </div>
            <div class="form-group mb-3">
                <label> Gender :</label> &nbsp;
                <input type="radio" class="form-check-input" name="gender"
                id="male" value="male">
                <label for="male" class="form-input-label"> Male </label>
                &nbsp;
                <input type="radio" class="form-check-input" name="gender"
                id="female" value="famale">
                <label for="male" class="form-input-label"> female </label>

            </div>
            <div>
                <button type="submit" class="btn btn-success" name="submit"> save </button>
                <a href="index.php" class="btn btn-danger">Cancel </a>
            </div>
        </form>
    </div>


    <!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>