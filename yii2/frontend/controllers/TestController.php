<?php
namespace frontend\controllers;

use Yii;
use common\models\T1;
use yii\web\Controller;

class TestController extends Controller
{
    public $layout =false;
    //创建的index方法（注：每个方法必须假action前缀）
    public function actionIndex()
    {
       #步骤1：查询所有：
        //$t1s = T1::find()->all();
        #查询1条
        $t1_one=T1::findOne(1);
        $t1_two=T1::find()->where(['id'=>'1'])->one();
        #打印
        echo '<pre>';
        echo $t1_one->uname;
        echo '<br/>';
        echo $t1_two->uname;
        echo '<hr/>';
        print_r($t1_one);
        print_r($t1_two);
        die;
        #步骤2：遍历输出
        // foreach ($t1s as $t1) {
        //     echo $t1->id . '__' . $t1->uname . '<br />';
        // }
        // echo '<pre>';
        // print_r($t1s);
        // die;
            }

    //创建的add方法（注：每个方法必须假action前缀）
    public function actionAdd()
    {
        echo  'add';
    }
}