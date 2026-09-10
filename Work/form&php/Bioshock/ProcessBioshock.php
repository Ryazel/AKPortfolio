<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bioshock</title>
</head>
 <style>
  th {
    text-align: left;
  }

  h1 {
    background-color: lightgrey;
    border-top: 2px darkblue solid;
    border-bottom: 2px darkblue solid;
    text-shadow: 0px 2px 2px gray;
    text-align: center;
  }
 </style>
<body>
    <h1>Havard Shocking Bio Application</h1>
   <center> 
    <table border="40">
        <tr>
            <th>NIS</th>
            <th>Name</th>
            <th>Birth Date</th>
            <th>Gender</th>
            <th>Major</th>
            <th>Email</th>
            <th>Height</th>
            <th>Extra</th>
            <th>Address</th>
        </tr>
        <tr>
            <th><?php echo $_GET["BioNIS"]?></th>
            <th><?php echo $_GET["BioName"]?></th>
            <th><?php echo $_GET["BioDate"]?></th>
            <th><?php echo $_GET["BioGender"]?></th>
            <th><?php echo $_GET["BioMajor"]?></th>
            <th><?php echo $_GET["BioEmail"]?></th>
            <th><?php echo $_GET["BioHeight"]?></th>
            <th>
                <?php
                    if (isset($_GET["BioExtra"])) {
                        $extras = $_GET["BioExtra"];
                        if (is_array($extras)) {
                            echo implode(", ", $extras);
                        } else {
                            echo $extras;
                        }
                    }
                ?>
            </th>
       
            <th><?php echo $_GET["BioAddress"]?></th>
        </tr>
    </table>
   </center>
</body>
</html>