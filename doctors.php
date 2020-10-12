<!doctype html>
<html class="no-js" lang="en" style="    overflow-x: hidden;">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="scss/navbar.css">
  <link rel="stylesheet" href="scss/doctors.css">

  <link rel="stylesheet" href="scss/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/style.css">
</head>

<body style="overflow-x: hidden;" onload="get()">
<script>
     
     async function get(){
      fetch(`http://3.22.84.131:8000/doctor/`)
          .then(res=>res.json())
          .then(function(data){
            appendData(data.doctors);
  
          })
          .catch(err=>console.log(err)) 
      }
      function appendData(data){
        var length =  data.length;
        console.log(length);
        var name =  document.getElementById('name');
        var hospital =  document.getElementById('hosp');
        var experience = document.getElementById('exp');
        var image = document.getElementById('img');
        var spec = document.getElementById('spec');
        var fellow = document.getElementsByClassName("field");
        for (var i =0 ; i <data.length; i++){
          name.innerHTML= data[i].name;
          hospital.innerHTML= data[i].hospital;
          experience.innerHTML = data[i].experience;
          image.src="http://3.22.84.131:8000"+ data[i].image;
          spec.innerHTML = data[i].specialisation;
          for(var k = 0; k < fellow.length; k++) {
                fellow[k].innerHTML = data[i].fellowship.split(",")[k];
            }
        }
      }
       </script>

  <!--nav bar-->
  <div class="grid-container fluid nav-bar">
    <div class="grid-x" style="align-items: center;">
      <div class="cell small-12 medium-4 large-2">
        <div class="grid-x" style="justify-content: center;align-items: center;">
          <div class="cell small-3 medium-4 large-5">
            <a href="index.html"><img src="images/India-Treatment-Help-Logo.png" alt=""></a>
          </div>
          <div class="cell small-8 medium-8 large-3">
            <a href="index.html" style="font-size: 15px;">India<br>Treatment<br>Help</a>
          </div>
        </div>
      </div>
      <div class="cell small-12 medium-8 large-6 nav-menus">
        <div class="grid-x grid-padding-x" style="justify-content: space-between;text-align:center">
          <div class="cell small-4 medium-1 large-3">
            <a href="doctors.php" style="border-bottom: 5px solid;border-bottom-color: white; padding-bottom: 37px;">Doctors</a>
          </div>
          <div class="cell small-4 medium-1  large-3">
            <a href="hospitals.php">Hospitals</a>
          </div>
          <div class="cell small-4 medium-1  large-3">
            <a href="whatdowedo.html">What we do?</a>
          </div>
          <div class="cell  small-4 medium-1 large-3">
            <a href="aboutus.html">About Us</a>
          </div>
        </div>
      </div>
      <div class="cell medium-10 large-4">
        <div class="grid-x grid-padding-x" style="    text-align: center;justify-content: space-between;
       align-items: center;">
          <div class="cell small-11 medium-5 large-8">
            <input type="search" placeholder="Search for Procedures, Hospitals, Doctors.....&#61442;" style="border-radius: 40px;font-family: FontAwesome;    max-width: 330px;
         margin-right: 9rem;
         min-width: 200px;">
          </div>
          <div class="cell small-4 medium-4 large-4">
            <a href="./index.html#contactus" type="button" class="button expanded"
              style="border-radius: 40px;color: #1779ba !important;background-color: white;">Contact Us</a>
          </div>
        </div>
      </div>    
    </div>
  </div>

  <!----filters-
  <div class="grid-container fluid filters">
    <div class="grid-x">
      <div class="cell small-12 medium-4 large-2">
      </div>
      <div class="cell small-12 medium-8 large-6">
        <div class="grid-x grid-padding-x city">
          <div class="cell small-4 medium-1 large-2">
            <label>
              <label>
                <select>
                  <option value="+91">Filter by city</option>
                  <option value="+91">+91</option>
                  <option value="+91">+91</option>
                  <option value="+91">+91</option>
                </select>
              </label>
            </label>
          </div>
          <div class="cell small-4 medium-1  large-2">
            <label>
              <label>
                <select>
                  <option value="+91">Specialities</option>
                  <option value="+91">+91</option>
                  <option value="+91">+91</option>
                  <option value="+91">+91</option>
                </select>
              </label>
            </label>
          </div>
          <div class="cell small-4 medium-1  large-2">
            <label>
              <label>
                <select>
                  <option value="+91">Filter by Experience</option>
                  <option value="+91">+91</option>
                  <option value="+91">+91</option>
                  <option value="+91">+91</option>
                </select>
              </label>
            </label>
          </div>
          <div class="cell small-4 medium-1 large-2">
            <button type="button" class="button expanded primary">Apply</button>
          </div>
          <div class="cell  small-4 medium-1 large-2">
            <a href="aboutus.html">Clear filter</a>
          </div>
        </div>
      </div>
    </div>
  </div>
