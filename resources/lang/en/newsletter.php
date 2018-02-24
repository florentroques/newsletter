<?php

return [
    'title' => 'Newsletter',
    'subscribe' => 'Subscribe Newsletter',
    'unsubscribe' => 'Unsubscribe',
    'reason' => 'We are sad to know. If you have time, feel free to fill the reason for unsubscribing. ',
    'email' => [
        'subscribe' => [
            'subject' => 'Newsletter Subscription Confirmation',
            'greeting' => 'Hello,: name',
            'actionText' => 'Confirm',
            'intro' => [
                'Thank you for filling out the registration form for subscribing to Newsletters.',
                'Just one more step for you to get the latest information through your inbox.',
            ],
            'outro' => [
                'By clicking on "Subscribe Confirmation" you agree to the terms and conditions.',
            ],
        ],
        'confirm' => [
            'subject' => 'Subscription Has Been Confirmed',
            'greeting' => 'Hello,: name',
            'intro' => [
                'Your registration has been confirmed. Thank you for subscribing to the newsletter ' . config('app.name'),
            ],
            'outro' => [
                'By subscribing to the newsletter, you agree to the applicable terms and conditions.',
                'We promise no spam or junk email, and no more than one email every week. We are not that diligent. ',
            ],
        ],
    ],
    'form' => [
        'name' => 'Full Name',
        'email' => 'Email Address',
        'reasonOther' => 'More - Please fill in the form below',
    ],
    'button' => [
        'subscribe' => 'Subscribe Now!',
        'send' => 'Submit',
    ],
    'message' => [
        'subscribed' => 'Thank you for subscribing to the newsletter. Please check your inbox. ',
        'confirmed' => 'Your subscription status has been confirmed.',
        'unsubscribed' => 'You have been unsubscribed.',
        'noDefaultList' => 'Default list is not defined.',
        'errorNoDefaultList' => 'Default list is not defined. Please <a href="' . Route('contact') . '"> contact </a> our sys admin for more information. ',
        'emailNotFound' => 'Email address not found.',
        'emailInvalid' => 'Invalid email address.',
    ],

    // sub lang
    'subscribers' => [
        'title' => 'Subscriber',
        'create' => 'Add Customer',
        'list' => 'Customer List',
        'warning' => 'Warning',
        'edit' => 'Change: name',
        'userDeleted' => '* Deleted *',
        'form' => [
            'name' => 'Full Name',
            'email' => 'Email Address',
            'list' => 'List',
            'keyword' => 'Keywords',
            'user' => 'User',
            'status' => 'Status',
            'joinDate' => 'Date',
            'action' => 'Action',
            'password' => 'Password',
        ],
        'button' => [
            'create' => 'Add Customer',
            'save' => 'Save Customer',
            'truncate' => 'Delete All',
            'export' => 'Export',
            'import' => 'Import',
            'search' => 'Search',
            'close' => 'Close',
            'delete' => 'Delete',
        ],
        'message' => [
            'created' => 'New customer with name: name (: email) successfully added.',
            'noSubscriber' => 'Customer data unavailable.',
            'notFound' => 'Customer data not found in bassidata.',
            'deleteWarning' => 'Are you sure you want to delete this data? This action is non-refundable. ',
            'passwordConfirm' => 'Enter a password to continue this action.',
            'edited' => 'Customer data: name updated successfully',
            'deleted' => 'Customer with name: name (: email) successfully deleted.',
            'truncated' => 'All customer data has been deleted.',
        ],
    ],

    'lists' => [
        'title' => 'List (Group)',
        'edit' => 'Change: name',
        'yes' => 'Yes',
        'no' => 'No',
        'create' => 'Add List',
        'form' => [
            'user' => 'User',
            'name' => 'Name',
            'description' => 'Description',
            'totalSubs' => 'Total Customers',
            'primary' => 'Primary',
            'createDate' => 'Date Created',
            'action' => 'Action',
        ],
        'button' => [
            'close' => 'Close',
            'create' => 'Add New',
            'save' => 'Save',
            'delete' => 'Delete',
        ],
        'message' => [
            'created' => 'New list with name: name successfully created.',
            'deleted' => 'List was successfully deleted.',
        ],
        'log' => [
            'create' => 'Create a new list',
            'edit' => 'Change list',
            'delete' => 'Delete list',
        ],
    ],
];