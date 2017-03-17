<?php
	require_once('../variables.php');
	include '../../layout/head.php';
	include './components/newUser.php';
	include './components/login.php';
	include '../../layout/foot.php';
?>

<script>
	var $submitNewUser = $("#submitNewUser");
	var $userName = $("#newUser_Uname");
	var $UnameFail = $(".UnameFail");
	var $loginFrm = $("#login_frm");
	var $loginUname = $("#login_Uname");
	var $loginPsswrd = $("#login_psswrd");
	var $loginSubmit = $("#login_submit");
	var $loginFail = $(".loginFail");

	$(document).ready(function(){
		$UnameFail.hide();
		$loginFail.hide();
	});

	$userName.on("change", function(){
		$UnameFail.hide();
		$.ajax({
		  method: "POST",
		  url: "./components/checkUserName.php",
		  data: { userName: $userName.val() }
		})
		.done(function(result) {
			if(result == "false"){
				$UnameFail.fadeIn();
			}
		});
	});

	$loginSubmit.on("click", function(event){
		event.preventDefault();
		$.ajax({
		  method: "POST",
		  url: "./components/authenticate.php",
		  data: { 
			  login_Uname: $loginUname.val(),
			  login_psswrd: $loginPsswrd.val(),
			  reqType: "ajax"
		  }
		})
		.done(function(result) {
			console.log(result);
			if(result == "false"){
				$loginFail.fadeIn();
			}else{
				$loginFrm.submit();
			}
		});
	});
</script>
