<html lang="en">
<head>
  <title>JGV TRAVEL & TOURS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></liink>
  <link rel ="stylesheet" type="text/css" href="../mongs/css/design.css"></link>
  <link rel = "stylesheet" type="text/css" href="css/bootstrap.min.css"></link> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">ADMIN</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="JGVTRAVEL&TOURSAdmindashboard.php">Dashboard</a></li>
      <li class="active"><a href="JGVTRAVEL&TOURStransactionsuser.php">Users</span></a>
      </li>
      <li><a href="JGVTRAVEL&TOURSAdmintransactions.php">Transactions</a></li>
    </ul>
     <a href="JGVTRAVEL&TOURSlogin.php"><button type="button" class="btn btn-link" style="margin-left:900px;margin-top: -40px;">logout</button>
  </div></a>
</nav>
  <div class="container">
     <h2>Users</h2><br>
     <table class="table table-striped">
     <thead>
       <tr>
       <th>No</th>
       <th>Firstname</th>
        <th>Lastname</th>
         <th>Email</th>
         <th>Position</th>
       </tr>
     </thead>
    
     <tbody>
       <tr>
         <td>1</td>
         <td>Mary Grace</td>
         <td>Puyot</td>
         <td>marygrace.puyot@jmc.edu.ph</td>
        <td>owner</td>
        <td>
         <button type="button" class="btn btn-info" style="margin-top:-5px;">Update</button>
         <button type="button" class="btn btn-danger" style="margin-top: -5px;">Remove</button>
        </td>
        
       </tr>
        <tr>
         <td>2</td>
         <td>Kharmella</td>
         <td>lacap</td>
         <td>kharmella.lacap@jmc.edu.ph</td>
        <td>assistant</td>
        <td>
         
        </td>
        
       </tr>

     </tbody>
    
 </table>

  </div>

</body>

 
             
</html>