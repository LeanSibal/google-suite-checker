<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\DNS;

class HomeController extends Controller
{
    public function index( Request $request )
    {
        $params = [];
        if( $request->has('q') ) {
            $params['url'] = $url = $request->input('q');
            $params['mx_records'] = DNS::get_mx_records( $url );
            $occurrences = 0;
            foreach( $params['mx_records'] as $key => $value ) {
                $params['mx_records'][ $key ] = str_replace( "googlemail.", "<strong>googlemail</strong>.", $params['mx_records'][ $key ], $i );
                $occurrences += $i;
                $params['mx_records'][ $key ] = str_replace( "google.", "<strong>google</strong>.", $params['mx_records'][ $key ], $i );
                $occurrences += $i;
            }
            $params['is_google'] = $occurrences > 0 ? true : false;
            $params['domain'] = $url;
        }
        return view('home', $params);
    }
}
