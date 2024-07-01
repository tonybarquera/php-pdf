<?php
  require 'dompdf/vendor/autoload.php';
  use Dompdf\Dompdf;

  class Imprimir {
    public function __construct() {

    }

    public function imprimir() {
      // $html = ob_get_clean();

      $dompdf = new Dompdf();
      $dompdf->loadHtml("<p>Hola</p>");
      $dompdf->setPaper('A4', 'landscape');
      $dompdf->render();
      $dompdf->stream();
    }
  }