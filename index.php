

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzón de quejas HRAEI</title>
    
    <!--Bootstraps CSS-->
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--external CSS-->
    <link href = "./CSS/style_types_buzon.css" rel="stylesheet">
</head>

<body>


  <nav class="navbar navbar-custom">
    <div class="container-fluid justify-content-center">
  
      <a class="navbar-brand d-flex align-items-center">
        <img src="./imgs_buzon/imgs_logos/L2_Secretaría_Salud.png" alt="Logo" width="225" height="80" class="d-inline-block align-text-top mx-5">
        <img src="./imgs_buzon/imgs_logos/L2_HRAEI.png" alt="Logo" width="250" height="60" class="d-inline-block align-text-top mx-5">
      </a>
  
    </div>
  </nav>
  
    <div class = "container py-5">

        <h1 class = "text-center">¿Qué asunto deseas atender el día de hoy?</h1>
        <!--Padding y tamaños-->
        <div class = "row row-cols-1 row-cols-md-3 g-4 py-5">
            
            <div class="col">
                <!--Cards-->
                <div class="card">
                    <img src = "./imgs_buzon/complaint.jpeg" class = "card-img-top" alt="...">

                    <div class = "card-body">
                      <h5 class = "card-title">Quejas</h5>
                      <p class = "card-text">Aquí puede levantar una queja hacia nuestro personal acerca de un mal trato o servicio hacia usted recibido dentro del Hospital de Alta Especialidad de Ixtapaluca, tomamos en cuenta su opinión.</p>
                      <a href="./pages/formRegister.php" class = "btn btn-outline-danger"> Escribe tu queja aquí </a>
                    </div>

                    <div class="d-flex justify-content-around mb-3">
                    </div>

                  </div>
            </div>

            <div class="col">
                <!--Cards-->
                <div class="card">
                    <img src = "./imgs_buzon/suggestion.jpeg" class = "card-img-top" alt="...">

                    <div class = "card-body">
                      <h5 class = "card-title">Sugerencias</h5>
                      <p class = "card-text">Aquí puede realizar una sugerencia sobre su experiencia con nuestro personal o el servicio que le fue proporcionado dentro del Hospital de Alta Especialidad de Ixtapaluca para que pueda ser mejorado.</p>
                      <a href="./pages/formRegister.php" class = "btn btn-outline-warning"> Escriba tu sugerencia aquí </a>
                    </div>

                    <div class="d-flex justify-content-around mb-3">
                    </div>

                  </div>
            </div>

            <div class="col">
                <!--Cards-->
                <div class="card">
                    <img src = "./imgs_buzon/congratulation.jpeg" class = "card-img-top" alt="...">

                    <div class = "card-body">
                      <h5 class = "card-title">Felicitaciones</h5>
                      <p class = "card-text">Aquí puede hacerle llegar su felicitación a nuestro personal sobre el trabajo brindado dentro del Hospital de Alta Especialidad de Ixtapaluca.</p>
                      <a href="./pages/formRegister.php" class = "btn btn-outline-info"> Escriba tu felicitación aquí </a>
                    </div>

                    <div class="d-flex justify-content-around mb-4">
                    </div>

                  </div>

            </div>

        </div>

    </div>
    
    <!--Bootstraps js-->
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--<script src = "js/app.js"></script>-->
  
</body>
</html>