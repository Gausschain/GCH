<?php
require 'sendgrid/SendGrid_loader.php';
require 'Swift-5.0.0/lib/swift_required.php';
function sendmaile($to_address,$subject,$contents) {
	$sendgrid=new SendGrid('app15632948@heroku.com','ovavuj46');
    	$mail=new SendGrid\Mail();
    	$mail->
			addTo('kevinranks@gmail.com')->
  			setFrom('admin@gausschain.com')->
  			setSubject('GaussChains')->
  			setText('hey gc man')->
  			setHtml('');
  	$sendgrid->smtp->send($mail);
}
sendmaile('kevinranks@gmail.com','hello','from gausschains');
?>