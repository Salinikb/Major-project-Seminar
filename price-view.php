<?php
// Specify the path to the saved chart file
$chart_path = 'C:/xampp/xampp/htdocs/Myproject/user12/priceairline/chart.jpg';

// Check if the chart file exists
if (file_exists($chart_path)) {
    // Get the MIME type of the image
    $mime_type = mime_content_type($chart_path);

    // Set the Content-Type header to the MIME type of the image
    header('Content-Type: ' . $mime_type);

    // Output the image content
    readfile($chart_path);
} else {
    echo 'Chart file not found.';
}
?>