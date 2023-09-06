<?php

namespace App\Repositories\Interfaces;

interface MessageRepositoryInterface
{
    public function createMessage($data);
    public function getAllMessages();
}
