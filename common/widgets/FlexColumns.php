<?php
namespace common\widgets;

use yii\base\Widget;

class FlexColumns extends Widget
{
    public $directions;

    public function run()
    {
        return $this->render('table',array(
            'directions'=>array_chunk($this->directions,3,true)
        ));
    }
}

?>
