<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['customer-name'];
    $testimonial = $_POST['testimonial'];

    // Here you would save the testimonial to a database or a file
    // Example: Save to a text file (simple approach)
    $file = fopen("testimonials.txt", "a");
    fwrite($file, "$name: $testimonial\n");
    fclose($file);

    // Redirect back to the testimonials page with a success message
    header("Location: testimonials.html?status=success");
    exit();
}
?>
