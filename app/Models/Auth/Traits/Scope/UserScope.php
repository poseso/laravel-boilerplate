<?php

namespace App\Models\Auth\Traits\Scope;

/**
 * Class UserScope.
 */
trait UserScope
{
    /**
     * @param $query
     * @param array $roles
     *
     * @return mixed
     *
     * Ex: ->hasRole(['administrator', 'executive'])
     */
    public function scopeHasRole($query, $roles)
    {
        return $query->whereHas('roles', function ($query) use ($roles) {
            return $query->whereIn('name', $roles);
        });
    }

    /**
     * @param $query
     * @param bool $confirmed
     *
     * @return mixed
     */
    public function scopeConfirmed($query, $confirmed = true)
    {
        return $query->where('confirmed', $confirmed);
    }

    /**
     * @param $query
     * @param bool $status
     *
     * @return mixed
     */
    public function scopeActive($query, $status = true)
    {
        return $query->where('active', $status);
    }
}
