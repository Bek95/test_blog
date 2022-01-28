<?php

namespace AREA17\Infrastructure;

abstract class Repository
{
    /**
    * @param Object $model
    * @param $params
    * @return Object
    */
    public function model(Object $model, array $params)
    {
        foreach ($params as $key_model => $value) {
            $model->$key_model = $value;
        }
        
        return $model;
    }
}