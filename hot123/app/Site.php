<?php

namespace App;

class Site
{

    /**
     * the name of Site
     */
    protected $name;

    /**
     * the link of Site
     */
    protected $url;

    /**
     * the description of Site
     **/
    protected $description;



    public function fakeList() {
        $fakeSites = array();
        for($x = 0; $x <= 1; $x++) {
            $site = new Site();
            $site->name = "site{$x}";
            $site->url = "http://php.net/manual/zh/language.types.object.php";
            $site->description = "I'm a test site{$x}";
            $fakeSites[] = $site;
        }
        print_r($fakeSites);

        foreach($fakeSites as $s) {
            echo $s->name."\n";
        }
        return $fakeSites;
    }

    public function toString() {
        return $this->name."\n".$this->url."\n".$this->description."\n\n";
    }
};

// $site = new Site();
// $site->fakeList();

?>
