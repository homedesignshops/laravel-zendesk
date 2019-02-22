<p align="center"><img src="https://www.feedbackcompany.com/samenvoordeel/img/logo/thumbnail/logo-thefeedbackcompany.png"></p>
<p align="center">
<a href="https://travis-ci.org/homedesignshops/laravel-zendesk"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/homedesignshops/laravel-zendesk"><img src="https://poser.pugx.org/homedesignshops/laravel-zendesk/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/homedesignshops/laravel-zendesk"><img src="https://poser.pugx.org/homedesignshops/laravel-zendesk/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/homedesignshops/laravel-zendesk"><img src="https://poser.pugx.org/homedesignshops/laravel-zendesk/license.svg" alt="License"></a>
</p>

# Laravel Zendesk

This package provides an elegant wrapper for the official [Zendesk API](https://github.com/zendesk/zendesk_api_client_php) php library. It supports creating tickets, retrieving and updating tickets, deleting tickets, etc.

## Installation

Install this package via Composer using:

```bash
composer require homedesignshops/zendesk-laravel
```

> Laravel 5.5+ users: Skip the Service Provider installation below, because the package is configured for [Package Discovery](https://laravel.com/docs/5.7/packages#package-discovery).

```php
// config/app.php
'providers' => [
    ...
    Huddle\Zendesk\Providers\ZendeskServiceProvider::class,
    ...
];
```

## Configuration

Publish the config file to `app/config/zendesk.php` run:

```bash
php artisan vendor:publish --provider="HomeDesignShops\Zendesk\ZendeskServiceProvider"
```

Set your configuration using **environment variables** in your `.env` file:

`ZENDESK_SUBDOMAIN`

The subdomain part of your Zendesk organisation.

> Example: If your organisation domain is https://homedesignshops.zendesk.com, then use **homedesignshops** as the subdomain

`ZENDESK_USERNAME`\
The username for the authenticating account in your Zendesk organisation.

`ZENDESK_TOKEN`\
The API access token. This can be a `basic` token or your `oauth` token. You can manage your tokens one at: `https://{SUBDOMAIN}.zendesk.com/agent/admin/api/settings`

## Usage

### Helper

The `Zendesk` helper acts as a wrapper for an instance of the `Zendesk\API\Client` class. 
You can find all the methods available on this class in the 
[zendesk/zendesk_api_client_php](https://github.com/zendesk/zendesk_api_client_php#usage) repository. All of the methods 
are available through the helper.

#### Examples

```php
<?php
// Get all tickets
zendesk()->tickets()->findAll();

// Create a new ticket
zendesk()->tickets()->create([
  'subject' => 'Ticket subject',
  'comment' => [
      'body' => 'Test ticket content'
  ],
  'priority' => 'normal'
]);

// Update ticket status to urgent
zendesk()->tickets(123)->update([
  'status' => 'urgent'
]);

// Delete a ticket
zendesk()->tickets(123)->delete();
```

### Dependency injection

```php
<?php

use HomeDesignShops\Zendesk\ZendeskClient;

class TicketsClass {

    protected $zendeskClient;

    public function __construct(ZendeskClient $zendeskClient) {
        $this->zendeskClient = $zendeskClient;
    }

    public function addTicket() {
        $this->zendeskClient->tickets()->create([
              'subject' => 'Subject',
              'comment' => [
                    'body' => 'Ticket content.'
              ],
              'priority' => 'normal'
        ]);
    }

}
```

This package is available under the [MIT license](http://opensource.org/licenses/MIT).