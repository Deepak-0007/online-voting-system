<hmtl>
     <?php
include 'connection.php';
     ?>

      <head>
          <left>
        <title>Onling Polling Booth</title>
        <link rel="stylesheet" href="CSS/stylesheet.css">
      </head>

      <body>
          <div id="headerSection">
                <h1 style="padding-left: 10%; font-size:xx-large">Onling Polling Booth</h1>
          </div>
           <hr>
          <div id="bodySection">
               <form action="api/login.php" method="POST">
                  <h2 style="padding-left: 10%; font-size:xx-large;">Login</h2>
                    <input type="number" name="mobile" placeholder="Enter mobile"><br><br>
                    <input type="password" name="password" placeholder="Enter password"><br><br>
                         <select id="dropbox" name="role">
                               <option value="1">Voter</option>
                               <option value="2">Group</option>
                         </select><br><br>
                <button id="loginbtn" type="submit">Login</button><br><br>
                New user?<a href="register.html"> Register here</a>
               </form>
          </div>
</left>
           
      </body>
</hmtl>
