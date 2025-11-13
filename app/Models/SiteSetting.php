<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'site_name',
        'tagline',
        'main_logo_path',
        'favicon_path',
        'contact_email',
        'contact_phone',
        'address',
        'maintenance_mode',
        'footer_text',
        'footer_logo',
        'footer_link_type',
        'footer_custom_link',
        'footer_page_link',
    ];

    protected $casts = [
        'footer_page_link' => 'array', // REQUIRED for multi-select
    ];
}
