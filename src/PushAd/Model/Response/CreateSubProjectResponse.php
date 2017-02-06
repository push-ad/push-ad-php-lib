<?php

namespace PushAd\Model\Response;

/**
 * Response received from API after project creation
 */
class CreateSubProjectResponse extends Response{
    
    protected $pushadId;
    
    protected $apiKey;
    
    public function parseBody() {
        $body = $this->getBody();
        if(array_key_exists('subproject_id', $body)){
            $this->setPushadId($body['subproject_id']);
        } else {
            throw new \PushAd\Model\Exception\ApiException("Invalid response, no subproject ID provided!");
        }
        
        if(array_key_exists('api_key', $body)){
            $this->setApiKey($body['api_key']);
        } else {
            throw new \PushAd\Model\Exception\ApiException("Invalid response, no API key provided!");
        }
        
        
    }
    
    public function getPushadId() {
        return $this->pushadId;
    }

    public function setPushadId($pushadId) {
        $this->pushadId = $pushadId;
        return $this;
    }

    public function getApiKey() {
        return $this->apiKey;
    }

    public function setApiKey($apiKey) {
        $this->apiKey = $apiKey;
        return $this;
    }



}
