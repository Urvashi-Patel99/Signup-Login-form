<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container my-5">
      <div class="row">
        <div class="col-md-6 col-xm-12">
          <h1 class="text-center">Sign up</h1>
        <form action="signup.php" method ="post">
  <div class="mb-3">
    <label for="username" class="form-label">Enter Username</label>
    <input type="text" class="form-control" id="username" placeholder="Enter Username" autocomplete="off" name="username" >
    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label"> Enter Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" autocomplete="off" name="password" >
    
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" autocomplete="off"  name="cpassword">
    
  </div>
  
  
  <button type="submit" class="btn btn-success w-100 my-3" name="signup">Sign up</button>
</form>
        </div>
        <div class="col-md-6 col-xm-12 my-5">
          <h1 class="text-center">Login</h1>
        <form action="login.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Enter Username</label>
    <input type="text" class="form-control" id="username" placeholder="Enter Username" autocomplete="off" name="username">
    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label"> Enter Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" autocomplete="off" name="password">
    
  </div>
  <button type="submit" class="btn btn-dark w-100 my-3" name="login">Login</button>
</form>
        </div>
      </div>
    </div>
  </body>
</html>