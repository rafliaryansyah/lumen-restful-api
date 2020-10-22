<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Student extends Model {

    protected $table = 'students';
    protected $fillable = ['id', 'firstName', 'lastName', 'class', 'exSchool', 'schoolOrigin'];
    protected $keyType = "string";

    /**
     * The "booting" function of model
     *
     * @return void
     */
    protected static function boot() {
        parent::boot();
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * Get the auto-incrementing key type.
     *
     * @return string
     */
    public function getKeyType()
    {
        return 'string';
    }

}
