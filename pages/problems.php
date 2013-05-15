<?php
      require 'database.php';
      $query="SELECT * FROM problems order by ID";
      $result=pg_query($dbconn,$query);
    ?>
<!DOCTYPE html>
<head>
    <?php if($_COOKIE['theme']=='dark') {?>
      <link rel='stylesheet' type ='text/css' href='../styles/front.css' title='dark'>
    <?php } 
    else {?>
      <link rel='stylesheet' type ='text/css' href='../styles/light.css' title='light'>
    <?php } ?> 
</head>
<body>
  <script type='text/javascript'>
      window.onload=init;
      function init() {
          stripe_all_tables();
      }
      function stripe_all_tables() {
          var tables=document.getElementsByTagName("table");
          for(var i=0;i<tables.length;i++) {
            stripe_table(tables[i]);
          }
      }
      function stripe_table(table) {
        var rows=table.getElementsByTagName("tr");
        for(var i=0;i<rows.length;i++) {
          rows[i].className+=(i%2==0 ? "evenrow" : "oddrow");
        }
      }
  </script>
 <div id="banner">

  GAUSSCHAIN 
  
 </div>
 <?php if(!array_key_exists('email',$_COOKIE)) {?> 
  <aside id="login">
        <form action="../pages/login.php" method="get" accept-charset="UTF-8">
          <p><b>Name</b> <br> <input type="text" class="emailfield" name="email" size="30" maxlength="30" placeholder="Enter your email address"> <br>
          <b>Password</b> <br> <input type="password" class="passwordfield" name="password" size="30" maxlength="30" placeholder="Enter your password"> </p>
          <p><input type="submit" name="submit" value="Login"></p> 
        </form> 
        <?php if($_COOKIE['theme']=='dark') {?>
    <form name='style' action='changestyle.php' method='post'>
      On <input type="radio" name="theme" value="light" id="light">
      Off <input type="radio" name="theme" value="dark" id="dark" checked='checked'>
           <input type="submit" value="Change">
    </form> 
    <?php }
     else {?>
      <form name='style' action='changestyle.php' method='post'>
      On <input type="radio" name="theme" value="light" id="light" checked='checked'>
      Off <input type="radio" name="theme" value="dark" id="dark">
           <input type="submit" value="Change">
    </form> 
    <?php } ?> 
  </aside>
  <aside id="register">
          <p><a href='registration.php'>REGISTER</a></p>
  </aside>
<?php } 

 else { ?>
  <aside id='login'>
    <p><?php echo 'Welcome to GC, '.$_COOKIE['email']; ?> <p>
    <form name='logout' method='get' action='logout.php'><input type='submit' value='LOGOUT'></form>
  </aside>
<?php } ?>
<ul id="contents">
      <li class="top"> <a href='../'> Home </a> </li>
      <li class="top"> <a style="color: #FF7400;">Chains</a>  </li>  
      <li class="top"> Rankings </li>
      <li class="top"> <a href='forum.php'>Forum</a> </li>
</ul>
	<h2 style='text-align: center;font-family: Monospace;'>Pascal's Three-sided Fucker</h2>
    <table>
      <tr>
        <th>Problem ID</th>
        <th>Problem Title</th>
        <th>Problem Description</th>
        <th>Number of solutions</th> 
      </tr>
      <?php $rows=pg_num_rows($result); ?>
      <?php for($count=1;$count<=$rows;$count+=1) { ?>
        <?php $name='./problems/'.$count.'.php'; $problem=pg_fetch_array($result,$count-1);?>
        <tr>
          <td><?php echo '<a href="'.$name.'">'.$count.'</a>'?></td>
          <td><?php echo $problem[1];?></td>  
          <td><?php echo $problem[2];?></td>  
          <td><?php echo $problem[3];?></td>  
        </tr>
      <?php } ?>
    </table>

<footer>
      <br><br>
      <p style="float: right">&copy; Copyright 2013 <span style="color: #FF7400;"> Gauss Chain </span></p>
      <p style="float: left;">Founded by <span style="color: #FF7400;"> Brevin Wankine </span> </p>
</footer>
</body>
</html>