function creat(){
	try{
		//�ִ������
		var XHR = new XMLHttpRequest();
	}
	catch(e1){
		try{
			//IE6+
			var XHR = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(e2){
			//IE5��������֧�ֵ������
			XHR = false;
		}
	}
	return XHR;
}