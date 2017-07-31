<?php

namespace App\Http\Composers;

use Auth;
use Illuminate\View\View;

/**
 * Class GlobalComposer.
 */
class GlobalComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('logged_in_user', access()->user());

        //$view->with('user_playbook', access()->user()->playbook->first());
        
        if (!Auth::check()){
          return;
        }
        $view->with('playbook', Auth::user()->playbook->first());
        //$view->with('physical', Auth::user()->playbook()->physical->first());
        //$view->with('physical', Auth::user()->playbook->physical->first());
    }
}
