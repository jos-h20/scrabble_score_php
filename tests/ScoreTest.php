
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
        function test_makeScore_twoSameLetter()
        {
            //Arrange
            $test_Score = new Score;
            $input_word = "aa";
            //Act: runs the actual method that we are testing.
            $result = $test_Score->makeScore($input_word);
            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(2, $result);
        }
        function test_makeScore_threeLetter()
        {
            //Arrange
            $test_Score = new Score;
            $input_word = "aad";
            //Act: runs the actual method that we are testing.
            $result = $test_Score->makeScore($input_word);
            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(4, $result);
        }
        function test_makeScore_threePoints()
        {
            //Arrange
            $test_Score = new Score;
            $input_word = "caad";
            //Act: runs the actual method that we are testing.
            $result = $test_Score->makeScore($input_word);
            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(7, $result);
        }
        function test_makeScore_fourPoints()
        {
            //Arrange
            $test_Score = new Score;
            $input_word = "chaad";
            //Act: runs the actual method that we are testing.
            $result = $test_Score->makeScore($input_word);
            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(11, $result);
        }
        function test_makeScore_fivePoints()
        {
            //Arrange
            $test_Score = new Score;
            $input_word = "chaakd";
            //Act: runs the actual method that we are testing.
            $result = $test_Score->makeScore($input_word);
            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(16, $result);
        }
        function test_makeScore_eightPoints()
        {
            //Arrange
            $test_Score = new Score;
            $input_word = "chaaxkd";
            //Act: runs the actual method that we are testing.
            $result = $test_Score->makeScore($input_word);
            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(24, $result);
        }
        function test_makeScore_tenPoints()
        {
            //Arrange
            $test_Score = new Score;
            $input_word = "chaaxkzd";
            //Act: runs the actual method that we are testing.
            $result = $test_Score->makeScore($input_word);
            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(34, $result);
        }

    }
    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests
?>
