<?php
namespace common\widgets;

use yii\base\Widget;
use common\models\MenuItems;

class MainMenu extends Widget
{
    public function run()
    {
        $items=MenuItems::find()->asArray()->all();
        foreach ($items as $item)
        {
            $menu_items[$item['index']][$item['field']]=$item['value'];
        }

        return $this->render('menu_form',array(
            'items'=>$menu_items
        ));
    }
}

?>

