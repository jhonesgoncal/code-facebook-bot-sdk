<?php

namespace CodeBot\Message;

class Image implements Message{

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
                    'type' => 'image',
                    'payload' => [
                        'url' => $messageText
                    ]
                ]
            ]
        ];
    }
}