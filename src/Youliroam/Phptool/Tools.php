<?php
namespace youliroam\phptool;

class Tools extends AbsTools {


	public function test()
    {
		return 'youliroam/phptool php tool class'.parent::test;
	}


	public function getuid()
    {
		$guid = '';
        $uid = uniqid("", true);
        $data = '';
        $data .= $_SERVER['REQUEST_TIME'];
        $data .= $_SERVER['HTTP_USER_AGENT'];
        $data .= $_SERVER['SERVER_ADDR'];
        $data .= $_SERVER['SERVER_PORT'];
        $data .= $_SERVER['REMOTE_ADDR'];
        $data .= $_SERVER['REMOTE_PORT'];
        $hash = strtoupper(hash('ripemd128', $uid . $guid . md5($data)));
        $guid = '{' .
            substr($hash, 0, 8) .
            '-' .
            substr($hash, 8, 4) .
            '-' .
            substr($hash, 12, 4) .
            '-' .
            substr($hash, 16, 4) .
            '-' .
            substr($hash, 20, 12) .
            '}';
        return $guid;
	}


    /**
     * @param $date1    20200421;
     * @param $date2    20191111;
     * @return float|int
     */
    public function month_dif( $date1, $date2)
    {
        $date1_y = substr($date1,0,4);
        $date2_y = substr($date2,0,4);
        $date1_m = substr($date1,4,2);
        $date2_m = substr($date2,4,2);
        $cha = 0;
        if(($date1_y - $date2_y) > 0 ){
            $cha = abs(($date1_y - $date2_y -1) * 12 + (12 - $date2_m + $date1_m));
        }else if(($date1_y - $date2_y) < 0 ){
            $cha = abs(($date2_y - $date1_y -1) * 12 + (12 - $date1_m + $date2_m));
        }else if(($date1_y - $date2_y) == 0 ){
            $cha = abs($date1_m - $date2_m);
        }
        return $cha;
    }


    public function getPwd()
    {
        $pwd = __DIR__;
        $pwd = str_replace("\\","/",$pwd);
        $pwd = $pwd.'/';
        return $pwd;
    }
}