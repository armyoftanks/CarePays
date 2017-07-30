<!DOCTYPE html> <!-- GET STARTED LOANS AND CREDIT -->
<html lang="en">

	<?php include("header.html"); ?>
	<?php include("navigation.html"); ?>

  <body>

      <!-- page banner -->
      <div class="signup">
      	<div class="container">
      		<div class="row">
      			<div class="col-lg-12">
      				<img src="assets/banner1.png">
      			</div>
      		</div>
        </div>
      </div>
      <!-- page banner end -->

<!-- collapsing menu -->
<button class="accordion">Credit Cards for Good to Excellent Credit</button>
<div class="panel" style="background-color: rgba(255, 255, 255, .2);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul style="list-style: none; color: white; text-align: center;">
          <li>0% Credit Cards for up to 21 months</li>
        </ul>
        <a class="btn btn-primary" href="http://www.credit-land.com/best-credit-cards.php?link=37529618&cl=7358f7d0ddca78c" target="_blank" role="button" style="margin-bottom: 2em;">Card Options</a>
      </div>
    </div>
  </div>
</div>

<button class="accordion">Loans for Average to Poor Credit</button>
<div class="panel" style="background-color: rgba(255, 255, 255, .2);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul style="list-style: none; color: white; text-align: center;">
          <li>Financing from $500 to $35,000</li>
        </ul>
        <a class="btn btn-primary" href="loanChoice.php" role="button" style="margin-bottom: 2em;">Loan Options</a>
      </div>
    </div>
  </div>
</div>

<!-- collapsing menu END-->

<?php include("footer.html"); ?>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}
</script>

  </body>
</html>