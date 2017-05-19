<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view

    //Php-view
    //return $this->renderer->render($response, 'site/index.php', $args);

    //Twigt-view
    return $this->view->render($response, 'site/index.php',  $args );
})->setName('siteIndex');

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
    // Render index view
    //return $this->renderer->render($response, 'site/index.php', $args);
});
