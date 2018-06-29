<?php
/**
 * Created by PhpStorm.
 * User: Bruin
 * Date: 2016/11/23
 * Time: 16:57
 */
namespace Bruin\BaiduTongji;

use Illuminate\Support\ServiceProvider;
use Bruin\BaiduTongji\BaiduTongji;

class BaiduTongjiServiceProvider extends ServiceProvider
{
//    protected $defer = true;

    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton('BaiduTongji', function ($app) {
            return new BaiduTongji(config('baidu_tongji'));
        });
    }
}