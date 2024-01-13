<?php
$flag = 0;
$userID = $_SESSION['user_id'];
$sql = "SELECT * FROM healthrecord WHERE UserID = $userID ORDER BY RecordID DESC";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
  $flag = 1;
  $row = mysqli_fetch_assoc($result);

  $bmi = $row['BMI'];
  $bmr = $row['BMR'];
  $mbp = $row['MeanBloodPressure'];

  $_SESSION['bmi'] = $bmi;
  $_SESSION['bmr'] = $bmr;
  $_SESSION['mbp'] = $mbp;
  $_SESSION['weight'] = $row['Weight'];
  $_SESSION['$height'] = $row['Height'];
} else {
  $flag = 0;
}
?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
  <?php
  include 'mainnav.php';
  ?>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">fitness_center</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Your BMI</p>
              <h4 class="mb-0">
                <?php
                if ($flag == 0 || $row['BMI'] == NULL) {
                  echo 'XXXX';
                } else {
                  echo $row['BMI'];
                }
                ?>
              </h4>
            </div>
          </div>
          <hr class="dark horizontal my-0" />
          <div class="card-footer p-3">
            <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder">+XX </span>some status
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">directions_run</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Your BMR</p>
              <h4 class="mb-0">
                <?php
                if ($flag == 0 || $row['BMR'] == NULL) {
                  echo 'XXXX';
                } else {
                  echo $row['BMR'];
                }
                ?>
              </h4>
            </div>
          </div>
          <hr class="dark horizontal my-0" />
          <div class="card-footer p-3">
            <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder">+XX </span>some status
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">favorite</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Mean Blood pressure</p>
              <h4 class="mb-0">
                <?php
                if ($flag == 0 || $row['MeanBloodPressure'] == NULL) {
                  echo 'XXXX';
                } else {
                  echo $row['MeanBloodPressure'];
                }
                ?>
              </h4>
            </div>
          </div>
          <hr class="dark horizontal my-0" />
          <div class="card-footer p-3">
            <p class="mb-0">
              <span class="text-danger text-sm font-weight-bolder">-XX</span>
              some status
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">accessibility</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Weight</p>
              <h4 class="mb-0">
                <?php
                if ($flag == 0 || $row['Weight'] == NULL) {
                  echo 'XXXX';
                } else {
                  echo $row['Weight'];
                }
                ?>
              </h4>
            </div>
          </div>
          <hr class="dark horizontal my-0" />
          <div class="card-footer p-3">
            <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder">+XX </span>some status
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card z-index-2">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
              <div class="chart">
                <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-0">Your BMI</h6>
            <p class="text-sm">Changes in Body Mass Index (BMI)</p>
            <hr class="dark horizontal" />
            <div class="d-flex">
              <i class="material-icons text-sm my-auto me-1">schedule</i>
              <p class="mb-0 text-sm">some detail sent 2 days ago</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card z-index-2">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-0">Your BMR</h6>
            <p class="text-sm">
              (<span class="font-weight-bolder">+XXXX</span>)
              Changes in Basal Metabolic Rate (BMR)
            </p>
            <hr class="dark horizontal" />
            <div class="d-flex">
              <i class="material-icons text-sm my-auto me-1">schedule</i>
              <p class="mb-0 text-sm">updated 4 min ago</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4 mb-3">
        <div class="card z-index-2">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
              <div class="chart">
                <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-0">Your MBP</h6>
            <p class="text-sm">Changes in Mean Blood pressure (BMR)</p>
            <hr class="dark horizontal" />
            <div class="d-flex">
              <i class="material-icons text-sm my-auto me-1">schedule</i>
              <p class="mb-0 text-sm">just updated.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    // Sample user data
    if (isset($_SESSION['bmi'])) {
      $userBMI = $_SESSION['bmi'];
    } else {
      $userBMI = NULL;
    }
    if (isset($_SESSION['bmr'])) {
      $userBMR = $_SESSION['bmr'];
    } else {
      $userBMR = NULL;
    }
    if (isset($_SESSION['bmi'])) {
      $userMeanBP = $_SESSION['mbp'];
    } else {
      $userMeanBP = NULL;
    }

    // Function to provide comprehensive diet recommendations
    function getComprehensiveDietRecommendation($bmi, $bmr, $meanBP)
    {
      $dietRecommendation = array();

      // Diet recommendation based on BMI
      if ($bmi < 18.5) {
        $dietRecommendation['bmi']['condition'] = "Underweight";
        $dietRecommendation['bmi']['remarks'] = "Include more protein and healthy fats in your diet. Consider foods like chicken, fish, avocados, and nuts.";
        $dietRecommendation['bmi']['exercise'] = "Exercise Daily for BMI";
      } elseif ($bmi >= 18.5 && $bmi < 25) {
        $dietRecommendation['bmi']['condition'] = "Normal Weight";
        $dietRecommendation['bmi']['remarks'] = "Maintain a balanced diet with a variety of fruits, vegetables, and whole grains.";
        $dietRecommendation['bmi']['exercise'] = "Exercise Daily for BMI";
      } else {
        $dietRecommendation['bmi']['condition'] = "Overweight";
        $dietRecommendation['bmi']['remarks'] = "Focus on portion control and include more fruits and vegetables. Limit intake of processed foods and sugary beverages.";
        $dietRecommendation['bmi']['exercise'] = "Exercise Daily for BMI";
      }

      // Diet recommendation based on BMR
      if ($bmr < 1500) {
        $dietRecommendation['bmr']['condition'] = "Low BMR";
        $dietRecommendation['bmr']['remarks'] = "Consider incorporating regular aerobic exercises to boost metabolism.";
        $dietRecommendation['bmr']['exercise'] = "Exercise Daily for bmr";
      } elseif ($bmr >= 1500 && $bmr < 2000) {
        $dietRecommendation['bmr']['condition'] = "Normal BMR";
        $dietRecommendation['bmr']['remarks'] = "Maintain a regular exercise routine to stay healthy.";
        $dietRecommendation['bmr']['exercise'] = "Exercise Daily for bmr";
      } else {
        $dietRecommendation['bmr']['condition'] = "High BMR";
        $dietRecommendation['bmr']['remarks'] = "Include strength training exercises to build muscle mass.";
        $dietRecommendation['bmr']['exercise'] = "Exercise Daily for bmr";
      }

      // Diet recommendation based on Mean Blood Pressure
      if ($meanBP < 80) {
        $dietRecommendation['meanBP']['condition'] = "Low Blood Pressure";
        $dietRecommendation['meanBP']['remarks'] = "Consult with a healthcare professional.";
        $dietRecommendation['mbp']['exercise'] = "Exercise Daily for MBP";
      } elseif ($meanBP >= 80 && $meanBP <= 120) {
        $dietRecommendation['meanBP']['condition'] = "Normal Blood Pressure";
        $dietRecommendation['meanBP']['remarks'] = "Maintain a healthy lifestyle.";
        $dietRecommendation['meanBP']['exercise'] = "Exercise Daily for MBP";
      } else {
        $dietRecommendation['meanBP']['condition'] = "High Blood Pressure";
        $dietRecommendation['meanBP']['remarks'] = "Consult with a healthcare professional.";
        $dietRecommendation['meanBP']['exercise'] = "Exercise Daily for MBP";
      }

      return $dietRecommendation;
    }


    // Display comprehensive recommendations
    $comprehensiveRecommendations = getComprehensiveDietRecommendation($userBMI, $userBMR, $userMeanBP);
    ?>


    <div class="row mb-4">
      <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
        <div class="card">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-6 col-7">
                <h6>Your Diet Plan</h6>
                <p class="text-sm mb-0">
                  <i class="fa fa-check text-info" aria-hidden="true"></i>
                  <span class="font-weight-bold ms-1">30 done</span> this
                  month
                </p>
              </div>

              <!-- Side options menu -->
              <div class="col-lg-6 col-5 my-auto text-end">
                <div class="dropdown float-lg-end pe-4">
                  <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-ellipsis-v text-secondary"></i>
                  </a>
                  <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                    <li>
                      <a class="dropdown-item border-radius-md" href="javascript:;">Action</a>
                    </li>
                    <li>
                      <a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- End of side options -->

            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      Category
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                      Condition
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      Remarks
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      Exercise
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($comprehensiveRecommendations as $condition => $details) : ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">
                              <?php echo ucfirst($condition); ?>
                            </h6>
                          </div>
                        </div>
                      </td>

                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold">
                          <?php echo $details['condition']; ?>
                        </span>
                      </td>
                      <td class="align-middle text-sm">
                        <span class="text-xs font-weight-bold">
                          <?php echo $details['remarks']; ?>
                        </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold">
                          <?php echo $details['exercise']; ?>
                        </span>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card h-100">
          <div class="card-header pb-0">
            <h6>Your Status</h6>
            <!-- <p class="text-sm">
              <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
              <span class="font-weight-bold">24%</span> this month
            </p> -->
          </div>
          <div class="card-body p-3">
            <div class="timeline timeline-one-side">
              <div class="timeline-block mb-3">
                <span class="timeline-step">
                  <i class="material-icons text-primary text-gradient">height</i>
                </span>
                <div class="timeline-content">
                  <h6 class="text-dark text-sm font-weight-bold mb-0">
                    Height:
                  </h6>
                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                    <?php
                    if ($flag == 0 || $row['Height'] == NULL) {
                      echo 'XXXX';
                    } else {
                      echo $row['Height'];
                    }
                    ?>
                  </p>
                </div>
              </div>


              <div class="timeline-block mb-3">
                <span class="timeline-step">
                  <i class="material-icons text-warning text-gradient">accessibility</i>
                </span>
                <div class="timeline-content">
                  <h6 class="text-dark text-sm font-weight-bold mb-0">
                    Weight:
                  </h6>
                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                    <?php
                    if ($flag == 0 || $row['Weight'] == NULL) {
                      echo 'XXXX';
                    } else {
                      echo $row['Weight'];
                    }
                    ?>
                  </p>
                </div>
              </div>

              <div class="timeline-block mb-3">
                <span class="timeline-step">
                  <i class="material-icons text-success text-gradient">fitness_center</i>
                </span>
                <div class="timeline-content">
                  <h6 class="text-dark text-sm font-weight-bold mb-0">
                    BMI:
                  </h6>
                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                    <?php
                    if ($flag == 0 || $row['BMI'] == NULL) {
                      echo 'XXXX';
                    } else {
                      echo $row['BMI'];
                    }
                    ?>
                  </p>
                </div>
              </div>
              <div class="timeline-block mb-3">
                <span class="timeline-step">
                  <i class="material-icons text-danger text-gradient">directions_run</i>
                </span>
                <div class="timeline-content">
                  <h6 class="text-dark text-sm font-weight-bold mb-0">
                    BMR:
                  </h6>
                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                    <?php
                    if ($flag == 0 || $row['BMR'] == NULL) {
                      echo 'XXXX';
                    } else {
                      echo $row['BMR'];
                    }
                    ?>
                  </p>
                </div>
              </div>
              <div class="timeline-block mb-3">
                <span class="timeline-step">
                  <i class="material-icons text-info text-gradient">favorite</i>
                </span>
                <div class="timeline-content">
                  <h6 class="text-dark text-sm font-weight-bold mb-0">
                    Mean Blood Pressure:
                  </h6>
                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                    <?php
                    if ($flag == 0 || $row['MeanBloodPressure'] == NULL) {
                      echo 'XXXX';
                    } else {
                      echo $row['MeanBloodPressure'];
                    }
                    ?>
                  </p>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Start -->
    <?php
    include 'dashboard-footer.php';
    ?>
    <!-- Footer End -->
  </div>
