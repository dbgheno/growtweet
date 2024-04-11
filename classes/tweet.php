<?php

class Tweet
{
    private $id;
    private $content;
    private $likes;
    private $userName;
    private $likeUserName;

    public function __construct($content, $userName, $likes = 0)
    {
        $this->id = uniqid();
        $this->content = $content;
        $this->likes = $likes;
        $this->userName = $userName;
    }

    public function addTweet($tweetData)
    {
        array_push($tweetData, $this);
        return $tweetData;
    }

    public function addLike($likeUserName)
    {
        $this->likes += 1;
        $this->likeUserName = $likeUserName;
    }

    public static function list($tweetData)
    {
        echo "Meu Growtweet!<br><br><hr>";
        foreach ($tweetData as $tweet) {
            echo "@$tweet->userName: $tweet->content<br>";
            if ($tweet->likes == 1) {
                echo "- $tweet->likeUserName curtiu<br>";
            } else if ($tweet->likes > 1){
                echo "- $tweet->likeUserName e mais " .  $tweet->likes-1 . " curtiram<br>";
            }
            echo "<hr>";
        }
    }
}
