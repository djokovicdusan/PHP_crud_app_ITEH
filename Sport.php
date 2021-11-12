<?php
class Sport
{
    //model
    private $sportID;
    private $nazivSporta;

    /**
     * Sport constructor.
     * @param $sportID
     * @param $nazivSporta
     */
    public function __construct($sportID, $nazivSporta)
    {
        $this->sportID = $sportID;
        $this->nazivSporta = $nazivSporta;
    }

    /**
     * @return mixed
     */
    public function getNazivSporta()
    {
        return $this->nazivSporta;
    }

    /**
     * @return mixed
     */
    public function getSportID()
    {
        return $this->sportID;
    }

    /**
     * @param mixed $nazivSporta
     */
    public function setNazivSporta($nazivSporta)
    {
        $this->nazivSporta = $nazivSporta;
    }

    /**
     * @param mixed $sportID
     */
    public function setSportID($sportID)
    {
        $this->sportID = $sportID;
    }
}
