<?php

namespace CodeBot\Message;

interface Message {

    public function _construct(string $recipientId);
    public function  message (string  $messageText) : array;
}