<?php

namespace Anthony\Hsing\Controller\Songlist;

use Anthony\Hsing\Controller\BaseController;

use Anthony\Hsing\Model\Db\UploadMan;
use Phalcon\Mvc\Model\Query;
use \Exception;

class SearchController extends BaseController
{
    public function getInfoAction()
    {
        try {
            $test = $this->redis->ping();
            var_dump($test);
            echo "123";exit;
            $this->view->songCount  = "1";
            $this->view->updateTime = "2";
            $this->view->excel      = "3";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }
}