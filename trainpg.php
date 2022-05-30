<?php
session_start();
$un=$_SESSION['username'];
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Online Reservation System</title>
        <style>
            *
            {
              font-family: Century Gothic !important;
              
            }
			body  {
  background-image: url("water.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover
}
.button {
  background-color: #BB78CD;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button:hover {
  background-color: #562663;
}
            .box1
            {
               
	              border-radius: 25px;
                width:95%;
                height:90%;
                margin:0 auto 0 auto;
                margin-top: 2%;
                margin-bottom: 3%;
                padding-bottom: 5%;
            }
            .header
            {
                margin-top: 15%;
                width:95%;
                height:95%;
                margin:0 auto 0 auto;
            }
            .heading
            {
                font-size:30px;
                font-family: inherit;
                padding:10px;
            }
            .leftheader
            {
                width:70%;
				font-size:50px;
                display:inline-block;
                margin-left: 10%;
            }
            .rightheader
            {
                padding-top: 3%;
                display: inline-block;
                float: right;
                padding-right: 5%;
                
            }
            
            #menu-nav 
              {
              max-width: 90%;
              margin-left: 5%;
              background-color: #3E114B;
              border-radius: 4px;
              box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            }
            
            #navigation-bar ul {
              border-radius: 4px;
              overflow: hidden;
              padding-left: 6%;
              padding-right: 5%;
            }
            #navigation-bar li {
              float: left;
              width:20%;
            }
            #navigation-bar li:hover a::before {
              right: 0;
              left: 0;
            }
            #navigation-bar a {
              color: #D3D1D1;
              font-size: 20px;
              font-family: Century Gothic;
              text-decoration: none;
              text-align: center;
              padding: 20px 0;
              display: block;
              position: relative;
              transition: all 0.3s ease;
            }
            #navigation-bar a:hover {
              color: #DFADED;
            }
            #navigation-bar a::before {
              content: "";
              transition: all 0.4s ease-in-out;
              position: absolute;
              right: 50%;
              left: 50%;
              bottom: 0;
              height: 2px;
              background-color: #DFADED;
            }
            #navigation-bar a:hover::before {
              right: 0;
              left: 0;
            }
            
            li {
              list-style: none;
            }
            
            .div1 {
              margin: 1%;
              height: 40px;
              border: 0px solid blue;
              box-sizing: border-box;
              background-color :#F34747;
              color:white;
              font-family: Century Gothic;
              text-align: center;
              padding-top:0.5%;
              margin-bottom: 0.2%;
              margin-left: 3%;
              margin-right: 3%;
              border-radius: 50px;
            }
            .div2 {
              margin-top: 3%;
              border: 0px solid blue;
              border-radius:25px;
              box-sizing: border-box;
              background-color :#111111;
              color:white;
              font-family: Century Gothic;
              padding: 4%;
              margin-left: 3%;
              margin-right: 3%;
            }
            table 
            {
                border-spacing: 5px;
            }
            th
            {
                padding:10px;
                font-size:20px;
                //border: 2px solid grey;
                //color:white;
            }
            .extras
            {
                background-color: #f2f2f2;
                width:100%;
                text-align: right;
            }
            .one
            {
                padding:10px;
                font-size:20px;
                border: 2px solid grey;
                color:white;
                background: #737373;
            }
            .two
            {
                padding:10px;
                font-size:16px;
                color:red;
                padding-right:30px;
            }
            a.ex1
            {
                color: #ffffff;
                text-decoration: none;
                font-size:16px;
            }
            th.one:hover
            {
                background-color:#cccccc;
            }
            .mainbox
            {
                background-color: #111111;
                width:95%;
                height:95%;
                margin:0 auto 0 auto;
            }
            .tabbox
            {
              background-color :#F34747;
				        font-family: Verdana;
                border: 1px solid red;
                border-radius:25px;
				        color: white;
            }
            table.tab2
            {
                width:96%;
                //table-layout: fixed;
                border-spacing: 15px;
            }
            .tab2 td
            {
                height:20px;
            }
            .space
            {
              margin:3%;
            }
			#end{
			color:#111111;}
        </style>
    </head>
    <body>
        <div class="box1">
            <div class="header">
			     <div class="leftheader"><b>Online Railway Reservation - IRCTC </b></div>
            </div>
              <div id="menu-nav">
  <div id="navigation-bar">
    <ul>
      <li><a href=""><i class="fa fa-home"></i><span>Schedule</span></a></li>
      <li><a href=""><i class="fa fa-user"></i><span>Catering</span></a></li>
      <li><a href=""><i class="fa fa-book"></i><span>Destinations</span></a></li>
	  <li><a href=""><i class="fa fa-book"></i><span>FAQ</span></a></li>
    </ul></div></div>
	
	
