<?php
  session_start();
  if (!isset($_SESSION['number'])){
    $_SESSION ['number'] = random_number();
  }
  if (isset($_POST['userNumber'])){
    $userNumber = $_POST['userNumber']
    if (is_valid_number($userNumber))
      $noOfCorrectDigits = count_correct_digits($userNumber);
      $noOfDigitsInPosition = count_digits_in_position($userNumber);// common digits si dupa caut in aray cu array search 
    }
  }
    function correct_digits(int $userNumber): int
    {
      $sessionNumber = $_SESSION['number'];
      $commonDigits = array_intersect(
          str_split($sessionNumber),
          str_split($userNumber)
        );
        return count($commonDigits);
    }
?>

  <form>
    <label>Guess the number:</label>
    <input type="text" name="userNumber"/>
    <button type="submit">Send</button>
  </form>

<?php
    function random_number() : int
    {

    do{
      $number = rand(102, 987);
    }
    while (has_repeated_digits($number));
    return $number;

    function has_repeated_digits(int $number) : boolean
    {

      $digits = str_split($number);
      $uniqueDigits = array_unique($digits);

      if (count($uniqueDigits) === count ($digits)){

        return false;
      } else {
        return true;
      }
    }
}
