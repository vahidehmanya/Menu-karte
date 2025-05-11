<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;


final class MailController extends AbstractController
{
    #[Route('/mail', name: 'mail')]
    public function sendEmail(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('tisch1@menukarte0.wip')
            ->to('kellner@menukarte0.wip')
            ->subject('Bestellung')
            ->text('extra Pommes');

        $mailer->send($email);

        return new Response('email versendet');
    }
}
