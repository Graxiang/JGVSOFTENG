<html lang="en">
<head>
  <title>JGV TRAVEL & TOURS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></liink>
  <link rel ="stylesheet" type="text/css" href="../mongs/css/design.css"></link>
  <link rel = "stylesheet" type="text/css" href="css/bootstrap.min.css"></link> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>               
    
    <div class="col-sm-12";>
     <div class="modal-header navbar-fix-top" style ="height:40px;width:10px;padding-top:0px;width:995px;background-color:#668cff;margin-left:-20px;border-bottom:2px;border-style:solid;border-color:black;width:1013px;margin-top:0px;"> 
    <img src = "pictures/airplane.png"  style="font-family:italic;height:29px;width:29px;color: "  class="control-label" > JGV TRAVEL & TOURS </style>
    <button type ="button" style="padding-left:80px;padding-top:2px;height:20px;margin-left: 10px;color: white;" class="btn btn-link" data-toggle="modal" data-target="#mybooking" >Booking </button></a>
    <button type ="button" style="padding-left:1px;padding-top:2px;height:20px;color: white;" class="btn btn-link" data-toggle="modal" data-target="#myservices" >Services</button></a>
    <button type ="button" style="padding-left:1px;padding-top:2px;height:20px;color: white;" class="btn btn-link" data-toggle="modal" data-target="#mydestinations" >Destinations</button></a>
    <button type ="button" style="padding-left:1px;padding-top:2px;height:20px;color: white;" class="btn btn-link" data-toggle="modal" data-target="#myabout" >About</button></a>
    <button type ="button" style="padding-left:1px;padding-top:2px;height: 20px;color: white;" class="btn btn-link" data-toggle="modal" data-target="#mycontactus" >Contact  </button></a>
    <button type ="button" style="padding-left:1px;padding-top:2px;height:20px;color: white;" class="btn btn-link" data-toggle="modal" data-target="#myvideos">Videos</button></a>
    <button type ="button" style="padding-left:1px;padding-top:2px;height:20px;color: white;" class="btn btn-link" data-toggle="modal" data-target="#mymedia">Media</button></a>
    <button type ="button" style="padding-left:1px;padding-top:2px;height:20px;color: white;" class="btn btn-link" data-toggle="modal" data-target="#mypromos" > Promos </button></a>
     <a href="JGVTRAVEL&TOURSClientprofiledashboard.php"></a>
     
        <div class="modal fade" id="mybooking" role="dialog">
        <div class="modal-dialog modal-md" style="width: 700px;"> 
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff;">
    
          <h4 class="modal-title" style="color: white;">Tour packages Booking: </h4>
           </div>
          <div class="modal-body">
                <h6 style="color:#0000FF">Select Destinations:</h6>
                <input type="radio" name="Destinations" value="tagaytay" style="margin-left: 10px;">Tagaytay
                <input type="radio" name="Destinations" value="Manila">Manila
                 <input type="radio" name="Destinations" value="Cebu">Cebu City 
                <input type="radio" name="Destinations" value="Baguio">Baguio CIty <br>
                <h6 style="color:#0000FF";>How many are you?</h6>
                <input class="form-booking-tour" autofocus="autofocus" name="persons" type="text"  required="required";><br>
                <h6 style="color:#0000FF">List the name of participants:</h6>
                <input class="form-booking-tour" autofocus="autofocus" name="Participants" type="text"  required="required";><br>
                <h6 style="color:#0000FF">Method of Payment:</h6>
                <input type="radio" name="Payment" value="Credit Card" style="margin-left: 10px;">Credit card               
                <input type="radio" name="Payment" value="Pera Padala">Pera Padala
                <input type="radio" name="Payment" value="Cebuana">Cebuana
                <input type="radio" name="Payment" value="others">others
                <h6 style="color:#0000FF">If Credit Card: (Please enter your Pin No:)</h6>
                <input class="form-booking-tour" autofocus="autofocus" name="Participants" type="text"  required="required";><br><br><br>
                <h6 style="color:red;">Note:</h6> 
                <h6>The reservation will be canceled if the payment will not be sent within 24hrs</h6>
                
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Book</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>
               </div>
             </div>
           </div>
        <div class="modal fade" id="iconaccount" role="dialog">
        <div class="modal-dialog modal-md"> 
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff;">
    
          <h4 class="modal-title" style="color: white;">My Account </h4>
           </div>
          <div class="modal-body">
          <button type="button">History</button>
          <button type="button">Account Settings</button>
          <button type="button">View transactions</button>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <div class="modal fade" id="myservices" role="dialog">
        <div class="modal-dialog modal-sm"> 
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff;">
    
          <h4 class="modal-title" style="color: white;">We offer this services: </h4>
           </div>
          <div class="modal-body">
          <p>  1. Billing </p>
          <p>  2. Airlines </p>
          <p>  3.Tourpackages </p>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <div class="modal fade" id="mydestinations" role="dialog">
        <div class="modal-dialog modal-md" style="width: 1000px;height:1400px;"> 
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff;">
       
          <h4 class="modal-title" style="color: white;">Destinations: </h4>
          </div>
          <div class="modal-body" style="-webkit-column-width: 100px;-webkit-column-count: 3;">
          <img src="baguio.jpg" style="width: 150px;height: 80px;padding-top:10px;margin-top: -10px;">
          <button type ="button" style="padding-left:1px;padding-top:-6px;height:20px; pull-right:500px;" class="btn btn-link" data-toggle="modal" data-target="#btnbaguio">Baguio </button></a><br>\
          <img src="manila.jpg" style="width: 150px;height:80px;margin-top:20px;">
          <button type ="button" style="padding-left:1px;padding-top:-10px;height:20px; pull-right:500px;" class="btn btn-link" data-toggle="modal" data-target="#btnmanila">Manila </button></a>
          <img src="baguio.jpg" style="width: 150px;height:80px;">
          <button type ="button" style="padding-left:1px;padding-top:0px;height:20px; pull-right:500px;" class="btn btn-link" data-toggle="modal" data-target="#btncebu">Cebu City </button></a>
          <img src="palawan.jpg" style="width: 150px;height: 80px;margin-top:20px;">
          <button type ="button" style="padding-left:1px;padding-top:2px;height:20px; pull-right:500px;" class="btn btn-link" data-toggle="modal" data-target="#btnpalawan">Palawan </button></a><br>
          <img src="bohol.jpg" style="width: 150px;height: 80px;">
          <button type ="button" style="padding-left:1px;padding-top:2px;height:20px; pull-right:500px;" class="btn btn-link" data-toggle="modal" data-target="#btnbohol">Bohol </button></a>
           <img src="davao.jpg" style="width: 150px;height: 80px; margin-top: 20px;">
          <button type ="button" style="padding-left:1px;padding-top:2px;height:20px; pull-right:500px;" class="btn btn-link" data-toggle="modal" data-target="#btndavao">Davao </button></a>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

        <div class="modal fade" id="btnbaguio" role="dialog">
        <div class="modal-dialog modal-md"> 
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff;">
    
          <h4 class="modal-title" style="color: white;">Baguio </h4>
           </div>
          <div class="modal-body">
          <p>Baguio, officially the City of Baguio (Ibaloi: Ciudad ne Bagiw; Ilocano: Siudad ti Baguio; Pangasinan: Siyudad na Baguio; Tagalog: Lungsod ng Baguio) and often referred to as Baguio City, is a highly urbanized city in northern Luzon of the Philippines, also referred to as the Summer Capital of the Philippines. It is geographically located within Benguet, serving as the provincial capital from 1901 to 1916,[3] but has since been administered independently from the province following its conversion into a chartered city. The city has become the center of business, commerce, and education in northern Luzon, as well as the regional center of the Cordillera Administrative Region.[4] According to the 2015 census, Baguio has a population of 345,366.[2]

          Baguio was established as a hill station by the Americans in 1900 at the site of an Ibaloi village known as Kafagway. It was the United States' only hill station in Asia.[5] The name of the city is derived from bagiw, the Ibaloi word for "moss". The city is situated at an altitude of approximately 1,500 meters (4,900 feet) in the Luzon tropical pine forests ecoregion conducive for the growth of mossy plants and orchids.[6]</p>
         
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <div class="modal fade" id="btnmanila" role="dialog">
        <div class="modal-dialog modal-md"> 
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff;">
    
          <h4 class="modal-title" style="color: white;">Manila </h4>
           </div>
          <div class="modal-body">
          <p>Manila (/məˈnɪlə/; Filipino: Maynilà, pronounced [majˈnilaʔ] or [majniˈla]), officially the City of Manila (Filipino: Lungsod ng Maynilà [luŋˈsod nɐŋ majˈnilaʔ]), is the capital of the Philippines and the most densely populated city proper in the world.[3] It was the first chartered City by virtue of the Philippine Commission Act 183 on July 31, 1901 and gained autonomy with the passage of Republic Act No. 409 or the "Revised Charter of the City of Manila" on June 18, 1949.[8]

          Spanish Manila was founded on June 24, 1571, by Spanish conquistador Miguel López de Legazpi, it is one of the oldest cities in the Philippines and was the seat of power for most of the country's colonial rulers. It is situated on the eastern shore of Manila Bay and is home to many landmarks, some of which date back to the 16th century. In 2016, the Globalization and World Cities Research Network listed Manila as an alpha- global city.[9] The city proper is home to 1,780,148 people in 2015[6], and is the historic core of a built-up area that extends well beyond its administrative limits. The term "Manila" is commonly used to refer to the whole metropolitan area, the greater metropolitan area or the city proper. The officially-defined metropolitan area called Metro Manila, the capital region of the Philippines, includes the much larger Quezon City and the Makati Central Business District. It is the most populous region of the country, one of the most populous urban areas in the world,[10] and is one of the wealthiest regions in Southeast Asia.[11][12] With 41,515 people per square kilometer, Manila is also the most densely populated city proper in the world. [6][3]</p>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <div class="modal fade" id="btncebu" role="dialog">
        <div class="modal-dialog modal-md"> 
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff;">
    
          <h4 class="modal-title" style="color: white;">Cebu </h4>
           </div>
          <div class="modal-body">
          <p>Cebu (/seˈbuː/;[5][6] Cebuano: Lalawigan sa Sugbu/Probinsya sa Sugbu; Waray: Probinsya san Sugbu/Probinsya san Cebu; Hiligaynon: Kapuoran sang Sugbu/Probinsya sang Cebu; Tagalog: Lalawigan ng Cebu) is a province of the Philippines located in the Central Visayas (Region VII) region, and consisting of a main island and 167 surrounding islands and islets. Its capital is Cebu City, the oldest city and first capital of the Philippines, which is politically independent from the provincial government. Cebu City forms part of the Cebu Metropolitan Area together with four neighboring cities (Danao City, Lapu-Lapu City, Mandaue City and Talisay City) and eight other local government units. Mactan-Cebu International Airport, located in Mactan Island, is the second busiest airport in the Philippines.

          Cebu is one of the most developed provinces in the Philippines, with Cebu City as the main center of commerce, trade, education and industry in the Visayas. In a decade it has transformed into a global hub for shipping, furniture-making, tourism, business processing services, and heavy industry</p>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
         <div class="modal fade" id="btnpalawan" role="dialog">
        <div class="modal-dialog modal-md"> 
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff;">
    
          <h4 class="modal-title" style="color: white;">Palawan </h4>
           </div>
          <div class="modal-body">
          <p>Palawan (Pron. /pəˈlɑːwɑːn/), officially the Province of Palawan (Cuyonon: Probinsya i'ang Palawan; Hiligaynon: Kapuoran sang Palawan; Filipino: Lalawigan ng Palawan; Spanish: Provincia de La/s Paragua/s) is an archipelagic province of the Philippines that is located in the region of MIMAROPA. It is the largest province in the country in terms of total area of jurisdiction. Its capital is the city of Puerto Princesa, but it is governed independently from the province as a highly urbanized city.

          The islands of Palawan stretch between Mindoro in the northeast and Borneo in the southwest. It lies between the West Philippine Sea (South China Sea) and the Sulu Sea. The province is named after its largest island, Palawan Island (09°30′N 118°30′E), measuring 450 kilometres (280 mi) long, and 50 kilometres (31 mi) wide.</p>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <div class="modal fade" id="btnbohol" role="dialog">
        <div class="modal-dialog modal-md"> 
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff;">
    
          <h4 class="modal-title" style="color: white;">Bohol </h4>
           </div>
          <div class="modal-body">
          <p>Bohol /boʊˈhoʊl/ is a 1st provincial income class island province of the Philippines located in the Central Visayas region, consisting of the island itself and 75 minor surrounding islands.[6] Its capital is Tagbilaran. With a land area of 4,821 km2 (1,861 sq mi) and a coastline 261 km (162 mi) long, Bohol is the tenth largest island of the Philippines.[7] To the west of Bohol is Cebu, to the northeast is the island of Leyte and to the south, across the Bohol Sea, is Mindanao.

          The province of Bohol is a first-class province divided into 3 congressional districts, comprising 1 component city and 47 municipalities.[8] It has 1,109 barangays.[9]

          The province is a popular tourist destination with its beaches and resorts.[10] The Chocolate Hills, numerous mounds of brown-coloured limestone formations, are the most popular attraction. The formations can be seen by land (climbing the highest point) or by air via ultralight air tours. Panglao Island, located just southwest of Tagbilaran, is famous for its diving locations and is routinely listed as one of the top ten diving locations in the world. Numerous tourist resorts and dive centers dot the southern beaches. The Philippine tarsier, amongst the world's smallest primates, is indigenous to the island.

          A strait separates Bohol from Cebu, and both island provinces share a common language, but the Boholanos retain a conscious distinction from the Cebuanos. Bohol's climate is generally dry, with maximum rainfall between the months of June and October. The interior is cooler than the coast.</p>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <div class="modal fade" id="btnbaguio" role="dialog">
        <div class="modal-dialog modal-md"> 
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff;">
    
          <h4 class="modal-title" style="color: white;">Baguio </h4>
           </div>
          <div class="modal-body">
          <p>Baguio, officially the City of Baguio (Ibaloi: Ciudad ne Bagiw; Ilocano: Siudad ti Baguio; Pangasinan: Siyudad na Baguio; Tagalog: Lungsod ng Baguio) and often referred to as Baguio City, is a highly urbanized city in northern Luzon of the Philippines, also referred to as the Summer Capital of the Philippines. It is geographically located within Benguet, serving as the provincial capital from 1901 to 1916,[3] but has since been administered independently from the province following its conversion into a chartered city. The city has become the center of business, commerce, and education in northern Luzon, as well as the regional center of the Cordillera Administrative Region.[4] According to the 2015 census, Baguio has a population of 345,366.[2]

          Baguio was established as a hill station by the Americans in 1900 at the site of an Ibaloi village known as Kafagway. It was the United States' only hill station in Asia.[5] The name of the city is derived from bagiw, the Ibaloi word for "moss". The city is situated at an altitude of approximately 1,500 meters (4,900 feet) in the Luzon tropical pine forests ecoregion conducive for the growth of mossy plants and orchids.</p>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <div class="modal fade" id="btndavao" role="dialog">
        <div class="modal-dialog modal-md"> 
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff;">
    
          <h4 class="modal-title" style="color: white;">Davao </h4>
           </div>
          <div class="modal-body">
          <p>Davao City (Cebuano: Dakbayan sa Dabaw, Filipino: Lungsod ng Dabaw) is a city in Mindanao island, the largest city in the Philippines in terms of land area, and the most populous city in the country outside of Metro Manila. It is geographically situated in the province of Davao del Sur and grouped under the province by the Philippine Statistics Authority but being a highly urbanized city, it is governed and administered politically independent from it. The city has a total land area of 2,443.61 km2 (943.48 sq mi),[2] and a population of 1,632,991 people based on the 2015 census. This figure also makes it the third-most-populous city in the Philippines and the most populous in Mindanao.[4]

          It is the center of Metro Davao, the third most populous metropolitan area in the Philippines (as of 2015 census with a population of 2.5 million, after Metro Manila's 12.8 million and Metro Cebu's 2.8 million). The city serves as the main trade, commerce, and industry hub of Mindanao and the regional center of Davao Region. Davao is home to Mount Apo, the highest mountain in the Philippines. The city is also nicknamed as the "Durian Capital of the Philippines".

          The city is divided into three congressional districts, which are subdivided into 11 administrative districts with a total of 182 barangays.

          Davao City is constantly described by its residents and the national media as arguably among one of the safest cities in the Philippines, however this has been met with criticism.[8][9][10][11][12]</p>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <div class="modal fade" id="myabout" role="dialog">
        <div class="modal-dialog modal-md" style="width: 800px;">
        <div class="modal-content" >
        <div class="modal-header" style="background-color:#99b3ff">
          <h4 class="modal-title" style="color: white;"> About us </h4>
             </div>
        <div class="modal-body" style="width:800px;">
      
          <p> <b>JGV travel and tours</b> started last May 24, 2014, it is located at Buhangin, Davao City, it is along the highway. The company compete with other companies and be a world class. The company owner name Vaniza Joloyohoy their company name JGV means James, Gladys, Vaniza, that was 3 years ago and currently JGV means John, Gilbert, Vaniza it is by his husband and son name.</p>

          <b style="font-size: 18px;">Vission</b><br><br>

          <p>To compete other companies and be a world class and to have other branches.</p><br>

          <b style="font-size: 18px;">Mission</b><br><br>

         <p> JGV Travel and Tours provide our customer:<br><br>
          •  In making travel safe, fun, exciting, hassle-free and affordable for its customers.</br>
          •  With best value solutions in their travel needs; offering them professional yet personalized  service at reasonable and competitive prices. </br>
          • A service that will offer the best value for money while at the same time, maintain a sustainable profitable operation.

    </p>
       </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
             </div>
          </div>
      </div>
       <div class="modal fade" id="mycontactus" role="dialog">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff">
          <h4 class="modal-title" style="color: white;"> Contact us </h4>
             </div>
        <div class="modal-body" style="width: 1300px;">
        <img src="pictures/mobile.png" style="width: 60px; height: 60px;margin-top:10px;"><text style ="color:blue;padding-left: 10px;"></style>(0998).154.7372</br>
        <img src="pictures/telephone2.png" style="width: 60px; height: 60px;margin-left:-0px;"><text style ="color: blue;padding-left: 10px;"></style>(082) 224-6011</br>
        <img src="pictures/email3.png" style="width: 60px; height: 60px;margin-left:-0px;"><text style="color: blue;padding-left: 10px;"></style>jgv_travel_tours@yahoo.com.ph
     
       </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
             </div>
          </div>
      </div>
         <div class="modal fade" id="mypromos" role="dialog">
         <div class="modal-dialog modal-md">
         <div class="modal-content"> 
         <div class="modal-header" style="background-color:#99b3ff;">
          <h4 class="modal-title" style="color: white;">JGV Promos -AVAIL NOW-</h4>
        </div>
        <div class="modal-body">
          <center><img src="pictures/promos2.jpg" alt="promos2" clsass="active"  style="height:200px;width:350px;">
          </div> 
           <center><img src="pictures/promos3.jpg" alt="promos3" class="active" style="height:200px;width:350px;">
              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
         </div>
      </div>
     </div>
   <div class="column">
  <div class="modal fade" id="myregister" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
        <div class="modal-header" style="background-color:#99b3ff;margin-top:-30px">
             <h4 class="modal-title" style="color: white;"> Register </h4>
          </div>
           <div class="column" style="-webkit-column-width: 150px; -webkit-column-count: 2;padding-left:30px;">
            <div class="modal-body" style ="padding-left:0px; width: 200px; height: 580px;">
           <form method="POST">
                <h6 style="color:#0000FF;margin-top:-10px;">Name:</h6>
                <input class= "form-register" autofocus = "autofocus" type = "text" name="name" 
                 required="required"><b>
                <h6 style="color: #0000FF">Gender:</h6>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female<br>
                <h6 style="color: #0000FF">Email Address:</h6>
                <input class= "form-register" autofocus= "autofocus" type = "text" name="Email"
                required= "required"><br>
                <h6 style="color: #0000FF">Password:</h6>
                <input class= "form-register" autofocus= "autofocus" type="text" name ="password"
                 required="required"><br><br><br><br><br>
                <h6 style="color: #0000FF">Confirm Password:</h6>
                <input class= "form-register" autofocus ="autofocus" type="text" name="confirm password"
                required = 'required'><br>
                <h6 style="color: #0000FF">Home Address:</h6>
                <input class= "form-register" autofocus= "autofocus" type = "text" name="Home Address"
                required= "required"><br>
                 <h6 style="color: #0000FF">Mobile No:</h6>
                <input class= "form-register" autofocus= "autofocus" type = "text" name="Mobile"
                required= "required"><br>
                <h6 style="color: #0000FF">Birthdate:</h6>
                <input class= "form-register" autofocus= "autofocus" type = "text" name="Home Address"
                required= "required"><br><br>
               </div>
             <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
           </div>
          </div>
        </div>
      </div>
  <div class="modal fade" id="mylogin" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
        <div class="modal-header">
             <h4 class="modal-title" style="color: white;"> Login </h4>
            </div>
             <div class="modal-body" style ="padding-left:0px; width: 200px; height: 580px;">
            <form method="POST">
                <h6 style="color:#0000FF;margin-top:-10px;">Email-Address:</h6>
                <input class= "form-login" autofocus = "autofocus" type = "text" name="name" placeholder="Enter your Email" required="required"><b>
                <h6 style="color:#0000FF;margin-top:-10px;">Password:</h6>
                <input class= "form-login" autofocus = "autofocus" type = "text" name="name" placeholder="Enter your Password" required="required"><b>
               <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">login</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
            </div>
           </div>
         </div>
       </div>
     <div class="modal-body">
        </div>
        </div>
       </div>
      </div>
   <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:400px;width:1010px;margin-top:8px;margin-left:-15px;">
     <!-- Indicators -->
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="<0></0>"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

       <!-- Wrapper for slides -->
      <div class="carousel-inner" class="active">
      <div class="item active">
      <img src="pictures/southkorea.png" alt="south korea" class="active" style="height:400px;width:1010px;">
      </div> 

       <div class="item">
        <img src="pictures/japan.png" alt="Japan" style="height:400px;width:1010px;">
        </div>
        <div class="item">
       <img src="pictures/china.png" alt="china" style="height:400px;width:1010px;">
     </div>
      <div class="item">
       <img src="pictures/boholtarsier.jpg" alt="boholtarsier" style="height:400px;width:1010px;">
     </div>
     <div class="item">
       <img src="pictures/palawanelnido.jpg" alt="palawanelnido" style="height:400px;width:1010px;">
     </div>
     <div class="item">
       <img src="pictures/davaoppark.jpg" alt="davaoppark" style="height:400px;width:1010px;">
     </div>
  <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
     <span class="glyphicon glyphicon-fchevron-left"></span>
       <span class="sr-only">Previous</span>
      </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
    </a>
    
  
    <div class="jgvcompany" style="background-color:#668cff;width:1010px;margin-top:-10px;height:50px;">
    <span class="company-title" style="font-size:35px;padding-left:50px;font-family:Timew New Roman;">
    <img src="malaysiaflag.png" style="height:20px;width:30px;">
    <img src="japanflag.png" style="height:20px;width:30px;">
    <img src="dubaiflag.png" style="height:20px;width:30px;">
    <img src="usaflag.png" style="height:20px;width:30px;">
    <img src="londonflag.png" style="height:20px;width:30px;">
    <img src="russiaflag.png" style="height:20px;width:30px;">
    <img src="vietnamflag.png" style="height:20px;width:30px;">
    <p5 style="color:white;">JGV Travel and Tours <img src="chinaflag.png" style="height:20px;width:30px;"> <img src="philippinesflag.png" style="height:20px;width:30px;"> <img src="koreaflag.png" style="height:20px;width:30px;">
    <img src="qatarflag.png" style="height:20px;width:30px;"> <img src="canadaflag.png" style="height:20px;width:30px;">
    <img src="ukflag.png" style="height:20px;width:30px;"> <img src="kuwaitflag.png" style="height:20px;width:30px;"> <img src="indiaflag.png" style="height:20px;width:30px;"> <img src="franceflag.png" style="height:20px;width:30px;"> </p5><br><br><br><br>
    </div>
   </div>
   <div>
 </div>
</div>
<div class="form-whybook" style="margin-top:150px;">
    <h3 style="font-size:26px;font-style:italic;padding-left:280px;font-family:comicsans;margin-top:-50px;" > Why you should choose JGV travel & Tours? </h3><br><br>
    <div class="column" style="-webkit-column-width: 100px; -webkit-column-count: 3;padding-left:30px;">
     <h3 style="margin-top:0px";>#1Budget Travel Agency</h3>
     <p>Agency ng Masa - Pay Less, Get More! TravelOnline has Won Many
     TOP SELLER awards from Hotels and Airlines.</p>
     <h3>#2BEST HOTELS</h3>
     <p>TravelOnline, which is a local Philippines Travel Agency,
     offers over 200,000 hotels worldwide.</p>
     <h3>#3Best Price Commitment</h3>
     <p>TravelOnline is commitment to offering you the best prices -
     guaranteed. Our agents are standing by to help you every
     step of the way.</p>
     <h3>#4Airline Partner</h3>
    <p>TravelOnline is partners with local Airlines such as: AirAsia, 
    Philippines Airlines (PAL) and Cebu Pacific and list
    over 500 International Airlines.</p>
     <h3>#5Cheapest Packages</h3>
    <p>TravelOnline, offers the cheapest package price for ALL-IN Packages:
    Flight + Hotel + transfers +
    FREEBIES with a "live"
    Travel Agent to assist you!</p>
     <h3>#6Trusted Since 2014</h3>
    <p>TravelOnline, local Philippines Travel Agency, 
    is one of the Pioneers of Philippines   
    Travel with hundreds of fans in Facebook.</p>
   
    </div><br><br><br>

  <footer class="container teal" style="background-color:white;width:1000px;height:100px;">
  
  </footer>
  
   

</html>

