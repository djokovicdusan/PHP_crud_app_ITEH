<?php
class Utakmica
//model
{
    private $utakmicaID;
    private $nazivUtakmice;
    private $komentar;
    private $sport;
    private $cenaKarte;
    

    /**
     * Utakmica constructor.
     * @param $utakmicaID
     * @param $nazivUtakmice
     * @param $komentar
     * @param $sport
     * @param $cenaKarte
     */

    public function __construct($utakmicaID, $nazivUtakmice, $komentar, $sport, $cenaKarte, $mysqli)
    {
        $this->utakmicaID = $utakmicaID;
        $this->nazivUtakmice = $nazivUtakmice;
        $this->komentar = $komentar;
        $this->sport = $sport;
        $this->cenaKarte = $cenaKarte;
        $this->mysqli=$mysqli;
    }

    /**
     * @return mixed
     */
    public function getUtakmicaID()
    {
        return $this->utakmicaID;
    }

    /**
     * @param mixed $utakmicaID
     */
    public function setUtakmicaID($utakmicaID)
    {
        $this->utakmicaID = $utakmicaID;
    }

    /**
     * @return mixed
     */
    public function getNazivUtakmice()
    {
        return $this->nazivUtakmice;
    }

    /**
     * @param mixed $nazivUtakmice
     */
    public function setNazivUtakmice($nazivUtakmice)
    {
        $this->nazivUtakmice = $nazivUtakmice;
    }

    /**
     * @return mixed
     */
    public function getKomentar()
    {
        return $this->komentar;
    }

    /**
     * @param mixed $komentar
     */
    public function setKomentar($komentar)
    {
        $this->komentar = $komentar;
    }


    /**
     * @return mixed
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * @param mixed $sport
     */
    public function setSport($sport)
    {
        $this->sport = $sport;
    }

      /**
     * @return mixed
     */
    public function getCenaKarte()
    {
        return $this->cenaKarte;
    }

    /**
     * @param mixed $cenaKarte
     */
    public function setCenaKarte($cenaKarte)
    {
        $this->cenaKarte = $cenaKarte;
    }


    public function dodajUtakmicu(Utakmica $utakmica)
    {
        return $this->mysqli->query("INSERT INTO utakmica VALUES (null,
        '" . $utakmica->getNazivUtakmice() . "',
        '" . $utakmica->getKomentar() ."',
        " . $utakmica->getSport()->getSportID() . ",
        '" . $utakmica->getCenaKarte() ."'
        )");
    }



    public function vratiUtakmicePoPretrazi($pretraga, $sort)
    {
        $upit = "SELECT * FROM utakmica u join sport s on u.sport = s.sportID WHERE u.sport = " . $pretraga ." ORDER BY u.cenaKarte " . $sort;

        $rs = $this->mysqli->query($upit);
        $utakmice = [];
        while ($red = $rs->fetch_object()) {
            $utakmice[] = new Utakmica($red->utakmicaID,$red->nazivUtakmice,$red->komentar,new Sport($red->sportID,$red->nazivSporta),$red->cenaKarte, null);
        }
        return $utakmice;
    }



    public function obrisiUtakmicu($id)
    {
        return $this->mysqli->query("DELETE FROM utakmica WHERE utakmicaID = " . $id);
    }



    public function vratiSveUtakmice()
    {
        $upit = "SELECT * FROM utakmica u join sport s on u.sport = s.sportID";

        $rs = $this->mysqli->query($upit);
        $utakmice = [];
        while ($red = $rs->fetch_object()) {
            $utakmice[] = new Utakmica($red->utakmicaID,$red->nazivUtakmice,$red->komentar,new Sport($red->sportID,$red->nazivSporta),$red->cenaKarte, null);
        }
        return $utakmice;
    }

    

    public function izmeniUtakmicu($utakmicaID, $komentar, $cenaKarte)
    {
        return $this->mysqli->query("UPDATE utakmica SET komentar = '" . $komentar .  "', cenaKarte = '" .$cenaKarte ."' WHERE utakmicaID = '" . $utakmicaID."'");
    }

}