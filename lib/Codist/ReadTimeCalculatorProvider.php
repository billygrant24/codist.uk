<?php
namespace Codist;

use League\Event\Emitter;
use Songbird\PackageProviderAbstract;

class ReadTimeCalculatorProvider extends PackageProviderAbstract
{
    /**
     * @param \League\Event\Emitter $event
     */
    protected function registerEventListeners(Emitter $event)
    {
        $event->addListener('ContentEvent', function ($event) {
            $event->content['readingTime'] = $this->calculate($event->content['body']);
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