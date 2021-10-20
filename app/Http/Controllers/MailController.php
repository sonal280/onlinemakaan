<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\EmailDemo;
use Symfony\Component\HttpFoundation\Response;
use App\Repositories\MailRepository;
use App\Repositories\MailRepositoryInterface;

class MailController extends Controller {

    private $mailRepository;
    public function __construct(MailRepositoryInterface $mailRepository)
    {
        $this->mailRepository = $mailRepository;
    }
    
    public function sendEmail() {
        $this->mailRepository->sendEmail();
    }

}