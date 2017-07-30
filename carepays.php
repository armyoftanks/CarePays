<!DOCTYPE html> <!-- MAIN PHP PAGE -->
<html lang="en">
  <body>
	<?php include("header.html"); ?>
	<?php include("navigation.html"); ?>


    <!-- main focus point / welcome section -->
      <div class="welcome">
        <div class="container">
          <div class="row2">
            <div class="col-md-6">
                <h1>Welcome to CarePays.</h1>
                <br><br>
                <p>Guaranteed Healthcare Services to the Patient.</p>
                <p>Guaranteed Payments to the Doctor. </p>
            </div>
            <div class="col-md-6">
              <img src="assets/welcomeSplash.png">
            </div>
          </div>
        </div>
      </div>
    <!-- main focus point / welcome section end -->

    <!-- collapsing menu -->
    <div class="wrapper">
    <button class="accordion">CarePays for <b>Patients</b></button>
    <div class="panel">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <ul>
              <li>Unrestricted Access To Over 500,000 Licensed Professionals</li>
              <li>Shop Quality Care At Competitive Prices</li>
              <li>As Much As 70% Savings On Health Care Costs</li>
              <li>Credit Card & Loan Options</li>
              <li>One Price - No Balance Billing</li>
            </ul>
            <a class="btn btn-primary" href="patinfo.php" role="button">Get Benefits</a>
            <a class="btn btn-primary" href="getstarted2.php" role="button">Get Funding</a>
          </div>
          <div class="col-md-6">
            <img src="assets/nurse.png">
          </div>
        </div>
      </div>
    </div>
<br>
    <button class="accordion">CarePays for <b>Health Care Providers</b></button>
    <div class="panel">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/bills.png">
          </div>
          <div class="col-md-6">
            <ul>
              <li>Cash Flow Opportunities</li>
              <li>CarePays Will Send You New Patients</li>
              <li>Reduce Operational Costs By Up To 8%</li>
              <li>Claims Are Settled Within 3-5 Business Days</li>
              <li>Eliminate Billing & Collections</li>
              <li>Denial Managment</li>
            </ul>
            <a class="btn btn-primary" href="proinfo.php" role="button">Get Benefits</a>
            <a class="btn btn-primary" href="loans.php" role="button">Get Funding</a>
          </div>
        </div>
      </div>
    </div>
<br>
    <button class="accordion">CarePays for <b>Employers</b></button>
    <div class="panel">
      <div class="container">
        <div class="row" style="padding-bottom: 30px;">
          <div class="col-md-6">
            <ul>
              <li>Unrestricted Access to 500,000 Licensed Professionals</li>
              <li>Shop Competitive Prices</li>
              <li>No Balance Billing</li>
              <li>Credit Card & Loan Options</li>
              <li>70% Average Savings on Out of Pocket Costs</li>
            </ul>
            <a class="btn btn-primary" href="empinfo.php" role="button">Get Benefits</a>
            <a class="btn btn-primary" href="getstarted2.php" role="button">Get Funding</a>
          </div>
          <div class="col-md-6">
            <img src="assets/network.png">
          </div>
        </div>
      </div>
    </div>
    <br>
        <button class="accordion">The CarePays <b>Benefit Card</b></button>
    <div class="panel">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/bills.png">
          </div>
          <div class="col-md-6">
            <ul>
              <li>Four packages to fit your needs</li>
              <li>Save time and money on health care expenses</li>
              <li>Get health care answers whenever you need them</li>
              <li>Select from 24/7 access to nurses by phone or 24/7 access to physicians by phone or both</li>
              <li>All packages include savings on eyeglasses, contact lenses, eye exams and more</li>
            </ul>
            <a class="btn btn-primary" href="benefitsInfo.php" role="button">Learn More</a>
            <a class="btn btn-primary" href="https://cp1000.secureenrollment.com/step1.aspx" role="button">Get Benefits</a>
          </div>
        </div>
      </div>
    </div>
    <br>
  <button class="accordion">Join the <b>CarePays Team</b></button>
    <div class="panel">
      <div class="container">
        <div class="row" style="padding-bottom: 30px; ">
          <div class="col-md-12">
            <ul style="text-align: center;">
              <li style="list-style: none;">Sign up to learn more about our Partner Programs</li>
            </ul>
            <a class="btn btn-primary" href="brokers.php" role="button">Sign Up</a>
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
