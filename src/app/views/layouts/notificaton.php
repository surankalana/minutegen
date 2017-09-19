<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="top.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
  ul {
      display:block;
      background:#1B1E24;
      list-style:none;
      margin:0;
      padding:20px 10px;
      height:40px;
  }
  ul li {
      float:right;
      font:13px helvetica;
      font-weight:bold;
      margin:3px 0;
  }
  ul li a {
      color:#FFF;
      text-decoration:none;
      padding:6px 15px;
      cursor:pointer;
  }
  ul li a:hover {
      background:#3d4e70;
      text-decoration:none;
      cursor:pointer;
  }

  #noti_Container {
      position:relative;
  }

  /* A CIRCLE LIKE BUTTON IN THE TOP MENU. */
  #noti_Button {
      width:20px;
      height:20px;
      line-height:20px;
      border-radius:50%;
      -moz-border-radius:50%;
      -webkit-border-radius:50%;
      background:#FFF;
      margin:-3px 10px 0 10px;
      cursor:pointer;
  }

  /* THE POPULAR RED NOTIFICATIONS COUNTER. */
  #noti_Counter {
      display:block;
      position:absolute;
      background:#E1141E;
      color:#FFF;
      font-size:10px;
      font-weight:normal;
      padding:1px 3px;
      margin:-8px 0 0 25px;
      border-radius:2px;
      -moz-border-radius:2px;
      -webkit-border-radius:2px;
      z-index:1;
  }

  /* THE NOTIFICAIONS WINDOW. THIS REMAINS HIDDEN WHEN THE PAGE LOADS. */
  #notifications {
      display:none;
      width:430px;
      position:absolute;
      top:30px;
      left:0;
      background:#FFF;
      border:solid 1px rgba(100, 100, 100, .20);
      -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
      z-index: 0;
  }
  /* AN ARROW LIKE STRUCTURE JUST OVER THE NOTIFICATIONS WINDOW */
  #notifications:before {
      content: '';
      display:block;
      width:0;
      height:0;
      color:transparent;
      border:10px solid #CCC;
      border-color:transparent transparent #FFF;
      margin-top:-20px;
      margin-left:10px;
  }

  h3 {
      display:block;
      color:#333;
      background:#FFF;
      font-weight:bold;
      font-size:13px;
      padding:8px;
      margin:0;
      border-bottom:solid 1px rgba(100, 100, 100, .30);
  }

  .seeAll {
      background:#F6F7F8;
      padding:8px;
      font-size:12px;
      font-weight:bold;
      border-top:solid 1px rgba(100, 100, 100, .30);
      text-align:center;
  }
  .seeAll a {
      color:#3b5998;
  }
  .seeAll a:hover {
      background:#F6F7F8;
      color:#3b5998;
      text-decoration:underline;
  }
</style>

</head>

<body>
<ul>
<div class="topnav" style="color: white; font-size: 35px; font-style: bold; background-color: #1B1E24;">
		<div style="margin-left: 10px">

      <i class="material-icons" style="font-size:30px;">menu</i>  BOSIUD
      <input type="text" id="myInput" name="search" placeholder="Search..">

        <li><a href="#" class="fa fa-cog"></a> </li>
        <!--<li><a href="#" class="fa fa-bell-o"></a> </li>-->
        <li id="noti_Container">
            <div id="noti_Counter"></div>   <!--SHOW NOTIFICATIONS COUNT.-->
            <div id="noti_Button"></div><!--A CIRCLE LIKE BUTTON TO DISPLAY NOTIFICATION DROPDOWN.-->
            <!--THE NOTIFICAIONS DROPDOWN BOX.-->
            <div id="notifications">
                <h3>Notifications</h3>
                <div style="height:300px;"></div>
                <div class="seeAll"><a href="#">See All</a></div>
            </div>

        <li><a href="#" class="fa fa-user"></a> </li>



      </div>
  </div>

<div class="menu-bar">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
 </div>



 <script>
        $(document).ready(function () {

            // ANIMATEDLY DISPLAY THE NOTIFICATION COUNTER.
            $('#noti_Counter')
                .css({ opacity: 0 })
                .text('7')              // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
                .css({ top: '-10px' })
                .animate({ top: '-2px', opacity: 1 }, 500);

            $('#noti_Button').click(function () {

                // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
                $('#notifications').fadeToggle('fast', 'linear', function () {
                    if ($('#notifications').is(':hidden')) {
                        $('#noti_Button').css('background-color', '#2E467C');
                    }
                    else $('#noti_Button').css('background-color', '#FFF');        // CHANGE BACKGROUND COLOR OF THE BUTTON.
                });

                $('#noti_Counter').fadeOut('slow');                 // HIDE THE COUNTER.

                return false;
            });

            // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
            $(document).click(function () {
                $('#notifications').hide();

                // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
                if ($('#noti_Counter').is(':hidden')) {
                    // CHANGE BACKGROUND COLOR OF THE BUTTON.
                    $('#noti_Button').css('background-color', '#2E467C');
                }
            });

            $('#notifications').click(function () {
                return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
            });
        });
    </script>
</body>
</html>
