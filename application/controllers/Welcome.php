<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('youtube');
    }

    public function index()
    {
        $data['data'] = $this->getData();
        foreach ($data['data'] as $value) {
            $data['playlist'][] = $value['playlist'];
        }
        $data['channel'] = $this->getChannel();
        $this->load->view('home', $data);
        // var_dump($data['playlist']);
        // $this->getData();
    }

    public function getData()
    {
        $data = $this->youtube->getPlyalist();
        $playListVideo = array();
        foreach ($data['items'] as $value) {
            $temp = array();
            $temp['playlist'] = array(
                'id' => $value['id'],
                'title' => $value['snippet']['title'],
            );
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
        $data = $this->youtube->getVideo($id);
        $data['items'][0]['playlist'] = $this->getPlaylists();
        $this->load->view('video', $data['items'][0]);
    }

    public function playlist($idPlaylist)
    {
        $data['playlist'] = $this->getPlaylists();
        $videos = $this->youtube->getPlyalistVideo($idPlaylist, 16);
        $data['title'] = "";

        foreach ($data['playlist'] as $value) {
            if ($value['id'] == $idPlaylist) {
                $data['title'] = $value['title'];
            }
        }

        foreach ($videos['items'] as $video) {
            $tempVideo = array();
            $tempVideo['title'] = $video['snippet']['title'];
            $tempVideo['idVideo'] = $video['snippet']['resourceId']['videoId'];
            $thumnail = isset($video['snippet']['thumbnails']['maxres']) ? $video['snippet']['thumbnails']['maxres'] : $video['snippet']['thumbnails']['high'];
            $tempVideo['image'] = $thumnail['url'];
            $tempVideo['thumbnail'] = $video['snippet']['thumbnails']['medium']['url'];
            $data['data'][] = $tempVideo;
        }

        // var_dump($data['data']);
        $this->load->view('playlist', $data);
        // var_dump($data);
    }

    public function getPlaylists()
    {
        $playlists = $this->youtube->getPlyalist();
        $data = array();
        foreach ($playlists['items'] as $value) {
            $data[] = array(
                'id' => $value['id'],
                'title' => $value['snippet']['title'],
            );
        }

        return $data;
    }

    public function cyberGuide()
    {
        $data['playlist'] = $this->getPlaylists();
        $this->load->view('cyberGuide',$data);
    }
}
