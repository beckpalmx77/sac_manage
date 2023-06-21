<!DOCTYPE html>
<html lang="en">

<?php
include 'includes/header.php';
?>

<style>
    img {
        width: 100%;
        height: auto;
    }

    body {
        font-family: 'Prompt', sans-serif;
    }

</style>


<body>
<section class="login p-fixed d-flex text-center bg-white">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
					<form class="md-float-material">
						<div class="text-center">
							<img src="img/logo/logo-text-01.png" alt="logo">
						</div>
						<h3 class="text-center txt-primary">
							LOGIN เข้าสู่ระบบ
						</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="md-input-wrapper">
									<input type="text" class="md-form-control" id="username" name="username" required="required"/>
									<label>ชื่อผู้ใช้งาน</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="md-input-wrapper">
									<input type="password" class="md-form-control" id="password" name="password" required="required"/>
									<label>รหัสผ่าน</label>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
							<div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
								<label class="input-checkbox checkbox-primary">
									<input type="checkbox" id="remember" name="remember">
									<span class="checkbox"></span>
								</label>
								<div class="captions">Remember Me</div>

							</div>
								</div>
							<!--div class="col-sm-6 col-xs-12 forgot-phone text-right">
								<a href="forgot-password.html" class="text-right f-w-600"> Forget Password?</a>
								</div-->
						</div>
						<div class="row">
							<div class="col-xs-10 offset-xs-1">
								<button type="button"  name="login-submit" id="login-submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
							</div>
						</div>


						<!-- </div> -->
					</form>
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>

<!-- Required Jqurey -->
<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="assets/plugins/Waves/waves.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/elements.js"></script>

<script>

    $(document).ready(function () {
        let username = '<?php if (isset($_COOKIE["username"])) {
            echo $_COOKIE["username"];
        } ?>';
        let password = '<?php if (isset($_COOKIE["password"])) {
            echo $_COOKIE["password"];
        } ?>';
        let remember_chk = '<?php echo $_COOKIE["remember_chk"]?>';

        $("#username").val(username);
        $("#password").val(password);

        if (remember_chk === "check") {
            $("#remember").prop('checked', true); // Checked
        }

    });

</script>

<script>
    $(document).ready(function () {
        $("button-bak").click(function () {
            let username = $("#username").val();
            let password = $("#password").val();
            let remember = "";
            alert("OK = " + username );
        });
    });

</script>

<script>
    $(document).ready(function () {
        $("button").click(function () {
            let username = $("#username").val();
            let password = $("#password").val();
            let remember = "";



            if ($("#remember").prop("checked")) {
                remember = $("#remember").val();
            }

            //alert(username);

            if (username != "" && password != "") {
                $.ajax
                ({
                    type: 'post',
                    url: 'login_process.php',
                    data: {
                        username: username,
                        password: password,
                        remember: remember,
                    },
                    success: function (response) {
                        if (response !== "0") {
                            window.location.href = response;
                        } else {
                            alert("เข้าระบบไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง");
                            window.location.href = "login.php";
                        }
                    }
                });
            } else {
                alert("Please Fill All The Details");
            }

            return false;
        });
    });

</script>

</body>
</html>
