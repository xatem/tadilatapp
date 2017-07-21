 

<?php include "veritabani.php"; ?>
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />

<?php

$user = $_POST["user"]; 
 $pass = $_POST["pass"]; 
  $ad = $_POST["ad"]; 

 $giris = mysql_query("SELECT * from users where user='$user' &&  pass='$pass'"); 
 
$k_cek = mysql_query("select ad from users where user = '$user' and pass='$pass'");
list($ad) = mysql_fetch_row($k_cek);
 








if(@mysql_num_rows($giris) > 0 ) { 
echo ""; 
} else { 
  echo "<script>window.location = '/test1/uye-girisi.php'</script>";
}
?>

 <head>
 <link rel="stylesheet" href="css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <meta name="theme-color" content="#cce0ff">


<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
 <meta charset="UTF-8"/>

<title>Üye Kayıt - Tadilat</title>
</head>
<style>
h56{
	font-size: 10px}
h14{
	font-size: 12px;
    color: #484848;
    line-height: 45px;}
 h666{
	 color:#3b5998;
	    font-size: 27px;
    letter-spacing: 0px;
    vertical-align: -6px;
    text-indent: 1px;}
	 h777{
	 color:#1da1f2;
	    font-size: 27px;
    letter-spacing: 0px;
    vertical-align: -6px;
    text-indent: 1px;}
	 h888{
	 color:#d24b4b;
	    font-size: 27px;
    letter-spacing: 0px;
    vertical-align: -6px;
    text-indent: 1px;}
	*, *:before, *:after{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}

 h444{
	 color:#ff6508;
	 text-decoration:underline;
	 font-family:verdana;
	 font-size:11px;}
body{
	margin:0 auto;
	background:#fff
}
h123{
 	padding:7px;
	padding-left:12px;
	padding-right:12px;
	border-radius:10px;}
	h124{
		padding: 3px;
    padding-left: 9px;
    margin-left: 5px;
    padding-right: 9px;
    border-radius: 5px;
    background: #49395a;
    
    padding-right: 9px;
   
} 
 @media only screen and (max-width: 510px) {
h124 {
     display:none;
    }
}
#ust{
	
 	-webkit-box-sizing: content-box;
	}
	
#head {
	        width: 100%;
    margin: auto;
    background-image: linear-gradient(#2f2f2f, #2d2d2d);
    height: 70px;
    -webkit-box-sizing: content-box;
    border-bottom: 4px solid #1f1f1f;

}
#headicc {
	max-width:1200px;
	margin:auto;
	line-height:70px;
		background:blue;

}
#sol {
	float:left;
	    font-size: 21px;
 			font-family:poppins;
			color:white;
			padding-left:15px;
			padding-right:15px;

}
  @media only screen and (max-width: 34500px) {
#sol {
	float:left;
	    font-size: 16px;
 			font-family:poppins;
			color:white;
			padding-left:15px;
			padding-right:15px;

}}
#sag {
	float:right;
 			font-family:poppins;
			color:white;
			padding-left:15px;
			padding-right:15px;
			font-size: 13px;

}
 @media only screen and (max-width: 406px) {
#sag {
	float:right;
 			font-family:poppins;
			color:white;
			padding-left:15px;
			padding-right:15px;
			font-size: 10px;

}}
 
#ne{
	    color: black;
    font-family: poppins;
    padding-top: 40px;
    text-align: center;
	}
			 @media only screen and (max-width: 500px) {
#ne {
color:black;
	font-family:poppins;
	padding-top:0px;
	text-align:center;
	font-size:14px;
    }
}
	@import url(https://fonts.googleapis.com/css?family=Roboto);

*, *:before, *:after{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
 
a{
  text-decoration: none;
  color: inherit;
}

h2.title{
  color: #6cc551;
  text-align: center;
  margin: 20px 0;
}

div.container{
  width: 1040px;
  margin: auto;
}

div.images {
  margin: 5px;
  border: 1px solid #CCC;
  float: left;
  width: 250px;
  
  filter:progid:DXImageTransform.Microsoft.Shadow(color=#aaa, Direction=134, Strength=3);
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
}

div.images:hover{
 
filter:progid:DXImageTransform.Microsoft.Shadow(color=#999, Direction=134, Strength=3);
}

div.images:hover .description{
  color: #2d2d2d;
}

div.images img {
  width: 100%;
  height: auto;
  padding: 0px;
}

p.description {
  color:  #252525;
  font-family:arial;
  padding: 10px;
  text-align: center;
}

div.clear{
  clear: both;
}

p.information{
  color: #888;
  text-align: center;
  margin: 20px 0;
}

@media screen and (max-width: 1045px){
  div.container{
    width: 780px;
  }
}

@media screen and (max-width: 785px){
  div.container{
    width: 560px;
  }
  
  div.images{
    margin: 15px;
  }
}

@media screen and (max-width: 575px){
  div.container{
    width: 407px;
  }
  
  div.images{
    margin: 10px 5px;
    width: 189px;
  }
}

@media screen and (max-width: 405px){
  div.container{
    width: 280px;
  }
  
  div.images{
    width: 280px;
  }
}
#footer {
	width: 100%;	
	max-width: 1030px;
	margin: auto;
		height:100px;

 }
#foot1 {
	width:25%;
 	min-width:130px;
	float:left;
 
}
 @media only screen and (max-width: 500px) {
#foot1 {
        width:100%;
		padding-bottom: 17px;
		text-align:center;
    }
}
#foooter {
 		height: auto;
		padding-left:15px;
		padding-right:15px;
    margin-top: 34px;
    border: 1px solid rgba(0, 0, 0, 0.16);
    padding-top: 20px;
    padding-bottom: 20px;
    background: #f9f9f9;

}
 @media only screen and (max-width: 500px) {
#foooter {
       background:none;
	   border:none;
    }
}
ul{
	list-style-type:none;
	    font-size: 11px;
		    line-height: 25px;
    font-family: Verdana;}
	 @media only screen and (max-width: 500px) {
ul {
   list-style-type: none;
    font-size: 15px;
    line-height: 33px;
    font-family: Verdana;
    }
}
	ul1{
	list-style-type: none;
    font-size: 12px;
    line-height: 29px;
    color: #042bbd;
    text-indent: 107px;
    font-family: Verdana;
    font-weight: bold;
	}
	 @media only screen and (max-width: 500px) {
ul1 {
    text-indent: 0px;
    text-align: center;
    width: 100%;
    float: left;
    height: 10px;
    }
}
	#sehir{
		background: #0035ff;
    color: white;
	padding-left: 0;
	float:right;
      width: 157px;;
	    margin-top: 6px;
    padding: 8px;
    border-radius: 5px;
    font-family: 'Open Sans', sans-serif;
	font-weight:bold;
    text-align: center;
     font-size: 11px;}
	 @media only screen and (max-width: 500px) {
#sehir {
       background: #0035ff;
    color: white;
    width: 141px;
    margin-top: 17px;
	float:none;
    margin: auto;
    padding: 8px;
    border-radius: 5px;
    font-family: 'Open Sans', sans-serif;
    text-align: center;
    font-size: 11px;
    }
}
	#bifooter{
		margin-top:45px;
		max-width:1030px;
		margin:auto;}
		#bidivsag{float: right;
    padding-bottom: 9px;
    margin-top: -3px;
		}
		
		
		 @media only screen and (max-width: 500px) {
#bidivsag {
	text-align:	center;
	float:none;
    }
}
			
			
			 @media only screen and (max-width: 500px) {
#bidivsol {
	margin-top:10px;
	padding-left:15px;
	padding-right:15px;
	text-align:center;
	    margin-bottom: 10px;
    }
}
		#bidivsol{float:left; color:#333;
 	 font-family:verdana;
	 font-size:11px;}
