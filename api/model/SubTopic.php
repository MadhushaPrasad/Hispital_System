<?php


class SubTopic
{
    private $id;
    private $sub_topic_title;

    /**
     * SubTopic constructor.
     * @param $main_topic_title
     */
    public function __construct($main_topic_title)
    {
        $this->sub_topic_title = $main_topic_title;
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
    public function getSubTopicTitle()
    {
        return $this->sub_topic_title;
    }

    /**
     * @param mixed $sub_topic_title
     */
    public function setSubTopicTitle($sub_topic_title)
    {
        $this->sub_topic_title = $sub_topic_title;
    }

}