</main>
<div class="fixed-plugin">
  <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
    <i class="material-icons py-2">settings</i>
  </a>
  <div class="card shadow-lg">
    <div class="card-header pb-0 pt-3">
      <div class="float-start">
        <h5 class="mt-3 mb-0">Material UI Configurator</h5>
        <p>See our dashboard options.</p>
      </div>
      <div class="float-end mt-4">
        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <!-- End Toggle Button -->
    </div>
    <hr class="horizontal dark my-1" />
    <div class="card-body pt-sm-3 pt-0">
      <!-- Sidebar Backgrounds -->
      <div>
        <h6 class="mb-0">Sidebar Colors</h6>
      </div>
      <a href="javascript:void(0)" class="switch-trigger background-color">
        <div class="badge-colors my-2 text-start">
          <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
        </div>
      </a>
      <!-- Sidenav Type -->
      <div class="mt-3">
        <h6 class="mb-0">Sidenav Type</h6>
        <p class="text-sm">Choose between 2 different sidenav types.</p>
      </div>
      <div class="d-flex">
        <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">
          Dark
        </button>
        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">
          Transparent
        </button>
        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">
          White
        </button>
      </div>
      <p class="text-sm d-xl-none d-block mt-2">
        You can change the sidenav type just on desktop view.
      </p>
      <!-- Navbar Fixed -->
      <div class="mt-3 d-flex">
        <h6 class="mb-0">Navbar Fixed</h6>
        <div class="form-check form-switch ps-0 ms-auto my-auto">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)" />
        </div>
      </div>
      <hr class="horizontal dark my-3" />
      <div class="mt-2 d-flex">
        <h6 class="mb-0">Light / Dark</h6>
        <div class="form-check form-switch ps-0 ms-auto my-auto">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)" />
        </div>
      </div>
      <hr class="horizontal dark my-sm-4" />
      <a class="btn btn-outline-dark w-100" href="">View documentation</a>
      <div class="w-100 text-center">
        <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
        <h6 class="mt-3">Thank you for sharing!</h6>
        <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
          <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
          <i class="fab fa-facebook-square me-1" aria-hidden="true"></i>
          Share
        </a>
      </div>
    </div>
  </div>
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="../assets/js/plugins/chartjs.min.js"></script>
<script>
  // Retrieve the JSON data from the previous PHP file
  fetch('display-info.php')
    .then(response => response.json())
    .then(data => {
      // Extract BMI, BMR, and MBP data
      const chartData = data.map(item => ({
        RecordID: item.RecordID,
        BMI: item.BMI,
        BMR: item.BMR,
        MeanBloodPressure: item.MeanBloodPressure
      }));

      // BMI Data
      var bmictx = document.getElementById("chart-bars").getContext("2d");
      new Chart(bmictx, {
        type: "bar",
        data: {
          labels: chartData.map(item => 'Record ' + item.RecordID),
          datasets: [{
            label: 'BMI',
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "rgba(255, 255, 255, .8)",
            data: chartData.map(item => item.BMI),
            backgroundColor: "rgba(255, 255, 255, .8)",
            // Adjust the color as needed
            borderWidth: 1
          }]

        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            },
          },
          interaction: {
            intersect: false,
            mode: "index",
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: "rgba(255, 255, 255, .2)",
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: "normal",
                  lineHeight: 2,
                },
                color: "#fff",
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: "rgba(255, 255, 255, .2)",
              },
              ticks: {
                display: true,
                color: "#f8f9fa",
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: "normal",
                  lineHeight: 2,
                },
              },
            },
          },
        },
      });

      // Render BMR chart
      var ctx2 = document.getElementById("chart-line").getContext("2d");
      new Chart(ctx2, {
        type: "line",
        data: {
          labels: chartData.map(function(item) {
            return 'Record ' + item.RecordID;
          }),
          datasets: [{
            label: 'BMR',
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: chartData.map(function(item) {
              return item.BMR;
            }),
            // borderColor: 'rgba(255, 99, 132, 1)',
            maxBarThickness: 6
            //borderWidth: 2,
            //fill: false
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            },
          },
          interaction: {
            intersect: false,
            mode: "index",
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: "rgba(255, 255, 255, .2)",
              },
              ticks: {
                display: true,
                color: "#f8f9fa",
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: "normal",
                  lineHeight: 2,
                },
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5],
              },
              ticks: {
                display: true,
                color: "#f8f9fa",
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: "normal",
                  lineHeight: 2,
                },
              },
            },
          },
        },
      });

      // Render MBP Chart
      var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");
      new Chart(ctx3, {
        type: "line",
        data: {
          labels: chartData.map(function(item) {
            return 'Record ' + item.RecordID;
          }),
          datasets: [{
            label: 'Mean Blood Pressure',
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: chartData.map(function(item) {
              return item.MeanBloodPressure;
            }),
            maxBarThickness: 6,
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            },
          },
          interaction: {
            intersect: false,
            mode: "index",
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: "rgba(255, 255, 255, .2)",
              },
              ticks: {
                display: true,
                padding: 10,
                color: "#f8f9fa",
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: "normal",
                  lineHeight: 2,
                },
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5],
              },
              ticks: {
                display: true,
                color: "#f8f9fa",
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: "normal",
                  lineHeight: 2,
                },
              },
            },
          },
        },
      });
    });
</script>
<script>
  var win = navigator.platform.indexOf("Win") > -1;
  if (win && document.querySelector("#sidenav-scrollbar")) {
    var options = {
      damping: "0.5",
    };
    Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>