<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Youtube {
    

    public function getPlyalist()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.googleapis.com/youtube/v3/playlists?part=snippet&channelId=UCO-zxU3Yu1NbgGhyZ4KMkRA&key=AIzaSyC5d2pr3Qy5G08TTXobMNZ1JSxJXk6RowY",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return false;
        } else {
            return json_decode($response,true);
        }

    }

    public function getPlyalistVideo($idPlaylist)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=10&key=AIzaSyC5d2pr3Qy5G08TTXobMNZ1JSxJXk6RowY&playlistId=".$idPlaylist,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          return false;
        } else {
         return json_decode($response,true);
        }
    }
}