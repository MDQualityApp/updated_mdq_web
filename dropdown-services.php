<style>
        .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content-service {
    display: none;
    position: absolute;
    width: 58vw;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    margin-left: -320px;
    opacity: 0.92;
    background-color:#1C46A8 !important;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
    background-color: #081A48;
    color: white !important;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }
  .nav_pills{
    background-color: white !important;
    padding: 30px 0px 30px 20px !important;
    height: 100%;
  }
  .nav-pills .nav-link-service.active,.nav-pills .show > .nav-link{
    background-color:#1C46A8 !important;
    color: white !important;
    border-radius: 10px 0px 0px 10px !important;
  }
  .nav-link-service{
    transition: none !important;
    color: #081A48 !important;
    height: 100%;
    font-weight: 600;
    margin-bottom: 10px;
    padding: 13px 35px !important;
    margin: 10px 0px 10px 10px;
  }
  .industry-content{
    margin-top: 5px;
    margin-bottom: 5px;
    color: white;
    margin-right: 10px !important;
  }

  @media (max-width:1190px) and (min-width:992px){
  .dropdown-content-service {
    width: 80vw !important;
  }

}
  @media (max-width:991px) and (min-width:720px){
  .dropdown-content-service {
    width: 80vw !important;
    margin-left: 0px !important;
  }

}

@media (max-width:719px){
  .dropdown-content-service {
    width: 96vw !important;
    margin-left: -0px !important;
  }

}
</style>
<body>
<div class="dropdown-content dropdown-content-service">
<div style="background-color:#081A48; opacity:1 !important; padding-top:10.5px"></div>
<div class="d-flex align-items-start" style=" width:100% !important;">
  <div class="nav flex-column nav-pills nav_pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link nav-link-service active" id="v-pills-Industry-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Industry" type="button" role="tab" aria-controls="v-pills-Industry" aria-selected="true">Industry</button>
    <button class="nav-link nav-link-service" id="v-pills-Offering-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Offering" type="button" role="tab" aria-controls="v-pills-Offering" aria-selected="false">Offering</button>
    <button class="nav-link nav-link-service" id="v-pills-Models-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Models" type="button" role="tab" aria-controls="v-pills-Models" aria-selected="false">Models</button>
    <button class="nav-link nav-link-service" id="v-pills-trending-tab" data-bs-toggle="pill" data-bs-target="#v-pills-trending" type="button" role="tab" aria-controls="v-pills-trending" aria-selected="false">Trending</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent" style="width:100%;">
    <div class="tab-pane fade show active" id="v-pills-Industry" role="tabpanel" aria-labelledby="v-pills-Industry-tab" >
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <p class="industry-content"><a href=""><img width="25" height="25" src="https://img.icons8.com/ios-glyphs/300/ffffff/device-shop.png" alt="device-shop"/> E-Commerce</a></p>
        <p class="industry-content"><a href=""><img width="25" height="25" src="https://img.icons8.com/ios-glyphs/300/ffffff/online-group-studying.png" alt="online-group-studying"/> Education & E-Learning</a></p>
        <p class="industry-content"><a href=""><img width="25" height="25" src="https://img.icons8.com/glyph-neue/640/ffffff/electric-bike.png" alt="electric-bike"/> Electric Vechicle</a></p>
        <p class="industry-content"><a href=""><img width="25" height="25" src="https://img.icons8.com/external-solidglyph-m-oki-orlando/640/ffffff/external-iot-mobile-app-development-solid-solidglyph-m-oki-orlando.png" alt="external-iot-mobile-app-development-solid-solidglyph-m-oki-orlando"/> IoT Apps</a></p>
        <p class="industry-content"><a href="./program-javascript.php"><img width="25" height="25" src="https://img.icons8.com/ios-filled/1000/ffffff/food-bar.png" alt="food-bar"/> Food & Restaurants</a></p>
        <p class="industry-content"><a href=""><img width="25" height="25" src="https://img.icons8.com/ios-glyphs/300/ffffff/trust--v1.png" alt="trust--v1"/> Healthcare & Fitness</a></p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">

        <p class="industry-content"><a href=""><img width="25" height="25" src="https://img.icons8.com/pastel-glyph/640/ffffff/transport--delivery--logistics--cargo--parcel--box--service-28.png" alt="transport--delivery--logistics--cargo--parcel--box--service-28"/> Logistics & Distribution</a></p>
        <p class="industry-content"><a href=""><img width="25" height="25" src="https://img.icons8.com/external-yogi-aprelliyanto-glyph-yogi-aprelliyanto/320/ffffff/external-house-real-estate-yogi-aprelliyanto-glyph-yogi-aprelliyanto.png" alt="external-house-real-estate-yogi-aprelliyanto-glyph-yogi-aprelliyanto"/> Real Estate</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-Offering" role="tabpanel" aria-labelledby="v-pills-Offering-tab">
    <div class="row">
        <div class="col-lg-6">
        <p class="industry-content"><a href=""> Virtual Reality (VR)</a></p>
        <p class="industry-content"><a href=""> Cloud</a></p>
        <p class="industry-content"><a href=""> Big Data</a></p>
        <p class="industry-content"><a href=""> Data Science</a></p>
        </div>
        <div class="col-lg-6">
        <p class="industry-content"><a href=""> Artificial Intelligence</a></p>
        <p class="industry-content"><a href=""> Blockchain</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-Models" role="tabpanel" aria-labelledby="v-pills-Models-tab">
    <div class="row">
        <div class="col-lg-6">
        <p class="industry-content"><a href=""> Microsoft</a></p>
        <p class="industry-content"><a href=""> Amazon</a></p>
        <p class="industry-content"><a href=""> Salesforce</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-trending" role="tabpanel" aria-labelledby="v-pills-trending-tab">
    <div class="row">
        <div class="col-lg-6">
        <p class="industry-content"><a href=""> Microsoft</a></p>
        <p class="industry-content"><a href=""> Amazon</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>

