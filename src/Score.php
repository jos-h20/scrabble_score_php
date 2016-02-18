<?php
class Score
{
  function makeScore($input_word)
  {
    $letters_one = array("a","e","i","o","u","l","n","r","s","t");
    $letters_two = array("d","g");
    $word_array = str_split($input_word);

    // $letters_one_match = array_intersect($letters_one, $word_array);
    $count = 0;
    foreach ($word_array as $letter) {
        if (in_array($letter, $letters_one)) {
            $count += 1;
        } elseif (in_array($letter, $letters_two)) {
            $count += 2;
        }


    }  return $count;

  }
}



?>
