<?php
require_once(__DIR__.'/vendor/facebook/graph-sdk/src/Facebook/autoload.php');
$fb = new Facebook\Facebook([
 'app_id' => '200198691771297',
 'app_secret' => '1ced23b218e39c0f6d5ddc87ab2a6f11',
 'default_graph_version' => 'v9.0',
]);
$linkData = [
 'link' => 'https://testingakshay.herokuapp.com/',
 'message' => 'Test'
];
$pageAccessToken = 'EAAC2FGPoU6EBAEAWJAvkS3ArVJNciZAJttdZBdryH0fQbZBSaZCjg4Q9vwAbZAhL38ffnAWpsIGCq7Op4yjrZCsJ2EgXOMZCYcJGImNnMryP2mJmZBTw43Q7UYbp9hexYaeHGEIubm5zPjtBjBdX2aJUAPdg1nMyz8EqRZBDk8T2s4JIQA7V5bil7mZCPeHeiL5KVAJnQAuk7TnZB9oTmDfGYK8';
try {
 $response = $fb->post('/me/feed', $linkData, $pageAccessToken);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
 echo 'Graph returned an error: '.$e->getMessage();
 exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
 echo 'Facebook SDK returned an error: '.$e->getMessage();
 exit;
}
$graphNode = $response->getGraphNode();