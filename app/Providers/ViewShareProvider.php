<?php

namespace App\Providers;

use App\Models\Features;
use App\Models\Page;
use App\Models\PageCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider
{

    public function boot()
    {


        if (! app()->runningInConsole()) {

            
            define('SWEETALERT_MESSAGE_CREATE', 'Eklendi');
            define('SWEETALERT_MESSAGE_UPDATE', 'Güncellendi');
            define('SWEETALERT_MESSAGE_DELETE', 'Silindi');

            Paginator::useBootstrap();
            //config()->set('settings', Setting::pluck('value','item')->all());

            $Pages =  Page::with('getCategory')->orderBy('rank', 'asc')->get();
            $Service =  Service::with('getCategory')->orderBy('rank', 'asc')->get();
            $Product = Product::with(['getCategory'])->orderBy('rank', 'asc')->get();

            View::share([
                'Pages' => $Pages,
                'Service' => $Service,
                'Product' => $Product,
            ]);
       }
    }
}
