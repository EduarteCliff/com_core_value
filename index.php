<!doctype html>
<html lang = "zh">
  <head>
	<meta name="description" itemprop="description" content="社会主义核心价值观编码器">
	<meta itemprop="name" content="COMCV">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.21.1/sweetalert2.all.min.js"></script>
	<script src='https://www.recaptcha.net/recaptcha/api.js'></script>
    <style>
    	@keyframes spin {
          from {
            transform: rotate(0);
          }
          to{
            transform: rotate(359deg);
          }
        }

        @keyframes configure-clockwise {
          0% {
            transform: rotate(0);
          }
          25% {
            transform: rotate(90deg);
          }
          50% {
            transform: rotate(180deg);
          }
          75% {
            transform: rotate(270deg);
          }
          100% {
            transform: rotate(359deg);
          }
        }

        @keyframes configure-xclockwise {
          0% {
            transform: rotate(45deg);
          }
          25% {
            transform: rotate(-45deg);
          }
          50% {
            transform: rotate(-135deg);
          }
          75% {
            transform: rotate(-215deg);
          }
          100% {
            transform: rotate(-305deg);
          }
        }

        @keyframes pulse {
          from {
            opacity: 1;
            transform: scale(1);
          }
          to {
            opacity: .25;
            transform: scale(.75);
          }
        }

        /* GRID STYLING */

        * {
          box-sizing: border-box;
        }

        .spinner-box {
          width: 300px;
          height: 300px;
          display: flex;
          justify-content: center;
          align-items: center;
          background-color: transparent;
        }

        /* SPINNING CIRCLE */

        .circle-border {
          width: 150px;
          height: 150px;
          padding: 3px;
          display: flex;
          justify-content: center;
          align-items: center;
          border-radius: 50%;
          background: rgb(63,249,220);
          background: linear-gradient(0deg, rgba(63,249,220,0.1) 33%, rgba(63,249,220,1) 100%);
          animation: spin .8s linear 0s infinite;
        }

        .circle-core {
          width: 100%;
          height: 100%;
          background-color: #37474f;
          border-radius: 50%;
        }

        /* X-ROTATING BOXES */

        .configure-border-1 {
          width: 115px;
          height: 115px;
          padding: 3px;
          position: absolute;
          display: flex;
          justify-content: center;
          align-items: center;
          background: #ffab91;
          animation: configure-clockwise 3s ease-in-out 0s infinite alternate;
        }

        .configure-border-2 {
          width: 115px;
          height: 115px;
          padding: 3px;
          left: -115px;
          display: flex;
          justify-content: center;
          align-items: center;
          background: rgb(63,249,220);
          transform: rotate(45deg);
          animation: configure-xclockwise 3s ease-in-out 0s infinite alternate;
        }

        .configure-core {
          width: 100%;
          height: 100%;
          background-color: #37474f;
        }

        /* PULSE BUBBLES */

        .pulse-container {
          width: 120px;
          display: flex;
          justify-content: space-between;
          align-items: center;
        }

        .pulse-bubble {
          width: 20px;
          height: 20px;
          border-radius: 50%;
          background-color: #3ff9dc;
        }

        .pulse-bubble-1 {
            animation: pulse .4s ease 0s infinite alternate;
        }
        .pulse-bubble-2 {
            animation: pulse .4s ease .2s infinite alternate;
        }
        .pulse-bubble-3 {
            animation: pulse .4s ease .4s infinite alternate;
        }

        /* SOLAR SYSTEM */

        .solar-system {
          width: 250px;
          height: 250px;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .orbit {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ffffffa5;
            border-radius: 50%;
        }

        .earth-orbit {
            width: 165px;
            height: 165px;
          -webkit-animation: spin 12s linear 0s infinite;
        }

        .venus-orbit {
            width: 120px;
            height: 120px;
          -webkit-animation: spin 7.4s linear 0s infinite;
        }

        .mercury-orbit {
            width: 90px;
            height: 90px;
          -webkit-animation: spin 3s linear 0s infinite;
        }

        .planet {
            position: absolute;
            top: -5px;
          width: 10px;
          height: 10px;
            border-radius: 50%;
          background-color: #3ff9dc;
        }

        .sun {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #ffab91;
        }  
    </style>
    <link href="css/animated-border.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/input-style.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css" />
    	<style>
		.demo{
			padding:20px 0;
		}
		.link{
		    color: #555;
		    font-family: "Microsoft YaHei",'Courgette', cursive;
		    font-size: 30px;
		    line-height: 25px;
		    display: inline-block;
		    position: relative;
		    z-index: 1;
		    transition: all 0.5s;
		}
		.font-other{
			font-family: "Microsoft YaHei","Microsoft JhengHei","Segoe UI", "Lucida Grande", Helvetica, Arial,sans-serif;
		}
		.link:hover{ color: transparent; }
		.link:before,
		.link:after{
		    content: attr(data-hover);
		    white-space: nowrap;
		    position: absolute;
		    left: 0;
		    top: 0;
		    height: 100%;
		    width: 100%;
		    transition:all 0.5s;
		}
		.link:after{
		    color: #1da493;
		    opacity: 0;
		    left: -10px;
		}
		.link:hover:before{
		    left: 15px;
		    opacity: 0;
		}
		.link:hover:after{
		    left: 0;
		    opacity: 1;
		    transition-delay:0.1s;
		}
		@media only screen and (max-width: 990px){
		    .link span{ font-size: 20px; }
		}
		@media only screen and (max-width: 767px){
		    .link{ margin: 0 0 30px; }
		}
	</style>
    <meta charset = "utf-8">
    <title>社会主义核心价值观编码器</title>
    <script>
      function notify(){
      	alert("还没做");
        event.preventDefault();
      }
    </script>
	<script type = "text/javascript" src = "js/utility.js"></script>
	<script>
		function get_form("frm"){
			var form = document.getElementById("frm");
			var elements = new Array();
			var tagElements = form.getElementsByTagName('input');    
			for (var j = 0; j < tagElements.length; j++){  
				elements.push(tagElements[j]);
			}
			return elements;  
		}
	
		var XHR = null;
		function startreq(){
			XHR = creat();
			var elements = get_form();
			var query = elements["query"];
			XHR.open("GET","https://cv.oxdl.cn/encode.php?" + query,true);
			XHR.onreadystatechange = handle;
			XHR.send(null);
		}
		
		function handle(){
			if(XHR.readyState == 4){
				if(XHR.status == 200){
					document.getElementById("span1").innerHTML = XHR.responseText;
				}
				else{
					alert("请求错误！");
				}
			}
		}
	</script>
	<script>
		function submit_to_encode(token){
			var page = '<center><a href="#" class="link" data-hover="少女祈祷中">少女祈祷中</a></center><center><div class="spinner-box"><div class="solar-system"><div class="earth-orbit orbit"><div class="planet earth"></div><div class="venus-orbit orbit"><div class="planet venus"></div><div class="mercury-orbit orbit"><div class="planet mercury"></div><div class="sun"></div></div></div></div></div></div></center>';
			document.getElementById('span1').innerHTML = page;
			document.getElementById("frm").submit();
			//event.preventDefault();
		}
	</script>
  </head>
  <body>
    <br><br><center>
    <a href="#" class="link" data-hover="社会主义核心价值观编码器" style="font-size:400%;margin-top:15vh">社会主义核心价值观编码器</a>
    </center>
    <form id="frm" method = "post" style="margin-top:5vh">
		<br>
		<div class="col-3 input-effect" style = "margin-left:10vw;font-size:340%">
			<input class="effect-17" type="text" placeholder="" name = "query" style="font-size:110%">
			<label>需要编码的字段(解码改天回来做)</label>
			<span class="focus-border"></span>
		</div>
		<br>
		<button id="btn" data-sitekey="6LeR-4UUAAAAAFkkmoNN3zkPEyOPKh1Gq3fak9G8" data-callback="submit_to_encode" class="g-recaptcha ui-box top-leftToRight" style = "float:right;margin-right:10vw;width:12vw;">提交</button>
    </form>
    <br>
    <br>
	<span id="span1"></span>
	<?php
		function StrToBin($str){
			$arr = preg_split('/(?<!^)(?!$)/u', $str);
			foreach($arr as &$v){
				$temp = unpack('H*', $v);
				$v = base_convert($temp[1], 16, 2);
				unset($temp);
			}
			return join(' ',$arr); 
		}
		
		function fetch($chache){
			$flag = rand(1,10);
			if($chache == 1){
				if($flag>5){
					return "富强";
				}else{
					return "民主";
				}
			}else if($chache == 10){
				if($flag>5){
					return "文明";
				}else{
					return "和谐";
				}
			}else if($chache == 11){
				if($flag>5){
					return "爱国";
				}else{
					return "敬业";
				}
			}else if($chache == 100){
				if($flag>5){
					return "诚信";
				}else{
					return "友善";
				}
			}else if($chache == 101){
				return "自由";
			}else if($chache == 110){
				return "平等";
			}else if($chache == 111){
				return "法治";
			}else if($chache == 0){
				return "公正";
			}
		}

		function post($url, $post_data, $timeout = 5){//curl
			$ch = curl_init();
			curl_setopt ($ch, CURLOPT_URL, $url);
			curl_setopt ($ch, CURLOPT_POST, 1);
			if($post_data != ''){
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
			}
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
			curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			curl_setopt($ch, CURLOPT_HEADER, false);
			$file_contents = curl_exec($ch);
			curl_close($ch);
			return $file_contents;
		}

		if(isset($_POST["query"])){
			$value=post("https://recaptcha.net/recaptcha/api/siteverify","secret=6LeR-4UUAAAAAMk_1uVdU4-wRW6pQ_fhb_RYUQpT&response=" . $_POST["g-recaptcha-response"]);
			$v=json_decode($value,true);
			if($v["success"]!="true"){
				echo "<script>alert('请点击验证码');</script>";
				goto done;
			}
			$query = StrToBin($_POST["query"]);
			$query = explode(" ",$query);
			$i = 0;
			$flag = 24;
			$body = "type=text/encode=com_core_value/";
			while($query[$i]){
				$flag = 24;
				while($flag){
					$flag -= 3;
					$chache = $query[$i]%1000;
					$body = $body . fetch($chache);
					$query[$i] = $query[$i]/1000;
				}
			$i++;
			}
			echo "<script>sweetAlert('编码完成！','" . $body . "','success');</script>";
		}
		done:
	?>
	<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.1.1.min.js"><\/script>')</script>
	<script>
	// JavaScript for label effects only
		$(window).load(function(){
			$(".col-3 input").val("");
			
			$(".input-effect input").focusout(function(){
				if($(this).val() != ""){
					$(this).addClass("has-content");
				}else{
					$(this).removeClass("has-content");
				}
			})
		});
	</script>
    <center><p style="color:gray">Copyright &copy; 2018-2019 oxdl.cn by 看起来圆滚滚的方糖</p><a style="color:gray" href="https://github.com/EduarteCliff/com_core_value">GitHub</a></center>
    </body>
</html>