<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class PostmarkNameCommaNotEscaped extends Command
{
    protected static $defaultName = 'postmark-name-comma-not-escaped';
    private $mailer;

    public function __construct(MailerInterface $mailer) {

        $this->mailer = $mailer;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Dumping the string to see the comma hasn't been escaped
        $address = new Address('me@domain.tld', 'My, Name');
        var_dump($address->toString());

        // Uncomment to test with your own email address and Postmark Server Token
//        $email = (new Email())
//            ->from('from@domain.tld')
//            ->to(new Address('to@domain.tld', 'My, Name'))
//            ->subject('Reproducing a bug')
//            ->html('<p>I\'m reproducing a bug</p>');
//
//        $this->mailer->send($email);

        return Command::SUCCESS;
    }
}
