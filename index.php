<?php

require_once('./classes/user.php');
require_once('./classes/tweet.php');
require_once('./data/user-data.php');
require_once('./data/tweet-data.php');

$user1 = new User('Clara', 'clara@gema.com', 'clarinha', 'abc123');
$user2 = new User('Bruna', 'bruna@chocolate.com', 'brunhilda', 'abc123');
$user3 = new User('Cinara', 'cinara@picoci.com', 'piquinha', 'abc123');
$user4 = new User('Joana', 'joana@pansi.com', 'jorina', 'abc123');

$userData = $user1->add($userData);
$userData = $user2->add($userData);
$userData = $user3->add($userData);
$userData = $user4->add($userData);

$tweet1 = new Tweet('To vigiando', $user1->getUserName());
$tweet2 = new Tweet('Quero colo', $user2->getUserName());
$tweet3 = new Tweet('Soi picoci', $user3->getUserName());
$tweet4 = new Tweet('Quero ração', $user4->getUserName());

$tweetData = $tweet1->addTweet($tweetData);
$tweetData = $tweet2->addTweet($tweetData);
$tweetData = $tweet3->addTweet($tweetData);
$tweetData = $tweet4->addTweet($tweetData);

$tweet2->addLike($user2->getUserName());
$tweet2->addLike($user3->getUserName());

$tweet3->addLike($user4->getUserName());

$tweet4->addLike($user1->getUserName());
$tweet4->addLike($user2->getUserName());
$tweet4->addLike($user3->getUserName());

Tweet::list($tweetData);