<title>Home :: Railgadi</title>
<link rel="stylesheet" type="text/css" href="CSS/style.css">

<?php 
  include('inc\header.php');
  include('inc\nav.php');
?>

<div class="container mb-5 mt-5">
  <div class="container" id="imgcon">
    <form method="POST" action="..\search\search.php">
      <div class="row">
        <div class="col-md-12 pt-md-5">
          <h1 class="font-weight-bold" id="indexsearch">Search For Trains</h1>
        </div>
        <div class="col-md-12 pb-md-5">
          <h5 class="pt-2 text-black-50" id="indexslogon">make your journey easier and faster</h5>
        </div>
      </div>

      <div class="row" id="form-box">
        <div class="col-lg-2 offset-sm-1 col-12  mb-2">
          <input type="text" class="search-field location" placeholder="FROM" name="from" required>
        </div>
        <div class="col-lg-2  offset-sm-1  col-md-12  mb-2">
          <input type="text" class="search-field location" placeholder="TO" name="to" required>
        </div>
        <div class="col-lg-2  offset-sm-1 col-md-12 mb-2 ">
          <input class="search-field date" type="date" name="date" required>
        </div>
        <div class="col-lg-2 offset-sm-1  col-md-12  mb-2">
          <button class="search-btn" type="submit" data-placement="top" title="Search" name="search">Search</button>
        </div>
      </div>
  </div>
  </form>


  <div class="container bg-warning" id="con">
    <div class="row">
      <div class="col pl-5 pt-3">
        <h2 id="book">Book trains seats in 3 steps</h2>
        <p id="bookp">Railgadi provies easier and faster bookings</p>
      </div>
    </div>
    <div class="card-columns mt-2 pb-2">
      <div class="card text-center">
        <blockquote class="blockquote mb-0 card-body">
          <img src="images\search.png">
          <footer class="blockquote-footer">
            <h5> Search trains</h5>
          </footer>
        </blockquote>
      </div>
      <div class="card text-center">
        <blockquote class="blockquote mb-0 card-body">
          <img src="images\book.png">

          <footer class="blockquote-footer">
            <small class="text-muted">
              <h5> Book seats</h5>
            </small>
          </footer>
        </blockquote>
      </div>
      <div class="card text-white text-center p-3">
        <blockquote class="blockquote mb-0">
          <img src="images\ccard.png">
          <footer class="blockquote-footer">
            <small class="text-muted">
              <h5>
                Pay and Relex
              </h5>
            </small>
          </footer>
        </blockquote>
      </div>
    </div>
  </div>
</div>

<?php include('inc\footer.php') ?>