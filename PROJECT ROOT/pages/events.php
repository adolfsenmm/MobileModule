<?php
$Event = new Events($Conn);
$events = $Event->getAllEvents();
?>
<div class="container">
    <h1 class="mb-4 pb-2">Events for 2022</h1>
        <div class="row">
            <?php foreach($events as $event) { ?>
                <div class="col-md-3">
                    <div class="event-card">
                        <div class="event-card-image" style="background-image: url('./event-images/<?php echo $event['event_image']; ?>');">
                            <a href="index.php?p=event&id=<?php echo $event['events_id']; ?>"></a>
                        </div>
                        <a href="index.php?p=event&id=<?php echo $event['events_id']; ?>"><h3><?php echo $event['event_name']; ?></h3></a>
                    </div>
                </div>
            <?php } ?>
        </div>
</div>