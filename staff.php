<?php 


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="clockwave.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body class=" m-0 bodystaff">
<main class=" m-1 "> 
    <br><br><br>
    <div class="container text-center justify-content-center align-content-center">
        <div><h3 class=" signup m-3" >Login</h3> </div>
        <div class=" staform">
    <form action="action_page.php" method="POST" target="blank" accept-charset="utf-8" autocomplete="off" class="form-control staf22">
          <div class=" row" id="flexform">
            <div class="col">
                <label for="uname"> ID number </label><br>
                <input class="form-control" type="text" name=" ID number" placeholder=" " maxlength="6" required>
             </div>
            <div class="col">
                <label for="password">Password</label><br>
                <input class="form-control" type="password" name="password" required>
            </div>
            </div><br>
            <button type="submit" class="signupbtn m-2 rounded-pill ">login</button> <br><br>
            
            <a href="">forgot password</a>
            
          </form> 
          </div>
          </div>

          <br>
</main>
          <br><br><br>
          <div></div>
          <div></div>
          <div class="m-5"></div>
          <footer class="container-fluid footerstaff">
            <div class=" mb-0 pt-3 ps-5   d-flex justify-content-center " ><P class="mt-3 text-light"><i class="bi bi-c-circle"></i>  2023 clockwave innovations and technical solutions ltd<br> All Rights Reserved</P> </div>
            </footer>
        
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>