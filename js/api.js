
function api() {
	var url = "https://api.github.com/users/danilohbp"

	let xhr = new XMLHttpRequest();
	xhr.open('GET', url, true);
	xhr.send();

	document.getElementById('teste').innerHTML = xhr.response.data.avatar_url;

}



