<?php

namespace Anthony\Hsing\Model\Db;

use Phalcon\Mvc\Model\Validator\Numericality as NumericalityValidator;
use Phalcon\Mvc\Model\Validator\InclusionIn;
use Phalcon\Mvc\Model\Validator\Uniqueness;
use Hiiir\Helper\DateHelper;

/**
 * Message Model
 */
class UploadMan extends \Phalcon\Mvc\Model
{
    public $id;
    public $uid;
    public $name;

    /**
     * 資料表名稱
     *
     * @return string
     */
    public function getSource()
    {
        return "UploadMan";
    }
}