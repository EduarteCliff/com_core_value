function creat(){
	try{
		//现代浏览器
		var XHR = new XMLHttpRequest();
	}
	catch(e1){
		try{
			//IE6+
			var XHR = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(e2){
			//IE5或其它不支持的浏览器
			XHR = false;
		}
	}
	return XHR;
}