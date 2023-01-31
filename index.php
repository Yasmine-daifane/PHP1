<?php
    // require 'functions.php';
    if (isset($_COOKIE["teams"])) {
        $teams = json_decode($_COOKIE['teams'], true);
    } else {
        $teams = [
            "morocco" => ["POINTS" => 0, "played" => 0, "GAMES_WON" => 0, "GAMES_EQUAL" => 0, "GAMES_LOSTS" => 0, "GOALS_SCORED" => 0, "GOALS_RECEIVED" => 0, "DIFF" => 0],
            "croitia" => ["POINTS" => 0, "played" => 0, "GAMES_WON" => 0, "GAMES_EQUAL" => 0, "GAMES_LOSTS" => 0, "GOALS_SCORED" => 0, "GOALS_RECEIVED" => 0, "DIFF" => 0],
            "belgium" => ["POINTS" => 0, "played" => 0, "GAMES_WON" => 0, "GAMES_EQUAL" => 0, "GAMES_LOSTS" => 0, "GOALS_SCORED" => 0, "GOALS_RECEIVED" => 0, "DIFF" => 0],
            "canada" =>  ["POINTS" => 0, "played" => 0, "GAMES_WON" => 0, "GAMES_EQUAL" => 0, "GAMES_LOSTS" => 0, "GOALS_SCORED" => 0, "GOALS_RECEIVED" => 0, "DIFF" => 0],
        ];
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIFA</title>
    <!-- link bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- link CSS -->
 
    <link rel="stylesheet" href="test.css">
</head>
<body>
  
 
 
    <div>
        <h1 class="text-center text-bg-light text-danger">FIFA WC</h1>
    </div>

    <main class="m-5  ">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <div class=" d-flex justify-content-between mb-3 card-color">
                <div class="w-75">
                    <h3 class="bg-warning text-light text-aligne-center d-flex justify-content-center">23 NOV 11:00 H</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <img src="images/morocco.jfif" alt="" class="rounded-circle" width="50px" height="50px">
                        <h2>MOROCCO</h2>
                    </div>
                </div>
                <div class="w-75">
                    <h3 class="bg-dark text-light d-flex justify-content-center">FINAL</h3>
                    <div class=" text-center mt-3 mx-auto">
                        <input type="number" min="0" name="inpMoroccoMatchOne"  value="<?php echo $inpOne;?>">
                        <input type="number" min="0" name="inpCroitiaMatchOne"  value="">
                    </div>
                </div>
                <div class="w-75">
                    <h3 class="bg-danger text-light text-aligne-center d-flex justify-content-center">MATCH 1</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <h2>CROITIA</h2>
                        <img src="images/croitia.png" alt="" class="rounded-circle" width="50px" height="50px">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-3 card-color">
                <div class="w-100">
                    <h3 class="bg-warning text-light text-aligne-center d-flex justify-content-center">23 NOV 11:00 H</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <img src="images/Belgium.png" alt="" class="rounded-circle" width="50px" height="50px">
                        <h2>Belgium</h2>
                    </div>
                </div>
                <div class="w-75">
                    <h3 class="bg-dark text-light d-flex justify-content-center">FINAL</h3>
                    <div class="text-center mt-3 mx-auto">
                        <input type="number" min="0" name="inpBelgiumMatchTwo" >
                        <input type="number" min="0" name="inpCanadaMatchTwo" >
                    </div>
                </div>
                <div class="w-75">
                    <h3 class="bg-danger text-light text-aligne-center d-flex justify-content-center">MATCH 2</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <h2>CANADA</h2>
                        <img src="images/canada.png" alt="" class="rounded-circle" width="50px" height="50px">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-3 card-color">
                <div class="w-100">
                    <h3 class="bg-warning text-light text-aligne-center d-flex justify-content-center">23 NOV 11:00 H</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <img src="images/morocco.jfif" alt="" class="rounded-circle" width="50px" height="50px">
                        <h2>MOROCCO</h2>
                    </div>
                </div>
                <div class="w-75">
                    <h3 class="bg-dark text-light d-flex justify-content-center">FINAL</h3>
                    <div class="text-center mt-3 mx-auto">
                        <input type="number" min="0" name="inpMoroccoMatchThree" >
                        <input type="number" min="0" name="inpBelgiumMatchThree" >
                    </div>
                </div>
                <div class="w-75">
                    <h3 class="bg-danger text-light text-aligne-center d-flex justify-content-center">MATCH 3</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <h2>BELGIUM</h2>
                        <img src="images/Belgium.png" alt="" class="rounded-circle" width="50px" height="50px">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-3 card-color">
                <div class="w-75">
                    <h3 class="bg-warning text-light text-aligne-center d-flex justify-content-center">23 NOV 11:00 H</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <img src="images/croitia.png" alt="" class="rounded-circle" width="50px" height="50px">
                        <h2>CROITIA</h2>
                    </div>
                </div>
                <div class="w-75">
                    <h3 class="bg-dark text-light d-flex justify-content-center">FINAL</h3>
                    <div class="text-center mt-3 mx-auto">
                        <input type="number" name="inpCroitiaMatchFoor" min="0" >
                        <input type="number" name="inpCanadaMatchFoor" min="0">
                    </div>
                </div>
                <div class="w-75">
                    <h3 class="bg-danger text-light text-aligne-center d-flex justify-content-center">MATCH 4</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <h2>CANADA</h2>
                        <img src="images/canada.png" alt="" class="rounded-circle" width="50px" height="50px">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-3 card-color">
                <div class="w-75">
                    <h3 class="bg-warning text-light text-aligne-center d-flex justify-content-center">23 NOV 11:00 H</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <img src="images/Belgium.png" alt="" class="rounded-circle" width="50px" height="50px">
                        <h2>Belguim</h2>
                    </div>
                </div>
                <div class="w-75">
                    <h3 class="bg-dark text-light d-flex justify-content-center">FINAL</h3>
                    <div class="text-center mt-3 mx-auto">
                        <input type="number" min="0" name="inpBelgiumMatchFive">
                        <input type="number" min="0" name="inpCroitiaMatchFive" >
                    </div>
                </div>
                <div class="w-75">
                    <h3 class="bg-danger text-light text-aligne-center d-flex justify-content-center">MATCH 5</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <h2>CROITIA</h2>
                        <img src="images/croitia.png" alt="" class="rounded-circle" width="50px" height="50px">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-3 card-color">
                <div class="w-75">
                    <h3 class="bg-warning text-light d-flex justify-content-center">23 NOV 11:00 H</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <img src="images/morocco.jfif" alt="" class="rounded-circle" width="50px" height="50px">
                        <h2>MOROCCO</h2>
                    </div>
                </div>
                <div class="w-75 ">
                    <h3 class="bg-dark text-light d-flex justify-content-center ">FINAL</h3>
                    <div class="text-center mt-3 mx-auto">
                        <input type="number" min="0" name="inpMoroccoMatchSix" >
                        <input type="number" min="0" name="inpCanadaMatchSix" >
                    </div>
                </div>
                <div class="w-75">
                    <h3 class="bg-danger text-light text-aligne-center d-flex justify-content-center">MATCH 6</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <h2>CANADA</h2>
                        <img src="images/canada.png" alt="" class="rounded-circle" width="50px" height="50px">
                    </div>
                </div>
            </div>
            <!-- <button >ADD</button> -->
            <button type="submit" name="submit" class="btn btn-outline-dark  ml-5 container w-25  h1 d-flex justify-content-center">Simulateur</button>
        </form>
    <!-- Create Table -->
      <table class="table w-50 table-responsive-sm  mt-5 text-center mx-auto">
        <thead>
          <tr>
            <th class="text-bg-secondary" scope="col">#</th>
            <th class="text-bg-secondary" scope="col">Team</th>
            <th class="text-bg-secondary" scope="col">PTS.</th>
            <th class="text-bg-secondary" scope="col">MTH.</th>
            <th class="text-bg-secondary" scope="col">WIN.</th>
            <th class="text-bg-secondary" scope="col">GAMES_EQUAL</th>
            <th class="text-bg-secondary" scope="col">GAMES_LOSTS</th>
            <th class="text-bg-secondary" scope="col">G.F.</th>
            <th class="text-bg-secondary" scope="col">G.C.</th>
            <th class="text-bg-secondary" scope="col">+/-</th>
          </tr>
        </thead>
            <tbody>
             <?php
                $i = 1;        
                // ======================= Matches are run according to goals and POINTSs ... ==============================
              if(isset($_GET['submit'])) { 
                // click in button add result
                //===match 1
                if ($_GET['inpMoroccoMatchOne'] != "" && $_GET['inpCroitiaMatchOne'] != "") {
                  #morocco
                  $teams["morocco"]["played"] += 1;
                  $teams["morocco"]['GOALS_SCORED'] += $_GET['inpMoroccoMatchOne'];
                  $teams["morocco"]['GOALS_RECEIVED'] += $_GET['inpCroitiaMatchOne'];
                  #Croitia
                  $teams["croitia"]['played'] += 1;
                  $teams["croitia"]['GOALS_SCORED'] += $_GET['inpCroitiaMatchOne'];
                  $teams["croitia"]['GOALS_RECEIVED'] += $_GET['inpMoroccoMatchOne'];
                  if ($_GET['inpMoroccoMatchOne'] > $_GET['inpCroitiaMatchOne'] ) {
                          $teams["morocco"]['POINTS'] += 3;
                          $teams["morocco"]['GAMES_WON'] += 1;
                          $teams["croitia"]['GAMES_LOSTS'] += 1;
                  } elseif ($_GET['inpMoroccoMatchOne'] < $_GET['inpCroitiaMatchOne']) {
                          $teams["croitia"]['POINTS'] += 3;
                          $teams["croitia"]['GAMES_WON'] += 1;
                          $teams["morocco"]['GAMES_LOSTS'] += 1;
                  } else {
                          $teams["croitia"]['POINTS'] += 1;
                          $teams["croitia"]['GAMES_EQUAL'] += 1;
                          $teams["morocco"]['POINTS'] += 1;
                          $teams["morocco"]['GAMES_EQUAL'] += 1;
                  };
                };
                //===Match 2
                if ($_GET['inpBelgiumMatchTwo'] != "" && $_GET['inpCanadaMatchTwo'] != "") {
                  #Belgium
                  $teams["belgium"]['played'] += 1;
                  $teams["belgium"]['GOALS_SCORED'] += $_GET['inpBelgiumMatchTwo'];
                  $teams["belgium"]['GOALS_RECEIVED'] += $_GET['inpCanadaMatchTwo'];
                  # Canada
                  $teams["canada"]['played'] += 1;
                  $teams["canada"]['GOALS_SCORED'] += $_GET['inpCanadaMatchTwo'];
                  $teams["canada"]['GOALS_RECEIVED'] += $_GET['inpBelgiumMatchTwo'];
                  if ($_GET['inpBelgiumMatchTwo'] > $_GET['inpCanadaMatchTwo'] ) {
                          $teams["belgium"]['POINTS'] += 3;
                          $teams["belgium"]['GAMES_WON'] += 1;
                          $teams["canada"]['GAMES_LOSTS'] += 1;
                  } elseif ($_GET['inpBelgiumMatchTwo'] < $_GET['inpCanadaMatchTwo']) {
                          $teams["canada"]['POINTS'] += 3;
                          $teams["canada"]['GAMES_WON'] += 1;
                          $teams["belgium"]['GAMES_LOSTS'] += 1;
                  } else {
                          $teams["belgium"]['POINTS'] += 1;
                          $teams["belgium"]['GAMES_EQUAL'] += 1;
                          $teams["canada"]['POINTS'] += 1;
                          $teams["canada"]['GAMES_EQUAL'] += 1;
                  };
                };
                //===Match 3
                if ($_GET['inpMoroccoMatchThree'] != "" && $_GET['inpBelgiumMatchThree'] != "") {     
                  # Morocco
                  $teams["morocco"]['played'] += 1;
                  $teams["morocco"]['GOALS_SCORED'] += $_GET['inpMoroccoMatchThree'];
                  $teams["morocco"]['GOALS_RECEIVED'] += $_GET['inpBelgiumMatchThree'];
                  #Belgium
                  $teams["belgium"]['played'] += 1;
                  $teams["belgium"]['GOALS_SCORED'] += $_GET['inpBelgiumMatchThree'];
                  $teams["belgium"]['GOALS_RECEIVED'] += $_GET['inpMoroccoMatchThree'];
                  if ($_GET['inpMoroccoMatchThree'] > $_GET['inpBelgiumMatchThree'] ) {
                          $teams["morocco"]['POINTS'] += 3;
                          $teams["morocco"]['GAMES_WON'] += 1;
                          $teams["belgium"]['GAMES_LOSTS'] += 1;
                  } elseif ($_GET['inpMoroccoMatchThree'] < $_GET['inpBelgiumMatchThree']) {
                          $teams["belgium"]['POINTS'] += 3;
                          $teams["belgium"]['GAMES_WON'] += 1;
                          $teams["morocco"]['GAMES_LOSTS'] += 1;
                  } else {
                          $teams["morocco"]['POINTS'] += 1;
                          $teams["morocco"]['GAMES_EQUAL'] += 1;
                          $teams["belgium"]['POINTS'] += 1;
                          $teams["belgium"]['GAMES_EQUAL'] += 1;
                  };
                };
                //=== Match 4
                if ($_GET['inpCroitiaMatchFoor'] != "" && $_GET['inpCanadaMatchFoor'] != "") {
                  #Croitia
                  $teams["croitia"]['played'] += 1;
                  $teams["croitia"]['GOALS_SCORED'] += $_GET['inpCroitiaMatchFoor'];
                  $teams["croitia"]['GOALS_RECEIVED'] += $_GET['inpCanadaMatchFoor'];
                  #Cnada
                  $teams["canada"]['played'] += 1;
                  $teams["canada"]['GOALS_SCORED'] += $_GET['inpCanadaMatchFoor'];
                  $teams["canada"]['GOALS_RECEIVED'] += $_GET['inpCroitiaMatchFoor'];
                  if ($_GET['inpCroitiaMatchFoor'] > $_GET['inpCanadaMatchFoor'] ) {
                          $teams["croitia"]['POINTS'] += 3;
                          $teams["croitia"]['GAMES_WON'] += 1;
                          $teams["canada"]['GAMES_LOSTS'] += 1;
                  } elseif ($_GET['inpCroitiaMatchFoor'] < $_GET['inpCanadaMatchFoor']) {
                          $teams["canada"]['POINTS'] += 3;
                          $teams["canada"]['GAMES_WON'] += 1;
                          $teams["croitia"]['GAMES_LOSTS'] += 1;
                  } else {
                          $teams["croitia"]['POINTS'] += 1;
                          $teams["croitia"]['GAMES_EQUAL'] += 1;
                          $teams["canada"]['POINTS'] += 1;
                          $teams["canada"]['GAMES_EQUAL'] += 1;
                  };
                };
                //=== Match 5
                if ($_GET['inpBelgiumMatchFive'] != "" && $_GET['inpCroitiaMatchFive'] != "") {
                  #Belgium
                  $teams["belgium"]['played'] += 1;
                  $teams["belgium"]['GOALS_SCORED'] += $_GET['inpBelgiumMatchFive'];
                  $teams["belgium"]['GOALS_RECEIVED'] += $_GET['inpCroitiaMatchFive'];
                  #Croitia
                  $teams["croitia"]['played'] += 1;
                  $teams["croitia"]['GOALS_SCORED'] += $_GET['inpCroitiaMatchFive'];
                  $teams["croitia"]['GOALS_RECEIVED'] += $_GET['inpBelgiumMatchFive'];
                  if ($_GET['inpBelgiumMatchFive'] > $_GET['inpCroitiaMatchFive'] ) {
                          $teams["belgium"]['POINTS'] += 3;
                          $teams["belgium"]['GAMES_WON'] += 1;
                          $teams["croitia"]['GAMES_LOSTS'] += 1;
                  } elseif ($_GET['inpBelgiumMatchFive'] < $_GET['inpCroitiaMatchFive']) {
                          $teams["croitia"]['POINTS'] += 3;
                          $teams["croitia"]['GAMES_WON'] += 1;
                          $teams["belgium"]['GAMES_LOSTS'] += 1;
                  } else {
                          $teams["belgium"]['POINTS'] += 1;
                          $teams["belgium"]['GAMES_EQUAL'] += 1;
                          $teams["croitia"]['POINTS'] += 1;
                          $teams["croitia"]['GAMES_EQUAL'] += 1;
                      };
                };
                //=== Match 6  
                if ($_GET['inpMoroccoMatchSix'] != "" && $_GET['inpCanadaMatchSix'] != "") {
                    #Moroco 
                    $teams["morocco"]['played'] += 1;
                    $teams["morocco"]['GOALS_SCORED'] += $_GET['inpMoroccoMatchSix'];
                    $teams["morocco"]['GOALS_RECEIVED'] += $_GET['inpCanadaMatchSix'];
                    #Canada
                    $teams["canada"]['played'] += 1;
                    $teams["canada"]['GOALS_SCORED'] += $_GET['inpCanadaMatchSix'];
                    $teams["canada"]['GOALS_RECEIVED'] += $_GET['inpMoroccoMatchSix'];
                    if ($_GET['inpMoroccoMatchSix'] > $_GET['inpCanadaMatchSix'] ) {
                        $teams["morocco"]['POINTS'] += 3;
                        $teams["morocco"]['GAMES_WON'] += 1;
                        $teams["canada"]['GAMES_LOSTS'] += 1;
                    } elseif ($_GET['inpMoroccoMatchSix'] < $_GET['inpCanadaMatchSix']) {
                        $teams["canada"]['POINTS'] += 3;
                        $teams["canada"]['GAMES_WON'] += 1;
                        $teams["morocco"]['GAMES_LOSTS'] += 1;
                    } else {
                             $teams["morocco"]['POINTS'] += 1;
                             $teams["morocco"]['GAMES_EQUAL'] += 1;
                             $teams["canada"]['POINTS'] += 1;
                             $teams["canada"]['GAMES_EQUAL'] += 1;
                            };
                };
                /*
                =============================== Sort  ==========================================
                */
                    $columns = array_column($teams, 'POINTS');
                    array_multisort($columns, SORT_DESC, $teams);
                usort($teams, function ($x, $y) {
                    if ($x["POINTS"] === $y["POINTS"]) {
                        if ($x["DIFF"] === $y["DIFF"]) {
                            if ($x["GOALS_SCORED"] === $y["GOALS_SCORED"]) {
                                return 0;
                            } else if ($x["GOALS_SCORED"] < $y["GOALS_SCORED"]) {
                                return 1;
                            } else if ($x["GOALS_SCORED"] > $y["GOALS_SCORED"]) {
                                return -1;
                            }
                        } else if ($x["DIFF"] < $y["DIFF"]) {
                            return 1;
                        } else if ($x["DIFF"] > $y["DIFF"]) {
                            return -1;
                        }
                    } else if ($x["POINTS"] < $y["POINTS"]) {
                        return 1;
                    } else if ($x["POINTS"] > $y["POINTS"]) {
                        return -1;
                    }
                });
              }; 
                /*
                =============================== shw data in table (tbody) ==========================================
                */   
                $i;
                foreach ($teams as $key => $value) {
                    $DIFFRENCE = ($value['GOALS_SCORED'] - $value['GOALS_RECEIVED']); // Goal DIFFerence calculation
                    // show row in table (tbody)
                            echo 
                            "<tr>
                                <th>" . $i . "</th>     
                                <th>" . $key . "</th>
                                <td>" . $value['POINTS'] . "</td>
                                <td>" . $value['played'] . "</td>
                                <td>" . $value['GAMES_WON'] . "</td>
                                <td>" . $value['GAMES_EQUAL'] . "</td>
                                <td>" . $value['GAMES_LOSTS'] . "</td>
                                <td>" .$value['GOALS_SCORED'] . "</td>
                                <td>" .$value['GOALS_RECEIVED'] . "</td>
                                <td>" .$DIFFRENCE . "</td>
                            </tr>";
                            $i++;
                }; 
                ?>
            </tbody>
      </table>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>