function HandleLoginData(Event){
	Event.preventDefault();
	const DATA = new FormData(Event.target);
	const JS_DATA = Object.fromEntries(DATA.entries());
	console.log(JS_DATA);
	alert(JS_DATA.Password);
}

function ListenForLoginData(){
	const FORM = document.getElementById("LoginForm");
	FORM.addEventListener("submit", HandleLoginData);
}
