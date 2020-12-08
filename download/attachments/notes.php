<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>screen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            padding: 0;
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
                <th>Person</th>
                <th>Download</th>
            </tr>
        </thead>
       <tbody>
           <tr>
               <td>1.</td>
               <td>Ayushi RAthi</td>
               <td>DAA</td>
               <td>Design of Algorithms</td>
               <td>Student</td>
               <td><<a href="Design and Analysis of algorithms.pdf" target="_blank">Click here</a></td>
           </tr>

           </tr>
       </tbody> 

    </table>
</body>
</html>