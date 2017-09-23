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
         <button type="button" class="btn btn-info" style="margin-top:-5px;">Update</button>
         <button type="button" class="btn btn-danger" style="margin-top: -5px;">Remove</button></th>
         
        </td>
        
       </tr>

     </tbody>
    
 </table>

  </div>

</body>

 <footer style="margin-top:150px;margin-left:900px;">
   
   <button type="button" data-toggle ="modal" data-target="#adduser" class="btn btn-warning">Add User</button>

  <div class="modal fade" id="adduser" role="dialog">
        <div class="modal-dialog modal-md"> 
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff;">
    
          <h4 class="modal-title" style="color: white;">Register </h4>
           </div>
          <div class="modal-body">
           <div class="column" style="-webkit-column-width: 150px; -webkit-column-count: 2;padding-left:30px;">
           
           <form method="POST">
                <h6 style="color:#0000FF;margin-top:-10px;">Name:</h6>
                <input class= "form-register" autofocus = "autofocus" type = "text" name="name" 
                 required="required"><b>
                <h6 style="color: #0000FF">Gender:</h6>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female<br>
                <h6 style="color: #0000FF">Email Address:</h6>
                <input class= "form-register" autofocus= "autofocus" type = "text" name="Email"
                required= "required"><br>
                <h6 style="color: #0000FF">Password:</h6>
                <input class= "form-register" autofocus= "autofocus" type="text" name ="password"
                 required="required"><br><br><br><br><br>
                <h6 style="color: #0000FF">Confirm Password:</h6>
                <input class= "form-register" autofocus ="autofocus" type="text" name="confirm password"
                required = 'required'><br>
                <h6 style="color: #0000FF">Home Address:</h6>
                <input class= "form-register" autofocus= "autofocus" type = "text" name="Home Address"
                required= "required"><br>
                 <h6 style="color: #0000FF">Mobile No:</h6>
                <input class= "form-register" autofocus= "autofocus" type = "text" name="Mobile"
                required= "required"><br>
                <h6 style="color: #0000FF">Birthdate:</h6>
                <input class= "form-register" autofocus= "autofocus" type = "text" name="Home Address"
                required= "required"><br><br>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">login</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                </div>
              </div>
            </div>
          </div>
</html>