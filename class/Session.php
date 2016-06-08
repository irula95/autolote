<?php
class Session{ 
    private $user;
    private $pass;
    private $recordar;
    private $state;
    public $session;

    public function __construct($_user=NULL, $_pass=NULL, $_recordar=NULL) {
        $this->user = $_user;
        $this->pass = $_pass;
        $this->recordar = $_recordar;
        $this->state = "no";
        $this->session = &$_SESSION;
    }
    
    public function doValidation(){
        
        if($this->user=="admin" && $this->pass=="admin"):
            $this->initSession();
            return TRUE;
        endif;
        return FALSE;
    }
    
    private function initSession(){
        $this->session["user"]= $this->user;
        $this->session["pass"]= $this->pass;
        $this->session["state"]= "si";
        if($this->recordar):
            $cookies = new Cookies();
            $value = $this->user.":".$this->pass;
            $cookies->offsetSet("user", $value);
        endif;
    }


    public function checkAccess(){
        if(isset($this->session["state"])):
            if($this->session["state"]=="si"):
                return TRUE;
            endif;
        endif;
        return FALSE;
    }
    
    public function close(){
        session_destroy();
        $this->session = array();
        unset($this->session["user"]);
        unset($this->session["pass"]);
        unset($this->session["state"]);
		$cookies = new Cookies();
		if($cookies->offsetExists("user")):
			$cookies->offsetUnset("user");
		endif;
		return true;
    }
}
