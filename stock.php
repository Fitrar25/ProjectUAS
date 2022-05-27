<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/1016.jpg">
   <link rel="stylesheet" href="css/bootstrap.min.css">
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
    <title>Profil</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #EB0000; font-size: larger;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" >
            <img src="images/1016.jpg" alt="logo" width="75" height="75">
            <strong style="font-size: larger;">Donor Darah</strong>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Poin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Donor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Info</a>
              </li>
            </ul>
            <button type="button" class="btn btn-outline-info"><strong>Login</strong></button>
          </div>
        </div>
      </nav> 

    <canvas id="myChart" style="width:100%;max-width:700px">
        var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
        var yValues = [55, 49, 44, 24, 15];
        var barColors = ["red", "green","blue","orange","brown"];
        
        new Chart("myChart", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {...}
        });
    </canvas>
      
    <div style="bottom:0; width:100%;">
        <br><br><Br><Br>
        <footer class="text-center">
            <div class="text-center p-3" style="background-color:gray">
              @Donor Darah, 2022
            </div>
          </footer>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>