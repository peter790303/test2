<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    //
    protected $table = 'rp_dsp_daily_datastudio';
    protected $fillable =[
        'data_time',
        'active_view',
        'hundred',
        'invalid_active_view',
        'daily_campaign_mu',
        'daily_advertiser_mu',
        'views',
        'zero',
        'twenty_five',
        'fifty',
        'seventy_five',
        'video_daily_bidding_price',
        'video_daily_campaign_mu',
        'request',
        'impress',
        'invalid_impress',
        'click',
        'invalid_click',
        'bidding_price',
        'campaign_mu',
        'advertiser_mu',
        'site_mu',
        'profit',
        'zone_id',
        'campaign_name',
        'advertiser_name',
        'campaign_id',
        'advertiser_id',
        'agency_id',
        'agency_name',
        'man_imp',
        'man_click',
        'woman_imp',
        'woman_click',

    ];
}
