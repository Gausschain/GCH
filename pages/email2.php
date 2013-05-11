<?php // Setup Swift mailer parameters
        require '../sendgrid-php/SendGrid_loader.php';
        require '../swiftmailer-master/lib/swift_required.php';
        $transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 25);
        $transport->setUsername('app15565391@heroku.com');
        $transport->setPassword('9xx9j1d5');
        $swift = Swift_Mailer::newInstance($transport);

        // Create a message (subject)
        $message = new Swift_Message('hey');

        // attach the body of the email
        $message->setFrom('kevin@gausschain.com');
        $message->setBody('hello', 'text/html');
        $message->setTo('kevinranks@gmail.com');
        $message->addPart('let me breath', 'text/plain');

        // send message
        if ($recipients = $swift->send($message, $failures))
        {              
          // This will let us know how many users received this message
          echo 'Message sent out to '.$recipients.' users';exit;
        }
?>