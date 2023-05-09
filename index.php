<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body  style="background-color: #F3F4F6";>
    <div class="container text-center" >
        <div class="row" >
          <div class="col-1 "  >
            &nbsp;  
          </div>
          <div class="col" style="background-color: #4F46E5";> 
            <nav class="navbar" style="background-color: #4F46E5"; data-bs-theme="dark" id="menu">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php">Sistema Login</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  </div>
                </div>
            </nav>
          </div>
          <div class="col-1" >
            &nbsp;
          </div>
        </div>
        <div class="row" >
            <div class="col-1">
                &nbsp;
            </div >
            <div class="col bg-white p-4">   
                <form  class="bg-white"  method = "POST" action ="login.php">
                    <b><p class="text-start fs-5">Sistema Login</p></b>
                  <p class="text-start fs-6">Insira seu nome de usuário e sua senha.</p>
                  <p class="text-start fs-6">Usuario:</p>
                    <div class="input-group flex-nowrap">
                     <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text"  id="username" name="username"  class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" required>
                    </div>
                    <div><br>
                    <p class="text-start fs-6">Senha:</p>
                    <input type="password" id="password" name="password"  class="form-control" required ><br><br>
		            <input type="submit" value="Entrar" class="btn btn-success">
                    </div>
                  </form>    
                
            </div>
            <div class="col-1">
                &nbsp;
            </div>
          </div>
      </div>
</body>
</html>