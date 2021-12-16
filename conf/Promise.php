<?php
class Promise{

    private $isFulfilled,$isRejected;

    function __construct($callback=null){
        $callback(this.onSuccess,this.onError);
        return this;
    }

    private function onSuccess($data){
        this.$isFulfiiled=$data;
    }

    private function onError($data){
        this.$isRejected=$data;
    }

    public function then($cb,$err=null){
        $fulfilled=$cb(this.$isFulfilled);
        this.$isFulfilled=null;
        this.$isFulfilled=isset($fulfilled)?$fulfilled:this.$isFulfilled;
    }

    public function catch($err){
        $err(this.$isRejected);
    }

}
new Promise($prom).then($an);
$prom=function($sus,$err){
    $sus("hello world");
};
$ans=function($data){
    echo $data;
};