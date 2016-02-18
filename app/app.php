
<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Score.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));
// End busy code -----------^
    // Render Home Page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig'); //
    });
    // Grabs User Input
    $app->get("/userInput", function() use ($app) {
        $input_word = $_GET['word'];

        $results = makeScore($input_word);
        return $app['twig']->render('form.twig', array(
            'results' => $results,
    ));
    });
    return $app;
?>
