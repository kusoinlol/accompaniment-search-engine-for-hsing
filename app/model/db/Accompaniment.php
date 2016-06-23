<?php

namespace Anthony\Hsing\Model\Db;

use Phalcon\Mvc\Model\Validator\Numericality as NumericalityValidator;
use Phalcon\Mvc\Model\Validator\InclusionIn;
use Phalcon\Mvc\Model\Validator\Uniqueness;
use Hiiir\Helper\DateHelper;

/**
 * Message Model
 */
class Accompaniment extends \Phalcon\Mvc\Model
{
    public $id;
    public $sid;
    public $uploadMan;
    public $songName;
    public $singer;
    public $hSingName;
    public $addTime;
    public $chorusCount;
    public $songUrl;
    public $songDesc;

    /**
     * 資料表名稱
     *
     * @return string
     */
    public function getSource()
    {
        return "Accompaniment";
    }
}