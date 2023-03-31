$('.loader').hide();
$(document).ready(function () {
	$('#contact-form').submit(function (event) {
		event.preventDefault();
		$('.loader').show();
		$('#btnText').hide();
		var formData = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: 'mainpages/send-email.php',
			data: formData,
			success: function (response) {
                console.log(response)
				Swal.fire({
					icon: 'success',
					title: 'Votre message a été envoyé !',
					showConfirmButton: false,
					timer: 1500
				});
				$('.loader').hide();
				$('#btnText').show();
				document.getElementById("name").value = "";
				document.getElementById("email").value = "";
				document.getElementById("message").value = "";
			},
			error: function (error) {
				console.log(error);
				alert('An error occurred while sending the email.');
			}
		});
	});
});