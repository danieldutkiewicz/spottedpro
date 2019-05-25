<div class="container">
  <h1 class="text-center mb-4 mt-2">Spottedpro</h1>
  
    <form id="main-form" action="spottedpro/mainContent/insertPost.php" method="post">
      <div class="row p-2">
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
            </div>
            <input id="username" name="username" type="text" class="form-control" placeholder="Magda" aria-label="Username" aria-describedby="addon-wrapping">
          </div>
        </div>
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon-wrapping"><i class="fas fa-address-book"></i></span>
            </div>
            <input id="contact" name="contact" type="text" class="form-control" placeholder="magda@poczta.pl lub tel. 518 123 124" aria-label="Username" aria-describedby="addon-wrapping">
          </div>
        </div>
      </div>
      
      <div class="row m-2 text-center">
        <div class="col">
          <div id="choose" class="form-check">
            <input class="form-check-input" type="radio" name="choose" id="exampleRadios2" value="option1" checked>
            <label class="form-check-label" for="exampleRadios2">
              Usługi kosmetyczne
            </label>
            <p class="p-2">Zaznacz tą opcję jeśli chcesz np. znaleźć stylistkę paznokci lub zrobić sobie piękną fryzurę.</p>
          </div>
        </div>
        <div class="col">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="choose" id="exampleRadios1" value="option2">
              <label class="form-check-label" for="exampleRadios1">
                Złota rączka
              </label>
              <p class="p-2">Zaznacz tą opcję jeśli potrzebujesz wymienić przysłowiową żarówkę zatrudniając fachowca.</p>
          </div>
        </div>
        <div class="col">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="choose" id="exampleRadios2" value="option3">
            <label class="form-check-label" for="exampleRadios2">
              Komputerowiec
            </label>
            <p class="p-2">Zaznacz tą opcję jeśli masz problemy z komputerem lub internetem i poszukujesz informatyka.</p>
          </div>
        </div>
      </div>
      
      <div class="input-group p">
        <textarea id="whatiwant" name="whatiwant" class="form-control" aria-label="With textarea" placeholder="Potrzebuję zrobić sobie na jutro paznokcie z ciekawym motywem. Najlepiej coś takiego: http://damskieinspiracje.pl/pin/piekne-wzorzyste-paznokcie-2/. Proszę o kontakt na maila i wysłanie swojego facebooka."></textarea>
      </div>
  
      <div class="row mt-4">
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon-wrapping"><i class="fas fa-sign"></i></span>
            </div>
            <input id="place" name="place" type="text" class="form-control" placeholder="Warszawa lub okolice" aria-label="Username" aria-describedby="addon-wrapping">
          </div>
        </div>
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon-wrapping"><i class="fas fa-calendar"></i></span>
            </div>
            <input id="whendo" name="whendo" type="text" class="form-control" placeholder="Najszybciej jak to możliwe, za godzinę jestem dostępna" aria-label="Username" aria-describedby="addon-wrapping">
          </div>
        </div>
      </div>
      <div class="mt-4 mb-4 text-center">
        <button type="submit" class="btn btn-info">Gotowe</button>
      </div>
    </form>

    <!-- PHP LOOP MODULE STARTS -->
    <div class="container">    
      <?php 
        require '../spottedpro/dbConnect.php';

        $sql = "SELECT `username`, `contact`, `choose`, `whatiwant`, `place`, `whendo` FROM `posts`";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc())  
          {
            echo "<div><i class="."'fas fa-user'"."></i> " . $row["username"] . "</div>";
            echo "<div><i class="."'fas fa-address-book'"."></i> " . $row["contact"] . "</div>";

            switch($row["choose"]){
              case "option1":
                echo "<div>Potrzebuję usług kosmetycznych.</div>";
              break;
              case "option2":
                  echo "<div>Potrzebuję złotej rączki.</div>";
              break;
              case "option3":
                echo "<div>Potrzebuję komputerowca.</div>";
              break;
            }

            echo "<div>" . $row["whatiwant"] . "</div>";
            echo "<div><i class="."'fas fa-sign'"."></i> " . $row["place"] . "</div>";
            echo "<div><i class="."'fas fa-calendar'"."></i> " . $row["whendo"] . "</div>";
            echo "<br />";
          }

          $conn->close();
        ?>
    </div>
</div> 