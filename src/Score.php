<?php
class Score
{
  function makeScore($input_word)
  {
    $letters_one = array("a","e","i","o","u","l","n","r","s","t");
    $word_array = str_split($input_word);

    // $letters_one_match = array_intersect($letters_one, $word_array);
    $count = 0;
    foreach ($word_array as $letter) {
        if (in_array($letter, $letters_one)) {
            $count++;
        }


    }  return $count;

  }
}



?>
