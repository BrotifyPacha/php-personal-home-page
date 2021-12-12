<?php

namespace App\Common\Components;

class TaskWarriorWrapper {

    public function __construct()
    {
        $this->_command = 'task';
    }

    public function export($selector = 'status:pending')
    {
        $tasks = [];
        $this->execCommand('export', $tasks, $selector);
        $tasks = json_decode(implode('', $tasks));
        return $tasks;
    }

    public function taskSync()
    {
        $this->execCommand('sync');
    }

    private function execCommand($command, &$output = null, $selector = '')
    {
        exec($this->_command . ' ' . $selector . ' ' . $command, $output);
    }

}

