<?php

namespace LivewireFilemanager\Filemanager\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

trait HasMediaOwner
{
    protected static function booted()
    {
        static::addGlobalScope('user_id', function (Builder $builder) {
            if (! config('livewire-fileuploader.acl_enabled')) {
                return;
            }

			$user = Auth::user();

			if ($user) {
                $builder->where(
                    'custom_properties->user_id',
					Auth::id()
                );
            }
        });
    }
}
