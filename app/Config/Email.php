<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public $fromEmail  = '';
    public $fromName   = 'Coir Roots PH';
    public $recipients = '';

    public $protocol   = 'smtp';
    public $SMTPHost   = '';
    public $SMTPUser   = '';
    public $SMTPPass   = '';
    public $SMTPPort   = 587;
    public $SMTPCrypto = 'tls';

    public $mailType  = 'html';
    public $charset   = 'utf-8';
    public $newline   = "\r\n";
    public $wordWrap  = true;

    public function __construct()
    {
        parent::__construct();

        $this->fromEmail = env('email.fromEmail', env('email_fromEmail', $this->fromEmail));
        $this->fromName = env('email.fromName', env('email_fromName', $this->fromName));
        $this->protocol = env('email.protocol', env('email_protocol', $this->protocol));
        $this->SMTPHost = env('email.SMTPHost', env('email_SMTPHost', $this->SMTPHost));
        $this->SMTPUser = env('email.SMTPUser', env('email_SMTPUser', $this->SMTPUser));
        $this->SMTPPass = env('email.SMTPPass', env('email_SMTPPass', $this->SMTPPass));
        $this->SMTPPort = (int) env('email.SMTPPort', env('email_SMTPPort', $this->SMTPPort));
        $this->SMTPCrypto = env('email.SMTPCrypto', env('email_SMTPCrypto', $this->SMTPCrypto));
        $this->mailType = env('email.mailType', env('email_mailType', $this->mailType));
        $this->charset = env('email.charset', env('email_charset', $this->charset));
        $this->newline = env('email.newline', env('email_newline', $this->newline));
    }
}
