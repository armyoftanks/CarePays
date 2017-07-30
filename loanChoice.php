<!DOCTYPE html> <!-- LOAN OPTIONS PAGE -->
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
<button class="accordion">Average Credit: Avant Web Bank</button>
<div class="panel" style="background-color: rgba(255, 255, 255, .2);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul style="list-style: none; color: white; text-align: center;">
          <li>Our affiliate company, Avant, is one of the largest online lending platforms in the country.  All loans are provided through Avant by WebBank of Utah, FDIC member.  Checking rates will not affect your FICO score. Rapid decisions. Funds can be deposited in your account as soon as next business day. No collateral needed.  Customer service 7 days per week.  Finance from $1000-$35,000.</li>
        </ul>
        <a class="btn btn-primary" href="http://www.anrdoezrs.net/click-7694505-11789034?sid=CAREPAYS" target="_blank" role="button" style="margin-bottom: 2em;">Get Started</a>
      </div>
    </div>
  </div>
</div>

<button class="accordion">Fair Credit: Personalloans.com</button>
<div class="panel" style="background-color: rgba(255, 255, 255, .2);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul style="list-style: none; color: white; text-align: center;">
          <li>PersonalLoans is one of the largest and most trusted online lending networks, awarded an exceptional 4.7 out of 5 star customer rating on eKomi!. If your request is accepted, you will be provided a loan offer (without affecting your credit) that is available for your credit rating, inclusive of amount, interest, term, etc. within minutes. Funds can be deposited within 1-7 business days in a bank account of your choosing.   Finance from $500-$35,000.</li>
        </ul>
        <a class="btn btn-primary" href="https://personalloans.com/?aid=11485&cid=1830&note=003&atrk={CLICK_ID}" target="_blank" role="button" style="margin-bottom: 2em;">Get Started</a>
      </div>
    </div>
  </div>
</div>

<button class="accordion">Poor Credit: Trusted Loan Network</button>
<div class="panel" style="background-color: rgba(255, 255, 255, .2);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul style="list-style: none; color: white; text-align: center;">
          <li>TrustedPersonalLoans.com ensures that all of their network lenders adhere to the highest industry standards.  You will be provided a pre-approved loan offer that best matches your credit rating, inclusive of amount, interest, term, etc. within minutes of applying.  Funds can be deposited within 1-7 business days in a bank account of your choosing. Finance from $500-$10,000.</li>
        </ul>
        <a class="btn btn-primary" href="http://www.anrdoezrs.net/click-7694505-11823822?sid=CAREPAYS" target="_blank"  role="button" style="margin-bottom: 2em;">Get Started</a>
      </div>
    </div>
  </div>
</div>

<!-- collapsing menu END-->

<div class="footer" style="padding-bottom: 1.5em;">
  <p style="display: inline;">A product of CarePays 2017</p>
  <br>
  <a href="#">Privacy Policy</a>
  <a href="#">Terms of service</a>
  <a href="#">Contact Us</a>
</div>

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