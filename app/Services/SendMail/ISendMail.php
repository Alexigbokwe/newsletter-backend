<?php
namespace App\Services\SendMail;

interface ISendMail{
    public function saveSubscriber($email);
}