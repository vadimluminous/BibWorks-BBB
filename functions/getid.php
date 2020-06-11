<?php
use Google\Cloud\Firestore\FirestoreClient;

function get_id($client_id)
{
    // Create the Cloud Firestore client
    $db = new FirestoreClient([
        'projectId' => 'bibworks-263507',
    ]);

    $docRef = $db->collection('clients')->document($client_id);
    $snapshot = $docRef->snapshot();
    
    if ($snapshot->exists()) {
        $id = $snapshot->id();
        return $id;
    } else {
        printf('This is an invalid id: %s' . PHP_EOL, $snapshot->id());
        exit();
    }
    

}

?>