# 🌟 Webappz PHP SDK

**Webappz PHP SDK** is a powerful and easy-to-use library for interacting with the Webappz API. Automate your business operations and simplify sales with this fully-featured PHP SDK.

---

## 🚀 Features

- 🔗 **Simple Webhook Setup**  
  Easily configure webhooks to receive real-time product updates.

- 📦 **Product Data Management**  
  Retrieve structured product data directly from the API.

- 🛠️ **PSR-4 Autoloading**  
  Compatible with modern PHP projects and frameworks.

---

## 📦 Installation

Using Composer:

```bash
composer require webappz/webappz-sdk
```

---

## 🛠️ Usage

Basic Setup

```php
<?php

require 'vendor/autoload.php';

use WebAppz\WebAppz;

// Initialize the client with your API key
$client = new WebAppz('YOUR_API_KEY');

// Setting up a webhook
try {
    $response = $client->setupWebhook('keyId', 'https://your-webhook-url.com');
    echo 'Webhook setup: ' . $response['message'];
} catch (Exception $e) {
    echo 'Error setting up webhook: ' . $e->getMessage();
}
```

Fetch Webhook Status

```php
<?php

require 'vendor/autoload.php';

use WebAppz\WebAppz;

$client = new WebAppz('YOUR_API_KEY');

// Fetching webhook status
try {
    $response = $client->getWebhookStatus('keyId');
    echo 'Webhook status: ' . $response['message'];
} catch (Exception $e) {
    echo 'Error fetching webhook status: ' . $e->getMessage();
}
```

---
## 🌟 Support

If you encounter any issues or have any questions, feel free to reach out to support@webappz.org or @appflap on Telegram.

Powered by <a href="https://webappz.org" style="color: red;">webappz</a>