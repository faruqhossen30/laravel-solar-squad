<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\WebsiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoSettingController extends Controller
{
    public function videoSetting()
    {
        if (!Auth::user()->can('websitesetting')) {
            abort(403);
        }
        $site = WebsiteSetting::first();
        // return  $site;
        return view('admin.setting.video-setting', compact('site'));
    }


    public function videoSettingstore(Request $request)
    {


        // return $request->all();
        WebsiteSetting::updateOrInsert([
            'id' => 1
        ], [
            'video_url' => $request->video_url,
        ]);
        return redirect()->back();
    }
}
