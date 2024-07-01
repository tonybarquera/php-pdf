<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header class="contenedor-principal">
    <p class="text-center">Sakila Actors</p>
  </header>

  <main class="contenedor-principal" id="render">
    <button onclick="imprimir_tabla()">IMPRIMIR</button>

    <div style="width: 100%; margin: 0 auto;">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <th class="text-center">ID</th>
          <th class="text-center">Nombre</th>
          <th class="text-center">Apellido</th>
          <th class="text-center">Ultima Actualización</th>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </main>

  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <!-- DATATABLES -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap4.js"></script>

  <!-- SRC -->
  <script src="./js/actors.js"></script>
  <script>
    function imprimir_tabla() {
      const render = document.getElementById('render');
      console.log(render);
    }
  </script>
</body>

</html>

<?php
  require 'dompdf/vendor/autoload.php';
  use Dompdf\Dompdf;  

  function imprimir() {
    $html = ob_get_clean();

    $dompdf = new Dompdf();
    $options = $dompdf->getOptions();
    $options->set(array('isRemoteEnabled' => true));
    $dompdf->setOptions($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream("archivo.pdf", array("Attachment" =>  false));
  }