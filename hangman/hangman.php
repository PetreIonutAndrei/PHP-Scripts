<?php
session_start(); // porneste sesiunea
//session_destroy(); //se distruge sesiunea initiala ca am gresit initial
    if(!isset($_SESSION['word'])){

      $word = str_split(trim(randomWord())); // uita-te pe str_split asta
      $chances = 10;
      $guessed = array_fill(0, count($word), '_');

    // pick a random word
    // trebuie sa tinem minte variabilele astea

      $_SESSION['word'] = $word;
      $_SESSION['chances'] = $chances;
      $_SESSION['guessed'] = $guessed;
}
  if(isset($_POST['letter'])){
    $letter = $_POST['letter'];
    if(hasLetter($letter)){
      searchAndReplaceLetter($letter);
      checkWin();
    } else {
      $_SESSION['chances']--;
      checkLost();
    }
}

  function hasLetter($letter){
    return  array_search($letter, $_SESSION['word']) !== false;
  }

  function searchAndReplaceLetter($letter){
    foreach ($_SESSION['word'] as $key => $value) {
      if($value == $letter){
        $_SESSION['guessed'][$key] = $letter;
      }
    }
  }
  function checkWin(){
    if (array_search('_', $_SESSION['guessed']) === false){
      session_destroy();
      ?> <script>alert("You won");</script> <?php
    }
  }
  function checkLost(){
    if($_SESSION['chances'] == 0){
      session_destroy();
      ?> <script>alert("Game over!!!");</script> <?php
    }
  }
  function randomWord(){
      $words = file('words.txt');
      return $words[array_rand($words)];
  }

 ?>
<div>
  Mai ai <?php echo $_SESSION['chances']; ?> Incercari.
</div>

<div>
  <?php  echo implode(" ", $_SESSION['guessed']);


  //implonde si explode?>
</div>
<form action="hangman.php" method="post">
  <label>Ghiceste litera</label>
  <input type="text" name="letter"/>
  <button type="submit">Trimite</button>
</form>
