<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require('fpdf.php'); // Include FPDF library


// Database connection
$con = mysqli_connect("localhost", "root", "", "registration");

// User data from the form
$name = $_POST['name'];
$ph = $_POST['phone_number'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dept = $_POST['department'];
$interest = isset($_POST['interests']) ? implode(', ', $_POST['interests']) : '';
$goodies = $_POST['goodies'];
$payment_mode = $_POST['payment_mode'];

// Get the next unique ID from the database
$query = mysqli_query($con, "SELECT id from ace_2023 order by id desc");
$res = mysqli_fetch_array($query);
$id = $res[0] + 1;
$unique_id = "23ACEB" . str_pad($id, 3, "0", STR_PAD_LEFT);


// Insert user data into the database
$sql = "INSERT INTO `ace_2023`(`name`, `phone_number`, `email`, `gender`, `department`, `interests`, `ace_id`, `goodies`, `payment_mode`) VALUES ('$name', '$ph', '$email', '$gender', '$dept', '$interest', '$unique_id', '$goodies', '$payment_mode')";
mysqli_query($con, $sql);
// Create a PDF document
$pdf = new FPDF();
$pdf->AddPage();
$watermark = 'acew.png'; // Replace with the path to your watermark logo
$pdf->Image($watermark, 40, 80 + 20, 130); // Adjust the X and Y coordinates and size as needed

// Set font for the heading
$pdf->SetFont('Arial', 'B', 12);

// Heading text
$heading = 'SAGI RAMAKRISHNAM RAJU ENGINEERING COLLEGE (A)';
$addressLine1 = 'China Amiram, Bhimavaram - 534204, AP.';
$addressLine2 = 'DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING';

// Calculate the width of the text to center it on the page
$headingWidth = $pdf->GetStringWidth($heading);
$addressWidth1 = $pdf->GetStringWidth($addressLine1);
$addressWidth2 = $pdf->GetStringWidth($addressLine2);
$pageWidth = $pdf->GetPageWidth();

// Calculate X position to center text
$headingX = ($pageWidth - $headingWidth) / 2;
$addressX1 = ($pageWidth - $addressWidth1) / 2;
$addressX2 = ($pageWidth - $addressWidth2) / 2;

// Output the heading at the top of the page
$pdf->Cell(0, 10, $heading, 0, 1, 'C');
$pdf->Cell(0, 10, $addressLine1, 0, 1, 'C');
$pdf->Cell(0, 10, $addressLine2, 0, 1, 'C');

// Output the logos on the same line as the heading
$logo2 = 'ace.png'; // Replace with the path to your first logo
$logo1 = 'SRKR.png'; // Replace with the path to your second logo

// Add the first logo on the left
$pdf->Image($logo1, 2, $pdf->GetX(), 40); // Adjust X, Y, and size for the first logo

// Add the second logo on the right
$pdf->Image($logo2, $pageWidth - 40, $pdf->GetX(), 40); // Adjust X, Y, and size for the second logo

// Move down 30px after the logos
$pdf->SetY($pdf->GetY() + 15);

// Output the ACE ID to the right of the page with an underline
$unique_id1 = 'ID:'.$unique_id; // Replace with the actual ACE ID
$pdf->SetFont('Arial', 'B', 12);
$uniqueIdWidth = $pdf->GetStringWidth($unique_id1);
$pdf->Cell($pageWidth - $uniqueIdWidth - 20); // Align to the right side
$pdf->Cell(0, 10, $unique_id1, 0, 0, 'C');
$pdf->Ln();
$lineY = $pdf->GetY(); // Get the current Y position
$pdf->SetLineWidth(0.5); // Set line width
// $pdf->Line($pdf->GetX(), $lineY, $pdf->GetX() + $uniqueIdWidth + 10, $lineY); // Draw an underline

// Output the "ACE Registration Details" text
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'ASSOCIATION OF COMPUTER SCIENCE ENGINEERS', 0, 1, 'C');
$lineY = $pdf->GetY(); // Get the current Y position
$lineX1 = 10; // Define the starting X coordinate
$lineX2 = $pageWidth - 10; // Define the ending X coordinate
$pdf->SetLineWidth(0.5); // Set line width
$pdf->Line($lineX1, $lineY + 2, $lineX2, $lineY + 2);
 // Draw// Draw a line under the text

 $pdf->SetY($pdf->GetY() + 10);


