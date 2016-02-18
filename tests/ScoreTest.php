
<?php
    require_once "src/Score.php";
    class ScoreTest extends PHPUnit_Framework_TestCase
    {
        function test_makeScore_oneLetter()
        {
            //Arrange
            $test_Score = new Score;
            $input_word = "a";
            //Act: runs the actual method that we are testing.
            $result = $test_Score->makeScore($input_word);
            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(1, $result);
        }

    }
    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests
?>