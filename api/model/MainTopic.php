<?php


class MainTopic
{
    private $id;
    private $main_topic_title;

    /**
     * MainTopic constructor.
     * @param $main_topic_title
     */
    public function __construct($main_topic_title)
    {
        $this->main_topic_title = $main_topic_title;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMainTopicTitle()
    {
        return $this->main_topic_title;
    }

    /**
     * @param mixed $main_topic_title
     */
    public function setMainTopicTitle($main_topic_title)
    {
        $this->main_topic_title = $main_topic_title;
    }

}