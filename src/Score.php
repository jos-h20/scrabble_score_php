<?php
class Score
{
  function makeScore($input_word)
  {
    $letters_one = array("a","e","i","o","u","l","n","r","s","t");
    $letters_two = array("d","g");
    $letters_three = array("b","c","m","p");
    $letters_four = array("f","h","v","w","y");
    $letters_five = array("k");
    $letters_eight = array("j","x");
    $letters_ten = array("q","z");

    $word_array = str_split($input_word);

    // $letters_one_match = array_intersect($letters_one, $word_array);
    $count = 0;
    foreach ($word_array as $letter) {
        if (in_array($letter, $letters_one)) {
            $count += 1;
        } elseif (in_array($letter, $letters_two)) {
            $count += 2;
        } elseif (in_array($letter, $letters_three)) {
            $count += 3;
        }   elseif (in_array($letter, $letters_four)) {
            $count += 4;
        }   elseif (in_array($letter, $letters_five)) {
            $count += 5;
        }   elseif (in_array($letter, $letters_eight)) {
            $count += 8;
        }

    }  return $count;

  }
}



?>