$additionalText = 'Dear ' . $name . ','
    . "\n"
    . 'We, ACE are glad to inform you that you have been approved as a valuable member of ASSOCIATION OF COMPUTER ENGINEERS (ACE) of COMPUTER SCIENCE AND ENGINEERING. This letter of identification will act as an invoice for membership payment, ACE identification data, and a viable proof that you are a member of ACE. We hope that this will help you build the confidence and skill that you need for your success.';

$pdf->SetFont('Arial', '', 12); // Change the font style to non-bold and adjust the size if needed
$pdf->MultiCell(0, 10, $additionalText);
$pdf->SetFont('Arial', 'B', 12);

// Calculate the width of the text
$textWidth = $pdf->GetStringWidth('SUBMITTED DETAILS');

// Set X coordinate for the text on the left side
$textX = 10;

// Set X coordinate for the ending point of the line
$lineX = $textX + $textWidth;

// Output the text
$pdf->SetXY($textX, $pdf->GetY());
$pdf->Cell($textWidth, 10, 'SUBMITTED DETAILS', 0, 0, 'L');

// Draw the underline
$pdf->SetLineWidth(0.5); // Set line width
$pdf->Line($textX, $pdf->GetY()+10 , $lineX, $pdf->GetY()+10);
$pdf->Ln(10); // Move down after the underline
// Rest of your form content
$pdf->Ln(5);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'ACE Regd.NO : ' . $unique_id, 0, 1);
$pdf->Cell(0, 10, 'Name : ' . $name, 0, 1);
$pdf->Cell(0, 10, 'Phone Number : ' . $ph, 0, 1);
$pdf->Cell(0, 10, 'Email : ' . $email, 0, 1);
$pdf->Cell(0, 10, 'Gender : ' . $gender, 0, 1);
$pdf->Cell(0, 10, 'Department : ' . $dept, 0, 1);
$pdf->Cell(0, 10, 'Interests : ' .$interest, 0, 1);
$pdf->Cell(0, 10, 'Goodies : ' . $goodies, 0, 1);
$pdf->Cell(0, 10, 'Payment Mode : ' .$payment_mode , 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 10, 'This invoice declares that the above information submitted is true.', 0, 1, 'C');
$lineY = $pdf->GetY(); // Get the current Y position
$lineX1 = 10; // Define the starting X coordinate
$lineX2 = $pageWidth - 10; // Define the ending X coordinate
$pdf->SetLineWidth(0.5); // Set line width
// $pdf->Line($lineX1, $lineY + 2, $lineX2, $lineY + 2);


$un = '(Secretary of ACE)'; // Replace with the actual ACE ID
$pdf->SetFont('Arial', 'B', 12);
$uniqueIdWidth = $pdf->GetStringWidth($un);
$pdf->Cell($pageWidth - $uniqueIdWidth - 20); // Align to the right side
$pdf->Cell(0, 10, $un, 0, 0, 'C');
$pdf->Ln();
$lineY = $pdf->GetY(); // Get the current Y position
// Output the PDF
$pdfFileName = 'registration_details.pdf';
$pdf->Output($pdfFileName, 'F');


// Send email with the PDF attachment
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'maggisrkr@gmail.com';
    $mail->Password = 'vavkzdopwctavurl';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->setFrom('kethinedileelasaipavan@gmail.com', 'ACE 2023 Registration');
    $mail->addAddress($email, $name);
    $mail->isHTML(true);
    $mail->Subject = 'ACE Registration Details';
    $mail->Body = 'Hello ' . $name . '<br/> We are thrilled to welcome you to the ACE community! Your registration has been successfully completed, and we\'re excited to have you as a part of our club.';

    // ... (Rest of the email content)

    $mail->AddAttachment($pdfFileName); // Attach the PDF
    $mail->send();

    // Clean up: Delete the temporary PDF file
    unlink($pdfFileName);

    echo '<script type="text/JavaScript"> 
        alert("You Have Successfully Registered!!! Thank you 🙏");
        location.href = "http://localhost/ACE/index.php";
        </script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
