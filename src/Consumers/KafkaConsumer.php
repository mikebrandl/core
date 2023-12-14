<?php

namespace MB\Core\Consumers;

class KafkaConsumer
{
    public function consumeFromTopic(
        string $topicName,
        callable $messageHandler,
        ?string $consumerGroupId = null
    ): void {
        $consumerBuilder = Kafka::createConsumer()->subscribe($topicName)
            ->withHandler($messageHandler);

        if (! empty($consumerGroupId)) {
            $consumerBuilder->withConsumerGroupId($consumerGroupId);
        }

        $consumer = $consumerBuilder->build();

        $consumer->consume();
    }
}
