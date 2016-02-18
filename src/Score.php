<?php
class Score
{
  function makeScore($input_word)
  {
    $letters_one = array("a","e","i","o","u","l","n","r","s","t");
    $word_array = explode(" ", $input_word);

    $letters_one_match = array_intersect($letters_one, $word_array);
    $count = 0;
    foreach ($letters_one_match as $letters) {
            $count = + 1;

    }  return $count;

  }
}



?>
