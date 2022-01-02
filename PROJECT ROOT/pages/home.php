<?php
$Event = new Events($Conn);
$events = $Event->getLatestEvents();
?>
<div class="container">
    <div class="row" style="text-align:center">
        <div class="col-lg-6" style="padding-top:15%">
            <h1 class="mb-4 pt-2">Research Your Pawsible New Family Member</h1>
            <form action="index.php?p=search" method="post" class="d-inline-flex">
                <input class="form-control input-lg mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
                <button class="btn btn-tailsandtrails ms-2" type="submit">Search</button>       
            </form> 
        </div>
        <div class="col-lg-6">
            <img src="./images/cooper.png" alt="homepage" class="responsive">
        </div>
    </div>
    <div class="row" style="padding-right:3%;">
        <?php foreach($events as $event) { ?>
            <div class="col-md-4">
                <div class="home-card">
                    <div class="home-card-image responsive" style="background-image: url('./event-images/<?php echo $event['event_image']; ?>');">
                        <a href="index.php?p=events&id=<?php echo $event['events_id']; ?>"></a>
                    </div>
                    <div style="padding-top:5%">
                        <a href="index.php?p=event&id=<?php echo $event['events_id']; ?>"><h3 class="btn btn-tailsandtrails"><?php echo $event['event_name']; ?></h3></a>
                        <a href="index.php?p=events&id=<?php echo $event['events_id']; ?>"><h3 class="text-muted"><?php echo $event['event_short']; ?></h3></a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="row" style="padding-right:35%; padding-left:35%">
        <a href="index.php?p=events&id" class="btn btn-tailsandtrails">See All Events</a>
    </div>
</div>
</body>

