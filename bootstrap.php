<?php 
namespace Siamsquared\Share\Social;

use Illuminate\Contracts\Events\Dispatcher;

return function(Dispatcher $events) {
    $events->subscribe(Listeners\AddClientAssets::class);
};
