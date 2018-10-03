<?php
/**
 * Created by PhpStorm.
 * User: yuriiin
 * Date: 29/09/18
 * Time: 21:31
 */

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;

class User extends BaseUser
{
    protected $id;
}