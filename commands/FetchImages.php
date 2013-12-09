<?php

class FetchImagesCommand extends CConsoleCommand
{

    public function actionFoursquare()
    {
        /* Examples foursquare array
         */
        $array = array('4b8e6a6bf964a5209c2133e3', '4b8b900af964a520daa232e3', '4b55b446f964a52087ec27e3');
        foreach ($array as $venue) {
            Yii::app()->fetchImages->foursquare($venue);
        }
    }

    public function actionFacebook()
    {
        $facebookers = array('22934684677', '22934634677');
        foreach ($facebookers as $fbId) {
            Yii::app()->fetchImages->facebook($fbId);
        }
    }

    public function actionFlickr()
    {
        $searchs = array('Bees', 'Waterbom Jakarta', 'Kepulauan Seribu');
        foreach ($searchs as $search) {
            Yii::app()->fetchImages->flickr($search);
        }
    }

    /**
     * Defines the help command which simply outputs how to use this module from the
     * command line
     */
    public function actionHelp()
    {

        $msg = "\nadd: Usage yiic fetchImages foursquare, for fetch image from foursquare \n";
        $msg .= "\nadd: Usage yiic fetchImages facebook, for fetch image from facebook \n";
        $msg .= "\nadd: Usage yiic fetchImages flickr, for fetch image from flickr \n";

        echo $msg;
    }

}
