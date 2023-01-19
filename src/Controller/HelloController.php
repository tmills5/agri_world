<?php
namespace App\Controller;
// routine component-similar to react importing
use Symfony\Component\Routing\Annotation\Route;
// http foundation component
use Symfony\Component\HttpFoundation\Response;

class HelloController {
  // routing. Symfony preferred way is by using attributes
    #[Route('/hello', name: 'hello')]
  function hello() {
    return new Response('Hello World!');
  }
};
