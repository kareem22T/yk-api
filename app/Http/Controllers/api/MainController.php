<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\GeneralTrait;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class MainController extends Controller
{
    use GeneralTrait;

    public function __construct()
    {
        $this->middleware('changeLang');
    }

    public function getHomeData(Request $request)
    {
        $data = [
            'hero' => [
                'title' => __('main.hero_title'),
                'contact_btn' => __('main.hero_contact_btn'),
                'latest_btn' => __('main.hero_latest_btn'),
            ],
            'looking_for' => [
                'title' => __('main.looking_for_title'),
                'card_1' => __('main.looking_for_card_1'),
                'card_2' => __('main.looking_for_card_2'),
                'card_3' => __('main.looking_for_card_3'),
                'card_4' => __('main.looking_for_card_4'),
            ],
            'latest' => [
                'title' => __('main.latest_title'),
                'btn' => __('main.latest_btn'),
                'gympo' => __('main.latest_1_des'),
                'off' => __('main.latest_2_des'),
                'mammoth' => __('main.latest_3_des'),
                'pharoto' => __('main.latest_4_des'),
            ],
            'why_us' => [
                'title' => __('main.why_us_title'),
                'cards' => [
                    __('main.why_us_1'),
                    __('main.why_us_2'),
                    __('main.why_us_3'),
                    __('main.why_us_4'),
                    __('main.why_us_5'),
                    __('main.why_us_6'),
                    __('main.why_us_7'),
                    __('main.why_us_8'),
                ]
            ],
            'lets_do_it' => [
                'title' => __('main.lets_do_it_title'),
                'sub_title' => __('main.lets_do_it_sub_title'),
            ],
            'footer' => [
                'kareem_name' => __('main.footer_kareem_name'),
                'youssef_name' => __('main.footer_youssef_name'),
                'kareem_title' => __('main.footer_kareem_title'),
                'youssef_title' => __('main.footer_youssef_title'),
                'title' => __('main.footer_title'),
                'sub_title' => __('main.footer_sub_title'),
            ],
            'cookies' => [
                'title' => __('main.cookie_title'),
                'content' => __('main.cookie_content'),
                'btn' => __('main.cookie_btn'),
            ],
        ];
        return $this->returnData('home', $data, $request->lang);
    }
}