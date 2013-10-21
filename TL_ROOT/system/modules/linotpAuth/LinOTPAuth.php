<?php
if (!defined('TL_ROOT')) die('You can not access this file directly!');

/*
Version: 1.0
Author: Cornelius Kölbel

    Copyright 2013 Cornelius Kölbel (corny@cornelinux.de)

    This program is free software; you can redistribute it and/or modify
    it  under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/


class LinOTP {
        private $url, $verify_peer, $verify_host;

        public function __construct( $url = "https://localhost/validate/check",  $verify_peer=0, $verify_host=0, $timeout = 5) {
                $this->url=$url;
                # can be 0 or 2
                #$verify_host = 0;
                #$verify_peer = 0;
                $this->verify_peer=$verify_peer;
                $this->verify_host=$verify_host;
		$this->timeout=$timeout;
        }


        public function linotp_auth($user="", $pass="", $realm="") {
                $ret=false;
                try {
                        $url = $this->url;
                        $REQUEST="$url?user=$user&pass=$pass";
                        if(""!=$realm)
                                $REQUEST="$REQUEST&realm=$realm";
#                               print "\n\n\n$REQUEST\n\n\n";


                        if(!function_exists("curl_init"))
                                die("PHP cURL extension is not installed");

                        $ch=curl_init($REQUEST);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->verify_peer);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $this->verify_host);
                        $r=curl_exec($ch);
                        curl_close($ch);


                        $jObject = json_decode($r);
                        if (true == $jObject->{'result'}->{'status'} )
                                if (true == $jObject->{'result'}->{'value'} )
                                        $ret=true;
                } catch (Exception $e) {
                        error_log("Error in receiving response from LinOTP server: $e");
                }
                return $ret;
        }
}


class LinOTPAuth extends \Frontend {


    public function authenticate($strUsername, $strPassword, User $objUser){

        $username = $strUsername;
        $password = $strPassword;

	log_message("Authenticating via linotp");
        //get the server name
        $url =  $GLOBALS['TL_CONFIG']['linotpAuth_URL'];

        // get SSL options
        $verify_peer = $GLOBALS['TL_CONFIG']['linotpAuth_verifySSL'];
        $verify_host = $GLOBALS['TL_CONFIG']['linotpAuth_verifyHost'];
        $realm = $GLOBALS['TL_CONFIG']['linotpAuth_Realm'];
        $timeout = $GLOBALS['TL_CONFIG']['linotpAuth_timeout'];

        $l = new LinOTP( $url, $verify_peer, $verify_host, $timeout );
        $r = $l->linotp_auth($username, $password, $realm);

	if ($r) {
		return true;
	}
	return false;
    }
	
}


?>
