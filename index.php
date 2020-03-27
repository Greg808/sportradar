<?php

use CodingExercise\Service\Container;

require __DIR__ . '/bootstrap.php';

$container = new Container($configuration);
$eventsLoader = $container->getEventsLoader();
if (isset($_GET['groupBySport'])) {
    $groupBySports = strip_tags($_GET['groupBySport']);
    /* convert string to boolean */
    $groupBySports = $groupBySports === 'true' ? true : false;
    $events = $eventsLoader->getEvents($groupBySports);
}
if (!isset($_GET['groupBySport'])) {
    $events = $eventsLoader->getEvents();
}

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
            <section class="grouping-options">
                <ul>
                    <li><a href="index.php?groupBySport=true">Group by Sport</a></li>
                    <li><a href="index.php?groupBySport=false">Show all Events Inline</a></li>
                </ul>
            </section>
            <!-- check if array sequential, display uncategorized -->
            <?php if (count(array_filter(array_keys($events), 'is_string')) === 0) : ?>
                <h2>All Sports</h2>
                <table>
                    <thead>
                    <?php include './eventsTableHeadInclude.php' ?>
                    </thead>
                    <tbody>

                    <?php foreach ($events as $event): ?>
                        <?php include 'eventsTableBodyInclude.php'; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
            <!-- check if array associative, display categorized -->
            <?php if (count(array_filter(array_keys($events), 'is_string')) > 0) : ?>
                <?php foreach ($events as $sport => $eventsData): ?>
                    <h2><?php echo $sport ?></h2>
                    <table>
                        <thead>
                        <?php include './eventsTableHeadInclude.php' ?>
                        </thead>
                        <tbody>
                        <?php foreach ($eventsData as $event): ?>
                            <?php include 'eventsTableBodyInclude.php'; ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>
    </main>
</div>
</body>
</html>

