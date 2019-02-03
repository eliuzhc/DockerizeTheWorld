<?php
require 'php/TopicData.php';

$data = new TopicData();
$data->connect();

$topics = $data->getAllTopics();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Todolist</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark role="navigation">
            <a class="navbar-brand" href="#">Todolist</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">   
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">   
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="info.php">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="credits.php">Credits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        <form class="justify-content-center " role="search">
            <a href="php/add.php" class="btn btn-dark justify-content-center">
                <span class="justify-content-center"></span>
                Add Topic
            </a>
        </form>
        <div class="container justify-content-center">
        <?php
        foreach ($topics as $topic) {
            ?>
                <div class="row justify-content-center">
                    <div class="col-xs-12 ">
                        <h3><?=$topic['title'];?></h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xs-8">
                        <p class="text-muted">
                            <?=nl2br($topic['description']);?>
                        </p>
                    </div>
                    <div class="col-xs-4">
                        <p class="pull-right">
                            <a href="php/edit.php?id=<?=$topic['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="php/delete.php?id=<?=$topic['id']; ?>" class="btn btn-danger" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-title="Are you sure?" data-content=" This cannot be undone!">Delete</a>
                        </p>
                    </div>
                </div>
        </div>
            <hr>
            <?php
        }
        ?>
        </div>
        <script type="text/javascript">
            $('[data-toggle="popover"]').popover();
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>

