<?php
/*
The Model class knows nothing but the very basic stuff.
It knows about the base url, and fetches data from the API based on feed id and options list.
*/

class Model {

    //the base url isn't going to change no matter what.
    const BASE_URL = 'http://app.compendium.com/api/publishers/';

    private $feedID;
    private $options;

    function __construct($feedID = "", $options = "") {
        $this->feedID = $feedID;
        $this->options = $options;
    }

    // get json, decode, forward.
    public function getFeedData() {
        $url = self::BASE_URL . $this->feedID . "/feed?" . $this->options;
        $json = file_get_contents($url);
        // printing this out on the page, so its easy to see and test what url was used.
        echo "Assembled Url : ".$url;
        return json_decode($json, TRUE);
    }

    // getters and setters
    
    public function getFeedID() {
        return $this->feedID;
    }

    public function setFeedID($feedID) {
        $this->feedID = $feedID;
    }

    public function getOptions() {
        return $this->options;
    }

    public function setOptions($options) {
        $this->options = $options;
    }

}
