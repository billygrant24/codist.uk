<?php
namespace Codist;

use League\Container\ContainerInterface;
use Songbird\Event\Event;
use Songbird\PackageProviderAbstract;

class ReadTimeCalculatorProvider extends PackageProviderAbstract
{
    /**
     * @param \League\Container\ContainerInterface $app
     * @param \Songbird\Event\Event                $event
     */
    protected function registerEventListeners(ContainerInterface $app, Event $event)
    {
        $event->addListener('PrepareDocument', function ($event, $args) use ($app) {
            $args['document']['readingTime'] = $this->calculate($args['document']['body']);
        });
    }

    /**
     * @param string $content
     *
     * @return string
     */
    protected function calculate($content)
    {
        $totalWords = str_word_count($content);
        $wordsPerMinute = 200;
        $readTimeInSeconds = ($totalWords / $wordsPerMinute) * 60;
        $minutes = ceil($readTimeInSeconds / 60);

        // if the time is less than a minute, return that
        if ($minutes < 1) {
            return 'less than 1 minute read';
        } else {
            return sprintf('%d minute read', $minutes);
        }
    }
}