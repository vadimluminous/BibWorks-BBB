<?php
use Google\Cloud\Storage\StorageClient;

// Authenticating with a keyfile path.
$storage = new StorageClient([
    'keyFilePath' => 'functions/bibworksgoogle.json'
]);
// Providing the Google Cloud project ID.
$storage = new StorageClient([
    'projectId' => 'bibworks-263507'
]);
?>