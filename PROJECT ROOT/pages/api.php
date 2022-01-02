<div class="container-fluid">
    <h1 class="mb-4 pb-2">Random API's</h1> 
    <p class="text-muted" style="text-align:center">Below are frontend and backend API's</p>
        <div class="row">
            <div class="col-lg-4">
                <p style='text-align:center'>Frontend Dad Joke API</p>
                <div id="jokeContainer" style="text-align:center">
                    <h2 id="jokeText" style='text-align:center'></h2>
                    <button id="jokebutton" class="btn btn-tailsandtrails" onclick="location.reload()">Get a Dad Joke</button>
                </div>
                <script src="https://unpkg.com/sv443-joke-api@0.0.8/web/index.js"></script>
                    <script>
                        var container = document.getElementById('jokeContainer');
                        var jokeText = document.getElementById('jokeText');
                        var button = document.getElementById('jokebutton');
                        
                        JokeAPI.getJokes({
                            jokeType:"single"
                        })
                        .then(res => res.json())
                        .then(data => {
                            displayJoke(data)
                        })
                        
                        function displayJoke(jokeData) {
                            jokeText.innerHTML = jokeData.joke;
                            console.log(jokeData.joke);
                        }
                    </script>
            </div>
            <div class="col-lg-4">
                <p style='text-align:center'>Covid Data Backend API</p>
                <?php
                    $contents = file_get_contents("https://api.tylermwise.com/covidstats");
                    $data = json_decode($contents);
                    ?>
                    <ul class="dog-features">
                        <li> Daily Tested: <?php echo $data->daily_tested; ?></li>
                        <li> Tested: <?php echo $data->tested; ?></li>
                        <li>Daily Confirmed: <?php echo $data->daily_confirmed; ?></li>
                        <li>Infected: <?php echo $data->infected; ?></li>
                        <li>Deceased: <?php echo $data->deceased; ?></li>
                    </ul>

                    <?php echo $data->credit; ?>
            </div>
            <div class="col-lg-4">
            <p style='text-align:center'>Weather App Backend API for Ipswich, UK</p>
                <?php
                    $ch=curl_init();
                    $apiKey="5cb65fdce2e62474ca53c2003fc87d5d";
                    $location='Ipswich,UK';
                    $url="http://api.openweathermap.org/data/2.5/weather?q=Ipswich,UK&appid=57725dc4d3d7cc4495dc70d2467d17d5";

                    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_URL,$url);

                    $output = curl_exec($ch);
                    curl_close($ch);
                    $output = json_decode($output, true);
                    echo "<h2 style='text-align:center'>The weather in ".$location." is ".$output['weather'][0]['main']."</h2>";
                ?>
            </div>
    </div>
</div>