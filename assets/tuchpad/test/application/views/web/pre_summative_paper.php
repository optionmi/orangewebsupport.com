<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subjective Test</title>
	 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700" rel="stylesheet">
	 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap" rel="stylesheet"> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
	<style>
	body{
	font-size: 20px;
	font-family: 'Montserrat', sans-serif;
	color: #222;
	padding:0;
	margin:0;
	box-sizing: border-box;
}
#container{
padding:80px 70px;
position:relative;
box-sizing: border-box;
}
.sp-heading{
	font-size:23px;
	font-weight:700;
	text-align:center;
	margin-bottom:12px;
	font-family: 'PT Serif', serif;
}

.sp-sub-heading{
	font-size:18px;
	font-weight:700;
	text-align:center;
	margin:12px auto;
	font-family: 'PT Serif', serif;
}

.sp-img{
	width: 8%;
float: right;
position: absolute;
right: 35px;
top: 10px;
}

.sp-ttl{
	font-size:16px;
	font-weight:700;
	text-align:right;
	margin:40px auto;
	font-family: 'PT Serif', serif;
}

.question{
		font-size:19px;
	font-weight:600;
	text-align:left;
	margin:12px auto;
	font-family: 'Montserrat', sans-serif;
}

.paper-ection{
	padding:40px auto;
}

.obj-list{
	list-style-type:decimal;
}

.obj-list li{
	font-family: 'Montserrat', sans-serif;
	font-weight:500;
	font-size:17px;
	line-height:30px;
}

textarea.form-control{
	background-color:#f9f9f9;
}


.quest-section{
	margin:20px auto;
	width:100%;
	display:block;
	position:relative;
}

.mrk{
	position:absolute;
	top:0;
	right:0;
	font-size:17px;
	font-weight:700;
	font-family: 'PT Serif', serif;
}
	</style>
</head>
<body>
<!--<h4 style="color:#FF0000;" align="center" ><span id="iTimeShow">Time Remaining: </span><br/><span id='time' style="font-size:25px;"></span></h4>-->
 <div class="container-fluid">
 	
    <div id="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-2">
					<a href="<?= base_url('web/preview_question') ?>" class="btn btn-info w-100"/>Back</a>
				</div>
			</div>
		</div>
	<img class="sp-img" src="<?php echo base_url();?>assets/img/1611576186orange_logo_final.png">
	<h3 class="sp-heading">Question Paper For Class 6</h3>
	<h4 class="sp-sub-heading">Summative Paper</h4>
	<p class="sp-ttl">Max Marks - 100</p>
 <div class="paper-ection">
   <?php 
   $a=1;
   $i=0;
   foreach($summative as $val){ ?>
   <input type="hidden" name="paper_type" value="Summative">
   <input type="hidden" name="marks[]" value="<?php echo $val->marks;?>">
   <input type="hidden" name="question[]" value="<?php echo $val->id;?>">
   <div class="quest-section">
   <p class="question">Q<?php echo $a ;?>:&nbsp;<?php echo $val->name;?></p>
    <span class="mrk"><?php echo $val->marks;?></span>
   </div>
   <?php 
   $a++;
   $i++;
   }?>
   
   </ul>
   </div>
    </div>
   </div>
   
</body>
</html>