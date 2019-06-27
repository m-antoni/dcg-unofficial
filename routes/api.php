<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::post('create-payment', function () {
//     $apiContext = new \PayPal\Rest\ApiContext(
//         new \PayPal\Auth\OAuthTokenCredential(
//             'AdLHzyJ3t8H6XHHwBWBGIFGeC4H4REvLRtFGxo2rxe4NIRVo-w7-jup2N40rCdT581h5hpbIZZ1E3XMX',     // ClientID
//             'EBUptngVdRmZxoGHyiP6RCk9LiJ-5E1ARGin6x2DkkwjyroS-lsMhYISlY_1cv_mdxaawnj3IrRYqQv7'      // ClientSecret
//         )
//     );

//     $payer = new Payer();
//     $payer->setPaymentMethod("paypal");

//     $item1 = new Item();
//     $price1 = 5;
//     $quantity = 2;
//     $price1Total = $price * $quantity;
//     $price2 = 10;
//     $item1->setName('Kopiko Black')
//         ->setCurrency('USD')
//         ->setQuantity($quantity)
//         ->setSku("123123") // Similar to `item_number` in Classic API
//         ->setPrice($price1);
//     $item2 = new Item();
//     $item2->setName('Granola bars')
//         ->setCurrency('USD')
//         ->setQuantity(5)
//         ->setSku("321321") // Similar to `item_number` in Classic API
//         ->setPrice(2);

//     $itemList = new ItemList();
//     $itemList->setItems(array($item1, $item2));

//     $details = new Details();
//     $details->setShipping(1.2)
//         ->setTax(1.3)
//         ->setSubtotal(17.50);

//     $amount = new Amount();
//     $amount->setCurrency("USD")
//         ->setTotal(20)
//         ->setDetails($details);

//     $transaction = new Transaction();
//     $transaction->setAmount($amount)
//         ->setItemList($itemList)
//         ->setDescription("Payment description")
//         ->setInvoiceNumber(uniqid());

//     $redirectUrls = new RedirectUrls();
//     $redirectUrls->setReturnUrl("http://laravel-paypal-example.test")
//         ->setCancelUrl("http://laravel-paypal-example.test");

//     // Add NO SHIPPING OPTION
//     $inputFields = new InputFields();
//     $inputFields->setNoShipping(1);

//     $webProfile = new WebProfile();
//     $webProfile->setName('test' . uniqid())->setInputFields($inputFields);

//     $webProfileId = $webProfile->create($apiContext)->getId();

//     $payment = new Payment();
//     $payment->setExperienceProfileId($webProfileId); // no shipping
//     $payment->setIntent("sale")
//         ->setPayer($payer)
//         ->setRedirectUrls($redirectUrls)
//         ->setTransactions(array($transaction));

//     try {
//         $payment->create($apiContext);
//     } catch (Exception $ex) {
//         echo $ex;
//         exit(1);
//     }

//     return $payment;
// });

// Route::post('execute-payment', function (Request $request) {
//     $apiContext = new \PayPal\Rest\ApiContext(
//         new \PayPal\Auth\OAuthTokenCredential(
//             'AdLHzyJ3t8H6XHHwBWBGIFGeC4H4REvLRtFGxo2rxe4NIRVo-w7-jup2N40rCdT581h5hpbIZZ1E3XMX',     // ClientID
//             'EBUptngVdRmZxoGHyiP6RCk9LiJ-5E1ARGin6x2DkkwjyroS-lsMhYISlY_1cv_mdxaawnj3IrRYqQv7'      // ClientSecret
//         )
//     );

//     $paymentId = $request->paymentID;
//     $payment = Payment::get($paymentId, $apiContext);

//     $execution = new PaymentExecution();
//     $execution->setPayerId($request->payerID);

//     // $transaction = new Transaction();
//     // $amount = new Amount();
//     // $details = new Details();

//     // $details->setShipping(2.2)
//     //     ->setTax(1.3)
//     //     ->setSubtotal(17.50);

//     // $amount->setCurrency('USD');
//     // $amount->setTotal(21);
//     // $amount->setDetails($details);
//     // $transaction->setAmount($amount);

//     // $execution->addTransaction($transaction);

//     try {
//         $result = $payment->execute($execution, $apiContext);
//     } catch (Exception $ex) {
//         echo $ex;
//         exit(1);
//     }

//     return $result;
// });
