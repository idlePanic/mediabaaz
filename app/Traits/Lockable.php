<?php
/**
 * Created by PhpStorm.
 * User: zaraki
 * Date: 10/23/18
 * Time: 1:15 AM
 */

namespace App\Traits;

trait Lockable {

    public function lock() {
        $this->lock = 1;
        $this->save();
    }
}

