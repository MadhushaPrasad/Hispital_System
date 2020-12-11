<?php


class Clinic
{
    private $clinic_id;
    private $clinic_name;
    private $clinic_location;
    private $opening_date;
    private $closing_date;
    private $opening_time;
    private $closing_time;
    private $status;

    /**
     * Clinic constructor.
     * @param $clinic_name
     * @param $clinic_location
     * @param $opening_date
     * @param $closing_date
     * @param $opening_time
     * @param $closing_time
     * @param $status
     */
    public function __construct($clinic_name, $clinic_location, $opening_date, $closing_date, $opening_time, $closing_time, $status)
    {
        $this->clinic_name = $clinic_name;
        $this->clinic_location = $clinic_location;
        $this->opening_date = $opening_date;
        $this->closing_date = $closing_date;
        $this->opening_time = $opening_time;
        $this->closing_time = $closing_time;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getClinicId()
    {
        return $this->clinic_id;
    }

    /**
     * @param mixed $clinic_id
     */
    public function setClinicId($clinic_id)
    {
        $this->clinic_id = $clinic_id;
    }

    /**
     * @return mixed
     */
    public function getClinicName()
    {
        return $this->clinic_name;
    }

    /**
     * @param mixed $clinic_name
     */
    public function setClinicName($clinic_name)
    {
        $this->clinic_name = $clinic_name;
    }

    /**
     * @return mixed
     */
    public function getClinicLocation()
    {
        return $this->clinic_location;
    }

    /**
     * @param mixed $clinic_location
     */
    public function setClinicLocation($clinic_location)
    {
        $this->clinic_location = $clinic_location;
    }

    /**
     * @return mixed
     */
    public function getOpeningDate()
    {
        return $this->opening_date;
    }

    /**
     * @param mixed $opening_date
     */
    public function setOpeningDate($opening_date)
    {
        $this->opening_date = $opening_date;
    }

    /**
     * @return mixed
     */
    public function getClosingDate()
    {
        return $this->closing_date;
    }

    /**
     * @param mixed $closing_date
     */
    public function setClosingDate($closing_date)
    {
        $this->closing_date = $closing_date;
    }

    /**
     * @return mixed
     */
    public function getOpeningTime()
    {
        return $this->opening_time;
    }

    /**
     * @param mixed $opening_time
     */
    public function setOpeningTime($opening_time)
    {
        $this->opening_time = $opening_time;
    }

    /**
     * @return mixed
     */
    public function getClosingTime()
    {
        return $this->closing_time;
    }

    /**
     * @param mixed $closing_time
     */
    public function setClosingTime($closing_time)
    {
        $this->closing_time = $closing_time;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

}