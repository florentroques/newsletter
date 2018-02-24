<?php

return [
         'title' => 'Contacts',
     'description' => 'Closer to us',
     'email' => [
             'send' => [
                 'subject' => ': subject of: name',
             'greeting' => 'Hello,: name',
             'intro' => [

                ],
             'outro' => [
                     'Please reply this to respond to the pesa',
             ],
         ],
     ],
     'form' => [
             'name' => 'Full Name',
         'email' => 'Email Address',
         'subject' => 'Subject',
         'message' => 'Messages',
     ],
     'button' => [
             'send' => 'Send Message'
     ],
     'message' => [
             'sent' => 'Thank you. Message successfully sent. ',
         'failedToSend' => 'The message failed to send. Please try again. ',
     ],
];|