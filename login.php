<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 text-center mt-3 mx-auto p-4">
                <h1 class="h2">Login Small IOT</h1>
            </div>
        </div>

        <div class="row">
  <div class="col-12 col-md-5 text-center mx-auto p-4">
  <?php session_start(); 
  if ($_SESSION['message'] != '') : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?= $_SESSION['message']; ?></strong>!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>
  </div>
  </div>

        <div class="row">
            <div class="col-18 col-md-5 mx-auto mt-3">
                <div class="card" style="width: 30rem;">
                    <div class="card-body bg-success">
                        <form action="prosesLogin.php" method="POST">
                            <div class="form-group">
                                <label for="InputUserID">User ID</label>
                                <input type="text" class="form-control" name="inputUserID" placeholder="Enter UserID">
                            </div>
                            <div class="form-group">
                                <label for="InputPassword">Password</label>
                                <input type="password" class="form-control" name="inputPassword" placeholder="Enter Password">
                            </div>
                            <button type="submit" class="btn btn-dark">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>