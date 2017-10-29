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

        // get adult sites
        $adult_sites = \DB::table('sites')
            ->select('link_name', 'link_url', 'link_description')
            ->where('link_type', '=', 1)
            ->limit(30)
            ->get();

        // get tv sites
        $tv_sites = \DB::table('sites')
            ->select('link_name', 'link_url', 'link_description')
            ->where('link_type', '=', 2)
            ->limit(30)
            ->get();

        // get tv sites
        $novel_sites = \DB::table('sites')
            ->select('link_name', 'link_url', 'link_description')
            ->where('link_type', '=', 3)
            ->limit(30)
            ->get();

        return view('index', [
            'left_float_ad' => $left_float_ad, 
            'right_float_ad' => $right_float_ad, 
            'long_fixed_ad' => $long_fixed_ad,
            'short_fixed_ad' => $short_fixed_ad,
            'shortest_fixed_ad' => $shortest_fixed_ad,
            'adult_sites' => $adult_sites,
            'tv_sites' => $tv_sites,
            'novel_sites' => $novel_sites
            ]);
    }
}
