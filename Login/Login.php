<html>
<style>

  body{
    mergin-top: 100px;
    padding-top: 10%;
    
    font-family: Impact,Charcoal,sans-serif;
  }
  
   table{
     border: double #333366;
     padding: 30px 40px 20px 40px;
     
     width: 300px;
     height: 200px;
     
   }
   

   
</style>

<head>
  <title> Login Form
  </title>

</head>


<body>

<!-- form onsubmit="return false;" action="Login-anser.php" method="POST" -->
<form action="Login-anser.php" method="POST">

  <div>
  <table align="center"> 
  <tr>
    <td height="50">id: </td> <td> <input autofocus type="text" name="id" maxlength="15"></input></td>
  </tr>
  <tr>
    <td>pass: </td> <td> <input type="password" name="pwd" maxlength="15"> </input> </td>
  </tr>

  <tr><td colspan="2" align="center" height="70px">
    <input type="submit" value=" 確 認 ">
    <input type="reset" value=" 取 消 "> </td>
  </tr>

  </table>
  

</form>
</body>
</html>