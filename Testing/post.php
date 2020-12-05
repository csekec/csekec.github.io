<?php
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

      
      $result=mysql_query($INSERT);
      $result=mysql_query("select * form register");
     } else {
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



<!--html lang="en"-->
<head>
	<meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>


<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  background-color: #E6E6FA;
  font-family: "Roboto", helvetica, arial, sans-serif;
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
   font-family: "Roboto", helvetica, arial, sans-serif;
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

</style>

<!--body-->
    <p >
    <h1 align="center"><b>KONGU ENGINEERING COLLEGE</b></h1>
    <h2 align="center">                   PERUNDURAI, ERODE-638 060</h2>
    <h3 align="center">      (Autonomous Institution Affiliated to Anna University,Chennai)</h3>
                                    <br><br>
    <h2 align="center">            CERTIFICATE(S) REQUISITION FORM FOR STUDENTS</h2></p>
    <div class="table-title">
        
    </div>
    <table class="table-fill">
        <!--thead>
            <tr>
                <th class="text-left">Month</th>
                <th class="text-left">Sales</th>
            </tr>
        </thead-->
        <tbody class="table-hover">
            <tr>
                <td class="text-left"><b>Type of the Certificate Required :</b><br>(bonafide (or) Fee Structure)</td>
                    <? 
                        while ($array = mysql_fetch_row($result));
                        {
                            print "<td>";
                            echo $array[0]; 
                            print "</td>";
                        }
                    ?>
            </tr>
            <tr>
                <td class="text-left"><b>Name of the Student :</b>      (In captital Letters)</td>
                <td class="text-left">$ 10,000.00</td>
            </tr>
            <tr>
                <td class="text-left"><b>Male / Female :</b></td>
                <td class="text-left">$ 85,000.00</td>
            </tr>
            <tr>
                <td class="text-left"><b>Roll No :</b></td>
                <td class="text-left">$ 56,000.00</td>
            </tr>
            <tr>
                <td class="text-left"><b>Year & Branch :</b></td>
                <td class="text-left">$ 98,000.00</td>
            </tr>
            <tr>
                <td class="text-left"><b>Date of Birth :</b></td>
                <td class="text-left">$ 98,000.00</td>
            </tr>
            <tr>
                <td class="text-left"><b>Father's Name : </b>(In captital Letters)</td>
                <td class="text-left">$ 98,000.00</td>
            </tr>
            <tr>
                <td class="text-left"><b>Community & Caste : </b>(Compulsory)</td>
                <td class="text-left">$ 98,000.00</td>
            </tr>
            <tr>
                <td class="text-left"><b>Admitted through :</b></td>
                <td class="text-left">$ 98,000.00</td>
            </tr>
            <tr>
                <td class="text-left"><b>Category :</b></td>
                <td class="text-left">$ 98,000.00</td>
            </tr>
            <tr>
                <td class="text-left"><b>For Which year (S) certificate required : </b>(Fee structure)</td>
                <td class="text-left">$ 98,000.00</td>
            </tr>
            <tr>
                <td class="text-left"><b>Hostel (or) Days Scholar : </b></td>
                <td class="text-left">$ 98,000.00</td>
            </tr>
            <tr>
                <td class="text-left" colspan="2"><pre style="color:#000000"><b>  <u>If hostel</u> :</b>            (pervious year hostel)</pre></td>
            </tr>
            <tr>
                <td class="text-left"><b>Hostel Name :</b></td>
                <td class="text-left">$ 98,000.00</td>
            </tr>
            <tr>
                <td class="text-left"><b>Room No:</b></td>
                <td class="text-left">$ 98,000.00</td>
            </tr>            
            <tr>
                <td class="text-left"><b>Residential Address :</b> (In captital Letters)</td>
                <td class="text-left">$ 98,000.00</td>
            </tr>            
            <tr>
                <td class="text-left"><b>Email ID</b></td>
                <td class="text-left">$ 98,000.00</td>
            </tr>            
            <tr>
                <td class="text-left"><b>Mobile Number</b></td>
                <td class="text-left">$ 98,000.00</td>
            </tr>            
            <tr>
                <td class="text-left" colspan="2"><pre style="color:#000000">   <b><u>Bank</u> :</b>     (Where you applied for Loan)</pre></td>
            </tr>            
            <tr>
                <td class="text-left"><b>Bank Name :</b></td>
                <td class="text-left">$ 98,000.00</td>
            </tr>            
            <tr>
                <td class="text-left"><b>Place :</b></td>
                <td class="text-left">$ 98,000.00</td>
            </tr>
            <tr>
                <td class="text-left"><b>Bank Email ID :</b></td>
                <td class="text-left">$ 98,000.00</td>
            </tr>
            <tr>
                <td class="text-left"><b>Purpose</b></td>
                <td class="text-left">$ 98,000.00</td>
            </tr>
        </tbody>
    </table>
    <br><br><br><br>
    <pre><h3>          Signature of the student                        class Advisor                                  HOD<h3></pre> <br><br> 
  <!--/body-->
  
<!--/html-->