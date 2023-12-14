<?php

namespace MB\Core\Commands;

use Closure;
use Illuminate\Console\Command;
use Junges\Kafka\Contracts\KafkaConsumerMessage;
use MB\Core\Consumers\KafkaConsumer;

abstract class AbstractConsumerCommand extends Command
{
    protected KafkaConsumer $consumer;

    public function __construct(KafkaConsumer $consumer)
    {
        parent::__construct();
        $this->consumer = $consumer;
    }

    public function handle(): void
    {
        $this->consumer->consumeFromTopic(
            $this->getTopic(),
            Closure::fromCallable([$this, 'handleMessage'])
        );
    }

    abstract public function getTopic(): string;

    abstract protected function handleMessage(KafkaConsumerMessage $message): void;
}
