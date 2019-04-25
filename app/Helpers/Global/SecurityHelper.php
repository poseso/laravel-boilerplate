<?php

use Carbon\Carbon;

if (! function_exists('sectoken')) {
    /**
     * Access the Security Token Helper.
     * @return string
     */
    function sectoken()
    {
        return strtoupper(hash('crc32', Carbon::now()->toDateTimeString()));
    }
}
