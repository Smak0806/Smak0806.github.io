<?php
// Include the configuration file with global variables
require_once './config.php';
require_once './index-content.php';

// Check if language is specified
$lang = isset($_POST['lang']) && in_array($_POST['lang'], ['es', 'en']) ? $_POST['lang'] : 'es';

// This is a simplified version. In a real implementation, you would use a library like TCPDF or FPDF
// to generate a proper PDF document based on the CV content

// For this demonstration, we'll simulate a PDF creation process
function generateCV($lang) {
    // In a real implementation, you would:
    // 1. Create a new PDF document
    // 2. Add the CV content in the specified language
    // 3. Save the PDF to a file
    // 4. Return the file path
    
    // For now, just simulate a delay and return a success response
    sleep(1); // Simulate processing time
    
    $fileName = 'CV_Santiago_Cabrera_' . strtoupper($lang) . '.pdf';
    
    // In a real implementation, this would be the path to the generated file
    // For now, just return a success response
    return [
        'success' => true,
        'file' => 'downloads/' . $fileName, // This would be the path to the actual file
        'filename' => $fileName
    ];
}

// Generate the CV and return the result as JSON
$result = generateCV($lang);
echo json_encode($result);
exit;