#sehirplaka {
	float: left;
    font-size: 17px;
	margin-left: -11px;
	margin-bottom:-8px;
     line-height: 28px;
    padding-left: 7px;
    border-right: 1px solid;
    height: 29px;
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
    padding-right: 6px;
    margin-top: -8px;
    background: #4b70ff;
}
#sosyal {
	    margin: auto;
    max-width: 1031px;
    margin-top: 17px;
    font-family: verdana;
    font-size: 11px;
    font-weight: bold;
}
  @media only screen and (max-width: 500px) {
#sosyal {
         margin: auto;
    text-align: center;
    width: 100%;
    margin-top: -7px;
    font-family: verdana;
    font-size: 11px;
    font-weight: bold;
    margin-bottom: 10px;
    }
}
#giris {
}
#girisic {
	     max-width: 334px;
     margin: auto;
    text-align: left;
    padding-top: 20px;
    text-indent: 30px;
}
input {
    -webkit-appearance: textfield;
    background-color: white;
    -webkit-rtl-ordering: logical;
    user-select: text;
    cursor: auto;
    padding: 1px;
    height: 36px;
    padding-left: 11px;
	width:81%;
    border-width: 2px;
    border-style: inset;
    border-color: initial;
    border-image: initial;
}
input[type=checkbox] {
    -webkit-appearance: checkbox;
    background-color: #fff;
    -webkit-rtl-ordering: logical;
    user-select: text;
    cursor: auto;
    padding: 1px;
    height: auto;
    margin-top: 1px;
    margin-right: 7px;
    padding-left: 13px;
    width: auto;
    border-width: 2px;
    vertical-align: top;
    border-style: inset;
    border-color: initial;
    border-image: initial;
    float: left;
}
#girisbuton {
	    background: rgb(4, 85, 244);
    color: white;
	text-indent: 0;
    padding: 7px;
    text-align: center;
    border-bottom: 4px solid #72a2ff;
}
#select12 {
    line-height: 13px;
    text-indent: 0;
    padding-left: 30px;
    padding-right: 20px;
}
#button {
	TEXT-INDENT: 0;
    text-align: center;
    background: #0163fd;
    padding: 7px;
    color: #fff;
    border-radius: 5px;
    border-bottom: 5px solid #0447b1;
}
#button:hover {
	TEXT-INDENT: 0;
    text-align: center;
    background:  #0355d6;
    padding: 7px;
    color: #fff;
    border-radius: 5px;
    border-bottom: 5px solid #0447b1;
}
</style>

<body>
<div class="ust" id="ust">
  <div class="head" id="head">
    <div class="headicc" id="headicc">
      <div class="sol" id="sol"><strong>ta</strong>ta</div>
      <div class="sag" id="sag"> <a href="uye-girisi.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp<?php
 
 
 echo "$ad"  
 ?></a>
      <h124> <a href="dukkangirisi.html">D&uuml;kkan Girişi</a></h124></div>
      
    </div>
  </div> 
 
  <div class="ne" id="ne" ></div>
  <br />
<br /><!-- /container --><!-- /container -->

<div class="clear"></div>
</div><br />
 

<div class="bifooter" id="bifooter">
  <div class="bifootersol" id="bidivsol"> </div><div class="bidivsag" id="bidivsag"><img src="img/googleplay.png" width="100" height="" />&nbsp;<img src="img/appstore.png" width="100" height="" /></div></div><br />

 
 <br />
<br />

</body>
</html>
