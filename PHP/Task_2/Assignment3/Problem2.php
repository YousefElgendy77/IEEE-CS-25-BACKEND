<?php

function get_arguments(...$words)
{
    foreach ($words as $word) :
        echo $word . " ";
    endforeach;
    echo '<br>';
}

// Write Function Content Here

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP