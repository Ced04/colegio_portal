function htmlbodyHeightUpdate() {
    var height3 = $(window).height();
    var height1 = $('.nav').height() + 50;
    height2 = $('.container-main').height();
    if (height2 > height3) {
        $('html').height(Math.max(height1, height3, height2) + 10);
        $('body').height(Math.max(height1, height3, height2) + 10);
    } else
    {
        $('html').height(Math.max(height1, height3, height2));
        $('body').height(Math.max(height1, height3, height2));
    }

}
$(document).ready(function(){

	htmlbodyHeightUpdate();
    $(window).resize(function () {
        htmlbodyHeightUpdate();
    });
    $(window).scroll(function () {
        height2 = $('.container-main').height();
        htmlbodyHeightUpdate();
    });

	var base_url = 'http://localhost/myportal/'; // BASE URL

	//** ADMIN LOGIN **//
	$(document).on('submit', '#adminLogin', function(e){
		e.preventDefault();
		var admin_id = $('#admin_id').val();
		var password = $('#password').val();


		//** VALIDATION **//
		if (admin_id == '' || password == '') {

			//** ADMIN ID VALIDATION **//
			if (admin_id == '') {
				document.getElementById('id-alert').innerHTML = 'Please enter your ID.';
				setTimeout(function(){
				    document.getElementById('id-alert').innerHTML = ''
				},2000)
			}

			//** AdMIN PASSWORD VALIDATION **//
			if (password == '') {
				document.getElementById('pass-alert').innerHTML = 'Please enter your Password.';
				setTimeout(function(){
				    document.getElementById('pass-alert').innerHTML = ''
				},2000)
			}
		}else{
			$.ajax({
				url: base_url+'admin/admin_login',
				type: 'POST',
				data: {admin_id:admin_id, password:password},
				dataType: 'JSON',
				success:function(data){
					if (data == "Successfully login.") {
						window.location.href = base_url+'admin';
					}else{
						alert(data)
					}
				}
			});
		}
		
	});
});