<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class WooCommerceWebhookController extends Controller
{
    /**
     * Handle WooCommerce order created webhook
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function handleOrderCreated(Request $request): JsonResponse
    {
        try {
            // Get the webhook payload
            $orderData = $request->all();

            // Log the full webhook data to console/log
            Log::info('========================================');
            Log::info('WooCommerce Order Created Webhook Received');
            Log::info('========================================');
            Log::info('Timestamp: ' . now()->toDateTimeString());
            Log::info('Request Method: ' . $request->method());
            Log::info('Request URL: ' . $request->fullUrl());
            Log::info('Request Headers: ' . json_encode($request->headers->all(), JSON_PRETTY_PRINT));
            Log::info('Raw Request Body: ' . $request->getContent());
            Log::info('Parsed Order Data:', ['data' => $orderData]);
            Log::info('Order ID: ' . ($orderData['id'] ?? 'N/A'));
            Log::info('Order Number: ' . ($orderData['number'] ?? 'N/A'));
            Log::info('Order Status: ' . ($orderData['status'] ?? 'N/A'));
            Log::info('Order Total: ' . ($orderData['total'] ?? 'N/A'));
            Log::info('Currency: ' . ($orderData['currency'] ?? 'N/A'));
            Log::info('Customer Email: ' . ($orderData['billing']['email'] ?? 'N/A'));
            Log::info('Line Items Count: ' . (isset($orderData['line_items']) ? count($orderData['line_items']) : 0));
            Log::info('========================================');
            
            // Also log as formatted JSON for easier reading
            Log::info('Webhook Data (Formatted JSON):', [
                'json' => json_encode($orderData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
            ]);
            
            // Output to error_log for console visibility
            error_log('=== WOOCOMMERCE WEBHOOK HIT ===');
            error_log('Order ID: ' . ($orderData['id'] ?? 'N/A'));
            error_log('Full Data: ' . json_encode($orderData, JSON_PRETTY_PRINT));
            error_log('===============================');

            // Validate the webhook data
            $validator = Validator::make($orderData, [
                'id' => 'required|integer',
                'number' => 'required|string',
                'status' => 'required|string',
                'total' => 'required|string',
                'currency' => 'required|string',
                'billing' => 'required|array',
                'billing.email' => 'required|email',
                'billing.first_name' => 'required|string',
                'billing.last_name' => 'required|string',
                'line_items' => 'required|array',
            ]);

            if ($validator->fails()) {
                Log::error('WooCommerce Webhook Validation Failed', [
                    'errors' => $validator->errors()->toArray(),
                    'data' => $orderData
                ]);

                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 400);
            }

            // Process the order data
            $this->processOrder($orderData);

            // Return success response with logged data for debugging
            return response()->json([
                'success' => true,
                'message' => 'Order processed successfully',
                'order_id' => $orderData['id'],
                'logged_data' => [
                    'order_id' => $orderData['id'] ?? null,
                    'order_number' => $orderData['number'] ?? null,
                    'status' => $orderData['status'] ?? null,
                    'total' => $orderData['total'] ?? null,
                    'currency' => $orderData['currency'] ?? null,
                    'timestamp' => now()->toDateTimeString()
                ],
                'full_data_received' => $orderData // Include full data for debugging
            ], 200);

        } catch (\Exception $e) {
            Log::error('WooCommerce Webhook Error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Error processing webhook: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Process the WooCommerce order data
     *
     * @param array $orderData
     * @return void
     */
    private function processOrder(array $orderData): void
    {
        // Extract order information
        $orderId = $orderData['id'];
        $orderNumber = $orderData['number'];
        $status = $orderData['status'];
        $total = $orderData['total'];
        $currency = $orderData['currency'];
        
        // Extract billing information
        $billing = $orderData['billing'];
        $customerEmail = $billing['email'];
        $customerFirstName = $billing['first_name'];
        $customerLastName = $billing['last_name'];
        $customerPhone = $billing['phone'] ?? null;
        
        // Extract shipping information if available
        $shipping = $orderData['shipping'] ?? [];
        
        // Extract line items (products)
        $lineItems = $orderData['line_items'] ?? [];
        
        // Extract payment information
        $paymentMethod = $orderData['payment_method'] ?? null;
        $paymentMethodTitle = $orderData['payment_method_title'] ?? null;
        $dateCreated = $orderData['date_created'] ?? null;
        $dateModified = $orderData['date_modified'] ?? null;

        // Log the processed order data
        Log::info('Processing WooCommerce Order', [
            'order_id' => $orderId,
            'order_number' => $orderNumber,
            'status' => $status,
            'total' => $total,
            'currency' => $currency,
            'customer_email' => $customerEmail,
            'items_count' => count($lineItems),
            'payment_method' => $paymentMethod
        ]);

        // Here you can add your business logic to:
        // - Create a user account if customer doesn't exist
        // - Create a subscription based on the order
        // - Send notification emails
        // - Update inventory
        // - Create records in your database
        // etc.

        // Example: Store order data (you'll need to create a model for this)
        // WooCommerceOrder::create([
        //     'woocommerce_order_id' => $orderId,
        //     'order_number' => $orderNumber,
        //     'status' => $status,
        //     'total' => $total,
        //     'currency' => $currency,
        //     'customer_email' => $customerEmail,
        //     'customer_first_name' => $customerFirstName,
        //     'customer_last_name' => $customerLastName,
        //     'customer_phone' => $customerPhone,
        //     'payment_method' => $paymentMethod,
        //     'order_data' => json_encode($orderData),
        //     'created_at' => $dateCreated ? date('Y-m-d H:i:s', strtotime($dateCreated)) : now(),
        // ]);
    }

    /**
     * Handle WooCommerce order updated webhook
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function handleOrderUpdated(Request $request): JsonResponse
    {
        try {
            $orderData = $request->all();

            // Log the full webhook data to console/log
            Log::info('========================================');
            Log::info('WooCommerce Order Updated Webhook Received');
            Log::info('========================================');
            Log::info('Timestamp: ' . now()->toDateTimeString());
            Log::info('Request Method: ' . $request->method());
            Log::info('Request URL: ' . $request->fullUrl());
            Log::info('Raw Request Body: ' . $request->getContent());
            Log::info('Parsed Order Data:', ['data' => $orderData]);
            Log::info('Order ID: ' . ($orderData['id'] ?? 'N/A'));
            Log::info('Order Number: ' . ($orderData['number'] ?? 'N/A'));
            Log::info('Order Status: ' . ($orderData['status'] ?? 'N/A'));
            Log::info('Order Total: ' . ($orderData['total'] ?? 'N/A'));
            Log::info('Currency: ' . ($orderData['currency'] ?? 'N/A'));
            Log::info('========================================');
            
            // Also log as formatted JSON for easier reading
            Log::info('Webhook Data (Formatted JSON):', [
                'json' => json_encode($orderData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
            ]);
            
            // Output to error_log for console visibility
            error_log('=== WOOCOMMERCE ORDER UPDATE WEBHOOK HIT ===');
            error_log('Order ID: ' . ($orderData['id'] ?? 'N/A'));
            error_log('Status: ' . ($orderData['status'] ?? 'N/A'));
            error_log('Full Data: ' . json_encode($orderData, JSON_PRETTY_PRINT));
            error_log('===========================================');

            // Process order update
            $this->processOrderUpdate($orderData);

            return response()->json([
                'success' => true,
                'message' => 'Order update processed successfully',
                'order_id' => $orderData['id']
            ], 200);

        } catch (\Exception $e) {
            Log::error('WooCommerce Order Update Webhook Error', [
                'message' => $e->getMessage()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Error processing webhook: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Process order update
     *
     * @param array $orderData
     * @return void
     */
    private function processOrderUpdate(array $orderData): void
    {
        // Handle order status updates
        $orderId = $orderData['id'];
        $status = $orderData['status'];

        Log::info('Processing WooCommerce Order Update', [
            'order_id' => $orderId,
            'status' => $status
        ]);

        // Add your business logic for order updates here
    }

    /**
     * Verify webhook signature (optional security)
     *
     * @param Request $request
     * @param string $signature
     * @return bool
     */
    private function verifyWebhookSignature(Request $request, string $signature): bool
    {
        $webhookSecret = config('woocommerce.webhook_secret', '');
        
        if (empty($webhookSecret)) {
            return true; // Skip verification if secret not configured
        }

        $payload = $request->getContent();
        $calculatedSignature = base64_encode(hash_hmac('sha256', $payload, $webhookSecret, true));

        return hash_equals($signature, $calculatedSignature);
    }
}
