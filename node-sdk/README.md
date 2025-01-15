# 🌟 Webappz SDK

[![npm version](https://img.shields.io/npm/v/@webappz/webappz-sdk?color=%23E53935&style=for-the-badge)](https://www.npmjs.com/package/@webappz/webappz-sdk)
[![License](https://img.shields.io/npm/l/@webappz/webappz-sdk?style=for-the-badge)](LICENSE)
[![TypeScript](https://img.shields.io/badge/TypeScript-Supported-%23007ACC?style=for-the-badge)](https://www.typescriptlang.org/)

**Webappz SDK** is a powerful and easy-to-use library for interacting with the Webappz API. Automate your business operations and simplify sales with this fully-featured SDK.

---

## 🚀 Features

- 🔗 **Simple Webhook Setup**  
  Easily configure webhooks to receive real-time product updates.

- 📦 **Product Data Management**  
  Retrieve structured product data directly from the API.

- 🛠️ **Fully TypeScript-Supported**  
  Enjoy type safety and auto-completion in your projects.

---

## 📦 Installation

Using npm:

```bash
npm install @webappz/webappz-sdk
```

Using yarn:

```bash
yarn add @webappz/webappz-sdk
```

---

## 🛠️ Usage

Basic Setup

```javascript
const { WebappzClient } = require('webappz-sdk');

const client = new WebappzClient({
  apiKey: 'YOUR_API_KEY'
});

// Setting up a webhook
client.setupWebhook('https://your-webhook-url.com')
  .then(response => {
    console.log('Webhook setup:', response);
  })
  .catch(err => {
    console.error('Error setting up webhook:', err);
  });
```

Fetch Webhook Status

```javascript
client.getWebhookStatus()
  .then(status => {
    console.log('Webhook status:', status);
  })
  .catch(err => {
    console.error('Error fetching webhook status:', err);
  });
```

---

## 🌟 Support

If you encounter any issues or have any questions, feel free to reach out to support@webappz.org or @appflap (Telegram).

Powered by <a href="https://webappz.org" style="color: red;">webappz</a>