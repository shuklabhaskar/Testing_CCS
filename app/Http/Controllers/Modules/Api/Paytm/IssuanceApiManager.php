<?php

namespace App\Http\Controllers\Modules\Api\Paytm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IssuanceApiManager extends Controller
{
    // ----------------------------------------- DEBUG -----------------------------------------

   /* function sendOtp(Request $request): Collection
    {
        $body = $request->input('body');
        $token = $request->input('header')['authorization'];
        return Http::withHeaders([
            'Authorization' => $token
        ])
            ->timeout(3*60)->retry(3)
            ->withBody(json_encode($body), 'application/json')
            ->post("https://tapcard-issuer-stage.paytm.com/middleware/v1/otp/send")
            ->collect();
    }

    function verifyOtp(Request $request): Collection
    {
        $body = $request->input('body');
        $token = $request->input('header')['authorization'];
        return Http::withHeaders([
            'Authorization' => $token
        ])
            ->timeout(3*60)->retry(3)
            ->withBody(json_encode($body), 'application/json')
            ->post("https://tapcard-issuer-stage.paytm.com/middleware/v1/otp/verify")
            ->collect();
    }

    function kycDetail(Request $request): Collection
    {
        $token = $request->input('header')['authorization'];
        $session = $request->input('header')['sessionId'];
        return Http::withHeaders([
            'Authorization' => $token,
            'sessionId' => $session
        ])
            ->get("https://tapcard-issuer-stage.paytm.com/middleware/v1/kyc/limit/details")
            ->collect();
    }

    function submitKyc(Request $request): Collection
    {
        $body = $request->input('body');
        $token = $request->input('header')['authorization'];
        $session = $request->input('header')['sessionId'];
        return Http::withHeaders([
            'Authorization' => $token,
            'sessionId' => $session
        ])
            ->timeout(3*60)->retry(3)
            ->withBody($body, '')
            ->post("https://tapcard-issuer-stage.paytm.com/middleware/v1/kyc/submit")
            ->collect();
    }

    function activateCard(Request $request): Collection
    {
        $body = $request->input('body');
        $token = $request->input('header')['authorization'];
        $session = $request->input('header')['sessionId'];
        return Http::withHeaders([
            'Authorization' => $token,
            'sessionId' => $session
        ])
            ->timeout(3*60)->retry(3)
            ->withBody(json_encode($body), 'application/json')
            ->post("https://tapcard-issuer-stage.paytm.com/middleware/v1/card/activation")
            ->collect();
    }

    function activationStatus(Request $request): Collection
    {
        $token = $request->input('header')['authorization'];
        $inputType = $request->input('query')['inputType'];
        $data = $request->input('query')['data'];
        return Http::withHeaders([
            'Authorization' => $token
        ])
            ->get("https://tapcard-issuer-stage.paytm.com/middleware/v2/card/poll/status", [
                'inputType' => $inputType,
                'data' => $data
            ])
            ->collect();
    }*/



    // -------------------------------------------- PROD -----------------------------------------

     function sendOtp(Request $request)
     {
         $body = $request->input('body');
         $token = $request->input('header')['authorization'];
         return Http::withHeaders([
             'Authorization' => $token
         ])
             ->timeout(3*60)->retry(3)
             ->withBody(json_encode($body), 'application/json')
             ->post("https://tapcard-issuer-api.paytmbank.com/middleware/v1/otp/send")
             ->collect();
     }

     function verifyOtp(Request $request)
     {
         $body = $request->input('body');
         $token = $request->input('header')['authorization'];
         return Http::withHeaders([
             'Authorization' => $token
         ])
             ->timeout(3*60)->retry(3)
             ->withBody(json_encode($body), 'application/json')
             ->post("https://tapcard-issuer-api.paytmbank.com/middleware/v1/otp/verify")
             ->collect();
     }

     function kycDetail(Request $request)
     {
         $token = $request->input('header')['authorization'];
         $session = $request->input('header')['sessionId'];
         return Http::withHeaders([
             'Authorization' => $token,
             'sessionId' => $session
         ])
             ->get("https://tapcard-issuer-api.paytmbank.com/middleware/v1/kyc/limit/details")
             ->collect();
     }

     function submitKyc(Request $request)
     {
         $body = $request->input('body');
         $token = $request->input('header')['authorization'];
         $session = $request->input('header')['sessionId'];
         return Http::withHeaders([
             'Authorization' => $token,
             'sessionId' => $session
         ])
             ->timeout(3*60)->retry(3)
             ->withBody($body, '')
             ->post("https://tapcard-issuer-api.paytmbank.com/middleware/v1/kyc/submit")
             ->collect();
     }

     function activateCard(Request $request)
     {
         $body = $request->input('body');
         $token = $request->input('header')['authorization'];
         $session = $request->input('header')['sessionId'];
         return Http::withHeaders([
             'Authorization' => $token,
             'sessionId' => $session
         ])
             ->timeout(3*60)->retry(3)
             ->withBody(json_encode($body), 'application/json')
             ->post("https://tapcard-issuer-api.paytmbank.com/middleware/v1/card/activation")
             ->collect();
     }

     function activationStatus(Request $request)
     {
         $token = $request->input('header')['authorization'];
         $inputType = $request->input('query')['inputType'];
         $data = $request->input('query')['data'];
         return Http::withHeaders([
             'Authorization' => $token
         ])
             ->get("https://tapcard-issuer-api.paytmbank.com/middleware/v2/card/poll/status", [
                 'inputType' => $inputType,
                 'data' => $data
             ])
             ->collect();
     }

}
