<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Facades\TaskWarrior as TaskWarriorFacade;

class TaskWarrior extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $tasks = [];

    public function __construct()
    {
        $this->tasks = TaskWarriorFacade::export();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.task-warrior', [
            'tasks' => $this->tasks
        ]);
    }
}
