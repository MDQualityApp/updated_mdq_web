<style>
        .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content-hire {
    display: none;
    position: absolute;
    width: 40vw !important;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    margin-left: -180px !important;
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
  .nav-pills-hire{
    background-color: white !important;
    padding: 20px 0px 20px 20px !important;
    height: 100%;
  }
  .nav-pills .nav-link-hire.active,.nav-pills .show > .nav-link{
    background-color:#1C46A8 !important;
    color: white !important;
    border-radius: 10px 0px 0px 10px !important;
  }
  .nav-link-hire{
    transition: none !important;
    color: #081A48 !important;
    height: 100%;
    font-weight: 600;
    margin-bottom: 10px;
    width:15vw !important;
    height: 50px !important;
  }
  .hire-content{
    margin-top: 5px;
    margin-bottom: 5px;
    color: white;
  }
  .hire-content-a{
    margin-right: 15px !important;
  }

@media (max-width:991px) and (min-width:720px){
  .dropdown-content-hire {
    margin-left: -0px !important;
    width: 60vw !important;
  }
  .nav-link-hire{

    width:20vw !important;
    height: 50px !important;
  }
}

@media (max-width:719px){
  .dropdown-content-hire {
    width: 96vw !important;
    margin-left: -0px !important;
  }
  .nav-link-hire{

    width:28vw !important;
    height: 50px !important;
  }
}

</style>
<body>
<div class="dropdown-content dropdown-content-hire">
<div style="background-color:#081A48; opacity:1 !important; padding-top:10.5px"></div>
<div class="d-flex align-items-start" style=" width:100% !important;">
  <div class="nav flex-column nav-pills nav-pills-hire me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link nav-link-hire active" id="v-pills-mobile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-mobile" type="button" role="tab" aria-controls="v-pills-mobile" aria-selected="true">Mobile</button>
    <button class="nav-link nav-link-hire" id="v-pills-website-tab" data-bs-toggle="pill" data-bs-target="#v-pills-website" type="button" role="tab" aria-controls="v-pills-website" aria-selected="false">Website</button>
    <button class="nav-link nav-link-hire" id="v-pills-frontend-tab" data-bs-toggle="pill" data-bs-target="#v-pills-frontend" type="button" role="tab" aria-controls="v-pills-frontend" aria-selected="false">Frontend</button>
    <button class="nav-link nav-link-hire" id="v-pills-microsoft-tab" data-bs-toggle="pill" data-bs-target="#v-pills-microsoft" type="button" role="tab" aria-controls="v-pills-microsoft" aria-selected="false">Microsoft</button>
    <button class="nav-link nav-link-hire" id="v-pills-cross-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cross" type="button" role="tab" aria-controls="v-pills-cross" aria-selected="false">Cross-Platform</button>
    <button class="nav-link nav-link-hire" id="v-pills-open-source-tab" data-bs-toggle="pill" data-bs-target="#v-pills-open-source" type="button" role="tab" aria-controls="v-pills-open-source" aria-selected="false">Open Source</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent" style="width:100%;">
    <div class="tab-pane fade show active" id="v-pills-mobile" role="tabpanel" aria-labelledby="v-pills-mobile-tab" >
    <div class="row">
        <div class="col-lg-12">
        <p class="industry-content"><a class="hire-content-a" href=""><img width="25" height="25" src="https://img.icons8.com/ios-filled/500/ffffff/mac-os.png" alt="mac-os"/> Hire iOS Developers</a></p>
        <p class="industry-content"><a class="hire-content-a" href=""><img width="25" height="25" src="https://img.icons8.com/ios-filled/400/ffffff/android-os.png" alt="android-os"/> Hire Android Developers</a></p>
        <p class="industry-content"><a class="hire-content-a" href=""><img width="25" height="25" src="https://img.icons8.com/ios-filled/500/ffffff/swift.png" alt="swift"/> Hire Swift Developers</a></p>
        <p class="industry-content"><a class="hire-content-a" href=""><img width="25" height="25" src="https://img.icons8.com/material-rounded/960/ffffff/kotlin.png" alt="kotlin"/> Hire Kotlin Developers</a></p>
        <p class="industry-content"><a class="hire-content-a" href=""><img width="25" height="25" src="https://img.icons8.com/ios-filled/500/ffffff/flutter.png" alt="flutter"/> Hire Flutter Developers</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-website" role="tabpanel" aria-labelledby="v-pills-website-tab">
    <div class="row">
    <div class="col-lg-12">
        <p class="industry-content"><a class="hire-content-a" href=""><img width="25" height="25" src="https://img.icons8.com/nolan/1000/ffffff/php-elephant.png" alt="java-coffee-cup-logo--v1" /> Hire PHP Developers</a></p>
        <p class="industry-content"><a class="hire-content-a" href=""><img width="25" height="25" src="https://img.icons8.com/windows/200/ffffff/node-js.png" alt="node-js" /> Hire Node JS Developers</a></p>
        <p class="industry-content"><a class="hire-content-a" href=""> Hire Java Spring Boot Developers</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-frontend" role="tabpanel" aria-labelledby="v-pills-frontend-tab">
    <div class="row">
    <div class="col-lg-12">
        <p class="industry-content"><a class="hire-content-a" href=""><img width="25" height="25" src="https://img.icons8.com/ios/1000/ffffff/angularjs.png" alt="angularjs"/> Hire Angular Developers</a></p>
        <p class="industry-content"><a class="hire-content-a" href=""><img  width="25" height="25" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/1000/ffffff/external-react-social-media-tanah-basah-glyph-tanah-basah.png" alt="java-coffee-cup-logo--v1" /> Hire React JS Developers</a></p>
        <p class="industry-content"><a class="hire-content-a" href=""> Hire Knockout JS Developers</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-microsoft" role="tabpanel" aria-labelledby="v-pills-microsoft-tab">
    <div class="row">
    <div class="col-lg-12">
        <p class="industry-content"><a class="hire-content-a" href=""> Hire ASP.net Developers</a></p>
        <p class="industry-content"><a class="hire-content-a" href=""> Hire C# Developers</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-cross" role="tabpanel" aria-labelledby="v-pills-cross-tab">
    <div class="row">
    <div class="col-lg-12">
        <p class="industry-content"><a class="hire-content-a" href=""> Hire Xamarin Developers</a></p>
        <p class="industry-content"><a class="hire-content-a" href=""> Hire Ionic Developers</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-open-source" role="tabpanel" aria-labelledby="v-pills-open-source-tab">
    <div class="row">
    <div class="col-lg-12">
        <p class="industry-content"><a class="hire-content-a" href=""> Hire Wordpress Developers</a></p>
        <p class="industry-content"><a class="hire-content-a" href=""> Hire Shopify Developers</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>

