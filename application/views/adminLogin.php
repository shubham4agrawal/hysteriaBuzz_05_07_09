<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hysteriaBuzz</title>
</head>
<body>
        <br><br><br>
    <div align=center>
        <img src="<?php echo base_url();?>assets/images/logo.png"> <br><br><br>
        <div>
            <h2 style="font-family:'Montserrat';">Admin Login</h2>
        </div>
    <div class="col-lg-4">
        <form method="POST" action="checkLogin">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter your username">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <button type="submit" class="btn btn-primary">Sign In</button>
              </form>
              
    </div>
    </div>          
</body>
</html>