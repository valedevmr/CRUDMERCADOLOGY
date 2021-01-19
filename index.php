<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/seudomenu.css">
</head>
<body>
    

    <div class="container success mt-5">

        <nav class="border rounded mb-4">

            <ul>
                <li class="nav-link">
                
                    <a href="index.php">Insertar</a>
                </li>
            
                <li class="nav-link">
                
                    <a href="opciones.php">Mas opciones</a>
                </li>
            
            </ul>
        </nav>
        <header class="text-center mb-3">
            <h2>CRUD POO PHP</h2>
        </header>

        <div>
            <form class="row g-3 needs-validation" id= "formulario" novalidate>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">nombre</label>
                    <input type="text" class="form-control nombre" id="validationCustom01"  required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">apellidos</label>
                    <input type="text" class="form-control apellido" id="validationCustom02"  required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Ocupación</label>
                    <input type="text" class="form-control ocupacion" id="validationCustom02" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Edad</label>
                    <input type="text" class="form-control edad" id="validationCustom02" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Edad</label>
                    <input type="hidden" class="form-control peticion" id="validationCustom02" value = "insertar"required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button class="btn btn-primary" type="submit">Guardar datos</button>
                </div>
            </form>

        </div>
    
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>

