<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
        .button1 
        {
          background-color: #01bc2d;
          border: none;
          color: white;
          padding: 15px 40px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 0px 2px;
          cursor: pointer;
        }

        .button2 
        {
          background-color: #d50101;
          border: none;
          color: white;
          padding: 15px 37px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 0px 2px;
          cursor: pointer;
        }

        .button3
        {
          background-color: #66008d;
          border: none;
          color: white;
          padding: 10px 50px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 0px 2px;
          cursor: pointer;
        }

        .button4
        {
          background-color: #66008d;
          border: none;
          color: white;
          padding: 4px 1px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 2px 2px;
          cursor: pointer;
          size : 10px;
        }
        .button5
        {
          background-color: #66008d;
          border: none;
          color: white;
          padding: 4px 1px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 2px 2px;
          cursor: pointer;
          size : 10px;
        }
        .button6
        {
          background-color: #66008d;
          border: none;
          color: white;
          padding: 7px 6px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 2px 2px;
          cursor: pointer;
          size : 10px;
          width: 34px;
        }

        body 
        {
          font-family:Arial, Helvetica, sans-serif;
          font-size:14px;
        }

        label
        {
          font-weight:bold;
          width:100px;
          font-size:15px;
        }

        .box 
        {
          border-width:5px;  
          border-style:ridge;
          border:#2f0041 solid 2px;
        }
      </style>
    <script class="code" type="text/javascript">
      var lastvalue;

      function showUser1() 
      {
        if (window.XMLHttpRequest) 
        {
         xmlhttp = new XMLHttpRequest();
        } 
        else 
        {
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
        {
          if (this.readyState == 4 && this.status == 200)
          {
            var x = JSON.parse(this.responseText);
            document.getElementById("txtHint").innerHTML = x['status'];
          }
        };
        xmlhttp.open("GET","db_get_status.php",true);
        xmlhttp.send();
      }

      function showUser2() 
      {
        if (window.XMLHttpRequest) 
        {
         xmlhttp = new XMLHttpRequest();
        } 
        else 
        {
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
        {
          if (this.readyState == 4 && this.status == 200)
          {
            var x = JSON.parse(this.responseText);
            document.getElementById("txtHint2").innerHTML = x['timer'];
          }
        };
        xmlhttp.open("GET","db_get_timer.php",true);
        xmlhttp.send();
      }
     var loop= setInterval(function(){showUser2(),showUser1();},1000);
    </script>
  </head>
  <body>
    <div align = "center">
      <div style = "width:300px; border: solid 3px #2f0041; background-color:#dac1e3; " align = "center">
        <div style = "background-color:#2f0041; border: solid 3px #dac1e3; color:#FFFFFF; padding:20px;">
          <b><font size="5">Control Your Device</b></div>
          <div style = "margin:5px">
            <table border="8" style= "background-color: #ccccff; color: #000033; margin: auto;" >
              <thead>
               <th>STATUS</th>
               <th>Order NoW</th>
              </thead>

              <tbody>
                <th id="txtHint">THE STATUS</th>
                <th id="txtHint2">THE ORDER</th>
              </tbody>
            </table>
            <br />
            <form action = "./subscribe.php" method = "post">
              <input type = "submit" class="button3" name="msg" size="10"  value = "Open connection"/>
            </form>
            <form action = "./publish.php" method = "post">
              DURATION
              <br>
              From: <input type="time" class="button5" name="from_time"/>
              <br>
              To: <input type="time" class="button5" name="to_time"/>
              <br>
              sec: <input type="text" class="button6" name="to_sec"/>
              <br>
              <input type = "submit" class="button1" name="msg2"  value = "ON"/>
            </form>
            <form action = "./publish.php" method = "post">
              <input type = "submit" class="button2" name="msg3"  value = "OFF"/>
            </form>
           <div style = "font-size:11px; color:#cc0000; margin-top:5px">
          </div>
        </div>
      </div>
    </div>
  </body>
</html>