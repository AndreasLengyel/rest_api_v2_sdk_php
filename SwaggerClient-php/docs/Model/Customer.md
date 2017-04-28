# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**affiliate_oid** | **int** | Affiliate oid | [optional] 
**allow_3rd_party_billing** | **bool** | Allow 3rd party billing | [optional] 
**allow_cod** | **bool** | Allow COD | [optional] 
**allow_purchase_order** | **bool** | Allow purchase orders by this customer | [optional] 
**allow_quote_request** | **bool** | Allow quote request | [optional] 
**allow_selection_of_address_type** | **bool** | Allow selection of residential or business address type | [optional] 
**auto_approve_cod** | **bool** | Auto approve COD | [optional] 
**auto_approve_purchase_order** | **bool** | Auto approve purchase orders by this customer | [optional] 
**automatic_merchant_notes** | **string** | Automatic merchant notes are added to every order placed | [optional] 
**billing** | [**\ultracart\v2\models\CustomerBilling[]**](CustomerBilling.md) | Billing addresses for this customer | [optional] 
**business_notes** | **string** | Business notes (internally visible only) | [optional] 
**cards** | [**\ultracart\v2\models\CustomerCard[]**](CustomerCard.md) | Credit Cards for this customer | [optional] 
**customer_profile_oid** | **int** | Customer profile object identifier | [optional] 
**dhl_account_number** | **string** | DHL account number | [optional] 
**email** | **string** | Email address of this customer profile | [optional] 
**exempt_shipping_handling_charge** | **bool** | Exempt shipping handling charge | [optional] 
**fedex_account_number** | **string** | FedEx account number | [optional] 
**free_shipping** | **bool** | This customer always receives free shipping | [optional] 
**free_shipping_minimum** | **float** | If free_shipping is true, this is the minimum subtotal required for free shipping | [optional] 
**last_modified_by** | **string** | Last modified by | [optional] 
**last_modified_dts** | **string** | Last modified date | [optional] 
**maximum_item_count** | **int** | Maximum item count | [optional] 
**minimum_item_count** | **int** | Minimum item count | [optional] 
**minimum_subtotal** | **float** | Minimum subtotal | [optional] 
**no_coupons** | **bool** | No coupons | [optional] 
**no_free_shipping** | **bool** | No free shipping regardless of coupons or item level settings | [optional] 
**no_realtime_charge** | **bool** | No realtime charge | [optional] 
**password** | **string** | Password (may only be set, never read) | [optional] 
**pricing_tiers** | [**\ultracart\v2\models\CustomerPricingTier[]**](CustomerPricingTier.md) | Pricing tiers for this customer | [optional] 
**qb_class** | **string** | QuickBooks class to import this customer as | [optional] 
**qb_code** | **string** | QuickBooks name to import this customer as | [optional] 
**referral_source** | **string** | Referral Source | [optional] 
**sales_rep_code** | **string** | Sales rep code | [optional] 
**send_signup_notification** | **bool** | Send signup notification, if true during customer creation, will send a notification. | [optional] 
**shipping** | [**\ultracart\v2\models\CustomerShipping[]**](CustomerShipping.md) | Shipping addresses for this customer | [optional] 
**signup_dts** | **string** | Signup date | [optional] 
**suppress_buysafe** | **bool** | Suppress buySAFE | [optional] 
**tax_exempt** | **bool** | True if the customer is tax exempt | [optional] 
**tax_id** | **string** | Tax ID | [optional] 
**terms** | **string** | Terms for this customer | [optional] 
**track_separately** | **bool** | True if the customer should be tracked separately in QuickBooks | [optional] 
**unapproved** | **bool** | Unapproved | [optional] 
**ups_account_number** | **string** | UPS account number | [optional] 
**website_url** | **string** | Website url | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

