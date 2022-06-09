<?php
namespace AOE\HappyFeet\UserFunc;

use AOE\HappyFeet\Service\RenderingService;

class AddFootnotesUserFunc {
    public function getContent($content, $conf){
        return RenderingService::$footnoteContent;
    }
}
