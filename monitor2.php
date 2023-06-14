
<!-- mulai html -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- ini css toogle -->
    <!-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> -->
    
    <!-- script node js untuk menggunakan mqtt, jangan lupakan ini :v -->
    <!-- <link href="node_modules/toastr/build/toastr.css" rel="stylesheet"/> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.2/mqttws31.min.js" type="text/javascript"></script>
    <script src="tess.js" type="text/javascript"></script>
    <title>Controling</title>
    <style>
         body {
      font-family: 'Raleway', sans-serif;
      background-image: url('img/bg-img/2.jpg'); 
      background-position: bottom left;
      background-repeat: no-repeat;
      background-size: 60 vmax;
    }
       /* .slow .toggle-group { transition: left 0.7s; -webkit-transition: left 0.7s; }    */
       footer {
         margin-top: 80px;
       } 
    </style>
   <link rel="stylesheet" href="style2.css">
  </head>
  <body>

      
      <div class="container">
        <h3 class="text-center mt-4" style="color:white;" ><i>Dashboard Kontrol Perrangkat </i></h3>
        <!-- <input data-id="{{$res->id}}" class="toggle-class" type="checkbox"  data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="ON" data-off="Off" data-style="slow"><br>
        <button onclick="ledState(1)">LED ON</button>
        <button onclick="ledState(0)">LED OFF</button><br> -->
        <hr>
        <button onclick="goBack()" >Go Back</button>
                    <script>
                         function goBack() {
                          window.history.back();
                                            }
        </script>
      <div>
        <div>
        <h5><span style="color:white;"> <b><i>Manual</i></b></span></h5>
        </div>
      </div>
        <div>
          <label class="switch">
          <input type="checkbox">
          <span class="slider"></span>
          </label>
          <script>
		        // Dapatkan elemen slider dan input checkbox
            var slider = document.querySelector(".slider");
            var checkbox = document.querySelector("input[type=checkbox]");

            // Tambahkan event listener pada checkbox
            checkbox.addEventListener("change", function() {
              // Jika checkbox di-checked, ubah background slider menjadi biru
              if (this.checked) {
                slider.style.backgroundColor = "#FF0000";
                ledState4(1);
              } else { // Jika checkbox tidak di-checked, ubah background slider menjadi abu-abu
                slider.style.backgroundColor = "#ccc";
                ledState4(0);
              }
            });
          </script>
        </div>
        
        <div class="row">
            <div class="col-6">
                <div class="card text-center mt-4">
                  <div class="card-header">
                    Channel 1
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Channel 1 - LED</h5>
                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                    <a onclick="ledState(1);fungsi1();" class="btn btn-success" id="idup">ON</a>
                    <a onclick="ledState(0);fungsi2();" class="btn btn-danger">OFF</a>
                    <h6 class="card-title mt-3"> Status : <b> <span id="status1"></span>
                          <script>
                              function fungsi1(){
                                var elemen = document.getElementById("status1");
                                elemen.innerHTML = "nyala";
                              }
                              function fungsi2(){
                                var elemen = document.getElementById("status1");
                                elemen.innerHTML = "mati";
                              }
                          </script>
                          </b>
                    </h6>
                  </div>
                <div class="card-footer text-muted"></div>
                 </div>
            </div>
            <div class="col-6">
              <div class="card text-center mt-4">
                <div class="card-header">
                  Channel 2
                </div>
                  <div class="card-body">
                    <h5 class="card-title">Channel 2 - LED</h5>
                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                    <a onclick="ledState2(1);fungsi3();"  class="btn btn-success">ON</a>
                    <a onclick="ledState2(0);fungsi4();"  class="btn btn-danger">OFF</a>
                    <h6 class="card-title mt-3">Status : <b> <span id="status2"></span>
                    <script>
                              function fungsi3(){
                                var elemen = document.getElementById("status2");
                                elemen.innerHTML = "nyala";
                              }
                              function fungsi4(){
                                var elemen = document.getElementById("status2");
                                elemen.innerHTML = "mati";
                              }
                    </script>
                    </b>
                    </h6>
                  </div>
                  <div class="card-footer text-muted"></div>
                </div>
              </div>
      
          <!-- Force next columns to break to new line -->
          <div class="w-100 d-none d-md-block"></div>
          
              <div class="col-6">
                <div class="card text-center mt-4">
                  <div class="card-header">
                    Channel 3
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Channel 3 - LED</h5>
                    <a onclick="ledState3(1);fungsi5();"  class="btn btn-success">ON</a>
                    <a onclick="ledState3(0);fungsi6();" class="btn btn-danger">OFF</a>
                    <h6 class="card-title mt-3">Status : <b> <span id="status3"></span>
                    <script>
                              function fungsi5(){
                                var elemen = document.getElementById("status3");
                                elemen.innerHTML = "nyala";
                              }
                              function fungsi6(){
                                var elemen = document.getElementById("status3");
                                elemen.innerHTML = "mati";
                              }
                    </script>
                    </b>
                    </h6>
                  </div>
                  <div class="card-footer text-muted"></div>
                </div>
              </div>
              
        </div>
    </div>
    <div class="container">
    <footer class="bg-dark text-center text-white">
              <!-- Grid container -->
              <div class="container p-4 pb-0">
                <!-- Section: Social media -->
                <section class="mb-4">
                  <!-- Facebook -->
                  <a class="btn btn-outline-light btn-floating m-1" href="#" role="button" target="_blank"
                    ><i class="fab fa-facebook-f"></i
                  ></a>

                  <!-- Instagram -->
                  <a class="btn btn-outline-light btn-floating m-1" href="#" role="button" target="_blank"
                    ><i class="fab fa-instagram"></i
                  ></a>

                  <a class="btn btn-outline-light btn-floating m-1" href="#" role="button" target="_blank"
                    ><i class="fab fa-youtube"></i
                  ></a>
                </section>
                <!-- Section: Social media -->
              </div>
              <!-- Grid container -->

              <!-- Copyright -->
              <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a class="text-white" href="#">novriamsyah</a>
              </div>
              <!-- Copyright -->
            </footer>
        </div>
      

  


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- <script src="node_modules/toastr/toastr.js"></script> -->
    <!-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->

    <!-- <script>
      $(document).ready(function(){
        $("#idup").click(function(){
          toastr.success('Sukses Merubah', 'perhatikan status tombol')
          toastr.options.closeMethod = 'fadeOut';
          toastr.options.closeDuration = 1000;
          toastr.options.closeEasing = 'swing';
        });
      });

     

    </script> -->

   
  </body>
</html>