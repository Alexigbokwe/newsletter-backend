<?php
namespace App\Services\SendMail;
use App\Services\SendMail\ISendMail;
use Illuminate\Support\Facades\Redis;
use App\Models\Subscription;
use Carbon\Carbon;

class SendMail implements ISendMail{

    public function saveSubscriber($request){
        try {
            $sub = new Subscription();
            $sub->name = $request->input('name');
            $sub->email = $request->input('email');
            $sub->save();
            return response()->json([
                'message' => 'Thank you for subscribing.',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'error'=> $th,
            ],400);
        }
        
    }
}