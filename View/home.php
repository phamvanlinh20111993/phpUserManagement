<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="shortcut icon" href="../Public/Images/download.png">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">

<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
  margin-right: 100px;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}


table{
  width:100%;
}
td form {
  margin:0;padding:0;
}
td form button.button{
  padding:0.25em;margin:0.25em;
  background:none;
  color:blue;
}
td form button.button:hover{
  background:none;
  color:steelblue;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
</div>

<div style="padding-left:16px">
  <h2 style="text-align: center;">User Management Home</h2>
  
  <div class="row">
  <div class="large-12 columns">
    <p><a href="#" ><i class="fa fa-plus-square"></i>Add User</a></p>

    <form action="" style="height: 30px;width: 40%;">
      <table style="padding: 0px;background: blue;margin:0; ">
        <tr>
          <td style="padding:0; margin:0;"><input type="text" placeholder="Search.." name="search"></td>
          <td style="width: 10px;padding:0; margin:0;"><button type="submit"><i class="fa fa-search" style="padding: 0px;margin: 0px;"></i></button></td>
        </tr>
      </table>
    </form>

    <div style="margin-top: 5%;"></div>

    <table id="test-table">
      <thead>
        <tr>
          <th>stt</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th></th>
        </tr>
      </thead>
      <tfoot></tfoot>
      <tbody>
        <tr>
          <td></td>
          <td><label for=""><input type="text" name="" id="" placeholder="Firstname" /></label></td>
          <td><label for=""><input type="text" name="" id="" placeholder="Lastname" /></label></td>
          <td><label for=""><input type="text" name="" id="" placeholder="Email" /></label></td>
          <td><label for=""><input type="text" name="" id="" placeholder="Phone" /></label></td>
          <td><label for=""><input type="text" name="" id="" placeholder="Address" /></label></td>
          <td>
            <form action="">
              <input type="submit" class="tiny button" />
            </form>
          </td>
        </tr>

       <tr>
          <td>1</td>
          <td>lorem2</td>
          <td>lorem3</td>
          <td>lorem4</td>
          <td>lorem4</td>
          <td>lorem4</td>
          <td>
            <form action="">
              <button class="button"><i class="fa fa-pencil-square-o"></i></button>
              <button class="button"><i class="fa fa-trash-o"></i></button>
            </form>
          </td>
        </tr>
        <!-- <tr>
          <td>lorem1</td>
          <td>lorem2</td>
          <td>lorem3</td>
          <td>lorem4</td>
          <td>lorem5</td>
        </tr>
        <tr>
          <td>lorem1</td>
          <td>lorem2</td>
          <td>lorem3</td>
          <td>lorem4</td>
          <td>lorem5</td>
        </tr>
        <tr>
          <td>lorem1</td>
          <td>lorem2</td>
          <td>lorem3</td>
          <td>lorem4</td>
          <td>lorem5</td>
        </tr> -->
      </tbody>

    </table>

    <button class="tiny button right">Add user</button>
  </div>
</div>


</div>

</body>
</html>
