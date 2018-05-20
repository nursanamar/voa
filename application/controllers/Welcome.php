<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('youtube');
    }
	 
	public function index()
	{
		$data['data'] = $this->getData();
		$this->load->view('home',$data);
	}

	public function getData()
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
				$thumnail = isset($video['snippet']['thumbnails']['maxres']) ? $video['snippet']['thumbnails']['maxres'] : $video['snippet']['thumbnails']['high']; 
                $tempVideo['image'] = $thumnail['url'];
                $tempVideo['thumbnail'] = $video['snippet']['thumbnails']['medium']['url'];
                $temp['video'][] = $tempVideo;
            }
            $playListVideo[] = $temp; 
        }

        return $playListVideo;
	}
}
