<?php

class fastMailer
{    
    public static function sendMail($to, $subject, $body, $from = null)
    {
        if (!$from)
        {
            $from = sfConfig::get('app_on_useful_things_default_sender_address');
        }
        
        $message = Swift_Message::newInstance()
          ->setFrom($from)
          ->setTo($to)
          ->setSubject($subject)
          ->addPart('<html><head></head><body>'.$body.'</body></html>', 'text/html')
        ;

        return sfContext::getInstance()->getMailer()->send($message);
    }
}