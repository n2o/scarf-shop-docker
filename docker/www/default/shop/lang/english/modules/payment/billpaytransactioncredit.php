<?php
require_once('billpay.php');

/* Default Messages */
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_TITLE', 'BillPay - Installment plan');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_DESCRIPTION', 'BillPay - Installment plan');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_MESSAGE', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_MESSAGE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INFO', MODULE_PAYMENT_BILLPAY_TEXT_INFO);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ALLOWED_TITLE' , MODULE_PAYMENT_BILLPAY_ALLOWED_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ALLOWED_DESC' , MODULE_PAYMENT_BILLPAY_ALLOWED_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_LOGGING_TITLE' , MODULE_PAYMENT_BILLPAY_LOGGING_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_LOGGING_DESC' , MODULE_PAYMENT_BILLPAY_LOGGING_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_MERCHANT_ID_TITLE' , MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_MERCHANT_ID_DESC' , MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ORDER_STATUS_TITLE' , MODULE_PAYMENT_BILLPAY_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ORDER_STATUS_DESC' , MODULE_PAYMENT_BILLPAY_ORDER_STATUS_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_PORTAL_ID_TITLE' , MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_PORTAL_ID_DESC' , MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_SECURE_TITLE' , MODULE_PAYMENT_BILLPAY_GS_SECURE_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_SECURE_DESC' , MODULE_PAYMENT_BILLPAY_GS_SECURE_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_SORT_ORDER_TITLE' , MODULE_PAYMENT_BILLPAY_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_SORT_ORDER_DESC' , MODULE_PAYMENT_BILLPAY_SORT_ORDER_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_STATUS_TITLE' , MODULE_PAYMENT_BILLPAY_STATUS_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_STATUS_DESC' , MODULE_PAYMENT_BILLPAY_STATUS_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TESTMODE_TITLE' , MODULE_PAYMENT_BILLPAY_GS_TESTMODE_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TESTMODE_DESC' , MODULE_PAYMENT_BILLPAY_GS_TESTMODE_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ZONE_TITLE' , MODULE_PAYMENT_BILLPAY_ZONE_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ZONE_DESC' , MODULE_PAYMENT_BILLPAY_ZONE_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_API_URL_BASE_TITLE' , MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_API_URL_BASE_DESC' , MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TESTAPI_URL_BASE_TITLE' , MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TESTAPI_URL_BASE_DESC' , MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_LOGGING_ENABLE_TITLE' , MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_LOGGING_ENABLE_DESC' , MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_MIN_AMOUNT_TITLE', MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_MIN_AMOUNT_DESC', MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_LOGPATH_TITLE', MODULE_PAYMENT_BILLPAY_LOGPATH_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_LOGPATH_DESC', MODULE_PAYMENT_BILLPAY_LOGPATH_DESC);

define('MODULE_PAYMENT_BILLPAY_HTTP_X_TITLE', MODULE_PAYMENT_BILLPAY_GS_HTTP_X_TITLE);
define('MODULE_PAYMENT_BILLPAY_HTTP_X_DESC', MODULE_PAYMENT_BILLPAY_GS_HTTP_X_DESC);


define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_BIRTHDATE', MODULE_PAYMENT_BILLPAY_TEXT_BIRTHDATE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ENTER_BIRTHDATE', MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ENTER_GENDER', MODULE_PAYMENT_BILLPAY_TEXT_ENTER_GENDER);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ENTER_BIRTHDATE_AND_GENDER', MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE_AND_GENDER);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_NOTE', MODULE_PAYMENT_BILLPAY_TEXT_NOTE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_REQ', MODULE_PAYMENT_BILLPAY_TEXT_REQ);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_GENDER', MODULE_PAYMENT_BILLPAY_TEXT_GENDER);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_MALE', MODULE_PAYMENT_BILLPAY_TEXT_MALE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_FEMALE', MODULE_PAYMENT_BILLPAY_TEXT_FEMALE);

