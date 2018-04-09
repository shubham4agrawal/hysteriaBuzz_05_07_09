<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap-3.3.7/dist/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    
     <!-- online CDN links  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    

     <!-- NAV BAR -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="homePeople.html"><img src="images/logo.png" width="40" height="35"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url(); ?>"main/homePeople>Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Competitions
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Performing Arts</a>
                    <a class="dropdown-item" href="#">Literary Arts</a>
                    <a class="dropdown-item" href="#">Fine Arts</a>
                    <a class="dropdown-item" href="#">LAN Gaming</a>
                    <a class="dropdown-item" href="#">Athletics</a>
                    <a class="dropdown-item" href="#">Photography</a>
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="#">Mega and Fun Events</a>

                  </div>
                </li>
               

                <li class="nav-item">
                        <a class="nav-link" href="#">Registration</a>
               </li>  

                <li class="nav-item">
                        <a class="nav-link" href="#">Photos</a>
                </li>

                <li class="nav-item">
                        <a class="nav-link" href="#">Videos</a>
                      </li>

                <li class="nav-item">
                         <a class="nav-link" href="#">Student Council</a>
                </li>   

                <li class="nav-item">
                         <a class="nav-link" href="#">Sponsors</a>
                </li>    
                
                <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
               </li>  

              </ul>
              
            </div>
          </nav>

</head>
<body>
        <br>
    <!-- Registration Form Code -->
    <div class="container">

      
      <div class="col-lg-10">
    <form >

            <div class="form-group">
              <div> 
              <label for="name">Full Name</label>
              <input type="name" class="form-control" id="name"  placeholder="Enter your name">
              </div>
            </div>  
            
              <div>
              <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
              </div>

              <div class="form-group">
                    <label for="email">Gender</label>
              <div class="col-lg-12">
              <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                  </div>
                  
                </div>
                </div>

                <div class="form-group ">
                        <label for="inputState">Department</label>
                        <select id="inputState" class="form-control">
                          <option selected>Info Tech</option>
                          <option>COMPS</option>
                          <option>MECH</option>
                          <option>EXTC</option>
                          <option>ITI</option>
                          <option>BMM</option>
                          <option>BMM + MMS</option>
                          <option>HS</option>
                        </select>
                </div>

                <div class="form-group">
                        <div> 
                        <label for="contact">Contact Number</label>
                        <input type="number" class="form-control" id="name"  placeholder="Enter your contact number">
                        </div>
                </div>  
                <label for="inputState">Tick the boxes in which you have to participate</label>
                 <br>
                <div class="form-group">
                    <div>Performing Arts</div>
              
                        <div class="form-check">
                    
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Solo Singing (English)
                            </label>
                        </div>    
                      
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Solo Singing (Regional)
                            </label>
                         </div>   
              
                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Rap Battle
                                </label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Solo Dance (Classical/Folks)
                            </label>
                    </div>  
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Solo Dance (Western)
                        </label>
                </div>  
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                       Instrumental
                    </label>
                </div> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                       Box the Beat
                    </label>
                </div>  
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                       Mono Acting
                    </label>
                </div>  
                    
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                       Dance Off
                    </label>
                </div> 
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                       Duet Singing
                    </label>
                </div> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                       Duet Dance
                    </label>
                </div>  
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                       Group Singing
                    </label>
                </div>  
                    
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                       Group Dance
                    </label>
                </div> 
                    
                    
                 </div>
                 <!-- performing arts end -->

                 <div class="form-group">
                    <div>Literary Arts</div>
              
                        <div class="form-check">
                    
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Elocution
                            </label>
                        </div>    
                      
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Poetry Slam
                            </label>
                         </div>   
              
                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                Change the Climax
                                </label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                             Debate
                            </label>
                    </div>  
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                           Quiz
                        </label>
                </div>
                </div>  
               <!-- literary arts end -->

               <div class="form-group">
                  <div>Fine Arts</div>
            
                      <div class="form-check">
                  
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            T-shirt Painting
                          </label>
                      </div>    
                    
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Doodle Art
                          </label>
                       </div>   
            
                      <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                            Junk in the Box
                              </label>
                      </div>
                      
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                           Pot Painting
                          </label>
                  </div>  
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                         Shutter Painting
                      </label>
              </div>  
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                     Rangoli Making
                  </label>
          </div>     
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                 Blind Paint It
              </label>
      </div>        
                    
                 </div>
                 <!-- fine arts end -->

                 <div class="form-group">
                    <div>Athletics</div>
                    <div>Single</div>
              
                        <div class="form-check">
                    
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                80m boys 
                            </label>
                        </div>    
                      
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                80m girls
                            </label>
                         </div>   
              
                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    200m boys
                                </label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                200m girls
                            </label>
                    </div>  
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          800m boys
                        </label>
                </div>  

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      800m girls
                    </label>
                </div>    
                 
               <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          Shot Put
                        </label>
                </div>  
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Potato Sack Race
                    </label>
            </div>  
        
            <div>Group</div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Relay (Boys)
                </label>
        </div>  
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Relay (Girls)
            </label>
    </div>  
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
         Three Legged Race
        </label>
</div>  
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Tug of WAR
    </label>
</div>  
<br>
<div>Sports (Outdoor)</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Field Football (Boys)
    </label>
</div>  
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Volleyball (Boys)
    </label>
</div>  
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Box Cricket (Boys)
    </label>
</div>  
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Basketball (Boys)
    </label>
</div>  
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      FootVolley (Boys)
    </label>
</div>  
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Rink Football (Boys)
    </label>
</div>  
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Rink Football (Girls)
    </label>
</div>  
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Throwball (Girls)
    </label>
</div>  
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Kabaddi (Boys)
    </label>
</div>  
<br>
<div>Sports (Indoor)</div>
<div>Single</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Chess
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Table Tennis
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Carrom
    </label>
</div>

<div>Group</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Table Tennis
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Carrom
    </label>
</div>
<br>
<div>Photography</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Editing
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Street 
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Pattern
    </label>
</div>


                     
            </div>  
                          
                 <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                 </div>   
                    </div>
                    <!-- FORM end -->
           </form>
        
    
</body>
</html>