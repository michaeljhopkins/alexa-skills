<?php namespace Alexa;

use Develpr\AlexaApp\Contracts\AmazonEchoDevice;
use Illuminate\Database\Eloquent\Model;

class Device extends Model implements AmazonEchoDevice{

    protected $table = "alexa_devices";

    public function getDeviceId()
    {
        return $this->device_user_id;
    }

    public function setDeviceId($deviceId)
    {
        $this->attributes['device_user_id'] = $deviceId;
    }

}