

function copyUsername(username) {
	var textarea = document.createElement("textarea");
	textarea.value = username;
	document.body.appendChild(textarea);
	textarea.select();
	document.execCommand("copy");
	document.body.removeChild(textarea);
	toastr.success("<span>Username copied to clipboard!</span>", "", {
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