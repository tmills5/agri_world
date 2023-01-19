<?php
namespace App\Controller;
  use Psr\log\LoggerInterface;
  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  use Symfony\Component\Routing\Annotation\Route;
  use Symfony\Component\HttpFoundation\Response;

class LoggerController extends AbstractController {

  function logme(LoggerInterface $logger) {
    $logger->info('Service Started');
    $logger->error('An error occurred');
    return new Response('<html><body>Logged!</body></html>');
  }
  )

}
