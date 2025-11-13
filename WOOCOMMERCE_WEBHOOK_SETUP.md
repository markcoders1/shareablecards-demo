# WooCommerce Webhook Setup Guide

## Webhook URLs

Use these URLs in your WooCommerce webhook settings:

### Order Created Webhook
**URL:** `https://yourdomain.com/api/webhooks/woocommerce/order-created`  
**Event:** Order created  
**Method:** POST

### Order Updated Webhook
**URL:** `https://yourdomain.com/api/webhooks/woocommerce/order-updated`  
**Event:** Order updated  
**Method:** POST

## WooCommerce Setup Instructions

1. Log in to your WordPress admin panel
2. Go to **WooCommerce** → **Settings** → **Advanced** → **Webhooks**
3. Click **Add webhook**
4. Fill in the following:
   - **Name:** Order Created Webhook (or Order Updated Webhook)
   - **Status:** Active
   - **Topic:** Order created (or Order updated)
   - **Delivery URL:** `https://yourdomain.com/api/webhooks/woocommerce/order-created`
   - **Secret:** (Optional - for signature verification)
   - **API Version:** Select your WooCommerce API version
5. Click **Save webhook**

## Webhook Data Structure

The webhook will receive order data in the following format:

```json
{
  "id": 123,
  "number": "123",
  "status": "processing",
  "total": "99.99",
  "currency": "USD",
  "billing": {
    "first_name": "John",
    "last_name": "Doe",
    "email": "john@example.com",
    "phone": "+1234567890",
    "address_1": "123 Main St",
    "city": "New York",
    "state": "NY",
    "postcode": "10001",
    "country": "US"
  },
  "shipping": {
    "first_name": "John",
    "last_name": "Doe",
    "address_1": "123 Main St",
    "city": "New York",
    "state": "NY",
    "postcode": "10001",
    "country": "US"
  },
  "line_items": [
    {
      "id": 456,
      "name": "Product Name",
      "product_id": 789,
      "quantity": 2,
      "total": "99.99"
    }
  ],
  "payment_method": "stripe",
  "payment_method_title": "Credit Card",
  "date_created": "2024-01-01T12:00:00",
  "date_modified": "2024-01-01T12:00:00"
}
```

## Security (Optional)

To enable webhook signature verification, add to your `.env` file:

```env
WOocommerce_WEBHOOK_SECRET=your_secret_key_here
```

Then use the same secret in your WooCommerce webhook settings.

## Logging

Webhook requests are automatically logged to `storage/logs/laravel.log` for debugging purposes.

## Testing

You can test the webhook using curl:

```bash
curl -X POST https://yourdomain.com/api/webhooks/woocommerce/order-created \
  -H "Content-Type: application/json" \
  -d '{
    "id": 123,
    "number": "123",
    "status": "processing",
    "total": "99.99",
    "currency": "USD",
    "billing": {
      "email": "test@example.com",
      "first_name": "Test",
      "last_name": "User"
    },
    "line_items": []
  }'
```

## Customization

To customize how orders are processed, edit:
- `app/Http/Controllers/WooCommerceWebhookController.php`
- Modify the `processOrder()` method to add your business logic

