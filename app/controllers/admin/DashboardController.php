<?php
/**
 * User: meletisnikolaidis
 * Date: 13-Aug-18
 * Time: 10:15 PM
 */

namespace App\Controllers\Admin;


use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function show()
    {
        return view('admin/dashboard');
    }
}