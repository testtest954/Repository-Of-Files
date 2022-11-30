<button type="button" onclick="alertorsomethin()">Click Me</button>
<button type="button" onclick="testorwhat()">hey click for windwo open</button>
<script>
function alertorsomethin(){
	window.open('https://example.com')
}
function testorwhat(){
	proceed = confirm('Are you sure you want to unlock the secret? Please click ok to continue...');
	if(proceed){
		window.open('https://www.youtube.com/watch?v=dQw4w9WgXcQ', "name test is funny");
	}else{
		var myWindow = window.open("", "", "width=800,height=600");
		myWindow.document.write("<p>THERE IS NO MORE SECRET ITS ABOUT MONEY OOOOOOOH NOOOOOOOOOO</p>");
	}
	
}
</script>