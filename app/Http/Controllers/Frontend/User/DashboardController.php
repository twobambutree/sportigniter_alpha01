<?php

namespace App\Http\Controllers\Frontend\User;

use App\Models\Sport\Playbook;
use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Playbook $playbook)
    {
        return view('frontend.user.dashboard', [$playbook]);
    }
}
