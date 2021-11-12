<?php

class DBBroker
{

    private $mysqli;

    public function __construct(Mysqli $mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function vratiSveSportove()
    {
        $upit = "SELECT * FROM sport";

        $rs = $this->mysqli->query($upit);
        $sportovi = [];
        while ($red = $rs->fetch_object()) {
            //fetch-object -- spaja u objekat
            $sportovi[] = new Sport($red->sportID,$red->nazivSporta);
        }
        return $sportovi;
    }
}