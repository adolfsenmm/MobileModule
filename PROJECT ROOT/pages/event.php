<?php
$events_id = $_GET['id'];
$Occasion=new Occasion($Conn);
$occasions = $Occasion->getAllOccasions($events_id);
?>

<div class="container">  
        <div class="row">
            <div class="col-md-6">
                <div class="event-card">
                    <div class="ind-event-card-image" style="background-image: url('./event-images/<?php echo $occasions[0]['event_image']; ?>');"></div>
                </div>
            </div>
            <div class="col-md-6">
            <h1><?php echo $occasions[0]['event_name']; ?></h1>
                <?php echo $occasions[0]['event_description']; ?>
                    <ul class="occasion-features">
                        <li> Dates: <?php echo $occasions[0]['event_date']; ?></li>
                        <li> Location: <?php echo $occasions[0]['event_location']; ?></li>
                        <li> Ratings: </li>
                    </ul>
            </div>
     </div>
</div>