<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>screen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            padding:
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        table{
            width: 90%;
            margin: auto;
            margin-top: 25px;
            margin-bottom: 25px;
            border-collapse: separate;
            border-spacing: 0;
            text-align: center;
            border: 3px solid rgb(53, 53, 131);
            border-radius: 10px;
        }
        #title{
            background-color: rgb(53, 53, 131);
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
            color: white;
            size: 80px;
            font-size: 60px;
        }
        thead #Heading th{
            border-bottom: 3px solid grey;
        }
        td{
            padding: 10px;
        }
        th{
            padding: 10px;
        }
        tbody .Name{
            text-align: left;
        }
        tbody td{
            border-bottom: 2px solid lightgrey;
            height: 40px;
        }
        tbody a{
            text-decoration: none;
            color: grey;
        }
        
        i{
            padding-right: 10px;
        }
    </style>
</head>
<body>
    <table>
        
        <thead>
            <tr>
                <th id="title" colspan="10" align="center">Dashboard</th>
            </tr>
            <tr id="Heading">
                <th>#</th>
                <th>Name</th>
                <th>Subject </th>
                <th>Topic</th>
                <th>Year</th>
                <th>Download</th>
            </tr>
        </thead>
       <tbody>
           <tr>
               <td>1.</td>
               <td>Ayushi Rathi</td>
               <td>DAA</td>
               <td>Design of Algorithms</td>
               <td>III Year</td>
               <td><a href="Design and Analysis of algorithms.pdf" target="_blank"> Click here </a></td>
           </tr>
        <tr>
           <tr>
               <td>2.</td>
               <td>Ayushi Srivastava</td>
               <td>IOT</td>
               <td>Module 1</td>
               <td>III Year</td>
               <td><a href="iot(mod-1).pdf" target="_blank"> Click here </a></td>
           </tr>
           <tr>
               <td>3.</td>
               <td>Rozi</td>
               <td>PHP</td>
               <td>Practical</td>
               <td>III Year</td>
               <td><a href="php(2).pdf" target="_blank"> Click here </a></td>
           </tr>
           <tr>
               <td>4.</td>
               <td>Devansh </td>
               <td>TAFL</td>
               <td>Module 1</td>
               <td>III Year</td>
               <td><a href="TOA-Full-Notes-Download-Part-1.pdf" target="_blank"> Click here </a></td>
           </tr>
           <tr>
               <td>5.</td>
               <td>Apeksha Srivastava</td>
               <td>DAA</td>
               <td>Bubble sort</td>
               <td>III Year</td>
               <td><a href="Bubble Sort.pdf" target="_blank"> Click here </a></td>
           </tr>
           <tr>
               <td>6.</td>
               <td>Saif Mirza</td>
               <td>Intelligent System</td>
               <td>Question sheet</td>
               <td>III Year</td>
               <td><a href="IIs.pdf" target="_blank"> Click here </a></td>
           </tr>
           <tr>
               <td>7.</td>
               <td>Priyansh</td>
               <td>PHP</td>
               <td>Assignwork work</td>
               <td>III Year</td>
               <td><a href="priyansh Php assignment.docx" target="_blank"> Click here </a></td>
           </tr>

       </tbody> 

    </table>
</body>
</html>
<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    // header("location: welcome.html");
    // exit;
}
require_once "config.php";
$sql = "SELECT filename,title,idea FROM addideas";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
    echo '<div class="contain">';
    echo '<div class="H">';
    // echo "<iframe src='files/".$row['filename']."' width='120px' height='80px'></iframe>";
    // echo "<object data='files/".$row['filename']."' type='application/pdf' width='300' height='200'>";
    echo "<a href='files/".$row['filename']."'><img src='download.png' alt='pdf image' style='width:120px;height:120px;'></a>";
    // echo "</object>";
    echo '<div class="h">';
    echo "<h1>".$row["title"]."</h1>";
    echo "<p>". $row["idea"]."</p><br>";

    echo "</div>";
    echo "</div>";
    echo "</div>";
 
  }

} else {
  echo "0 results";
}

?>