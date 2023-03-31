$('.loader').hide();
$(document).ready(function () {
	$('#contact-form').submit(function (event) {
		event.preventDefault();
		$('.loader').show();
		$('#btnText').hide();
		var formData = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: 'send-email.php',
			data: formData,
			success: function (response) {
				Swal.fire({
					icon: 'succès',
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

function copyUsername(username) {
	var textarea = document.createElement("textarea");
	textarea.value = username;
	document.body.appendChild(textarea);
	textarea.select();
	document.execCommand("copy");
	document.body.removeChild(textarea);
	toastr.success("<span>Nom d'utilisateur copié dans le presse-papiers !</span>", "", {
		"progressBar": true,
		"timeOut": 5000,
		"extendedTimeOut": 1000,
		"preventDuplicates": true,
		"showDuration": 300,
		"hideDuration": 1000,
		"padding": "10px",

	});
}

$(document).ready(function () {
	$(".nav-link").on('click', function (event) {
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 700, function () {
				window.location.hash = hash;
			});
		}
	});
});