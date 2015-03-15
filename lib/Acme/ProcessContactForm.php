<?php
namespace Acme;

use League\Event\EventInterface;
use Songbird\Listener\HttpEventListenerAbstract;

class ProcessContactForm extends HttpEventListenerAbstract
{
    /**
     * @param \League\Event\EventInterface $event
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(EventInterface $event)
    {
        $this->response->setContent('Sorry, I wasn\'t listening. Try again later');
    }
}