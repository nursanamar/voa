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
        $data['channel'] = $this->getChannel();
        $this->load->view('home',$data);
        // $this->getData();
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
                $tempVideo['idVideo'] = $video['snippet']['resourceId']['videoId'];
				$thumnail = isset($video['snippet']['thumbnails']['maxres']) ? $video['snippet']['thumbnails']['maxres'] : $video['snippet']['thumbnails']['high']; 
                $tempVideo['image'] = $thumnail['url'];
                $tempVideo['thumbnail'] = $video['snippet']['thumbnails']['medium']['url'];
                $temp['video'][] = $tempVideo;
            }
            $playListVideo[] = $temp; 
        }

        // var_dump($video);
        
        
        return $playListVideo;
    }
    
    public function getChannel()
    {
        $channel = $this->youtube->channelInfo();
        $temp = $channel['items'][0]['snippet'];
        
        return $temp;
    }

    public function video($id)
    {
        $data['id'] = $id;
        $this->load->view('video',$data);
    }
}
