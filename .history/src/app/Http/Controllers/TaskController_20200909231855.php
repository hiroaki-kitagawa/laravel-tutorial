<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(ind $id)
    {
        $folders = Folder::all();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $id,
        ]);
    }
}
