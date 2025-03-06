<?php

namespace App;

enum TaskStatus: string
{
    case Pending = 'Pending';
    case Completed = 'Completed';
    case In_Progress = 'In Progress';
}
