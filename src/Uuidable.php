<?php
namespace Meiko\Uuid;

use Webpatser\Uuid\Uuid;

trait Uuidable
{
    /**
     * Set route key name as uuid
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return self::getUuidField();
    }

    /**
     * Add createUuid method to boot
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        self::createUuid();
    }

    /**
     * Generate UUID when creating model.
     *
     * @return void
     */
    protected static function createUuid()
    {
        static::creating(function ($model) {
            $model->{self::getUuidField()} = Uuid::generate()->string;
        });
    }

    /**
     * Get uuid field name
     *
     * @return string
     */
    protected static function getUuidField()
    {
        return 'uuid';
    }
}
