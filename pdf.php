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
      <div id="example_wrapper" class="dt-container dt-bootstrap4 dt-empty-footer">
        <div class="row justify-content-between">
          <div class="col-md-auto mr-auto ">
            <div class="dt-length"><select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm" id="dt-length-0">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select><label for="dt-length-0"> entries per page</label></div>
          </div>
          <div class="col-md-auto ml-auto ">
            <div class="dt-search"><label for="dt-search-0">Search:</label><input type="search" class="form-control form-control-sm" id="dt-search-0" placeholder="" aria-controls="example"></div>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-12 ">
            <div class="dt-scroll">
              <div class="dt-scroll-head" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                <div class="dt-scroll-headInner" style="box-sizing: content-box; width: 1390px; padding-right: 0px;">
                  <table class="table table-striped table-bordered dataTable" style="width: 1390px; margin-left: 0px;" aria-describedby="example_info">
                    <thead>
                      <tr role="row">
                        <th class="text-center dt-center dt-orderable-asc dt-orderable-desc dt-type-numeric dt-ordering-asc" data-dt-column="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: Activate to invert sorting" tabindex="0"><span class="dt-column-title" role="button">ID</span><span class="dt-column-order"></span></th>
                        <th class="text-center dt-center dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="Nombre: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Nombre</span><span class="dt-column-order"></span></th>
                        <th class="text-center dt-center dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="Apellido: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Apellido</span><span class="dt-column-order"></span></th>
                        <th class="text-center dt-center dt-orderable-asc dt-orderable-desc dt-type-date" data-dt-column="3" rowspan="1" colspan="1" aria-label="Ultima Actualización: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Ultima Actualización</span><span class="dt-column-order"></span></th>
                      </tr>
                    </thead>
                    <colgroup>
                      <col data-dt-column="0" style="width: 161.25px;">
                      <col data-dt-column="1" style="width: 341.15px;">
                      <col data-dt-column="2" style="width: 351.25px;">
                      <col data-dt-column="3" style="width: 535.683px;">
                    </colgroup>
                  </table>
                </div>
              </div>
              <div class="dt-scroll-body" style="position: relative; overflow: auto; width: 100%;">
                <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;" aria-describedby="example_info">
                  <colgroup>
                    <col data-dt-column="0" style="width: 161.25px;">
                    <col data-dt-column="1" style="width: 341.15px;">
                    <col data-dt-column="2" style="width: 351.25px;">
                    <col data-dt-column="3" style="width: 535.683px;">
                  </colgroup>
                  <thead>
                    <tr role="row">
                      <th class="text-center dt-center dt-orderable-asc dt-orderable-desc dt-type-numeric dt-ordering-asc" data-dt-column="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: Activate to invert sorting">
                        <div class="dt-scroll-sizing"><span class="dt-column-title" role="button">ID</span><span class="dt-column-order"></span></div>
                      </th>
                      <th class="text-center dt-center dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="Nombre: Activate to sort">
                        <div class="dt-scroll-sizing"><span class="dt-column-title" role="button">Nombre</span><span class="dt-column-order"></span></div>
                      </th>
                      <th class="text-center dt-center dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="Apellido: Activate to sort">
                        <div class="dt-scroll-sizing"><span class="dt-column-title" role="button">Apellido</span><span class="dt-column-order"></span></div>
                      </th>
                      <th class="text-center dt-center dt-orderable-asc dt-orderable-desc dt-type-date" data-dt-column="3" rowspan="1" colspan="1" aria-label="Ultima Actualización: Activate to sort">
                        <div class="dt-scroll-sizing"><span class="dt-column-title" role="button">Ultima Actualización</span><span class="dt-column-order"></span></div>
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">1</td>
                      <td class="dt-center">PENELOPE</td>
                      <td class="dt-center">GUINESS</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">2</td>
                      <td class="dt-center">NICK</td>
                      <td class="dt-center">WAHLBERG</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">3</td>
                      <td class="dt-center">ED</td>
                      <td class="dt-center">CHASE</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">4</td>
                      <td class="dt-center">JENNIFER</td>
                      <td class="dt-center">DAVIS</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">5</td>
                      <td class="dt-center">JOHNNY</td>
                      <td class="dt-center">LOLLOBRIGIDA</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">6</td>
                      <td class="dt-center">BETTE</td>
                      <td class="dt-center">NICHOLSON</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">7</td>
                      <td class="dt-center">GRACE</td>
                      <td class="dt-center">MOSTEL</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">8</td>
                      <td class="dt-center">MATTHEW</td>
                      <td class="dt-center">JOHANSSON</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">9</td>
                      <td class="dt-center">JOE</td>
                      <td class="dt-center">SWANK</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">10</td>
                      <td class="dt-center">CHRISTIAN</td>
                      <td class="dt-center">GABLE</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">11</td>
                      <td class="dt-center">ZERO</td>
                      <td class="dt-center">CAGE</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">12</td>
                      <td class="dt-center">KARL</td>
                      <td class="dt-center">BERRY</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">13</td>
                      <td class="dt-center">UMA</td>
                      <td class="dt-center">WOOD</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">14</td>
                      <td class="dt-center">VIVIEN</td>
                      <td class="dt-center">BERGEN</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">15</td>
                      <td class="dt-center">CUBA</td>
                      <td class="dt-center">OLIVIER</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">16</td>
                      <td class="dt-center">FRED</td>
                      <td class="dt-center">COSTNER</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">17</td>
                      <td class="dt-center">HELEN</td>
                      <td class="dt-center">VOIGHT</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">18</td>
                      <td class="dt-center">DAN</td>
                      <td class="dt-center">TORN</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">19</td>
                      <td class="dt-center">BOB</td>
                      <td class="dt-center">FAWCETT</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">20</td>
                      <td class="dt-center">LUCILLE</td>
                      <td class="dt-center">TRACY</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">21</td>
                      <td class="dt-center">KIRSTEN</td>
                      <td class="dt-center">PALTROW</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">22</td>
                      <td class="dt-center">ELVIS</td>
                      <td class="dt-center">MARX</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">23</td>
                      <td class="dt-center">SANDRA</td>
                      <td class="dt-center">KILMER</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">24</td>
                      <td class="dt-center">CAMERON</td>
                      <td class="dt-center">STREEP</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                    <tr>
                      <td class="dt-type-numeric dt-center sorting_1">25</td>
                      <td class="dt-center">KEVIN</td>
                      <td class="dt-center">BLOOM</td>
                      <td class="dt-type-date dt-center">2006-02-15 04:34:33</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="dt-scroll-foot" style="overflow: hidden; border: 0px; width: 100%;">
                <div class="dt-scroll-footInner">
                  <table class="table table-striped table-bordered dataTable" style="width: 100%; margin-left: 0px;" aria-describedby="example_info">
                    <tfoot></tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-md-auto mr-auto ">
            <div class="dt-info" aria-live="polite" id="example_info" role="status">Showing 1 to 25 of 200 entries</div>
          </div>
          <div class="col-md-auto ml-auto ">
            <div class="dt-paging paging_full_numbers">
              <ul class="pagination">
                <li class="dt-paging-button page-item disabled"><a class="page-link first" aria-controls="example" aria-disabled="true" aria-label="First" data-dt-idx="first" tabindex="-1">«</a></li>
                <li class="dt-paging-button page-item disabled"><a class="page-link previous" aria-controls="example" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1">‹</a></li>
                <li class="dt-paging-button page-item active"><a href="#" class="page-link" aria-controls="example" aria-current="page" data-dt-idx="0" tabindex="0">1</a></li>
                <li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="example" data-dt-idx="1" tabindex="0">2</a></li>
                <li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="example" data-dt-idx="2" tabindex="0">3</a></li>
                <li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="example" data-dt-idx="3" tabindex="0">4</a></li>
                <li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="example" data-dt-idx="4" tabindex="0">5</a></li>
                <li class="dt-paging-button page-item disabled"><a class="page-link ellipsis" aria-controls="example" aria-disabled="true" data-dt-idx="ellipsis" tabindex="-1">…</a></li>
                <li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="example" data-dt-idx="7" tabindex="0">8</a></li>
                <li class="dt-paging-button page-item"><a href="#" class="page-link next" aria-controls="example" aria-label="Next" data-dt-idx="next" tabindex="0">›</a></li>
                <li class="dt-paging-button page-item"><a href="#" class="page-link last" aria-controls="example" aria-label="Last" data-dt-idx="last" tabindex="0">»</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
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