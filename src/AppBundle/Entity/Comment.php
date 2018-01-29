<?php

namespace AppBundle\Entity;

/**
 * Comment
 */
class Comment
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $content;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * @var \App\Entity\Article
     */
    private $article;


    /**
     * Set article
     *
     * @param \App\Entity\Article $article
     *
     * @return Comment
     */
    public function setArticle(\App\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \App\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }
}
