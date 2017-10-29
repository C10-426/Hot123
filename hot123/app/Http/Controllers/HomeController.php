<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // get advertise
        $left_float_ad = \DB::table('advertises')
            ->join('advertise_types', 'advertises.type_id', '=', 'advertise_types.id')
            ->select('advertises.ad_url', 'advertises.ad_image_url', 'advertise_types.width', 'advertise_types.height')
            ->where('advertises.type_id', '=', 4)
            ->where('advertises.id', '<=', 2) 
            ->get();

        $right_float_ad = \DB::table('advertises')
            ->join('advertise_types', 'advertises.type_id', '=', 'advertise_types.id')
            ->select('advertises.ad_url', 'advertises.ad_image_url', 'advertise_types.width', 'advertise_types.height')
            ->where('advertises.type_id', '=', 4)
            ->where('advertises.id', '>', 2) 
            ->where('advertises.id', '<=', 4)
            ->get();

        $long_fixed_ad = \DB::table('advertises')
            ->join('advertise_types', 'advertises.type_id', '=', 'advertise_types.id')
            ->select('advertises.ad_url', 'advertises.ad_image_url', 'advertise_types.width', 'advertise_types.height')
            ->where('advertise_types.id', '=', 1)
            ->get();

         $short_fixed_ad = \DB::table('advertises')
            ->join('advertise_types', 'advertises.type_id', '=', 'advertise_types.id')
            ->select('advertises.ad_url', 'advertises.ad_image_url', 'advertise_types.width', 'advertise_types.height')
            ->where('advertise_types.id', '=', 2)
            ->get();

        $shortest_fixed_ad = \DB::table('advertises')
            ->join('advertise_types', 'advertises.type_id', '=', 'advertise_types.id')
            ->select('advertises.ad_url', 'advertises.ad_image_url', 'advertise_types.width', 'advertise_types.height')
            ->where('advertise_types.id', '=', 3)
            ->get();

        // get sites
        $sites =  \DB::table('sites')
            ->select('link_name', 'link_url', 'link_type', 'link_description')
            ->limit(36)
            ->get();

        return view('index', [
            'left_float_ad' => $left_float_ad, 
            'right_float_ad' => $right_float_ad, 
            'long_fixed_ad' => $long_fixed_ad,
            'short_fixed_ad' => $short_fixed_ad,
            'shortest_fixed_ad' => $shortest_fixed_ad,
            'sites' => $sites
            ]);
    }
}
