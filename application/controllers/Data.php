<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('youtube');
    }

    public function index()
    {
        $data = $this->youtube->getPlyalist();
        $playListVideo = array();
        foreach ($data['items'] as $value) {
            $temp = array();
            $temp['playlist'] = $value['snippet']['title'];
            $videos = $this->youtube->getPlyalistVideo($value['id']);
            foreach ($videos['items'] as $video) {
                $tempVideo = array();
                $tempVideo['title'] = $video['snippet']['title'];
                $tempVideo['image'] = $video['snippet']['thumbnails']['default']['url'];
                $temp['video'][] = $tempVideo;
            }
            $playListVideo[] = $temp; 
        }

        foreach ($playListVideo as $value) {
            echo "<h3>".$value['playlist']."</h3>";
            echo "<ul>";
            foreach ($value['video'] as $subValue) {
                echo "<li><h5>".$subValue['title']."</h5><br><img src='".$subValue['image']."' /></li>";
            }
            echo "</ul>";
        }
    }

}