-->
  <!--doctors-->
  <div class="grid-container fluid doctors">
    <div class="grid-x">
      <div class="cell large-offset-2 large-6">
        <h3>Best Doctors in India</h3>
      </div>
      <?php

$api_url = 'http://3.22.84.131:8000/doctor/';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data,true);
    for ($x = 0; $x< count($response_data)-1 ; $x++) {
       
      ?>    
        <div class="cell large-offset-2 large-6 " style="    padding-bottom: 28px;">
            <div class="card">
              <div class="card-section">
                <div class="grid-x grid-padding-x">
                  <div class="cell large-2 small-3">
                    <img src="" alt="" id="img">
                  </div>
                  <div class="cell large-6 small-9">
                    <h4 id="name" class="name"></h4>
                    <b id = "hosp"></b>
                    <div class="grid-x">
                      <div class="cell large-4 small-5 small-7">
                        <i class="fa fa-calendar-check-o" id="exp"></i>
                      </div>
                      <div class="cell auto" id="spec">
                        <img src="images/certification.svg" alt="" style="max-width: 8%;"> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-container fieldspecialist">
                  <div class="grid-x">
                    <div class="cell large-2 small-6">
                      Top procedures:
                    </div>
                    <div class="cell large-2 small-6 field"  style="    background: #E6E6E6;">
                    
                    </div>
                    <div class="cell large-2 small-5 field "  style="    background: #E6E6E6;">
                      
                    </div>
                    <div class="cell large-3 small-6  field"  style="    background: #E6E6E6;">
                      
                    </div>
                    <div class="cell large-2">
                      <button type="button" class="button primary" data-open="formModal1">Book Appointment</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php
      }
      ?>
    </div>
  </div>
  <!--modal reveal--->
          <div class="cell large-3 query ">
            <div class="grid-x" style="justify-content: center;">
              <div class="card">
                <div class="card-section">
                  <button type="button" class="button expanded primary" style="border-radius: 10px;">free medical opinion</button>
                </div>
                <div class="card-section">
                  <div class="grid-x grid-padding-x" style="padding: 7px;">
                    <div class=" small-12 medium-3 cell">
                      <img src="images/Image 3.png" alt="">
                    </div>
                    <div class=" small-12 medium-9 cell free">
                      <div class="grid-y">
                        <div class="cell">
                          <i class="fa fa-check"></i>Free screening by Doctor
                        </div>
                        <div class="cell">
                          <i class="fa fa-check"></i>Free treatment plan
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-section" style="padding:0px!important;">
                  <div class="cell auto">
                    <div class="grid-x" style="justify-content: center;">
                      <form>
                        <div class="grid-container">
                          <div class="grid-x grid-padding-x">
                            <div class=" small-6 medium-6 cell">
                              <label>
                                <input type="text" placeholder="First Name">
                              </label>
                            </div>
                            <div class=" small-6 medium-6 cell">
                              <label>
                                <input type="text" placeholder="Last Name">
                              </label>
                            </div>
                          </div>
                          <div class="grid-x grid-padding-x">
                            <div class=" small-12 medium-12 cell">
                              <label>
                                <input type="text" placeholder="E-mail Address">
                              </label>
                            </div>
                          </div>
                          <div class="grid-x grid-padding-x">
                            <div class=" small-3 medium-4 cell">
                              <label>
                                <label>
                                  <select>
                                    <option value="+91">+91</option>
                                    <option value="+91">+91</option>
                                    <option value="+91">+91</option>
                                    <option value="+91">+91</option>
                                  </select>
                                </label>
                              </label>
                            </div>
                            <div class=" small-9 medium-8 cell">
                              <label>
                                <input type="text" placeholder="Phone Number">
                              </label>
                            </div>
                          </div>
                          <div class="grid-x grid-padding-x">
                            <div class=" small-12 medium-12 cell">
                              <label>
                                <select>
                                  <option value="husker">Husker</option>
                                  <option value="starbuck">Starbuck</option>
                                  <option value="hotdog">Hot Dog</option>
                                  <option value="apollo">Apollo</option>
                                </select>
                              </label>
                            </div>
                          </div>
                          <div class="grid-x grid-padding-x">
                            <div class=" small-12 medium-12 cell">
                              <label for="exampleFileUpload" class="button expanded" style="padding:7px;max-height: 30px;"><i class="fa fa-upload" style="padding-right: 11px;"></i>Uploads Your
                                Documents</label>
                              <input type="file" id="exampleFileUpload" class="show-for-sr">
                            </div>
                          </div>
                          <div class="grid-x grid-padding-x">
                            <div class=" small-12 medium-12 cell">
                              <label>
                                <textarea placeholder="Message"></textarea>
                              </label>
                            </div>
                          </div>
                          <div class="grid-x grid-padding-x" style="text-align: center;">
                          <div class=" small-12 medium-12 cell">
                              <button type="button" class="button primary" style="border-radius: 40px!important;">Get Free Quote
                                Now</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  <!-- <div class="query" id="formModal1" data-reveal>
    <div class="cell large-4 query">
      <div class="grid-x" style="justify-content: center;">
        <div class="card" style="margin-top: 0px!important;">
          <div class="card-section">
            <button type="button" class="button expanded primary" style="border-radius: 10px;">Free
              medical opinion</button>
          </div>
          <div class="card-section">
            <div class="grid-x grid-padding-x" style="padding: 7px;">
              <div class=" small-12 medium-3 cell">
                <img src="images/Image 3.png" alt="">
              </div>
              <div class=" small-12 medium-9 cell free">
                <div class="grid-y">
                  <div class="cell">
                    <i class="fa fa-check"></i>Free screening by Doctor
                  </div>
                  <div class="cell">
                    <i class="fa fa-check"></i>Free treatment plan
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-section" style="padding:0px!important;">
            <div class="cell auto">
              <div class="grid-x" style="justify-content: center;">
                <form>
                  <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                      <div class=" small-6 medium-6 cell">
                        <label>
                          <input type="text" placeholder="First Name">
                        </label>
                      </div>
                      <div class=" small-6 medium-6 cell">
                        <label>
                          <input type="text" placeholder="Last Name">
                        </label>
                      </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                      <div class=" small-12 medium-12 cell">
                        <label>
                          <input type="text" placeholder="E-mail Address">
                        </label>
                      </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                      <div class=" small-3 medium-4 cell">
                        <label>
                          <label>
                            <select>
                              <option value="+91">+91</option>
                              <option value="+91">+91</option>
                              <option value="+91">+91</option>
                              <option value="+91">+91</option>
                            </select>
                          </label>
                        </label>
                      </div>
                      <div class=" small-9 medium-8 cell">
                        <label>
                          <input type="text" placeholder="Phone Number">
                        </label>
                      </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                      <div class=" small-12 medium-12 cell">
                        <label>
                          <select>
                            <option value="husker">Husker</option>
                            <option value="starbuck">Starbuck</option>
                            <option value="hotdog">Hot Dog</option>
                            <option value="apollo">Apollo</option>
                          </select>
                        </label>
                      </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                      <div class=" small-12 medium-12 cell">
                        <label for="exampleFileUpload" class="button expanded" style="padding:7px;max-height: 30px;"><i class="fa fa-upload" style="padding-right: 11px;"></i>Uploads Your
                          Documents</label>
                        <input type="file" id="exampleFileUpload" class="show-for-sr">
                      </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                      <div class=" small-12 medium-12 cell">
                        <label>
                          <textarea placeholder="Message"></textarea>
                        </label>
                      </div>
                    </div>
                    <div class="grid-x grid-padding-x" style="text-align: center;">
                      <div class=" small-12 medium-12 cell">
                        <button type="button" class="button primary" style="border-radius: 40px!important;">Get Free Quote
                          Now</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="close-button" data-close aria-label="Close modal" type="button" style="color:#E6E6E6!important">
      <span aria-hidden="true">&times;</span>
    </button>
  </div> -->

  <!--footer-->
  <div class="grid-container fluid footer">
    <div class="grid-x" style="text-align: center;">
      <div class="cell medium-12 small-12 large-12">
        <div class="grid-x">
          <div class="cell small-2 medium-2 large-2">
            <a href="index.html"><img src="images/India-Treatment-Help-Logo.png" alt=""></a>
          </div>
          <div class="cell small-10 medium-6 large-6">
            <div class="grid-x contactlinks">
              <div class="cell small-4 medium-4 large-2">
                <a href="aboutus.html">About Us</a>
              </div>
              <div class="cell small-4 medium-4 large-2">
                <a>Treatments</a>
              </div>
              <div class="cell small-4 medium-4 large-2">
                <a>Contact Us</a>
              </div>
            </div>
          </div>
          <div class="cell small-12 medium-4 large-4">
            <div class="grid-x" style="justify-content: center;">
              <div class="cell small-3 medium-5 large-3">
                Follow Us
              </div>
              <div class="cell cell small-9 large-8 medium-7 socialicons">
                <div class="grid-x" style="justify-content: center;">
                  <div class="cell small-2 medium-4 large-2">
                    <a href=""><i class="fa fa-instagram"></i></a>
                  </div>
                  <div class="cell small-2 medium-4 large-2">
                    <a href=""><i class="fa fa-twitter"></i></a>
                  </div>
                  <div class="cell small-2 medium-4 large-2">
                    <a href=""><i class="fa fa-facebook"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 
  
</body>

</html>