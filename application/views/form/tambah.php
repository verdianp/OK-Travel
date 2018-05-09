<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<style>
	<style>@import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html{
	background-color: #efefef;
}

body{
	font:14px/1.5 Arial, Helvetica, sans-serif;
	margin:0;
}


header{
    box-sizing: border-box;
	text-align: center;
    width: 100%;
    padding: 25px 40px;
    background-color: #673AB7;
    overflow: hidden;
}


header h1{
    float: left;
	font: normal 24px/1.5 'Open Sans', sans-serif;
	color: #fff;
}

header a{
    color:#fff;
    float: right;
    text-decoration: none;
    display: inline-block;
    padding: 13px 50px;
    border-radius: 3px;
    font: bold 14px/1 'Open Sans', sans-serif;
    text-transform: uppercase;
    background-color:#F05283;

}

ul {
    list-style: none;
    border-bottom: 1px solid #EAEAEA;
    background-color: #FFF;
    padding: 20px;
    margin-top: 0;
    text-align: center;
    margin-bottom: 75px;
}

ul a{
    text-decoration: none;
    color: #FFF;
    text-align: left;
    background-color: #BCB8C2;
    padding: 10px 16px;
    border-radius: 2px;
    opacity: 0.8;
    font-size: 16px;
    display: inline-block;
    margin: 4px;
    line-height: 1;
    outline: none;

    transition: 0.2s ease;
}

ul li a.active{
    background-color: #F05283;
    pointer-events: none;
}

ul li a:hover {
    opacity: 1;
}


ul li{
    display: inline-block;
}


@media (max-width: 1000px) {


    header h1{
        float: none;
    }

    header a{
        margin-top: 25px;
        float: none;
    }

}

.main-content{
    margin-bottom: 75px;
}

/* -- Demo ads -- */

@media (max-width: 1200px) {
	#bsaHolder{ display:none;}
}

/* -- Link to Tutorialzine -- */

.tz-link{
	text-decoration: none;
	color: #fff !important;
	font: bold 36px Arial,Helvetica,sans-serif !important;
}

.tz-link span{
	color: #da431c;
}
html{
    background-color: #f3f3f3;
}

.form-basic{
    max-width: 640px;
    margin: 0 auto;
    padding: 55px;
    box-sizing: border-box;

    background-color:  #ffffff;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);

    font: bold 14px sans-serif;
    text-align: center;
}

.form-basic .form-row{
    text-align: left;
    margin-bottom: 22px;
}

.form-basic .form-title-row{
    text-align: center;
    margin-bottom: 55px;
}

/* The form title */

.form-basic h1{
    display: inline-block;
    box-sizing: border-box;
    color:  #4c565e;
    font-size: 24px;
    padding: 0 10px 15px;
    border-bottom: 2px solid #6caee0;
    margin: 0;
}

.form-basic .form-row > label span{
    display: inline-block;
    box-sizing: border-box;
    color: #5F5F5F;
    width: 180px;
    text-align: right;
    vertical-align: top;
    padding: 12px 25px;
}

.form-basic input{
    color:  #5f5f5f;
    box-sizing: border-box;
    width: 240px;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 12px;
    border: 1px solid #dbdbdb;
}

.form-basic input[type=radio],
.form-basic input[type=checkbox]{
    box-shadow: none;
    width: auto;
}

.form-basic input[type=checkbox]{
    margin-top: 13px;
}

.form-basic select{
    background-color: #ffffff;
    color:  #5f5f5f;
    box-sizing: border-box;
    max-width: 240px;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 12px 8px;
    border: 1px solid #dbdbdb;
}

.form-basic textarea{
    color:  #5f5f5f;
    box-sizing: border-box;
    width: 240px;
    height: 80px;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    font: normal 13px sans-serif;
    padding: 12px;
    border: 1px solid #dbdbdb;
    resize: vertical;
}

.form-basic .form-radio-buttons{
    display: inline-block;
    vertical-align: top;
}

.form-basic .form-radio-buttons > div{
    margin-top: 10px;
}

.form-basic .form-radio-buttons label span{
    margin-left: 8px;
    color: #5f5f5f;
    font-weight: normal;
}

.form-basic .form-radio-buttons input{
    width: auto;
}

.form-basic button{
    display: block;
    border-radius: 2px;
    background-color:  #6caee0;
    color: #ffffff;
    font-weight: bold;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 14px 22px;
    border: 0;
    margin: 40px 183px 0;
}

/*	Making the form responsive. Remove this media query
    if you don't need the form to work on mobile devices. */

@media (max-width: 600px) {

    .form-basic{
        padding: 30px;
        max-width: 480px;
    }

    .form-basic .form-row{
        max-width: 300px;
        margin: 25px auto;
        text-align: left;
    }

    .form-basic .form-title-row{
        margin-bottom: 50px;
    }

    .form-basic .form-row > label span{
        display: block;
        text-align: left;
        padding: 0 0 15px;
    }

    .form-basic select{
        width: 240px;
    }

    .form-basic input[type=checkbox]{
        margin-top:0;
    }

    .form-basic .form-radio-buttons > div{
        margin: 0 0 10px;
    }

    .form-basic button{
        margin: 0;
    }

}
	</style>
</head>
<body>

	    <div class="main-content">

        <form class="form-basic" method="post" action="http://localhost/trepel/index.php/Cilin/masukkan">

            <div class="form-title-row">
                <h1>Daftar</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Full name</span>
                    <input type="text" placeholder="Nama Lengkap" name="fullname">
                </label>
            </div>

			  <div class="form-row">
                <label>
                    <span>Username</span>
                    <input type="text" placeholder="Username" name="username">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" placeholder="E-mail" name="email">
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Password</span>
                    <input type="password" placeholder="Password" name="password" id="password" required>
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Confirm Password</span>
					<input type="password" placeholder="Ulangi Password" id="confirm_password" required>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Level</span>
                    <select name="level">
                        <option>Developer</option>
                        <option>Manager</option>
                        <option>User</option>
                    </select>
                </label>
            </div>

            <button class="btn btn-outline-primary" type="submit" value="Submit">Daftar</button>
                </div>
            </div>

        </form>

    </div>
	<script language='javascript' type='text/javascript'>
   var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</body>
</html>