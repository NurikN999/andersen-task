<?php

namespace App\Repositories;

use App\Repositories\Interfaces\MessageRepositoryInterface;
use App\Models\Message;

class MessageRepository implements MessageRepositoryInterface
{

    public function createMessage($data)
    {
        Message::create($data);
    }

    public function getAllMessages()
    {
        return Message::all();
    }

}
