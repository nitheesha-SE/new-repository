 <!-- this is a basic html page which displays  a form to raise a request for blood.-->
 <!Doctype html>
 <html>
 <head>
 </head>
 <body>



 <h1> Acceptor </h1>
 <!--this redirects to submit_request.php file once clicked on submit button-->
 <form action="submit_requests.php" method="post">
 
 <label>Acceptor Name:</label> <input type="text" name = "acceptorName" />
 </br>
 <label>Acceptor Blood Group: <select name = "blood_group">
  <option value="OPositive">O +</option>
  <option value="ONegative">O -</option>
  <option value="APositive">A +</option>
  <option value="ANegative">A -</option>  
  <option value="BPostive">B +</option>
  <option value="BNegative">B -</option>
  <option value="ABPositive">AB +</option>
  <option value="ABNegative">AB -</option>
</select>
</br>
<label> Mobile Number: </label><input type="number" name="phone_number"></label>
</br>
<label> Acceptor Address </label><input type="text" name="address">
</br>
<input type="submit" name ="submit" value="submit"/>
</br>
 </form>
 </body>
 
 </html>
 