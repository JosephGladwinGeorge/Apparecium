<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<script> var next_Date = <?php echo $Ndate; ?>;</script>
<!-- Bootstrap CSS-->
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
/>
<link rel="stylesheet" href="./style.css"/>
<?php
 
?>
    <title>Period Tracker</title>
</head>
<body>
</div>
    <div class="bg">
        <p class="title">APPARECIUM</p>
    </div>
  <div class="container">
  <br><br><br>
  <h2 class="heading">Track Your Cycle</h2>
      <form action="" method="POST">
          <label for="last-date" class = fields>Enter the first date of your last period: </label>
          <input type="date" name="last-date" />
        <br><br>
          <label for="cycle-length" class="fields">Cycle interval:</label>
          <input type="number" name="cycle-length" placeholder="Days" />
          <br><br>
        <button type="submit" class="btn btn-primary">Predict</button>
      </form>
</div>
      <br>
      <br>
      
  <p>
  <?php 
   $cycleLength = $Ldate = $Ndate = "";
   if($_SERVER['REQUEST_METHOD'] =='POST')
   {
     if(empty(trim($_POST['cycle-length'])) || empty(trim($_POST['last-date'])))
     {
       $err ='Please enter valid date and length';
     }
     else
     {
       $cycleLength = trim($_POST['cycle-length']);
     $Ldate = trim($_POST['last-date']);
    }
   
  if(empty($err))
  {
    $date = new DateTime($Ldate);
    echo "Last period was on ".$date->format('M d, Y')."<br>";

    echo "Cycle length entered is ".$cycleLength." days <br>";
    
    $interval = new DateInterval('P'.$cycleLength.'D');
    $date->add($interval);
    echo "Predicted date for next period is ". $date->format('M d, Y ')."<br>";
  }
  
  else{
    echo $err;
  }
}
    ?>
  </p>
  <br><br>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <h4 >The average starting age for periods has changed over the years</h4>
      <p>Back in the 1800s, girls wouldn't get their periods until they were well into their teens — the average age was around 17. Nowadays, the average age to start menstruating is 12 — a whole five years younger. Scientists think there are a few key reasons for this: namely, improved nutrition.The more fat cells you have, the more estrogen you have in your body, which can trigger the start of your menstrual cycle as a girl. IThe more fat cells you have, the more estrogen you have in your body, which can trigger the start of your menstrual cycle as a girl.</p><br>
      <a href="https://www.helpingwomenperiod.org/7-amazing-facts-about-periods-that-everyone-needs-to-know/">Source</a>
      <div class="carousel-caption d-none d-md-block">        
      </div>
    </div>
    <div class="carousel-item">
    <h4>Your periods get worse when it is cold</h4>
      <p>Cold weather can impact your period, making it heavier and longer than normal. During the winter months, a woman's flow, period duration, and even pain level are longer than the summer. This pattern also extends to women who live in colder climates rather than warmer temperature.</p><br>
      <a href="https://www.helpingwomenperiod.org/7-amazing-facts-about-periods-that-everyone-needs-to-know/">Source</a>
    <br>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <h4>Before her mission in 1983, NASA engineers asked Sally Ride if she would need 100 tampons for the week of her period in space</h4>
      <p>Her savage response: “No. That would not be the right number,” according to a 2002 interview published by NASA.</p><br>
      <a href="https://www.cosmopolitan.com/health-fitness/a12091987/period-facts/#:~:text=22%20Period%20Facts%20That%27ll%20Blow%20Your%20Mind.%201,hormone%20melatonin%2C%20which%20helps%20control%20...%20More%20items">Source</a>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    
  </body>
</html>
