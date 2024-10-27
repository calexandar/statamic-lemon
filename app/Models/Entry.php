<?php

namespace App\Models;



class Entry extends \Statamic\Eloquent\Entries\UuidEntryModel
{
    protected $casts = [
        // The casts from Statamic's base model...
        'date'      => 'datetime',
        'data'      => 'json',
        'published' => 'boolean',

        // Your custom casts...
        'featured_images' => 'json',
    ];
}
