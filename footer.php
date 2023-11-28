<style>
    @font-face {
  font-family: 'Pacifico';
  src: url('path_to_your_font_files/Pacifico-Regular.ttf') format('truetype'); /* Update the path to your font file */
}
@font-face {
  font-family: 'Quicksand';
  src: url('path_to_your_font_files/Quicksand-Regular.ttf') format('truetype'); /* Update the path to your font file */
  /* You can also add additional font weights or styles here */
}
    .contact-card {
        height: 480px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(256, 256, 256, 0.25);
        border-radius: 0px !important;
        border: none;
        margin-bottom: -7%;
    }

    .outer button {
        background-color: white;
        color: white;
        font-weight: 700;
        padding: 5px 20px;
        border: none;
        border-radius: 5px;
        background: linear-gradient(to right, #1CC4F8 50%, #1C46A8 50%);
        background-size: 220% 100%;
        background-position: right bottom;
        transition: all .5s ease-out;
        justify-content: center;
        align-items: center;
        text-align: center;

    }

    .text-but {
        font-size: 16px;
        line-height: 30px;
        color: black;
        transition: all .6s ease-out;
    }

    .text-but:hover {
        color: white;
    }

   .outer button:hover {
        background-color: #081A48 !important;
        color: black;
        background-position: left bottom;
    }

    .last {
        background-color: #081A48;
        color: white;
        padding-top: 150px;
    }

    .last-first p {
        padding-top: 0px;
    }

    .last-second {
        list-style: none;
        margin-bottom: 5%;
    }

    .last-second h4 {
        font-weight: 600;
    }

    .last-second ul {
        list-style: none;
        line-height: 35px;
        color: white;
    }

    .last-second ul li a {
        color: white;
        text-decoration: none;
    }

    .last-second ul li a:hover {
        color: white;
    }

    .last-third {
        margin-top: 3%;
    }

    .lasthead {
        font-weight: 600;
    }

    .last-third a {
        color: white;
        text-decoration: none;
    }

    .last-third a:hover {
        color: white;
    }

    .soci-last {
        display: flex !important;
        align-items: center;
    }

    .so-icon {
        margin-right: 20px;
        padding: 5px 10px;
        border-radius: 100%;
        border-color: white;
        border-style: solid;
        border-width: 0.5px;
    }

    .design-but button {
        padding: 10px 40px;
        border-radius: 30px;
        border: none;
        color: white;
        background-image: linear-gradient(to top, #48A7ED, #0052D3);

    }

    .bw-head {
        color: #081A48;
    }

    .para {
        font-size: 17px;
        text-align: justify;
    }

    .best-work ul li a {
        color: #081A48;
        font-size: 14px;
        text-decoration: none;
    }

    .best-work ul li a:hover {
        color: black;
    }

    .lastline {
        color: white;
        text-align: end;
    }

    .lastline a {
        color: white;
        text-decoration: none;
    }

    .lastline a:hover {
        color: white;
    }

    .copyrights {
        background-color: #081A48;
        padding-top: 1.5%;
        padding-bottom: 0.7%;
    }

    .last-anchor {
        color: white;
        text-decoration: none;
        font-weight: 600;
    }

    .a-tag {
        color: white;
        font-weight: 600;
    }

	.title {
        font-family: 'Pacifico', cursive;
		color: #081A48;
		font-size: 1.7rem;
	}

	.form-control {
		background-color: #A4E7FC;
		border-radius: 2rem;
		border: none;
        width: 90%;
        margin-left: 5%;
		box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.2);

		&.thick {
			height: 1.3rem;
			padding: 0.5rem 3.5rem;
		}

		&:focus {
			background-color: #A4E7FC;
			border: none;
			box-shadow: 5px 10px 5px #76dbfa inset;
		}
	}

	.message .form-control {
		padding: 0.5rem 1.8rem;
	}

	::placeholder {
		font-family: "Quicksand", sans-serif;
		font-weight: 600;
		font-size: 1.1rem;
		color: #081A48 !important;
		position: relative;
		left: 0;
	}

	input,
	textarea {
		font-family: "Quicksand", sans-serif;
		color: #081A48;
		font-size: 1.1rem;
	}

	.icon {
		position: absolute;
		left: 45px;
		top: 12px;
	}


.btn.btn-primary {
	font-family: "Quicksand", sans-serif;
	font-weight: bold;
	height: 2.5rem;
	line-height: 2.5rem;
	padding: 0 3rem;
	border: 0;
	border-radius: 3rem;
	background-image: linear-gradient(131deg, #1C46A8, #1CC4F8);
	background-size: 300% 100%;
	transition: all 0.3s ease-in-out;
}

.btn.btn-primary:hover:enabled {
	box-shadow: 0 0.5em 0.5em -0.4em #ff923cba;
	background-size: 100% 100%;
	transform: translateY(-0.15em);
}
.back-img{
    background: url(./images/contact.jpeg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">


<div class="pt-5" id="contactus" style="background-color:#F7FDFF">
    <div class="card back-img contact-card mt-4" style="width: 80%; margin-left:10%">
        <div class="container py-3 px-5">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                <form>
		<h1 class="title text-center mb-4">Talk to Us</h1>

			<!-- Name -->
			<div class="form-group position-relative">
				<label for="formName" class="d-block">
                <img class="icon" width="23" height="23" src="https://img.icons8.com/material-sharp/960/081A48/user.png" alt="user"/>
				</label>
				<input type="text" id="formName" class="form-control form-control-lg thick" placeholder="Name">
			</div>

			<!-- E-mail -->
			<div class="form-group position-relative my-3">
				<label for="formEmail" class="d-block">
                <img class="icon" width="23" height="23" src="https://img.icons8.com/material-rounded/960/081A48/new-post.png" alt="new-post"/>
				</label>
				<input type="email" id="formEmail" class="form-control form-control-lg thick" placeholder="E-mail">
			</div>

			<!-- Message -->
			<div class="form-group message">

				<textarea id="formMessage" class="form-control form-control-lg" rows="6" placeholder="Message"></textarea>
			</div>

			<!-- Submit btn -->
			<div class="text-center mt-3">
				<button type="submit" class="btn btn-primary" tabIndex="-1">Send message</button>
			</div>
	</form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="last">
    <div class="container-fluid last1">
        <div class="row">
            <div class="col-lg-4 px-5 d-flex justify-content-center ">
                <div class="last-first">
                    <h4 class="mt-2"> MDQ</h4>
                    <p style="color:#B6C7D6; text-align:justify"> MDQuality Apps Solutions is a Website Development, Web Application, Digital Marketing and Mobile
                        Application leading Company in Chennai. We are all about the web. You would like to do
                        anything with online then, we are the ones you call. </p>
                    <div class="row">
                        <h4 class="mt-2"> Links</h4>
                        <div class="col-lg-5">
                            <a style="color: #B6C7D6; text-decoration: none" href="#">Home</a><br>
                            <a style="color: #B6C7D6; text-decoration: none" href="">Company</a><br>
                            <a style="color: #B6C7D6; text-decoration: none" href="">Our Work</a>
                        </div>
                        <div class="col-lg-7">
                            <a style="color: #B6C7D6; text-decoration: none" href="">Services</a><br>
                            <a style="color: #B6C7D6; text-decoration: none" href="">Technology</a><br>
                            <a style="color: #B6C7D6; text-decoration: none" href="">Hire Developers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="pb-4">
        <hr>
        <h3 class="pt-1" style="color:white; font-weight:600; text-align: center;">MDQ</h3>
        <p style="color:#B6C7D6 ; text-align:center;font-weight:600; margin-bottom:0px; margin-top:-15px;font-size:14px">Copyright © 2023 MDQuality
            Apps Solutions </p>
        <div>
            <p style="text-align:center; margin-bottom:0px"><a class="a-tag" href="">Privacy Policy</a> | <a class="a-tag" href="">Security </a></p>
        </div>

    </div>
</div>