<?php

namespace App\Entity;

use Faulancer\ORM\User\Entity;

/**
 * Class UserEntity
 *
 * This is just an example entity.
 * You can delete the whole file or rename it to suit your preferences.
 *
 * @package App\Entity
 * @author  Your Name <your.name@example.com>
 */
class UserEntity extends Entity
{

    /**
     * This defines the correspondig table name
     *
     * @var string
     */
    protected static $tableName = 'userdata';

}