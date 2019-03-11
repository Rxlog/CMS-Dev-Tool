<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleTreeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return [
            [ 'text' => 'Item 1' ],
            [ 'text' => 'Item 2' ],
            [ 'text' => 'Item 3', 'state' => [ 'selected' => true ] ],
            [ 'text' => 'Item 4' ]
        ];
    }
}