<div class="div2"><strong><h1>Reservation/Cancellation</h1></strong>
                            <form name="myForm" method="post" required>
							<tr>
    <td>
      <input type="submit" id="table" name="table" class="button" value="Check Railway Timetable and Seats">
    </td>
	<br>
	<br>
	<tr>
    <td>Full Name:</td>
    <td>
      <input type="text" id="name" name="name"  min="3" max="30" required>
    </td>
	<br>
	<br>
 </tr>
 						 <tr>
    <td>Train Number:</td>
    <td>
      <input type="number" id="tno" name="tno"  size="5" required>
    </td>
 </tr>
 <br>
 <br>
  <tr>
    <td>Train Name:</td>
    <td>
      <input type="text" id="tname" name="tname" min="10" max="30" required>
    </td>
 </tr>
 <br>
 <br>
 <tr>
    <td>Date of Journey:</td>
    <td>
      <input type="date" id="doj" name="doj" size="8" required>
    </td>
 </tr>
 <br>
 <br>
  <tr>
    <td>Journey From:</td>
    <td>
      <input type="text" id="dep" name="journeyfrom" min="3" max="30" required>
    </td>
 </tr>
 <br>
 <br>
 <tr>
    <td>Journey To:</td>
    <td>
      <input type="text" id="arriv" name="journeyto" min="3" max="30" required>
    </td>
 </tr>
 <br>
 <br>
 <tr>
      <td><label for="cars">Choose a class:</label></td>
  <td><select id="class" name="tclass" required>
    <option value="c1" >Sleeper AC</option>
    <option value="c2" >First Class</option>
    <option value="c3">Second Class</option>
    <option value="c4" >Third Class</option>
  </select></td>
 </tr>
 <br>
 <br>
<tr>
    <td>Number of Tickets:</td>
	<input type="number" name="ticket" id="ticket" min="1" max="8" required>
    <td>
      
</td>
 </tr>
  <br>
 <br>
<tr>
<td><input type="submit" id="res" name="reserve" class="button" value="Reserve a Ticket"></td>
<td><input type="submit" id="can" name="cancel" class="button" value="Cancel a ticket"></td></tr>
</p></tbody></table>

</form> 
</div>
  </div>
 <footer>
<hr>
<p id="end"><b>
&copy;2020 Nathamayil Natesh<br>VIT University, Chennai Campus<br></b></p></footer>
<script>
alert("Please fill the form with the required details");
</script>
    </body>
</html>
<?php
if(isset($_POST['table']))
{
$con=mysqli_connect("localhost","root","","train");
if(mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL".mysqli_connect_errno();
 }
$sql = "SELECT * FROM train";
$result = mysqli_query($con,$sql);
if (isset($result)) {
    echo "<table><tr><th>Train Number</th><th>Train Name</th><th>Date of Journey</th><th>Sleeper AC Seats</th><th>First Class Seats</th><th>Second Class Seats</th><th>Third Class Seats</th></tr>";
    while($row= mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["trainno"]. "</td><td>" . $row["trainname"]. "</td><td>" . $row["doj"]. "</td><td>" . $row["sleeperclass"]. "</td><td>" . $row["firstclass"]. "</td><td>" . $row["secondclass"]. "</td><td>" . $row["thirdclass"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Timetable is under the process of being updated. Please Try Again Later.";
}
$con->close();
}

if(isset($_POST['reserve']))
{
$name=$_POST['name'];
$tno=$_POST['tno'];
$tname=$_POST['tname'];
$ticket=$_POST['ticket'];
$jf=$_POST['journeyfrom'];
$jt=$_POST['journeyto'];
$cls=$_POST['tclass'];
echo "<script>alert($cls)</script>";
$doj=$_POST['doj'];
$con=mysqli_connect("localhost","root","","train1");
if(mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL".mysqli_connect_errno();
 }

if($cls =='c1'){
      $sql="UPDATE train SET sleeperclass=sleeperclass-$ticket WHERE trainno='$tno'";
       }
else if($cls =='c2') {
      $sql="UPDATE train SET firstclass=firstclass-$ticket WHERE trainno=$tno";
       }
else if($cls =='c3'){
      $sql="UPDATE train SET secondclass=secondclass-$ticket WHERE trainno=$tno";
      }
else {
      $sql="UPDATE train SET thirdclass=thirdclass-$ticket WHERE trainno=$tno";
      }	   	  
mysqli_query($con,$sql);	  
echo "<script>alert('Booked Successfully!')</script>";
mysqli_close($con);
}

if(isset($_POST['cancel']))
{
$name=$_POST['name'];
$tno=$_POST['tno'];
$tname=$_POST['tname'];
$ticket=$_POST['ticket'];
$jf=$_POST['journeyfrom'];
$jt=$_POST['journeyto'];
$cls=$_POST['tclass'];
$doj=$_POST['doj'];
$con=mysqli_connect("localhost","root","","train");
if(mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL".mysqli_connect_errno();
 }
if($cls =='c1'){
      $sql="UPDATE train SET sleeperclass=sleeperclass+$ticket WHERE trainno='$tno'";
       }
else if($cls =='c2') {
      $sql="UPDATE train SET firstclass=firstclass+$ticket WHERE trainno=$tno";
       }
else if($cls =='c3'){
      $sql="UPDATE train SET secondclass=secondclass+$ticket WHERE trainno=$tno";
      }
else {
      $sql="UPDATE train SET thirdclass=thirdclass+$ticket WHERE trainno=$tno";
      }	 
mysqli_query($con,$sql);
echo "<script>alert('Cancelled Successfully!')</script>";
mysqli_close($con);
}
?>

