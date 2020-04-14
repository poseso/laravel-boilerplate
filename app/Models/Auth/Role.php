<?php

namespace App\Models\Auth;

use App\Models\Auth\Traits\Attribute\RoleAttribute;
use App\Models\Auth\Traits\Method\RoleMethod;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use Spatie\Permission\Models\Role as SpatieRole;

/**
 * Class Role.
 */
class Role extends SpatieRole implements AuditableContract
{
    use Auditable,
        RoleAttribute,
        RoleMethod;

    /**
     * Attributes to exclude from the Audit.
     *
     * @var array
     */
    protected $auditExclude = [
        'id',
    ];
}
