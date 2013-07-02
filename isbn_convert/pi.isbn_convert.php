<?php 
class Plugin_isbn_convert extends Plugin
{
    var $meta = array(
        'name'       => 'ISBN 13 to 10 Converter',
        'version'    => '1.0',
        'author'     => 'Bud Parr',
        'author_url' => 'http://sonnetmedia.net',
        'description'=> 'Converts ISBN-13 to ISBN-10 and Leaves ISBN-10 numbers (or anything else not matching 13 consecutive numbers) alone'
    );
 
    public function index() 
  {
    $isbn13 = $this->fetchParam("isbn13");

    if (preg_match('/^\d{3}(\d{9})\d$/', $isbn13, $m)) 
        {
            $sequence = $m[1];
            $sum = 0;
            $mul = 10;
        for ($i = 0; $i < 9; $i++) 
        {
            $sum = $sum + ($mul * (int) $sequence{$i});
            $mul--;
        }
        $mod = 11 - ($sum%11);
    if ($mod == 10) 
        {
            $mod = "X";
        }
    else if ($mod == 11) {
            $mod = 0;
        }
        $isbn13 = $sequence.$mod;
    }
    return $isbn13;
    }
}
