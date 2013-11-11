<?php
/**
 * User: Sergij
 * Date: 10.11.13
 * Time: 9:27
 */

include_once('linkedList.php');
$List = new linkedList();
echo '<h1 style="text-align: center; font-style: italic">Linked List</h1>';
$Counter = 1;
// Create a list of elements;
while ( $Counter < 5 ) {
    $List->insert($Counter);
    $Counter++;
}

// Iterate the list we just created;
echo "Our list: {";

while ( $Data = $List->next() ) {

    echo "|". $Data ."|";
}
echo "}";

// Reverse the list;
$List->reverse();
echo "------";
// Show me the last element after the reverse
print_r($List->last());
echo "------";
// Insert a new element;
$List->insert('moo');

// Reset our pointer;
$List->reset();

// Iterate the list again;
while ( $Data = $List->next() ) {
    print_r($Data);
    echo "\r\n";
}