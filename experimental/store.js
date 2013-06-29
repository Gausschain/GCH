$(document).ready(function() {
	var text=""
	var ptext="" 
	function save() {
    	var text=$("textarea").val();
    	if(text!==ptext) {
    		$.post('store.php','text='+text);
    		ptext=text;
            $("#output").html(text);
    	}
    }
    window.setInterval(function(){
  		save();
	}, 5000);
	$("textarea").focus();
});