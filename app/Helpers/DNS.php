<?php

namespace App\Helpers;

class DNS {

    public static function get_mx_records( $domain )
    {
        getmxrr( $domain, $mxhosts, $mxweight );
        return $mxhosts;
    }
}
