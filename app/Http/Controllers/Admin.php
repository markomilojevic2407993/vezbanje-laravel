<?php

namespace App\Http\Controllers;

use App\Models\Ocene;

class Admin extends Controller
{
    public function delete(Ocene $ocena)
    {
        $ocena->delete();

        return redirect('/home');
    }
}
