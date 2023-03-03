<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\StatisticPost;
use Illuminate\Support\Facades\Mail;

class SendMailStatisticPost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $timeout = 5;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Mail::to(env('MAIL_ADMIN'))->send(new StatisticPost());
        $respone= '';   //My api request; 
        if($respone == 'completed'){
            $order->status = 'completed';
        }
        else {
            CheckOrderStatus::dispatch($order_id)->delay(now()->addMinutes(5));
        }
    }
}
