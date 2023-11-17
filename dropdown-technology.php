<style>
        .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content-tech {
    display: none;
    position: absolute;
    width: 80vw;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    margin-left: -480px !important;
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
  .nav-pills-tech{
    background-color: white !important;
    padding: 35px 0px 35px 20px !important;
    height: 100%;
  }
  .nav-pills .nav-link-tech.active,.nav-pills .show > .nav-link{
    background-color:#1C46A8 !important;
    color: white !important;
    border-radius: 10px 0px 0px 10px !important;
  }
  .nav-link-tech{
    transition: none !important;
    color: #081A48 !important;
    height: 100%;
    font-weight: 600;
    margin-bottom: 10px;
    width:15vw !important;
    height: 50px !important;
    margin: 10px 0px 10px 10px !important;
  }
  .industry-content{
    margin-top: 5px;
    margin-bottom: 5px;
    color: white;
  }

  @media (max-width:991px) and (min-width:720px){
  .dropdown-content-tech {
    width: 80vw !important;
    margin-left: 0px !important;
  }

}

@media (max-width:719px){
  .dropdown-content-tech {
    width: 96vw !important;
    margin-left: -0px !important;
  }
  .nav-link-tech{
    width: 18vh !important;
    margin: 0px !important;
  }

}

</style>
<body>
<div class="dropdown-content dropdown-content-tech">
<div style="background-color:#081A48; opacity:1 !important; padding-top:10.5px"></div>
<div class="d-flex align-items-start" style=" width:100% !important;">
  <div class="nav flex-column nav-pills nav-pills-tech me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link nav-link-tech active" id="v-pills-programming-tab" data-bs-toggle="pill" data-bs-target="#v-pills-programming" type="button" role="tab" aria-controls="v-pills-programming" aria-selected="true">Programming</button>
    <button class="nav-link nav-link-tech" id="v-pills-Trending-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Trending" type="button" role="tab" aria-controls="v-pills-Trending" aria-selected="false">Trending</button>
    <button class="nav-link nav-link-tech" id="v-pills-platform-tab" data-bs-toggle="pill" data-bs-target="#v-pills-platform" type="button" role="tab" aria-controls="v-pills-platform" aria-selected="false">Platform</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent" style="width:100%;">
    <div class="tab-pane fade show active" id="v-pills-programming" role="tabpanel" aria-labelledby="v-pills-programming-tab" >
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
        <p class="industry-content"><a href="./program-react.php"><img  width="25" height="25" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/1000/ffffff/external-react-social-media-tanah-basah-glyph-tanah-basah.png" alt="java-coffee-cup-logo--v1" /> React</a></p>
        <p class="industry-content"><a href="./program-java.php"><img width="23" height="20" src="https://img.icons8.com/ios/500/ffffff/java-coffee-cup-logo--v1.png" alt="java-coffee-cup-logo--v1" /> Java</a></p>
        <p class="industry-content"><a href="./program-python.php"><img width="25" height="25" src="https://img.icons8.com/ios/1000/ffffff/python--v1.png" alt="python--v1"/> Python</a></p>
        <p class="industry-content"><a href="./program-php.php"><img width="25" height="25" src="https://img.icons8.com/nolan/1000/ffffff/php-elephant.png" alt="java-coffee-cup-logo--v1" /> PHP</a></p>
        <p class="industry-content"><a href="./program-javascript.php"><img width="25" height="25" src="https://img.icons8.com/ios/1000/ffffff/javascript-logo.png" alt="javascript-logo"/> JavaScript</a></p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
        <p class="industry-content"><a href="./program-reactnative.php"><img  width="25" height="25" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/1000/ffffff/external-react-social-media-tanah-basah-glyph-tanah-basah.png" alt="java-coffee-cup-logo--v1" /> React Native</a></p>
        <p class="industry-content"><a href="./program-nodejs.php"><img width="25" height="25" src="https://img.icons8.com/windows/200/ffffff/node-js.png" alt="node-js" /> Node.js</a></p>
        <p class="industry-content"><a href="./program-laravel.php"><img width="25" height="25" src="https://img.icons8.com/ios/1000/ffffff/laravel.png" alt="laravel"/> Laravel</a></p>
        <p class="industry-content"><a href="./program-flutter.php"><img width="25" height="25" src="https://img.icons8.com/ios/1000/ffffff/flutter.png" alt="flutter"/> Flutter</a></p>
        <p class="industry-content"><a href="./program-kotlin.php"><img width="25" height="25" src="https://img.icons8.com/ios/1000/ffffff/kotlin.png" alt="kotlin"/> Kotlin</a></p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
        <p class="industry-content"><a href="./program-angular.php"><img width="25" height="25" src="https://img.icons8.com/ios/1000/ffffff/angularjs.png" alt="angularjs"/> Angular JS / TS</a></p>
        <p class="industry-content"><a href="./program-csharp.php"><img width="25" height="25" src="https://img.icons8.com/ios/1000/ffffff/c-sharp-logo.png" alt="c-sharp-logo"/> C Sharp</a></p>
        <p class="industry-content"><a href="./program-swift.php"><img width="25" height="25" src="https://img.icons8.com/ios/1000/ffffff/swift--v1.png" alt="swift--v1"/> Swift</a></p>
        <p class="industry-content"><a href="./program-objective-c.php"><img width="25" height="25" src="https://img.icons8.com/external-flat-icons-inmotus-design/670/ffffff/external-c-calculator-flat-icons-inmotus-design.png" alt="external-c-calculator-flat-icons-inmotus-design"/> Objective-C</a></p>
        <p class="industry-content"><a href="./program-asp.net.php"><img width="25" height="25" src="https://img.icons8.com/material-outlined/960/ffffff/asp.png" alt="asp"/> ASP.NET</a></p>

        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-Trending" role="tabpanel" aria-labelledby="v-pills-Trending-tab">
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
    <div class="tab-pane fade" id="v-pills-platform" role="tabpanel" aria-labelledby="v-pills-platform-tab">
    <div class="row">
        <div class="col-lg-6">
        <p class="industry-content"><a href=""> Microsoft</a></p>
        <p class="industry-content"><a href=""> Amazon</a></p>
        <p class="industry-content"><a href=""> Salesforce</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>

