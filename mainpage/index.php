<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PLAYING WITH ALPAHBETS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
  <link rel="icon" href="./logo.svg" type="image/icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row ">
      <div class="col-3">
        <img src="./logo.svg" alt="" srcset="" id="logo">
      </div>
      <div class="col-6">
        <center>
          <h1 class="x my-4 pt-2" style="
          font-weight: bold; 
          color: rgb(168, 73, 172); 
          font-size: 50px;

      ">
            LEARNING IS FUN
          </h1>
        </center>
      </div>
      <div class="col-3">
      <a href="/pwa/partials/_logout.php" class="btn btn-success log" >
          LOGOUT
      </a>
      </div>
      <div class="container-fluid">
        <div class="row ">
          <div class="col-5">
            <div id="s1"></div>
          </div>

          <div class="col-7">
            <div id="image"></div>

            <div id="dsc"></div>
          </div>
        </div>
      </div>

      <script>
        $.getJSON(
          "https://raw.githubusercontent.com/Nirveek21/minorproject/main/data.json?token=AM4H2VGTU4DCIAVY7DWGCXDB3Z57K",
          function (data) {
            data = data.data;
            $(document).ready(function () {
              render(data)
            });
          });
        function render(data) {
          var htmld = "";
          var n = 0;
          for (i = 0; i < data.length; i++) {
            if (i % 4 == 0) {
              htmld += `<br>`;
            }
            htmld += `<button type="button" id="${data[i].id}" class=" ${data[i].name} buto btn btn-warning btn-lg" onclick="clik(this.id)">${data[i].name}</button>`;
          }
          $("#s1").html(htmld);
        }
        function clik(e) {
          $.getJSON(
            "https://raw.githubusercontent.com/Nirveek21/minorproject/main/data.json?token=AM4H2VGTU4DCIAVY7DWGCXDB3Z57K",
            function (data) {
              data = data.data;
              // // var i = e.id;
              // console.log(i);
              // console.log(e);
              var dt = "";
              console.log(data[e].name);
              console.log(data[e].imgurl);
              dt += `<center><img src="${data[e].obimg}" class="img-fluid" style="border-radius: 50px;height:500px ; width:500px; "  alt="Responsive image" ></center>`;
              $("#image").html(dt);
              var tx = "";
              tx += `<center ><h1 id="description">${data[e].desc}</h1></center>`;
              $("#dsc").html(tx);
            }
          );
        }
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>