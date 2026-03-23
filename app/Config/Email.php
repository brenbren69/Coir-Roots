<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public $fromEmail  = 'brendanmalabanan6@gmail.com';
    public $fromName   = 'TechParts Hub';
    public $recipients = '';

    public $protocol   = 'smtp';
    public $SMTPHost   = 'smtp.gmail.com';
    public $SMTPUser   = 'brendanmalabanan6@gmail.com';
    public $SMTPPass   = 'rrdshweguwoyxksf'; // 16-character App Password, no spaces
    public $SMTPPort   = 587;
    public $SMTPCrypto = 'tls';

    public $mailType  = 'html';
    public $charset   = 'utf-8';
    public $newline   = "\r\n";
    public $wordWrap  = true;
}
