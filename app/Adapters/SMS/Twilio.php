<?php

namespace App\Adapters\SMS;

use Twilio\Rest\Client;

class Twilio
{
    /**
     * @var str
     */
    protected $twilio_account_sid;

    /**
     * @var str
     */
    protected $twilio_auth_token;

    /**
     * @var str
     */
    protected $twilio_return_number;

    /** 
     * @var str
     */
    protected $recipient_number; 

    /** 
     * @var str
     */
    protected $message; 

    /** 
     * @var Obj
     */
    protected $client; 

    public function __construct() 
    {
        $this->twilio_account_sid = env('TWILIO_ACCOUNT_SID');
        $this->twilio_auth_token = env('TWILIO_AUTH_TOKEN');
        $this->twilio_return_number = env('TWILIO_RETURN_NUMBER');
        $this->client = new Client($this->twilio_account_sid, 
                                   $this->twilio_auth_token);
    }

    /**
     * Set the recipients number
     * 
     * @param str 
     */
    public function setRecipient($recipient_number)
    {
        $this->recipient_number = $recipient_number;

        return $this;
    }

    /**
     * Set the message
     * 
     * @param str 
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Send it off
     */
    public function send()
    {
        try {
            // Use the Twilio REST API client to send a text message
            $message = $this->client->messages->create(
                            $this->recipient_number, [
                                'from'  => $this->twilio_return_number, 
                                'body'  => $this->message
                            ]);
        } catch(Services_Twilio_RestException $e) {
            // Return and render the exception object, or handle the error as needed
            return $e;
        };

    }
}

