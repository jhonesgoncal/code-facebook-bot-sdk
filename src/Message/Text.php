<?php

namespace CodeBot\Message;

class Text {

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
                'text' => $messageText,
                'metadata' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];
    }
}