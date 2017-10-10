<?php

namespace App\Http\ViewComposers;

use App\Type;
use App\Department;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;


class AppComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $type_users = Type::all();
        $departaments = Department::all();

        $view->with('departaments', $departaments)
            ->with('type_users', $type_users);
    }
}