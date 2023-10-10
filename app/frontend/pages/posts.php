<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="poststyles.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div id="posts-container"> <!-- Fjern jumbotron klassen -->
                <div class="header">
                    <h1><?php echo $channel->name; ?> KANALEN</h1>
                    <a href="create-post.php?channel_id=<?php echo $channel_id; ?>" class="btn btn-primary create-post-btn">Create post</a>
                </div>

                <?php if ($posts->count()) : ?>
                    <?php foreach ($posts->results() as $p) : ?>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $p->title; ?></h4>
                                <p class="card-text"><?php echo $p->content; ?></p>
                                <a href="comments.php?post_id=<?php echo $p->post_id; ?>" class="btn btn-primary">Vis Indlæg</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="alert alert-danger"><strong>Ingen indlæg fundet!</strong></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
