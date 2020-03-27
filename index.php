<?php

use CodingExercise\Service\Container;

require __DIR__ . '/bootstrap.php';

$container = new Container($configuration);
$eventsLoader = $container->getEventsLoader();
$events = $eventsLoader->getEvents();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sportradar challenge</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
</head>
<body>
<header class="site-header">
    <nav class="main-nav">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>
</header>
<div class="main-site-wrapper">
    <main>
        <section class="events-table">
            <h1>Event Calendar</h1>
            <table>
                <thead>
                <tr>
                    <th>Day</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Sport</th>
                    <th>Team One</th>
                    <th>Team Two</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($events as $event): ?>
                    <tr>
                        <td><?php echo $event->getPlayDay(); ?></td>
                        <td><?php echo $event->getPlayDate(); ?></td>
                        <td><?php echo $event->getPlayTime(); ?></td>
                        <td><?php echo $event->getSportTitle(); ?></td>
                        <td><?php echo $event->getTeamOneTitle(); ?></td>
                        <td><?php echo $event->getTeamTwoTitle(); ?></td>
                        <td><a href="">Show More</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
</div>
</body>
</html>

