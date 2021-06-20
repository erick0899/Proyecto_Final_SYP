<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CFC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container bg-primary w-75 mt-5 shadow rounded">
        <div class="row align-items-stretch">
            <div class="col ibg d-none d-lg-block col-xl-6 rounded col-md-5 col-lg-5">
                
            </div>
            <div class="col bg-white rounded-end">
                <div class="text-end">
                    <img class="LogoTech" src="img/LogoTech.jpeg" alt="Logo">
                </div>
                <h2 class="fw-bold py-5 text-center">Bienvenido</h2>

                <!-- Login -->
                <form action="page2.php">
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="conectado" class="form-check-input" id="">
                        <label for="conectado" class="form-check-label">Mantenerse seccion abierta</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn mb-5" >Iniciar seccion</button>
                        <a href="registro.html">Registrarse</a>
                    </div>

                </form>
               
            </div>
        </div>
    </div>


</body>
</html>