define('JS_BILLPAYTRANSACTIONCREDIT_EULA', JS_BILLPAY_EULA);
define('JS_BILLPAYTRANSACTIONCREDIT_DOBDAY', JS_BILLPAY_DOBDAY);
define('JS_BILLPAYTRANSACTIONCREDIT_DOBMONTH', JS_BILLPAY_DOBMONTH);
define('JS_BILLPAYTRANSACTIONCREDIT_DOBYEAR', JS_BILLPAY_DOBYEAR);
define('JS_BILLPAYTRANSACTIONCREDIT_GENDER', JS_BILLPAY_GENDER);
define('JS_BILLPAYTRANSACTIONCREDIT_CODE', JS_BILLPAY_CODE);
define('JS_BILLPAYTRANSACTIONCREDIT_NUMBER', JS_BILLPAY_NUMBER);
define('JS_BILLPAYTRANSACTIONCREDIT_NAME', JS_BILLPAY_NAME);
define('JS_BILLPAYTRANSACTIONCREDIT_PHONE', JS_BILLPAY_PHONE);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_EULA', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_EULA);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_DOB' ,MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_DEFAULT', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DEFAULT);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_SHORT', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_SHORT);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICE_CREATED_COMMENT', MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_CREATED_COMMENT);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_CANCEL_COMMENT', MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_COMMENT);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_DUEDATE', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DUEDATE);


define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_CODE', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_CODE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_NUMBER', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NUMBER);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_NAME', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NAME);


define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_PHONE', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_PHONE);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_CREATE_INVOICE', MODULE_PAYMENT_BILLPAY_TEXT_CREATE_INVOICE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_CANCEL_ORDER', MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_ORDER);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ACCOUNT_HOLDER', MODULE_PAYMENT_BILLPAY_TEXT_ACCOUNT_HOLDER);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_IBAN', MODULE_PAYMENT_BILLPAY_TEXT_IBAN);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_BANK_NAME', MODULE_PAYMENT_BILLPAY_TEXT_BANK_NAME);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_BIC', MODULE_PAYMENT_BILLPAY_TEXT_BIC);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICE_REFERENCE', MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_REFERENCE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_PHONE', MODULE_PAYMENT_BILLPAY_TEXT_PHONE);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_BANKDATA', MODULE_PAYMENT_BILLPAY_TEXT_BANKDATA);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_DUEDATE_TITLE', MODULE_PAYMENT_BILLPAY_DUEDATE_TITLE);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_PURPOSE', MODULE_PAYMENT_BILLPAY_TEXT_PURPOSE);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ADD', MODULE_PAYMENT_BILLPAY_TEXT_ADD);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_FEE', MODULE_PAYMENT_BILLPAY_TEXT_FEE);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_SANDBOX', MODULE_PAYMENT_BILLPAY_TEXT_SANDBOX);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_CHECK', MODULE_PAYMENT_BILLPAY_TEXT_CHECK);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_UNLOCK_INFO', MODULE_PAYMENT_BILLPAY_UNLOCK_INFO);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_UTF8_ENCODE_TITLE', MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_TITLE);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_UTF8_ENCODE_DESC', MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_DESC);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ACTIVATE_ORDER', MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ACTIVATE_ORDER_WARNING', MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER_WARNING);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_SALUTATION_MALE', MODULE_PAYMENT_BILLPAY_TEXT_MR);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_SALUTATION_FEMALE', MODULE_PAYMENT_BILLPAY_TEXT_MRS);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_EULA_CHECK', MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_EULA_CHECK_DE', MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_CH);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_EULA_CHECK_SEPA',    MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_SEPA);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_EULA_CHECK_SEPA_AT', MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_SEPA_AT);

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_SEPA_INFORMATION',    MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION);
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_SEPA_INFORMATION_AT', MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION_AT);


