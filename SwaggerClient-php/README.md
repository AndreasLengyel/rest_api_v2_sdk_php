# SwaggerClient-php
This is the next generation UltraCart REST API...

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0.0
- Build date: 2017-09-18T14:58:50.430-04:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [http://www.ultracart.com](http://www.ultracart.com)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/UltraCart/rest_api_v2_sdk_php.git"
    }
  ],
  "require": {
    "UltraCart/rest_api_v2_sdk_php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\Api\AutoorderApi();
$auto_order_oid = 56; // int | The auto order oid to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $api_instance->getAutoOrder($auto_order_oid, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoorderApi->getAutoOrder: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AutoorderApi* | [**getAutoOrder**](docs/Api/AutoorderApi.md#getautoorder) | **GET** /auto_order/auto_orders/{auto_order_oid} | Retrieve an auto order
*AutoorderApi* | [**getAutoOrders**](docs/Api/AutoorderApi.md#getautoorders) | **GET** /auto_order/auto_orders | Retrieve auto orders
*AutoorderApi* | [**updateAutoOrder**](docs/Api/AutoorderApi.md#updateautoorder) | **PUT** /auto_order/auto_orders/{auto_order_oid} | Update an auto order
*ChargebackApi* | [**deleteChargeback**](docs/Api/ChargebackApi.md#deletechargeback) | **DELETE** /chargeback/chargebacks/{chargeback_dispute_oid} | Delete a chargeback
*ChargebackApi* | [**getChargebackDispute**](docs/Api/ChargebackApi.md#getchargebackdispute) | **GET** /chargeback/chargebacks/{chargeback_dispute_oid} | Retrieve a chargeback
*ChargebackApi* | [**getChargebackDisputes**](docs/Api/ChargebackApi.md#getchargebackdisputes) | **GET** /chargeback/chargebacks | Retrieve chargebacks
*ChargebackApi* | [**insertChargeback**](docs/Api/ChargebackApi.md#insertchargeback) | **POST** /chargeback/chargebacks | Insert a chargeback
*ChargebackApi* | [**updateChargeback**](docs/Api/ChargebackApi.md#updatechargeback) | **PUT** /chargeback/chargebacks/{chargeback_dispute_oid} | Update a chargeback
*CheckoutApi* | [**cityState**](docs/Api/CheckoutApi.md#citystate) | **POST** /checkout/city_state | City/State for Zip
*CheckoutApi* | [**finalizeOrder**](docs/Api/CheckoutApi.md#finalizeorder) | **POST** /checkout/cart/finalizeOrder | Finalize Order
*CheckoutApi* | [**getCart**](docs/Api/CheckoutApi.md#getcart) | **GET** /checkout/cart | Get cart
*CheckoutApi* | [**getCartByCartId**](docs/Api/CheckoutApi.md#getcartbycartid) | **GET** /checkout/cart/{cart_id} | Get cart (by cart id)
*CheckoutApi* | [**getCartByReturnCode**](docs/Api/CheckoutApi.md#getcartbyreturncode) | **GET** /checkout/return/{return_code} | Get cart (by return code)
*CheckoutApi* | [**handoffCart**](docs/Api/CheckoutApi.md#handoffcart) | **POST** /checkout/cart/handoff | Handoff cart
*CheckoutApi* | [**login**](docs/Api/CheckoutApi.md#login) | **POST** /checkout/cart/profile/login | Profile login
*CheckoutApi* | [**logout**](docs/Api/CheckoutApi.md#logout) | **POST** /checkout/cart/profile/logout | Profile logout
*CheckoutApi* | [**register**](docs/Api/CheckoutApi.md#register) | **POST** /checkout/cart/profile/register | Profile registration
*CheckoutApi* | [**relatedItemsForCart**](docs/Api/CheckoutApi.md#relateditemsforcart) | **POST** /checkout/related_items | Related items
*CheckoutApi* | [**relatedItemsForItem**](docs/Api/CheckoutApi.md#relateditemsforitem) | **POST** /checkout/relatedItems/{item_id} | Related items (specific item)
*CheckoutApi* | [**setupBrowserKey**](docs/Api/CheckoutApi.md#setupbrowserkey) | **PUT** /checkout/browser_key | Setup Browser Application
*CheckoutApi* | [**updateCart**](docs/Api/CheckoutApi.md#updatecart) | **PUT** /checkout/cart | Update cart
*CheckoutApi* | [**validateCart**](docs/Api/CheckoutApi.md#validatecart) | **POST** /checkout/cart/validate | Validate
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /customer/customers/{customer_profile_oid} | Delete a customer
*CustomerApi* | [**getCustomer**](docs/Api/CustomerApi.md#getcustomer) | **GET** /customer/customers/{customer_profile_oid} | Retrieve a customer
*CustomerApi* | [**getCustomers**](docs/Api/CustomerApi.md#getcustomers) | **GET** /customer/customers | Retrieve customers
*CustomerApi* | [**insertCustomer**](docs/Api/CustomerApi.md#insertcustomer) | **POST** /customer/customers | Insert a customer
*CustomerApi* | [**updateCustomer**](docs/Api/CustomerApi.md#updatecustomer) | **PUT** /customer/customers/{customer_profile_oid} | Update a customer
*FulfillmentApi* | [**acknowledgeOrders**](docs/Api/FulfillmentApi.md#acknowledgeorders) | **PUT** /fulfillment/distribution_centers/{distribution_center_code}/acknowledgements | Acknowledge receipt of orders.
*FulfillmentApi* | [**getDistributionCenterOrders**](docs/Api/FulfillmentApi.md#getdistributioncenterorders) | **GET** /fulfillment/distribution_centers/{distribution_center_code}/orders | Retrieve orders queued up for this distribution center.
*FulfillmentApi* | [**getDistributionCenters**](docs/Api/FulfillmentApi.md#getdistributioncenters) | **GET** /fulfillment/distribution_centers | Retrieve distribution centers
*FulfillmentApi* | [**shipOrders**](docs/Api/FulfillmentApi.md#shiporders) | **POST** /fulfillment/distribution_centers/{distribution_center_code}/shipments | Mark orders as shipped
*FulfillmentApi* | [**updateInventory**](docs/Api/FulfillmentApi.md#updateinventory) | **POST** /fulfillment/distribution_centers/{distribution_center_code}/inventory | Update inventory
*ItemApi* | [**deleteItem**](docs/Api/ItemApi.md#deleteitem) | **DELETE** /item/items/{merchant_item_oid} | Delete an item
*ItemApi* | [**getItem**](docs/Api/ItemApi.md#getitem) | **GET** /item/items/{merchant_item_oid} | Retrieve an item
*ItemApi* | [**getItemByMerchantItemId**](docs/Api/ItemApi.md#getitembymerchantitemid) | **GET** /item/items/merchant_item_id/{merchant_item_id} | Retrieve an item by item id
*ItemApi* | [**getItems**](docs/Api/ItemApi.md#getitems) | **GET** /item/items | Retrieve items
*ItemApi* | [**insertItem**](docs/Api/ItemApi.md#insertitem) | **POST** /item/items | Create an item
*ItemApi* | [**updateItem**](docs/Api/ItemApi.md#updateitem) | **PUT** /item/items/{merchant_item_oid} | Update an item
*ItemApi* | [**uploadTemporaryMultimedia**](docs/Api/ItemApi.md#uploadtemporarymultimedia) | **POST** /item/temp_multimedia | Upload an image to the temporary multimedia.
*OauthApi* | [**oauthAccessToken**](docs/Api/OauthApi.md#oauthaccesstoken) | **POST** /oauth/token | Exchange authorization code for access token.
*OauthApi* | [**oauthRevoke**](docs/Api/OauthApi.md#oauthrevoke) | **POST** /oauth/revoke | Revoke this OAuth application.
*OrderApi* | [**cancelOrder**](docs/Api/OrderApi.md#cancelorder) | **POST** /order/orders/{order_id}/cancel | Cancel an order
*OrderApi* | [**deleteOrder**](docs/Api/OrderApi.md#deleteorder) | **DELETE** /order/orders/{order_id} | Delete an order
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **GET** /order/orders/{order_id} | Retrieve an order
*OrderApi* | [**getOrders**](docs/Api/OrderApi.md#getorders) | **GET** /order/orders | Retrieve orders
*OrderApi* | [**getOrdersByQuery**](docs/Api/OrderApi.md#getordersbyquery) | **POST** /order/orders/query | Retrieve orders
*OrderApi* | [**resendReceipt**](docs/Api/OrderApi.md#resendreceipt) | **POST** /order/orders/{order_id}/resend_receipt | Resend receipt
*OrderApi* | [**resendShipmentConfirmation**](docs/Api/OrderApi.md#resendshipmentconfirmation) | **POST** /order/orders/{order_id}/resend_shipment_confirmation | Resend shipment confirmation
*OrderApi* | [**updateOrder**](docs/Api/OrderApi.md#updateorder) | **PUT** /order/orders/{order_id} | Update an order
*WebhookApi* | [**deleteWebhook**](docs/Api/WebhookApi.md#deletewebhook) | **DELETE** /webhook/webhooks/{webhookOid} | Delete a webhook
*WebhookApi* | [**getWebhookLog**](docs/Api/WebhookApi.md#getwebhooklog) | **GET** /webhook/webhooks/{webhookOid}/logs/{requestId} | Retrieve an individual log
*WebhookApi* | [**getWebhookLogSummaries**](docs/Api/WebhookApi.md#getwebhooklogsummaries) | **GET** /webhook/webhooks/{webhookOid}/logs | Retrieve the log summaries
*WebhookApi* | [**getWebhooks**](docs/Api/WebhookApi.md#getwebhooks) | **GET** /webhook/webhooks | Retrieve webhooks
*WebhookApi* | [**insertWebhook**](docs/Api/WebhookApi.md#insertwebhook) | **POST** /webhook/webhooks | Add a webhook
*WebhookApi* | [**resendEvent**](docs/Api/WebhookApi.md#resendevent) | **POST** /webhook/webhooks/{webhookOid}/reflow/{eventName} | Resend events to the webhook endpoint.
*WebhookApi* | [**updateWebhook**](docs/Api/WebhookApi.md#updatewebhook) | **PUT** /webhook/webhooks/{webhookOid} | Update a webhook


## Documentation For Models

 - [ApiUserApplicationProfile](docs/Model/ApiUserApplicationProfile.md)
 - [AutoOrder](docs/Model/AutoOrder.md)
 - [AutoOrderItem](docs/Model/AutoOrderItem.md)
 - [AutoOrderItemOption](docs/Model/AutoOrderItemOption.md)
 - [AutoOrderResponse](docs/Model/AutoOrderResponse.md)
 - [AutoOrdersResponse](docs/Model/AutoOrdersResponse.md)
 - [BaseResponse](docs/Model/BaseResponse.md)
 - [Cart](docs/Model/Cart.md)
 - [CartAffiliate](docs/Model/CartAffiliate.md)
 - [CartBilling](docs/Model/CartBilling.md)
 - [CartBuysafe](docs/Model/CartBuysafe.md)
 - [CartCheckout](docs/Model/CartCheckout.md)
 - [CartCoupon](docs/Model/CartCoupon.md)
 - [CartCustomerProfile](docs/Model/CartCustomerProfile.md)
 - [CartCustomerProfileAddress](docs/Model/CartCustomerProfileAddress.md)
 - [CartCustomerProfileCreditCard](docs/Model/CartCustomerProfileCreditCard.md)
 - [CartFinalizeOrderRequest](docs/Model/CartFinalizeOrderRequest.md)
 - [CartFinalizeOrderRequestOptions](docs/Model/CartFinalizeOrderRequestOptions.md)
 - [CartFinalizeOrderResponse](docs/Model/CartFinalizeOrderResponse.md)
 - [CartGift](docs/Model/CartGift.md)
 - [CartGiftCertificate](docs/Model/CartGiftCertificate.md)
 - [CartItem](docs/Model/CartItem.md)
 - [CartItemAttribute](docs/Model/CartItemAttribute.md)
 - [CartItemMultimedia](docs/Model/CartItemMultimedia.md)
 - [CartItemMultimediaThumbnail](docs/Model/CartItemMultimediaThumbnail.md)
 - [CartItemOption](docs/Model/CartItemOption.md)
 - [CartItemOptionValue](docs/Model/CartItemOptionValue.md)
 - [CartItemPhysical](docs/Model/CartItemPhysical.md)
 - [CartItemVariationSelection](docs/Model/CartItemVariationSelection.md)
 - [CartKitComponentOption](docs/Model/CartKitComponentOption.md)
 - [CartMarketing](docs/Model/CartMarketing.md)
 - [CartPayment](docs/Model/CartPayment.md)
 - [CartPaymentAmazon](docs/Model/CartPaymentAmazon.md)
 - [CartPaymentCheck](docs/Model/CartPaymentCheck.md)
 - [CartPaymentCreditCard](docs/Model/CartPaymentCreditCard.md)
 - [CartPaymentPurchaseOrder](docs/Model/CartPaymentPurchaseOrder.md)
 - [CartProfileLoginRequest](docs/Model/CartProfileLoginRequest.md)
 - [CartProfileLoginResponse](docs/Model/CartProfileLoginResponse.md)
 - [CartProfileRegisterRequest](docs/Model/CartProfileRegisterRequest.md)
 - [CartProfileRegisterResponse](docs/Model/CartProfileRegisterResponse.md)
 - [CartResponse](docs/Model/CartResponse.md)
 - [CartSettings](docs/Model/CartSettings.md)
 - [CartSettingsBilling](docs/Model/CartSettingsBilling.md)
 - [CartSettingsGift](docs/Model/CartSettingsGift.md)
 - [CartSettingsGiftWrap](docs/Model/CartSettingsGiftWrap.md)
 - [CartSettingsPayment](docs/Model/CartSettingsPayment.md)
 - [CartSettingsPaymentAmazon](docs/Model/CartSettingsPaymentAmazon.md)
 - [CartSettingsPaymentCreditCard](docs/Model/CartSettingsPaymentCreditCard.md)
 - [CartSettingsPaymentPayPal](docs/Model/CartSettingsPaymentPayPal.md)
 - [CartSettingsProvince](docs/Model/CartSettingsProvince.md)
 - [CartSettingsShipping](docs/Model/CartSettingsShipping.md)
 - [CartSettingsShippingCalendar](docs/Model/CartSettingsShippingCalendar.md)
 - [CartSettingsShippingEstimate](docs/Model/CartSettingsShippingEstimate.md)
 - [CartSettingsTaxes](docs/Model/CartSettingsTaxes.md)
 - [CartSettingsTerms](docs/Model/CartSettingsTerms.md)
 - [CartShipping](docs/Model/CartShipping.md)
 - [CartSummary](docs/Model/CartSummary.md)
 - [CartTaxes](docs/Model/CartTaxes.md)
 - [CartUpsellAfter](docs/Model/CartUpsellAfter.md)
 - [CartValidationRequest](docs/Model/CartValidationRequest.md)
 - [CartValidationResponse](docs/Model/CartValidationResponse.md)
 - [ChargebackDispute](docs/Model/ChargebackDispute.md)
 - [ChargebackDisputeResponse](docs/Model/ChargebackDisputeResponse.md)
 - [ChargebackDisputesResponse](docs/Model/ChargebackDisputesResponse.md)
 - [CheckoutHandoffRequest](docs/Model/CheckoutHandoffRequest.md)
 - [CheckoutHandoffResponse](docs/Model/CheckoutHandoffResponse.md)
 - [CheckoutSetupBrowserKeyRequest](docs/Model/CheckoutSetupBrowserKeyRequest.md)
 - [CheckoutSetupBrowserKeyResponse](docs/Model/CheckoutSetupBrowserKeyResponse.md)
 - [CityStateZip](docs/Model/CityStateZip.md)
 - [Currency](docs/Model/Currency.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerBilling](docs/Model/CustomerBilling.md)
 - [CustomerCard](docs/Model/CustomerCard.md)
 - [CustomerPricingTier](docs/Model/CustomerPricingTier.md)
 - [CustomerResponse](docs/Model/CustomerResponse.md)
 - [CustomerShipping](docs/Model/CustomerShipping.md)
 - [CustomersResponse](docs/Model/CustomersResponse.md)
 - [Distance](docs/Model/Distance.md)
 - [DistributionCenter](docs/Model/DistributionCenter.md)
 - [DistributionCentersResponse](docs/Model/DistributionCentersResponse.md)
 - [Error](docs/Model/Error.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [FulfillmentInventory](docs/Model/FulfillmentInventory.md)
 - [FulfillmentShipment](docs/Model/FulfillmentShipment.md)
 - [HTTPHeader](docs/Model/HTTPHeader.md)
 - [Item](docs/Model/Item.md)
 - [ItemAccounting](docs/Model/ItemAccounting.md)
 - [ItemAmember](docs/Model/ItemAmember.md)
 - [ItemAutoOrder](docs/Model/ItemAutoOrder.md)
 - [ItemAutoOrderStep](docs/Model/ItemAutoOrderStep.md)
 - [ItemAutoOrderStepArbitraryUnitCostSchedule](docs/Model/ItemAutoOrderStepArbitraryUnitCostSchedule.md)
 - [ItemAutoOrderStepGrandfatherPricing](docs/Model/ItemAutoOrderStepGrandfatherPricing.md)
 - [ItemCCBill](docs/Model/ItemCCBill.md)
 - [ItemChannelPartnerMapping](docs/Model/ItemChannelPartnerMapping.md)
 - [ItemChargeback](docs/Model/ItemChargeback.md)
 - [ItemChargebackAddendum](docs/Model/ItemChargebackAddendum.md)
 - [ItemChargebackAdjustmentRequest](docs/Model/ItemChargebackAdjustmentRequest.md)
 - [ItemCheckout](docs/Model/ItemCheckout.md)
 - [ItemContent](docs/Model/ItemContent.md)
 - [ItemContentAssignment](docs/Model/ItemContentAssignment.md)
 - [ItemContentAttribute](docs/Model/ItemContentAttribute.md)
 - [ItemContentMultimedia](docs/Model/ItemContentMultimedia.md)
 - [ItemContentMultimediaThumbnail](docs/Model/ItemContentMultimediaThumbnail.md)
 - [ItemDigitalDelivery](docs/Model/ItemDigitalDelivery.md)
 - [ItemDigitalItem](docs/Model/ItemDigitalItem.md)
 - [ItemEbay](docs/Model/ItemEbay.md)
 - [ItemEbayCategorySpecific](docs/Model/ItemEbayCategorySpecific.md)
 - [ItemEbayMarketListing](docs/Model/ItemEbayMarketListing.md)
 - [ItemEbayMarketPlaceAnalysis](docs/Model/ItemEbayMarketPlaceAnalysis.md)
 - [ItemEmailNotifications](docs/Model/ItemEmailNotifications.md)
 - [ItemEnrollment123](docs/Model/ItemEnrollment123.md)
 - [ItemGiftCertificate](docs/Model/ItemGiftCertificate.md)
 - [ItemGoogleProductSearch](docs/Model/ItemGoogleProductSearch.md)
 - [ItemIdentifiers](docs/Model/ItemIdentifiers.md)
 - [ItemInstantPaymentNotification](docs/Model/ItemInstantPaymentNotification.md)
 - [ItemInstantPaymentNotifications](docs/Model/ItemInstantPaymentNotifications.md)
 - [ItemInternal](docs/Model/ItemInternal.md)
 - [ItemKitComponent](docs/Model/ItemKitComponent.md)
 - [ItemKitDefinition](docs/Model/ItemKitDefinition.md)
 - [ItemOption](docs/Model/ItemOption.md)
 - [ItemOptionValue](docs/Model/ItemOptionValue.md)
 - [ItemOptionValueAdditionalItem](docs/Model/ItemOptionValueAdditionalItem.md)
 - [ItemOptionValueDigitalItem](docs/Model/ItemOptionValueDigitalItem.md)
 - [ItemPaymentProcessing](docs/Model/ItemPaymentProcessing.md)
 - [ItemPhysical](docs/Model/ItemPhysical.md)
 - [ItemPricing](docs/Model/ItemPricing.md)
 - [ItemPricingTier](docs/Model/ItemPricingTier.md)
 - [ItemPricingTierDiscount](docs/Model/ItemPricingTierDiscount.md)
 - [ItemPricingTierLimit](docs/Model/ItemPricingTierLimit.md)
 - [ItemRealtimePricing](docs/Model/ItemRealtimePricing.md)
 - [ItemRelated](docs/Model/ItemRelated.md)
 - [ItemRelatedItem](docs/Model/ItemRelatedItem.md)
 - [ItemReporting](docs/Model/ItemReporting.md)
 - [ItemResponse](docs/Model/ItemResponse.md)
 - [ItemRestriction](docs/Model/ItemRestriction.md)
 - [ItemRestrictionItem](docs/Model/ItemRestrictionItem.md)
 - [ItemRevguard](docs/Model/ItemRevguard.md)
 - [ItemReviews](docs/Model/ItemReviews.md)
 - [ItemSalesforce](docs/Model/ItemSalesforce.md)
 - [ItemShipping](docs/Model/ItemShipping.md)
 - [ItemShippingCase](docs/Model/ItemShippingCase.md)
 - [ItemShippingDestinationMarkup](docs/Model/ItemShippingDestinationMarkup.md)
 - [ItemShippingDestinationRestriction](docs/Model/ItemShippingDestinationRestriction.md)
 - [ItemShippingDistributionCenter](docs/Model/ItemShippingDistributionCenter.md)
 - [ItemShippingMethod](docs/Model/ItemShippingMethod.md)
 - [ItemShippingPackageRequirement](docs/Model/ItemShippingPackageRequirement.md)
 - [ItemTax](docs/Model/ItemTax.md)
 - [ItemTaxExemption](docs/Model/ItemTaxExemption.md)
 - [ItemThirdPartyEmailMarketing](docs/Model/ItemThirdPartyEmailMarketing.md)
 - [ItemVariantItem](docs/Model/ItemVariantItem.md)
 - [ItemVariation](docs/Model/ItemVariation.md)
 - [ItemVariationOption](docs/Model/ItemVariationOption.md)
 - [ItemWishlistMember](docs/Model/ItemWishlistMember.md)
 - [ItemsResponse](docs/Model/ItemsResponse.md)
 - [OauthRevokeSuccessResponse](docs/Model/OauthRevokeSuccessResponse.md)
 - [OauthTokenResponse](docs/Model/OauthTokenResponse.md)
 - [Order](docs/Model/Order.md)
 - [OrderAffiliate](docs/Model/OrderAffiliate.md)
 - [OrderAffiliateLedger](docs/Model/OrderAffiliateLedger.md)
 - [OrderAutoOrder](docs/Model/OrderAutoOrder.md)
 - [OrderBilling](docs/Model/OrderBilling.md)
 - [OrderBuysafe](docs/Model/OrderBuysafe.md)
 - [OrderChannelPartner](docs/Model/OrderChannelPartner.md)
 - [OrderCheckout](docs/Model/OrderCheckout.md)
 - [OrderCoupon](docs/Model/OrderCoupon.md)
 - [OrderDigitalItem](docs/Model/OrderDigitalItem.md)
 - [OrderDigitalOrder](docs/Model/OrderDigitalOrder.md)
 - [OrderEdi](docs/Model/OrderEdi.md)
 - [OrderFraudScore](docs/Model/OrderFraudScore.md)
 - [OrderGift](docs/Model/OrderGift.md)
 - [OrderGiftCertificate](docs/Model/OrderGiftCertificate.md)
 - [OrderInternal](docs/Model/OrderInternal.md)
 - [OrderItem](docs/Model/OrderItem.md)
 - [OrderItemEdi](docs/Model/OrderItemEdi.md)
 - [OrderItemEdiIdentification](docs/Model/OrderItemEdiIdentification.md)
 - [OrderItemEdiLot](docs/Model/OrderItemEdiLot.md)
 - [OrderItemOption](docs/Model/OrderItemOption.md)
 - [OrderItemOptionFileAttachment](docs/Model/OrderItemOptionFileAttachment.md)
 - [OrderLinkedShipment](docs/Model/OrderLinkedShipment.md)
 - [OrderMarketing](docs/Model/OrderMarketing.md)
 - [OrderPayment](docs/Model/OrderPayment.md)
 - [OrderPaymentCheck](docs/Model/OrderPaymentCheck.md)
 - [OrderPaymentCreditCard](docs/Model/OrderPaymentCreditCard.md)
 - [OrderPaymentECheck](docs/Model/OrderPaymentECheck.md)
 - [OrderPaymentPurchaseOrder](docs/Model/OrderPaymentPurchaseOrder.md)
 - [OrderPaymentTransaction](docs/Model/OrderPaymentTransaction.md)
 - [OrderPaymentTransactionDetail](docs/Model/OrderPaymentTransactionDetail.md)
 - [OrderQuery](docs/Model/OrderQuery.md)
 - [OrderQuote](docs/Model/OrderQuote.md)
 - [OrderResponse](docs/Model/OrderResponse.md)
 - [OrderSalesforce](docs/Model/OrderSalesforce.md)
 - [OrderShipping](docs/Model/OrderShipping.md)
 - [OrderSummary](docs/Model/OrderSummary.md)
 - [OrderTaxes](docs/Model/OrderTaxes.md)
 - [OrdersResponse](docs/Model/OrdersResponse.md)
 - [ResponseMetadata](docs/Model/ResponseMetadata.md)
 - [ResultSet](docs/Model/ResultSet.md)
 - [TempMultimedia](docs/Model/TempMultimedia.md)
 - [TempMultimediaResponse](docs/Model/TempMultimediaResponse.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhookEventCategory](docs/Model/WebhookEventCategory.md)
 - [WebhookEventSubscription](docs/Model/WebhookEventSubscription.md)
 - [WebhookLog](docs/Model/WebhookLog.md)
 - [WebhookLogResponse](docs/Model/WebhookLogResponse.md)
 - [WebhookLogSummariesResponse](docs/Model/WebhookLogSummariesResponse.md)
 - [WebhookLogSummary](docs/Model/WebhookLogSummary.md)
 - [WebhookResponse](docs/Model/WebhookResponse.md)
 - [WebhookSampleRequest](docs/Model/WebhookSampleRequest.md)
 - [WebhookSampleRequestResponse](docs/Model/WebhookSampleRequestResponse.md)
 - [WebhooksResponse](docs/Model/WebhooksResponse.md)
 - [Weight](docs/Model/Weight.md)


## Documentation For Authorization


## ultraCartBrowserApiKey

- **Type**: API key
- **API key parameter name**: x-ultracart-browser-key
- **Location**: HTTP header

## ultraCartOauth

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://secure.ultracart.com/rest/v2/oauth/authorize
- **Scopes**: 
 - **auto_order_read**: Allows you to read auto order information.
 - **auto_order_write**: Allows you to write auto order information.
 - **chargeback_read**: Allows you to read chargeback information.
 - **chargeback_write**: Allows you to write chargeback information.
 - **checkout_read**: Allows you to read checkout information.
 - **checkout_write**: Allows you to write checkout information.
 - **customer_read**: Allows you to read customer information.
 - **customer_write**: Allows you to write customer information.
 - **fulfillment_read**: Allows you to read fulfillment information.
 - **fulfillment_write**: Allows you to write fulfillment information.
 - **order_read**: Allows you to read order information.
 - **order_write**: Allows you to write order information.
 - **item_read**: Allows you to read item information.
 - **item_write**: Allows you to write item information.
 - **webhook_read**: Allows you to read webhook information.
 - **webhook_write**: Allows you to write webhook information.
 - **ultrabooks_read**: 1 of 2 required to use UltraBooks
 - **ultrabooks_write**: 2 of 2 required to use UltraBooks

## ultraCartSimpleApiKey

- **Type**: API key
- **API key parameter name**: x-ultracart-simple-key
- **Location**: HTTP header


## Author

support@ultracart.com


