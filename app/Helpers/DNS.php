<?php

namespace App\Helpers;

use LayerShifter\TLDExtract\Extract;

class DNS {

    public static function get_mx_records( $domain )
    {
        getmxrr( $domain, $mxhosts, $mxweight );
        return $mxhosts;
    }

    public static function get_domain( $url )
    {
        $extract = new Extract();
        $extracted = $extract->parse( $url );
        if( empty( $extracted['hostname'] ) or empty( $extracted['suffix'] ) )
            return false;
        return $extracted['hostname'] . '.' . $extracted['suffix'];
    }
}
