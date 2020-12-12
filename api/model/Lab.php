<?php


class Lab
{
    private $lab_id;
    private $patien_NIC;
    private $main_topic;
    private $sub_topic;
    private $value;

    /**
     * Lab constructor.
     * @param $patien_NIC
     * @param $main_topic
     * @param $sub_topic
     * @param $value
     */
    public function __construct($patien_NIC, $main_topic, $sub_topic, $value)
    {
        $this->patien_NIC = $patien_NIC;
        $this->main_topic = $main_topic;
        $this->sub_topic = $sub_topic;
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getLabId()
    {
        return $this->lab_id;
    }

    /**
     * @param mixed $lab_id
     */
    public function setLabId($lab_id)
    {
        $this->lab_id = $lab_id;
    }

    /**
     * @return mixed
     */
    public function getPatienNIC()
    {
        return $this->patien_NIC;
    }

    /**
     * @param mixed $patien_NIC
     */
    public function setPatienNIC($patien_NIC)
    {
        $this->patien_NIC = $patien_NIC;
    }

    /**
     * @return mixed
     */
    public function getMainTopic()
    {
        return $this->main_topic;
    }

    /**
     * @param mixed $main_topic
     */
    public function setMainTopic($main_topic)
    {
        $this->main_topic = $main_topic;
    }

    /**
     * @return mixed
     */
    public function getSubTopic()
    {
        return $this->sub_topic;
    }

    /**
     * @param mixed $sub_topic
     */
    public function setSubTopic($sub_topic)
    {
        $this->sub_topic = $sub_topic;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

}