define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICE_INFO1', 'Thank you for using BillPay. Selected amount will be deducted monthly from the account you specified in the order.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICE_INFO_MANUAL', 'Thank you for choosing BillPay\'s Rate plan. Please pay rates with following account information:'); // TODO: translate
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICEPDF_INFO', 'You have chosen to pay by installment purchase. Please note
that in addition to the amount mentioned in invoice, there are other costs associated with the installment payment transaction.
 Those costs were provided before the order. The complete calculation of the amounts owed in connection with the installment purchase
 and any related information you have received via email to the email address specified in the order.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_RATE', 'Rate');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_RATEDUE_TEXT', 'rate due');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TOTAL_PRICE_CALC_TEXT', 'Total price');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_CART_AMOUNT_TEXT', 'Cart amount');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_CART_AMOUNT_AFTER_PREPAYMENT_TEXT', 'Cart amount after installment payment');
define('MODULE_PAYMENT_BILLPAYTC_SURCHARGE_TEXT', 'Surcharge');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TEXT', 'Transaction fee');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_OTHER_COSTS_TEXT', 'additional fees (for example shipping fees)');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TOTAL_AMOUNT_TEXT', 'Total amount');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ANUAL_RATE_TEXT', 'Anual rate');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_DIVIDED_BY_RATES', 'Divided by installments');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_FIRST_RATE', 'First rate including fees is');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_FOLLOWING_RATES', 'Following rates are');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_UNIQUE_RATE', 'Each installment is');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_CAPTION_TEXT1', 'Your partial payment in');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_CAPTION_TEXT2', 'installments');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ENTER_NUMBER_RATES', 'Please enter the desired number of installments');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_RATES', 'Installments');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_CALCULATE_RATES', 'Calculate installment plan');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_FINANCE_DETAILS_LINK_TEXT', 'Financial details (DE)');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_PREPAYMENT_TEXT', 'Prepayment');

define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE', 'Transaction fee');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX1', 'inc.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX2', 'VAT');
define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE', 'Surcharge');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TOTAL', 'Credit total');


define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ENTER_PHONE', 'Please enter your phone number');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_LINK1', 'AGB Installment payment');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_LINK2', 'Privacy Policy-<br/>regulations');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_LINK3', 'Payment-<br>conditions');


define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_NO_RATEPLAN', 'Please select the desired number of installments.');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICE_INFO2', 'Order was issued by ');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICE_INFO3', '');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_FEE_INFO1', 'For this order, payment fee is ');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_FEE_INFO2', '');

define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_FIRST_RATE',    'First rate including handling and shipping fees is <span>%s</span>.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_NEXT_RATE',     'Next rates are <span>%s</span> each.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_TOTAL',         'In total, you will pay <span>%s</span>.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_BASE',          'It includes order value of <span>%s</span>,');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_RATES',         'rate cost of <span>%s</span>,');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_PROCESSING',    'processing fee of <span>%s</span>');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_SHIPPING',      'and shipping costs of <span>%s</span>.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_DETAILS',       'Details');

define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_THANK_YOU', 'Thank you for choosing to pay with BillPay\'s Transaction Credit');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_RATE_PLAN_EMAIL', 'You will receive rate plan shortly.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_MANUAL_TRANSFER', 'Please use following account details to pay your rates.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_MANUAL_RATE_PLAN', 'Please transfer following amounts before following dates:');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_PAYEE', 'Payee:');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_AMOUNT', 'Amount');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_DATES', 'Dates');

// Plugin 1.7
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_THANK_YOU_TEXT', 'Thank you for choosing BillPay Instalment Purchase when making your purchase.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_PAY_UNTIL_TEXT', 'The amounts due will be debited monthly from the following account:');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_PAY_UNTIL_TEXT_CH', 'Please use following account details to pay your rates.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_EMAIL_TEXT', 'In addition to the invoice you will shortly receive an instalment plan with detailed information on your instalment payments.');