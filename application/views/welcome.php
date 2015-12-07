<div class="center_content">
    
    <p id="welcome_text">
        The Miami Dolphins are a professional American football team located in the Miami metropolitan area. They play their home games at Sun Life Stadium in the northern suburb of Miami Gardens, and have their headquarters in Davie, Florida.
    </p>
    
    <img id="stadium" src="assets/images/stadium.jpg">

    <div>
        <form action="welcome/predict" method="post">
            <br>
            <h2>Is Miami Gonna Win?</h2>
            {teams}
            {predict_button}
            <br>
            <div id="prediction_blurb">
                These predictions are made using the teams' point average for this season to data, as well as the trend over the last 5 games, and 
                last five games against the opposing team.
            </div>
        </form>
        <div id="prediction">
            --
        </div>
        <br><br>
    </div>
</div>