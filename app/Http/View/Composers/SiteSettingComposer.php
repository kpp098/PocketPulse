<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\SiteSetting;

class SiteSettingComposer
{
    public function compose(View $view)
    {
        $view->with('siteSettings', SiteSetting::first());
    }
}
