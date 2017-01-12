<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css"> 
	<script type="text/javascript">
		function reset(){
			document.getElementById('namediv').innerHTML='';
			document.getElementById('divl').innerHTML='';
			document.getElementById('divu').innerHTML="";
			document.getElementById('divmail').innerHTML="";
			document.getElementById('divpass').innerHTML="";
			document.getElementById('divcon').innerHTML="";
			document.getElementById('divradio').innerHTML="";
			document.getElementById('divcheck').innerHTML="";
			document.getElementById('namediv').style.display="none";
			document.getElementById('divl').style.display="none";
			document.getElementById('divu').style.display="none";
			//document.getElementById('divmail').style.display="none";
			//document.getElementById('divpass').style.display="none";
			document.getElementById('divcon').style.display="none";
			document.getElementById('divradio').style.display="none";
			document.getElementById('divcheck').style.display="none";
		}
		function validate_fn(){
			var hasError = false;
			var focus=false;
			document.getElementById('namediv').innerHTML='';
			document.getElementById('divl').innerHTML='';
			document.getElementById('divu').innerHTML="";
			document.getElementById('divmail').innerHTML="";
			document.getElementById('divpass').innerHTML="";
			document.getElementById('divcon').innerHTML="";
			document.getElementById('divradio').innerHTML="";
			document.getElementById('divcheck').innerHTML="";
			document.getElementById('namediv').style.display="none";
			document.getElementById('divl').style.display="none";
			document.getElementById('divu').style.display="none";
			//document.getElementById('divmail').style.display="none";
			//document.getElementById('divpass').style.display="none";
			document.getElementById('divcon').style.display="none";
			document.getElementById('divradio').style.display="none";
			document.getElementById('divcheck').style.display="none";


			var re = /^[A-Za-z]{3,35}$/;
			var name=document.getElementById('nameid').value.trim();

			if(document.getElementById('nameid').value.trim()==""){
				document.getElementById('namediv').innerHTML="Fill the name!";
				document.getElementById('nameid').focus();
				document.getElementById('namediv').style.display="block";
				hasError= true;
				focus=true;
				
			} else if(re.test(name) == false){
				document.getElementById('nameid').value="";
				document.getElementById('namediv').innerHTML="Invalid characters";
				document.getElementById('nameid').focus();
				document.getElementById('namediv').style.display="block";
				hasError= true;
				focus=true;

			}
				var re = /^[A-Za-z]{3,35}$/;
				var name=document.getElementById('lid').value.trim();

			if(document.getElementById('lid').value.trim()==""){
				document.getElementById('divl').innerHTML="Provide lastname!";
				document.getElementById('divl').style.display="block";
				hasError=true;
				if (focus == false) {
					document.getElementById('lid').focus();
					}
				focus= true;
			}
			else if (re.test(name)==false) {
				document.getElementById('lid').value="";
				document.getElementById('divl').innerHTML="Invalid characters!";
				document.getElementById('divl').style.display="block";
				hasError=true;
				if (focus == false) {
					document.getElementById('lid').focus();
					}
				focus= true;
			}
			
			var re = /^[A-Za-z0-9]{3,35}$/;
			var name=document.getElementById('uid').value.trim();

			if(document.getElementById('uid').value.trim()==""){
				document.getElementById('divu').innerHTML="Provide Username!";
				document.getElementById('divu').style.display="block";
				hasError=true;
				if (focus==false){
					document.getElementById('uid').focus();
				}
				focus=true;
			}

			if(document.form.gender.value==""){
				document.getElementById('divradio').innerHTML="Select your gender!";
				document.getElementById('divradio').style.display="block";
				hasError=true;
			}	
			
			else if(re.test(name)==false){
				document.getElementById('uid').value=="";
				document.getElementById('divu').innerHTML="Invalid characters!";
				document.getElementById('divu').style.display="block";
				hasError=true;
				if (focus==false){
					document.getElementById('uid').focus();
				}
				focus=true;

			}
			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			
			if(document.form.Email.value.trim()==""){
				document.getElementById('divmail').innerHTML="Provide your email!";
				document.getElementById('divmail').style.display="block";
				
				if (focus==false){
					document.form.Email.focus();
				}
			}
				else{
					var Emmail=document.form.Email.value.trim();
					if(re.test(Emmail)==false) {
						document.form.Email.value="";
						document.getElementById('divmail').innerHTML="Invalid Email!";
						if (focus==false){
					document.form.Email.focus();
						}
					}
				focus=true;
				hasError=true;
			}

			if(document.form.password.value==""){
				document.getElementById('divpass').innerHTML="Provide a password!";
				document.getElementById('divpass').style.display="block";
				hasError=true;
				if (focus!=true){
					document.form.password.focus();
				}
			}
			if(document.form.conpas.value==""){
				document.getElementById('divcon').innerHTML="Confirm password!";
				document.getElementById('divcon').style.display="block";
				hasError=true;
			} else {
			if(document.form.password.value!=document.form.conpas.value){
				document.getElementById('divpass').innerHTML="Password missmatched!";
				document.getElementById('divpass').style.display="block"
				document.form.password.value="";
				document.form.conpas.value="";
				hasError=true;
			}
		}
			if(document.getElementById('selid').value=="empty"){
				document.getElementById('divsub').innerHTML="Select a country!";
				document.getElementById('divsub').style.display="block";
				hasError=false;
			}

			
			if(document.form.ckb.checked==""){
				document.getElementById('divcheck').innerHTML="Agree the terms!";
				document.getElementById('divcheck').style.display="block";
				hasError=true;
			}
				if(hasError == true){
				return false;		
			}
		}
	</script>
	<style type="text/css">
	.alert{
		background-color: #f2dede;
		font-weight:lighter;
		padding: 5px;
		margin-bottom: 10px;
		margin-left: 20px;
		border: 1px solid transparent;
		border-radius: 20px;
		display: none;
	}
	#form{
		border-radius:2px;
		padding:20px 30px;
		box-shadow:0 0 15px;
		font-size:14px;
		font-weight:bold;
		width:650px;
		margin:20px 250px 0 35px;
		float:left; 
	}
	</style>
