
<!DOCTYPE html>
<html>
<head>
<title>Popup contact form</title>
<link href="css/elements.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,900;1,500&display=swap" rel="stylesheet">
<script src="js/my_js.js"></script>
</head>
<!-- Body Starts Here -->
<body id="body" style="overflow:hidden;">
<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="insert.php" id="form" method="post" name="form">
<img id="close" src="images/3.png" onclick ="div_hide()">
<h2>Contact Us</h2>
<hr>

<div>
  <p>As first class limited company accountants, the expert team of professionals at Assessment Accounting are well-versed in every aspect of preparing accounts for limited liability companies. Alongside our work for LLP partnerships, we have a great deal of experience with limited company management accounts reporting, preparing VAT returns, dealing with auto enrolment and even company formations – handy if you are a sole trader planning on turning your business into a limited liability one soon.</p>
  <p>What’s more, the prize winning services offered at Assessment Accounting to company directors is delivered at an extremely affordable price. No limited company accountant offer such a high level of service with such low fees, especially when you take into consideration just how smoothly we handle all aspects of SME finances. As limited company accountants in Essex, we have many satisfied clients in the home counties, London and, indeed, the wider UK.</p>
  <p>As you might expect of such a well regarded team of accountants for limited companies, we have all of the relevant accreditations you might be looking for. As an example, we are members of the Institute of Financial Accountants as well as several other regulatory bodies and institutions.</p>
  <p>Given that, at Assessment Accounting, we have knowledge of working with limited liability companies in all the main sectors of the economy, we recommend making contact with us to find out exactly how we can help your business to succeed. Initial meetings are conducted without charge so you can arrange one without obligation. Please feel free to either phone or email us today!</p>

</div>




<input id="name" name="vname" placeholder="Name" type="text" value="">

<input id="email" name="vemail" placeholder="Email" type="text" value="">

<input name="sub" placeholder="Subject" type="text" value="">

<!-- <textarea id="msg" name="message" placeholder="Message"></textarea> -->

<textarea name="msg" placeholder="Type your text here..."></textarea>

<input id="send" name="submit" type="submit" value="Send Feedback">

<!-- <a href="javascript:%20check_empty()" id="submit">Send</a> -->
</form>


<h3><?php include "secure_email_code.php"?></h3>


</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
<h1 class="MS">Click Button To Popup Form Using Javascript</h1>
<button id="popup" onclick="div_show()">Popup</button>
</body>
<!-- Body Ends Here -->
</html>
