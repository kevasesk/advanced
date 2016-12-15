<?php
namespace common\widgets;

use yii\base\Widget;
class DateFormat extends Widget
{
    public $date;
    public $lang;
    public $style;

    public function run()
    {
        if($this->style=='form' || $this->style=='')
        {
            return $this->render('date',array(
                'date'=>array(
                    'day'=>date('d',strtotime($this->date)),
                    'month'=>$this->getMonth($this->lang),
                    'year'=>date('Y',strtotime($this->date)),
                ),
            ));
        }
        if($this->style=='line')
        {
            return date('d',strtotime($this->date))." ".
                    $this->getMonth($this->lang)." ".
                    date('Y',strtotime($this->date))." ".
                    "року";
        }

    }
    public function getMonth($lang)
    {
        $num=date('n',strtotime($this->date));
        //exit($num);
        $months     = array(
            'ru_RU' => array(
                1   => 'января',
                2   => 'февраля',
                3   => 'марта',
                4   => 'апреля',
                5   => 'мая',
                6   => 'июня',
                7   => 'июля',
                8   => 'августа',
                9   => 'сентября',
                10  => 'октября',
                11  => 'ноября',
                12  => 'декабря',
            ),
            'uk'    => array(
                1   => 'cічня',
                2   => 'лютого',
                3   => 'березня',
                4   => 'квітня',
                5   => 'травня',
                6   => 'червня',
                7   => 'липня',
                8   => 'серпня',
                9   => 'вересня',
                10  => 'жовтня',
                11  => 'листопада',
                12  => 'грудня',
            ),
            'en_US'   => array(
                1   => 'January',
                2   => 'February',
                3   => 'March',
                4   => 'April',
                5   => 'May',
                6   => 'June',
                7   => 'July',
                8   => 'August',
                9   => 'September',
                10  => 'October',
                11  => 'November',
                12  => 'December',
            ),
        ); return $months[$lang][$num];
    }
}

?>
