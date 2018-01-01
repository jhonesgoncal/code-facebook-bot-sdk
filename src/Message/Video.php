<?php

namespace CodeBot\Message;

class Video implements Message{

    private $recipientId;

    public function _construct(string $recipientId){
        $this->recipientId = $recipientId;
    }
    public function  message (string  $messageText) : array {
        return [
            'recipient' => [
                'id' => 1
            ],
            'message' => [
                'attachment' => [
                    'type' => 'video',
                    'payload' => [
                        'url' => $messageText
                    ]
                ]
            ]
        ];
    }
}