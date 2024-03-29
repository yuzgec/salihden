<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class ProductTranslation extends Model implements Viewable
{
    use HasFactory,HasSlug,LogsActivity,InteractsWithViews;

    public $timestamps = false;
    protected $guarded = [];

    protected $translationForeignKey = 'product_id';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logOnly(['title']);
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->allowDuplicateSlugs();
    }

}