</head>
<body>
<div class="container" >

<h1 >Sign up</h1>
<form  name="form" id="form" action="welcome.html" method="post" onsubmit="return validate_fn()">
<table>
	<tr>
		<td> <strong><label>Name:</label></strong></td>
		<td><div class="form-group"><input type="name" class="form-control" name="name" placeholder="name" id="nameid"></td>
		<td><div id="namediv" class="alert"></div></td>
	</tr>
	<tr>
	<td><strong>Last Name:</strong></td>
	<td><div class="form-group"> <input type="text" name="lname" class="form-control" id="lid" placeholder="lastname"></div></td><td><div class="alert" id="divl"></div></td>
	</tr>
	<tr>
		<td><strong>Username:</strong></td>
		<td><div class="form-group"><input type="text" name="uname" id="uid" class="form-control" placeholder="Username"></div></td>
		<td><div class="alert" id="divu"></div></td>
	</tr>
	
	<tr>
		<td><strong><label>Gender:</label></strong></td>
		<td><div class=form-group"><input type="radio" class="radio-inline" name="gender" value="male"> male
		<input type="radio" class="radio-inline" name="gender" value="female">female</td></div>
		<td><div id="divradio" class="alert"></div></td>
	</tr>
	</tr>
	
	<tr>
		<td><strong><label>Email:</label></strong></td>
		<td><div class="form-group"><input type="text" name="Email" id="mailid" placeholder="email" class="form-control"></div></td>
		<td><div id="divmail" class="alert"></div></td>
	</tr>
	<tr>
		<td><strong><label>Password:</label></strong></td>
		<td><div class="form-group"><input type="password" name="password" placeholder="new password" id="passid" class="form-control"></div></td>
		<td><div id="divpass" class="alert"></div></td>
	</tr>
	<tr>
		<td><strong><label>Confirm password:</label></strong></td>
		<td><div class="form-group"><input type="password" name="conpas" placeholder="confirm password" id="conid" class="form-control"></div></td>
		<td><div id="divcon" class="alert"></div></td>
	</tr>
	<tr>
	<td>
		<strong>Select your country</strong></td>
		<td><div class="form-group"><Select class="form-control" id="selid" name="country">
				<option value="empty">-Select-</option>
				<option value="np">Nepal</option>
				<option value="us">USA</option>
			</Select></div>
				</td>
				<td><div id="divsub" class="alert"></div></td>
				</tr>
				<tr>
		<td></td><td><input type="checkbox" class="checkbox-inline" name="ckb">I agree terms and conditions</td>
		<td><div id="divcheck" class="alert"></div></td>
	</tr>
<tr><td></td></tr><br>
	<tr>
		<td><div class="form-group"><input type="reset" value="Click to reset" onclick="return reset();" class="btn btn-primary"></div></td>
		<td><div class="form-group"><input type="Submit"  name="Submit" value="Sign up" width="50" class="btn btn-primary"></div></td>
	</tr>
</table>
</form>
</div>

</body>
</html>