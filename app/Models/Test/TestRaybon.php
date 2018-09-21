<?php

namespace App\Models\Test;

use App\Models\BaseModel;
use Symfony\Component\CssSelector\Exception\InternalErrorException;

class TestRaybon extends BaseModel
{
    //
    public function index()
    {
        try {
            self::getList([]);
        } catch (\ReflectionException $e) {
        } catch (InternalErrorException $e) {
        }
    }
}
