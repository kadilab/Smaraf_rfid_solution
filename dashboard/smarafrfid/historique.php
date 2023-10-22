<!DOCTYPE html>
<html lang="en">
<?php
  include 'partials/header.php';
?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <?php
      include './partials/head.php';
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.php -->
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
      <?php
        include './partials/nav.php';
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
             <h1>Historique</h1>
              <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <p class="card-title">
                            <form action="" class="form col-md-3">
                                <div class="form-group">
                                    <div class="input-group">
                                      <input type="date" class="form-control" id="date_input" placeholder="Recipient's username" aria-label="Recipient's username" data-listener-added_499e1036="true">
                                      <div class="input-group-append">
                                        <button id="filtrer" class="btn btn-sm btn-primary" type="button">Search</button>
                                      </div>
                                    </div>
                                  </div>
                            </form>
                            <button id="export" class="btn btn-primary">Exporte</button>
                        </p>
                        <div class="row">
                          <div class="col-12">
                            <div class="table-responsive">
                              <table id="example" class="display expandable-table" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>No#</th>
                                    <th>Antenne</th>
                                    <th>Epc</th>
                                    <th>Date</th>
                                  </tr>
                                </thead>
                                <tbody id='tableBody'>
                             
                                </tbody>
                            </table>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>       
                    </div>
              </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.<a href="https://www.smaraf.com/" target="_blank">Smaraf</a> from smaraf. All rights reserved.</span>
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>

  <!-- À placer après les balises </body> et </html> -->
  <!-- Assurez-vous d'inclure jQuery avant d'inclure ce script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  // Utilise la fonction document.ready pour exécuter le code lorsque le DOM est chargé
  $(document).ready(function() {
    // Requête AJAX pour récupérer toutes les données disponibles sans filtre de date
    function update(){
      var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var tableBody = document.getElementById("tableBody");
        tableBody.innerHTML = xhr.responseText;
      }
    };
    // Remplacez "get_data.php" par le nom de votre script PHP qui récupère toutes les données de la base de données
    xhr.open("GET", "https://gsad.uzacart.shop/api/filtre.php?date=", true);
    xhr.send();
    }
    update();
    // setInterval(update, 1000);

    // Événement pour charger les données lorsque le bouton "Search" est cliqué
    var searchButton = document.getElementById("filtrer");
    searchButton.addEventListener("click", function() {
      var dateFilter = document.getElementById("date_input").value;
      // Requête AJAX pour récupérer les données en fonction du filtre de date sélectionné
      var xhrFilter = new XMLHttpRequest();
      xhrFilter.onreadystatechange = function() {
        if (xhrFilter.readyState === 4 && xhrFilter.status === 200) {
          tableBody.innerHTML = xhrFilter.responseText;
        }
      };
      // Remplacez "get_data.php" par le nom de votre script PHP qui récupère les enregistrements en fonction du filtre de date
      xhrFilter.open("GET", "https://gsad.uzacart.shop/api/filtre.php?date=" + dateFilter, true);
      xhrFilter.send();
    });
  });
</script>
<!-- csv export -->

<script>
  // Fonction pour exporter la table en CSV
  function exporterEnCSV() {
    const table = document.getElementById('example');
    const rows = table.getElementsByTagName('tr');
    let csvContent = "data:text/csv;charset=utf-8,";

    for (const row of rows) {
      const rowData = [];
      const cells = row.getElementsByTagName('td');
      
      for (const cell of cells) {
        rowData.push(cell.innerText);
      }
      
      csvContent += rowData.join(',') + "\n";
    }

    const encodedUri = encodeURI(csvContent);
    const downloadLink = document.createElement('a');
    downloadLink.href = encodedUri;
    downloadLink.download = 'table_export.csv';
    downloadLink.click();
  }

  // Attacher l'événement click au bouton
  document.getElementById('export').addEventListener('click', exporterEnCSV);
</script>


  <!-- End custom js for this page-->
</body>

</html>

