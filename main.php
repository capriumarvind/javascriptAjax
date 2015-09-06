<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
function callAjax()
{
var xhr = new XMLHttpRequest();
var url = "sub.php";
xhr.onreadystatechange = function(){
	if(xhr.status == 200 && xhr.readyState == 4)
	{
		//alert('test');
		document.getElementById('ddiv').innerHTML = xhr.responseText;
	}
}
//alert(xhr.responseText);
xhr.open("GET", url, true); xhr.send();
}
</script>
</body>
<div id="ddiv">old Text</div>
<input type="button" name="click" onclick="callAjax();" id="bb1" name="bb1" value="buton">
</html>
