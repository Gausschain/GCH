<?php
require '../sendgrid-php/SendGrid_loader.php';
require '../swiftmailer-master/lib/swift_required.php';
function sendmaile($to_address,$subject,$contents) {
	$sendgrid=new SendGrid('app15565391@heroku.com','9xx9j1d5');
    	$mail=new SendGrid\Mail();
    	$mail->
			addTo('kevinranks@gmail.com')->
  			setFrom('admin@gausschain.com')->
  			setSubject('GaussChains')->
  			setText('hey gc man')->
  			setHtml('');
  	mail("kevinranks@gmail.com", "A subject", "A message", "FROM: noreply@mail.com");
  	//$sendgrid->smtp->send($mail);
}
sendmaile('kevinranks@gmail.com','hello','from gausschains');
?>