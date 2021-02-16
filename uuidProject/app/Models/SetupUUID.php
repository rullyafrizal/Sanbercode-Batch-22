<?php

use Illuminate\Support\Str;

trait SetupUUID
{
    protected static function boot()
    {
        static::creating(function ($model) {
            if(!$model->getKey()){
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}