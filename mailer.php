<?php


// Only process POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Get the form fields and remove whitespace
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r", "\n"), array(" "," "),$name);
    $company = strip_tags(trim($_POST["company"]));
    $company = str_replace(array("\r", "\n"), array(" "," "),$company);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Check that data was sent to the mailer
    if (empty($name) OR empty($company) OR empty($message) or !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        // Set a 400 (bad request) response code and exit
        http_response_code(400);
        echo "Oops! There was a problem with your submission. Please complete the form and try again.";
        exit;
    }

    // Set the recipient email address.
    $recipient = "ppei3011@gmail.com";

    // Set the email subject
    $subject = "New message from $name";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Company: $company\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $subject_confirm = "Feedback sent to Peter Pei";
    $confirm_content = "Dear $name,\n\n";
    $confirm_content .= "I have received the following message from you:\n$message\n\n";
    $confirm_content .= "Thank you for your feedback. I will respond to your email shortly.\n\n";
    $confirm_content .= "Peter Pei";


    // Build the email headers
    $email_headers = "From: $name <$email>";
    $confirm_headers = "From: Peter Pei <$recipient>";

    // Send the email
    if (mail($recipient, $subject, $email_content, $email_headers))
    {
        //Set a 200 (okay) response code.
        http_response_code(200);
        echo "Thank you! Your message has been sent.";
        (mail($email, $subject_confirm, $confirm_content, $confirm_headers));
    }
    else
    {
        // Set a 500 (internal server error) response code
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }


}
else
{
    // If not a POST method request, set a 403 (forbidden) response code
    http_response_code(403);
    echo "There was a problem with your submission. Please try again.";

}

$host_name = 'db5000278751.hosting-data.io';
$database = 'dbs272094';
$user_name = 'dbu64543';
$password = 'Chaonien7!';

// Create db connection
$connect = new mysqli($host_name, $user_name, $password, $database);

// Check db connection
if ($connect->connect_error)  {
    die("connection failed: " . $connect->connect_error);
}

// Create table
$sql = 'CREATE TABLE MyMessages2 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    company VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    message VARCHAR(100),
    entry_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
)';

if ($connect->query($sql) === TRUE)  {
    echo 'Table MyMessages created successfully';
} else  {
    echo 'Error creating table: ' . $connect->error;
}

$sql = 'INSERT INTO MyMessages2 (name, company, email, message)
VALUES ($name, $company, $email, $message)';

if ($connect->query($sql) === TRUE)  {
    $last_id = $connect->insert_id;
    echo 'New record created successfully';
} else  {
    echo 'Error: ' . $sql . '<br>' . $connect->error;
}

$connect->close();

?>