<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1>Channel Overview</h1>
            <p>All the channels are visible here!</p>

            <?php
            if ($channels->count()) {
                foreach ($channels->results() as $channel) {
                    echo '<div class="card mb-3 channel-card top-box" style="width: 60rem;">'; // Anvend den nye klasse til den øverste del
                    echo '<div class="card-body">';
                    echo '<h4 class="card-title">' . $channel->name . '</h4>';
                    echo '</div>';
                    echo '</div>';

                    echo '<div class="card mb-3 channel-card bottom-box" style="width: 60rem;">'; // Anvend den nye klasse til den nederste del
                    echo '<a href="posts.php?id=' . $channel->channel_id . '">'; // Behold linket til "posts.php"
                    echo '<div class="card-body">';
                    echo '<p class="card-text">View</p>'; // Vis "View" som tekst i stedet for kanalnavnet
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                }
            } else {
                echo '<div class="alert alert-danger"><strong></strong>Ingen kanaler fundet!</div>';
            }
            ?>
        </div>
    </div>
</div>
