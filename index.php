<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iDiscuss -- Coding Forums </title>
  <!-- Add bootstrap file  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <style>
  .img_slider {
    height: 400px;
    width: 100%;
  }
  </style>
</head>

<body>
  <?php include("partials/_header.php");?>
  <?php include("partials/_sliders.php");?>
  <!--  <?php include("partials/_header.php");?> -->
  <div class="container">
    <h1 class="text-center">iDiscuss - Categories </h1>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="https://www.dataexpertise.in/wp-content/uploads/2025/03/Python-Compiler.jpg" class="card-img-top"
          alt="Python image">
        <div class="card-body">
          <h5 class="card-title">Python Forum</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Add footer section -->
  <?php include("partials/_footer.php");?>
  <!-- Add bootstrap js file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
</body>

</html>