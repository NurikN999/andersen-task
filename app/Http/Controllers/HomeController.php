<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\MessageRepositoryInterface;

class HomeController extends Controller
{
    private $messageRepository;

    public function __construct(MessageRepositoryInterface $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function index()
    {
        $messages = $this->messageRepository->getAllMessages();

        return view('home', compact('messages', $messages));
    }
}
