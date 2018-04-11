<html lang="en">
    <head>
        <title></title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <style>
             body {margin:0;}
                    ul.topnav {
                      list-style-type: none;
                      margin: 0;
                      padding: 0;
                      overflow: hidden;
                      background-color: #333;
                    }

                    ul.topnav li {float: left;}

                    ul.topnav li a {
                      display: inline-block;
                      color: #f2f2f2;
                      text-align: center;
                      padding: 14px 16px;
                      text-decoration: none;
                      transition: 0.3s;
                      font-size: 17px;
                    }

                    ul.topnav li a:hover {background-color: #555;}

                    ul.topnav li.icon {display: none;}

                    @media screen and (max-width:680px) {
                      ul.topnav li:not(:first-child) {display: none;}
                      ul.topnav li.icon {
                        float: right;
                        display: inline-block;
                      }
                    }

                    @media screen and (max-width:680px) {
                      ul.topnav.responsive {position: relative;}
                      ul.topnav.responsive li.icon {
                        position: absolute;
                        right: 0;
                        top: 0;
                      }
                      ul.topnav.responsive li {
                        float: none;
                        display: inline;
                      }
                      ul.topnav.responsive li a {
                        display: block;
                        text-align: left;
                      }
                    }
         </style>
    </head>
    <body>
           <div style="padding-left:16px">
            <h2>The Academic Home</h2>
            <p>A Home of Academic Help.</p>
          </div>
        
        <ul class="topnav" id="myTopnav">
            <li><a class="active" href="#home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="#login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            <li><a href="#contact"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
            <li><a href="#about"><span class="glyphicon glyphicon-book"></span> About</a></li>
            <li class="icon">
              <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
            </li>
          </ul>

       

          <script>
          function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                  x.className += " responsive";
              } else {
                  x.className = "topnav";
              }
          }
          </script>

    </body>
</html>