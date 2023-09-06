<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMessageRequest;
use App\Repositories\Interfaces\MessageRepositoryInterface;

class MessageController extends Controller
{

    private $messageRepository;

    public function __construct(MessageRepositoryInterface $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function store(StoreMessageRequest $request)
    {
        $data = $request->validated();
        dd($data);
        $this->messageRepository->createMessage($data);

        return redirect('/');
    }

}
