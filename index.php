<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <title>FIFA-WC-2022</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-light bg-light">
      <div class="container justify-content-center">
        <a class="navbar-brand m-0" href="#">
          <img src="./img/logo.png" class="rounded" height="80" alt="Logo" />
          <h5 class="text-center">GUEWIN</h5>
        </a>
      </div>
    </nav>
  </header>
  <div class="container justify-content-center align-items-center my-3">
    <form action="" method="post">
      <!-- Morocco vs Croatia // Match 9-->
      <div class="container w-75  text-center border mb-2">
        <div class="row bg-secondary " id="border">
          <div class="col test text-white">23 Nov-11:00H</div>

          <div class="col text-light" id="final">Result</div>
          <div class="col text-white ">Match 9</div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-center align-items-center bg-secondary bg-opacity-75 text-light ">
            <img src="img/morocco.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
            <span>Morocco</span>
          </div>
          <div class="col bg-light d-flex justify-content-around align-items-center">

            <input class="text-center" type="text" name="match1E1" value="<?php echo isset($_POST['match1E1']) ? $_POST['match1E1'] : '0'; ?>" style="width: 15%; height:6vh ; ">-
            <input class="text-center" type="text" name="match1E2" value="<?php echo isset($_POST['match1E2']) ? $_POST['match1E2'] : '0'; ?>" style="width: 15%; height:6vh ;  ">


          </div>
          <div class="col d-flex justify-content-center align-items-center bg-secondary bg-opacity-75 text-light ">
            <span>Croatia</span>
            <img src="img/croatia.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
          </div>
        </div>
      </div>
      <!-- Belgium vs Canada // Match 12-->
      <div class="container w-75  text-center border mb-2">
        <div class="row bg-secondary " id="border">
          <div class="col test text-white">23 Nov - 20:00H</div>

          <div class="col text-light" id="final">Result</div>
          <div class="col text-white ">Match 12</div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-center align-items-center bg-secondary bg-opacity-75 text-light ">
            <img src="img/belgium.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
            <span>Belgium</span>
          </div>
          <div class="col bg-light d-flex justify-content-around align-items-center">

            <input class="text-center" type="text" name="match2E1" value="<?php echo isset($_POST['match2E1']) ? $_POST['match2E1'] : '0'; ?>" style="width: 15%; height:6vh ; ">-
            <input class="text-center" type="text" name="match2E2" value="<?php echo isset($_POST['match2E2']) ? $_POST['match2E2'] : '0'; ?>" style="width: 15%; height:6vh ;  ">


          </div>
          <div class="col d-flex justify-content-center align-items-center bg-secondary bg-opacity-75 text-light ">
            <span>Canada</span>
            <img src="img/canada.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
          </div>
        </div>
      </div>
      <!-- Belgium vs Morocco // Match 26-->
      <div class="container w-75 text-center border mb-2">
        <div class="row bg-secondary" id="border">
          <div class="col test text-white">27 Nov-14:00H</div>
          <div class="col text-light" id="final">Result</div>
          <div class="col text-white">Match 12</div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-center align-items-center bg-secondary bg-opacity-75 text-light ">
            <img src="img/belgium.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
            <span>Belgium</span>
          </div>
          <div class="col bg-light d-flex justify-content-around align-items-center">

            <input class="text-center" type="text" name="match3E1" value="<?php echo isset($_POST['match3E1']) ? $_POST['match3E1'] : '0'; ?>" style="width: 15%; height:6vh ;">-
            <input class="text-center" type="text" name="match3E2" value="<?php echo isset($_POST['match3E2']) ? $_POST['match3E2'] : '0'; ?>" style="width: 15%; height:6vh ;">
          </div>
          <div class="col d-flex justify-content-center align-items-center bg-secondary bg-opacity-75 text-light">
            <span>Morocco</span>
            <img src="img/morocco.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
          </div>
        </div>
      </div>
      <!-- Croatia vs Canada // Match 27-->
      <div class="container w-75  text-center border mb-2">
        <div class="row bg-secondary" id="border">
          <div class="col test text-white">27 Nov-17:00H</div>
          <div class="col text-light" id="final">Result</div>
          <div class="col text-white">Match 26</div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-center align-items-center bg-secondary bg-opacity-75 text-light ">
            <img src="img/croatia.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
            <span>Croatia</span>
          </div>
          <div class="col bg-light d-flex justify-content-around align-items-center">
            <input class="text-center" type="text" name="match4E1" value="<?php echo isset($_POST['match4E1']) ? $_POST['match4E1'] : '0'; ?>" style="width: 15%; height:6vh ;">-
            <input class="text-center" type="text" name="match4E2" value="<?php echo isset($_POST['match4E2']) ? $_POST['match4E2'] : '0'; ?>" style="width: 15%; height:6vh ;">
          </div>
          <div class="col d-flex justify-content-center align-items-center bg-secondary bg-opacity-75 text-light">
            <span>Canada</span>
            <img src="img/canada.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
          </div>
        </div>
      </div>
      <!-- Croatia vs Belgium // Match 41-->
      <div class="container w-75  text-center border mb-2">
        <div class="row bg-secondary" id="border">
          <div class="col test text-white">01 Dec-16:00H</div>
          <div class="col text-light" id="final">Result</div>
          <div class="col text-white">Match 12</div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-center align-items-center bg-secondary bg-opacity-75 text-light ">
            <img src="img/croatia.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
            <span>Croatia</span>
          </div>
          <div class="col bg-light d-flex justify-content-around align-items-center">
            <input class="text-center" type="text" name="match5E1" value="<?php echo isset($_POST['match5E1']) ? $_POST['match5E1'] : '0'; ?>" style="width: 15%; height:6vh ;">-
            <input class="text-center" type="text" name="match5E2" value="<?php echo isset($_POST['match5E2']) ? $_POST['match5E2'] : '0'; ?>" style="width: 15%; height:6vh ;">
          </div>
          <div class="col d-flex justify-content-center align-items-center bg-secondary bg-opacity-75 text-light">
            <span>Belgium</span>
            <img src="img/belgium.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
          </div>
        </div>
      </div>
      <!-- Canada vs Morocco // Match 42-->
      <div class="container w-75  text-center border mb-2">
        <div class="row bg-secondary" id="border">
          <div class="col test text-white">01 Dec-16:00H</div>
          <div class="col text-light" id="final">Result</div>
          <div class="col text-white">Match 12</div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-center align-items-center bg-secondary bg-opacity-75 text-light ">
            <img src="img/canada.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
            <span>Canada</span>
          </div>
          <div class="col bg-light d-flex justify-content-around align-items-center">
            <input class="text-center" type="text" name="match6E1" value="<?php echo isset($_POST['match6E1']) ? $_POST['match6E1'] : '0'; ?>" style="width: 15%; height:6vh ;">-
            <input class="text-center" type="text" name="match6E2" value="<?php echo isset($_POST['match6E2']) ? $_POST['match6E2'] : '0'; ?>" style="width: 15%; height:6vh ;">
          </div>
          <div class="col d-flex justify-content-center align-items-center bg-secondary bg-opacity-75 text-light">
            <span>Morocco</span>
            <img src="img/morocco.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
          </div>
        </div>
      </div>
      <div class="container col-md-12 text-center mt-2 mb-3 ">
        <button class="btn text-light text-center m-auto" style="background-color: #870036;" type="submit">Submit</button>
      </div>

    </form>

    <?php
    // variables of points +3
    $moroccoPn = 0;
    $croatiaPn = 0;
    $canadaPn = 0;
    $belgiumPn = 0;

    // variables of game played +1
    $moroccoPlayed = 0;
    $croatiaPlayed = 0;
    $canadaPlayed = 0;
    $belgiumPlayed = 0;

    // variables of winning games +1;
    $moroccoWin = 0;
    $croatiaWin = 0;
    $canadaWin = 0;
    $belgiumWin = 0;

    // variables of defeat games +1;
    $moroccoLost = 0;
    $croatiaLost = 0;
    $canadaLost = 0;
    $belgiumLost = 0;

    // variables of Draw games +1;
    $moroccoDraw = 0;
    $croatiaDraw = 0;
    $canadaDraw = 0;
    $belgiumDraw = 0;

    // variables of goals  scored;
    $moroccoGs = 0;
    $croatiaGs = 0;
    $canadaGs = 0;
    $belgiumGs = 0;

    // variables of goals recieved;
    $moroccoGr = 0;
    $croatiaGr = 0;
    $canadaGr = 0;
    $belgiumGr = 0;

    // variables of dif Goals;
    $moroccoDifG = 0;
    $croatiaDifG = 0;
    $canadaDifG = 0;
    $belgiumDifG = 0;


    // variables of teams;
    $E1;
    $E2;
    $E3;
    $E4;
    $E5;
    $E6;
    $E7;
    $E8;
    $E9;
    $E10;
    $E11;
    $E12;
    if (
      isset($_POST['match1E1']) && isset($_POST['match1E2'])
      && isset($_POST['match2E2']) && isset($_POST['match2E2'])
      && isset($_POST['match3E2']) && isset($_POST['match3E2'])
      && isset($_POST['match4E2']) && isset($_POST['match4E2'])
      && isset($_POST['match5E2']) && isset($_POST['match5E2'])
      && isset($_POST['match6E2']) && isset($_POST['match6E2'])
    ) {
      $E1 = $_POST['match1E1']; //Morocco
      $E2 = $_POST['match1E2']; //Croiatia
      $E3 = $_POST['match2E1']; //Belgium
      $E4 = $_POST['match2E2']; //Canada
      $E5 = $_POST['match3E1']; //Belgium
      $E6 = $_POST['match3E2']; //Morocco 
      $E7 = $_POST['match4E1']; //Croiatia
      $E8 = $_POST['match4E2']; //Canada
      $E9 = $_POST['match5E1']; //Croiatia
      $E10 = $_POST['match5E2']; //Belgium
      $E11 = $_POST['match6E1']; //Canada
      $E12 = $_POST['match6E2']; //Morocco

      $moroccoPlayed = $moroccoPlayed + 3;
      $croatiaPlayed = $croatiaPlayed + 3;
      $belgiumPlayed = $belgiumPlayed + 3;
      $canadaPlayed = $canadaPlayed + 3;

      if ($E1 < $E2) { //for Game 1 (morocco vs croitia)
        $croatiaPn = $croatiaPn + 3;
        $croatiaWin = $croatiaWin + 1;
        $moroccoLost = $moroccoLost + 1;
      } else if ($E1 == $E2) {
        $croatiaPn = $croatiaPn + 1;
        $croatiaDraw = $croatiaDraw + 1;
        $moroccoPn = $moroccoPn + 1;
        $moroccoDraw = $moroccoDraw + 1;
      } else {
        $moroccoPn = $moroccoPn + 3;
        $moroccoWin = $moroccoWin + 1;
        $croatiaLost = $croatiaLost + 1;
      }

      if ($E3 > $E4) { //for Game 2 (belgium vs canada)
        $belgiumPn = $belgiumPn + 3;
        $belgiumWin = $belgiumWin + 1;
        $canadaLost = $canadaLost + 1;
      } else if ($E3 == $E4) {
        $belgiumPn = $belgiumPn + 1;
        $belgiumDraw = $belgiumDraw + 1;
        $canadaPn = $canadaPn + 1;
        $canadaDraw = $canadaDraw + 1;
      } else {
        $canadaPn = $canadaPn + 3;
        $canadaWin = $canadaWin + 1;
        $belgiumLost = $belgiumLost + 1;
      }


      if ($E5 > $E6) { //for Game 3 (belgium vs morocco)
        $belgiumPn = $belgiumPn + 3;
        $belgiumWin = $belgiumWin + 1;
        $moroccoLost = $moroccoLost + 1;
      } else if ($E5 == $E6) {
        $belgiumPn = $belgiumPn + 1;
        $belgiumDraw = $belgiumDraw + 1;
        $moroccoPn = $moroccoPn + 1;
        $moroccoDraw = $moroccoDraw + 1;
      } else {
        $moroccoPn = $moroccoPn + 3;
        $moroccoWin = $moroccoWin + 1;
        $belgiumLost = $belgiumLost + 1;
      }

      if ($E7 > $E8) { //for Game 4 (croitoia vs canada)
        $croatiaPn = $croatiaPn + 3;
        $croatiaWin = $croatiaWin + 1;
        $canadaLost = $canadaLost + 1;
      } else if ($E7 == $E8) {
        $canadaPn = $canadaPn + 1;
        $canadaDraw = $canadaDraw + 1;
        $croatiaPn = $croatiaPn + 1;
        $croatiaDraw = $croatiaDraw + 1;
      } else {
        $canadaPn = $canadaPn + 3;
        $canadaWin = $canadaWin + 1;
        $croatiaLost = $croatiaLost + 1;
      }


      if ($E9 > $E10) { //for Game 5 (croitoia vs belgium)
        $croatiaPn = $croatiaPn + 3;
        $croatiaWin = $croatiaWin + 1;
        $belgiumLost = $belgiumLost + 1;
      } else if ($E9 == $E10) {
        $croatiaPn = $croatiaPn + 1;
        $croatiaDraw = $croatiaDraw + 1;
        $belgiumPn = $belgiumPn + 1;
        $belgiumDraw = $belgiumDraw + 1;
      } else {
        $belgiumPn = $belgiumPn + 3;
        $belgiumWin = $belgiumWin + 1;
        $croatiaLost = $croatiaLost + 1;
      }


      if ($E11 > $E12) { //for Game  (canada vs morocco)
        $canadaPn = $canadaPn + 3;
        $canadaWin = $canadaWin + 1;
        $moroccoLost = $moroccoLost + 1;
      } else if ($E11 == $E12) {
        $canadaPn = $canadaPn + 1;
        $canadaDraw = $canadaDraw + 1;
        $moroccoPn = $moroccoPn + 1;
        $moroccoDraw = $moroccoDraw + 1;
      } else {
        $moroccoPn = $moroccoPn + 3;
        $moroccoWin = $moroccoWin + 1;
        $canadaLost = $canadaLost + 1;
      }


      // moroccan goals scored and recieved
      $moroccoGs = $E1 + $E6 + $E12;
      $moroccoGr = $E2 + $E5 + $E11;
      // croitian goals scored and recieved
      $croatiaGs = $E2 + $E7 + $E9;
      $croatiaGr = $E1 + $E8 + $E10;
      // belgium goals scored and recieved
      $belgiumGs = $E3 + $E5 + $E10;
      $belgiumGr = $E4 + $E6 + $E9;
      // canadoian goals scored and recieved
      $canadaGs = $E4 + $E8 + $E11;
      $canadaGr = $E3 + $E7 + $E12;


      // Dif goals = goals scored - goals recieved

      $moroccoDifG = $moroccoGs - $moroccoGr;
      $croatiaDifG = $croatiaGs - $croatiaGr;
      $belgiumDifG = $belgiumGs - $belgiumGr;
      $canadaDifG = $canadaGs - $canadaGr;


      echo
      "
      <div  class='table-responsive{-sm|-md|-lg|-xl|-xxl} mt-4'> 
      <table style=' border-collapse:separate;border-spacing:0 10px; ' class='table text-center align-middle table-bordered ' >
      <thead style='border: #c2165e solid 1px;' > 
        <tr> 
          <th class='text-center w-25'>#</th>
          <th class='text-center w-50'>Team</th>
          <th class='text-center w-25'>Points</th>
          <th class='text-center w-25'>Games</th>
          <th class='text-center w-25'>Win</th>
          <th class='text-center w-25'>Lost</th>
          <th class='text-center w-25'>Draw</th>
          <th class='text-center w-25'>Goal.S</th>
          <th class='text-center w-25'>Goal.R</th> 
          <th class='text-center w-25'>+/-</th>
        </tr>
      </thead>";


      $moroccanFlag = "<img class='img-fluid w-25' src='./img/morocco.png'>";
      $croatianFlag = "<img class='img-fluid w-25' src='./img/croatia.png'>";
      $belgiumFlag = "<img class='img-fluid w-25' src='./img/belgium.png'>";
      $canadianFlag = "<img class='img-fluid w-25' src='./img/canada.png'>";


      $teamsData = array(
        array("$moroccanFlag Morocco", $moroccoPn, $moroccoPlayed, $moroccoWin, $moroccoLost, $moroccoDraw, $moroccoGs, $moroccoGr, $moroccoDifG),
        array("$croatianFlag Croatia", $croatiaPn, $croatiaPlayed, $croatiaWin, $croatiaLost, $croatiaDraw, $croatiaGs, $croatiaGr, $croatiaDifG),
        array("$belgiumFlag Belgium", $belgiumPn, $belgiumPlayed, $belgiumWin, $belgiumLost, $belgiumDraw, $belgiumGs, $belgiumGr, $belgiumDifG),
        array("$canadianFlag Canada", $canadaPn, $canadaPlayed, $canadaWin, $canadaLost, $canadaDraw, $canadaGs, $canadaGr, $canadaDifG),
      );

      usort($teamsData, function ($a, $b) {
        if ($a[1] != $b[1]) {
          return $b[1] <=> $a[1];
        } else if ($a[8] != $b[8]) {
          return $b[8] <=> $a[8];
        } else if ($a[6] != $b[6]) {
          return $b[6] <=> $a[6];
        }
        return 0;
      });

      echo " <tbody style='border: #c2165e solid 1px;' class='text-light'>";

      for ($row = 0; $row < 4; $row++) {

        echo " <tr style='background-color: #870036;'><td>" . $row + 1 . "</td>";
        // Table td
        for ($col = 0; $col < 9; $col++) {
          echo  "<td class=''>" .  $teamsData[$row][$col] . "</td>";
        }
        echo "</tr> ";
      }
      echo " </table></div>";
    }

    ?>
  </div>



</body>

</html>