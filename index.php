<!doctype html>
<html lang = "zh">
  <head>
    <meta charset = "utf-8">
    <title>社会主义核心价值观编码器</title>
    <script>
      function notify(){
      	alert("还没做");
        event.preventDefault();
      }
    </script>
  </head>
  <body>
    <form method = "post">
      <input type = "text" name = "query" value = "输入需要编码的字段">
      <input type = "submit" value = "提交">
      <button onClick = "notify()">解码</button>
    </form>
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
        switch($chache){
            case 1000:
                echo "富强";
                break;
            case 1001:
                echo "民主";
                break;
            case 1010:
                echo "文明";
                break;
            case 1100:
                echo "和谐";
                break;
            case 1101:
                echo "爱国";
                break;
            case 1110:
                echo "敬业";
                break;
            case 1111:
                echo "诚信";
                break;
            case 1011:
                echo "友善";
                break;
          	case 11:
            	echo "公正";
            	break;
            case 1:
            	echo "自由";
            	break;
            case 10:
            	echo "平等";
            	break;
            case 100:
            	echo "法治";
            	break;
          	case 110:
            	echo " ";
                break;
        }
    }

	if(isset($_POST["query"])){
      	echo "type=text/encode=com_core_value/";
      	$query = StrToBin($_POST["query"]);
      	$query = explode(" ",$query);
      	$i = 0;
      	$flag = 24;
      	while($query[$i]){
          	$flag = 24;
            while($flag){
                	$flag -= 4;
              		$chache = $query[$i]%10000;
                    fetch($chache);
              		$query[$i] = $query[$i]/10000;
            }
        $i++;
        }
    }
?>
    </body>
</html>
