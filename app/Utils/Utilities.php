<?php

namespace App\Utils;

use App\UserRole;

class Utilities
{
    public static function getUserRolesData(): array {
        return [
            'Administrator' => UserRole::Admin->value,
            'User' => UserRole::User->value,
        ];
    }
}
