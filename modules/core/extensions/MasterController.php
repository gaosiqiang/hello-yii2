<?php

namespace app\modules\core\extensions;

use yii\web\Controller;

class MasterController extends Controller
{

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
//        $this->maintenance();
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
        ]);
    }

//    private function maintenance()
//    {
//        $maintenance_mod = Setting::cacheGet('maintenance_mod');
//        if ($maintenance_mod == 'true') {
//            if (!strstr($this->route, 'core/maintenance') && !strstr($this->route, 'cake/') && !strstr($this->route, 'api/')) {
//                $this->redirect('/core/maintenance');
//                return \Yii::$app->end();
//            }
//        }
//    }

}
