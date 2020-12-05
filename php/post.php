<?php

require 'example.php';


$type = $_POST['type'];
$studentname = $_POST['studentname'];
$fathername = $_POST['fathername'];
$gender = $_POST['gender'];
$rollno = $_POST['rollno'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$year = $_POST['year'];
$section = $_POST['section'];
$dob = $_POST['dob'];
$community = $_POST['community'];
$caste = $_POST['caste'];
$admitted = $_POST['admitted'];
$category = $_POST['category'];
$fees = $_POST['fees'];
$scholar = $_POST['scholar'];
$hostelname = $_POST['hostelname'];
$roomno = $_POST['roomno'];
$address = $_POST['address'];
$bankname = $_POST['bankname'];
$place = $_POST['place'];
$bemail = $_POST['bemail'];
$purpose = $_POST['purpose'];

if (!empty($type) || !empty($studentname) || !empty($fathername) || !empty($gender) || !empty($rollno) || !empty($email) || !empty($phone) || !empty($year) || !empty($section) || !empty($dob) || !empty($community) || !empty($caste) || !empty($admitted) || !empty($category) || !empty($fees) || !empty($scholar) || !empty($hostelname) || !empty($roomno) || !empty($address) || !empty($bankname) || !empty($place) || !empty($bemail) || !empty($purpose)) {
    
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "bonafide";
    
    //.....................................create connection.....................................................................\\

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT rollno From register Where rollno = ? Limit 1";
     $INSERT = "INSERT Into register (type, studentname, fathername, gender, rollno, email, phone, year, section, dob, community, caste, admitted, category, fees, scholar, hostelname, roomno, address, bankname, place, bemail, purpose) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     
 
    //.....................................Prepare statement.....................................................................\\
     
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $rollno);
     $stmt->execute();
     $stmt->bind_result($rollno);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssiisisssssssisssss", $type, $studentname, $fathername, $gender, $rollno, $email, $phone, $year, $section, $dob, $community, $caste, $admitted, $category, $fees, $scholar, $hostelname, $roomno, $address, $bankname, $place, $bemail, $purpose);
      $stmt->execute();
      echo "New record inserted sucessfully";
	

     




print"<html>
<head>
		<title>Table Style</title>
	
</head>


<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

h1,h2,h3{
text-align:center;
}
body {
  background-color: #E6E6FA;
  font-family:  helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #000000;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family:  helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:5px;
  border-collapse: radius;
  height: 320px;
  margin: auto;
  max-width: 1200px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:20px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}
table
{
	align:center;
}
</style>

<body>
    <p >
    <h1 ><b>KONGU ENGINEERING COLLEGE</b></h1>
    <h2 >                   PERUNDURAI, ERODE-638 060</h2>
    <h3 >      (Autonomous Institution Affiliated to Anna University,Chennai)</h3>
                                    <br><br>
    <h2 >            CERTIFICATE(S) REQUISITION FORM FOR STUDENTS</h2></p>
    <div >
        
    </div>
  
    <table align='center'border='2' width='80%'>
        <!--thead>
            <tr>
                <th >Month</th>
                <th >Sales</th>
            </tr>
        </thead-->
        <tbody >
            <tr>
                <td ><b>Type of the Certificate Required :</b><br>(bonafide (or) Fee Structure)</td>
                <td >".$type."</td>
                
            </tr>
            <tr>
                <td ><b>Name of the Student :</b>      (In captital Letters)</td>
                <td >".$studentname."</td>
            </tr>
            <tr>
                <td ><b>Father name :</b></td>
                <td >".$fathername."</td>
            </tr>
		<tr>
                <td ><b>Gender :</b></td>
                <td >".$gender."</td>
            </tr>
<tr>
                <td ><b>Rollno :</b></td>
                <td >".$rollno."</td>
            </tr>
<tr>
                <td ><b>Email :</b></td>
                <td >".$email."</td>
            </tr>
	<tr>
                <td ><b>Phone :</b></td>
                <td >".$phone."</td>
            </tr>
<tr>
                <td ><b>Year :</b></td>
                <td >".$year."</td>
            </tr>
<tr>
                <td ><b>Section :</b></td>
                <td >".$section."</td>
            </tr>
<tr>
                <td ><b>DOB :</b></td>
                <td >".$dob."</td>
            </tr>
		<tr>
                <td ><b>Community :</b></td>
                <td >".$community."</td>
            </tr>
<tr>
                <td ><b>Caste :</b></td>
                <td >".$caste."</td>
            </tr>
<tr>
                <td ><b>Admission :</b></td>
                <td >".$admitted."</td>
            </tr>
<tr>
                <td ><b>Categeory :</b></td>
                <td >".$category."</td>
            </tr>
	<tr>
                <td ><b>Fees :</b></td>
                <td >".$fees."</td>
            </tr>
<tr>
                <td ><b>Scholar :</b></td>
                <td >".$scholar."</td>
            </tr>
<tr>
                <td ><b>Hostel name :</b></td>
                <td >".$hostelname."</td>
            </tr>
<tr>
                <td ><b>Roomno :</b></td>
                <td >".$roomno."</td>
            </tr>
<tr>
                <td ><b>Address :</b></td>
                <td >".$address."</td>
            </tr>
<tr>
                <td ><b>Bank name :</b></td>
                <td >".$bankname."</td>
            </tr>
<tr>
                <td ><b>Place :</b></td>
                <td >".$place."</td>
            </tr>
<tr>
                <td ><b>Bank email :</b></td>
                <td >".$bemail."</td>
            </tr>
<tr>
                <td ><b>Purpose :</b></td>
                <td >".$purpose."</td>
            </tr>




            
        </tbody>
    </table>
    <br><br><br><br>
    <pre><h3>          Signature of the student                        class Advisor                                  HOD<h3></pre> <br><br> 
  </body>
  
</html>";}



else {
      echo "Someone already register using this Rollno";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>