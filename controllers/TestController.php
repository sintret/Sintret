<?php

class TestController extends Controller
{

    public function actionFoursquare()
    {
        $venueId = '4b8e6a6bf964a5209c2133e3';
        echo '<pre>';
        print_r(Yii::app()->fetchImages->foursquare($venueId));
    }

    public function actionFacebook()
    {
        $fbId = '4b8e6a6bf964a5209c2133e3';
        echo '<pre>';
        print_r(Yii::app()->fetchImages->facebook($fbId));
    }

    public function actionFlickr()
    {
        $search = 'Bees';
        echo '<pre>';
        print_r(Yii::app()->fetchImages->flickr($search));
    }

}
