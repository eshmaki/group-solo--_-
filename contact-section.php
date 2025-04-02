<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';
    $success = send_contact_message($name, $email, $phone, $message);
    if ($success) {
        header('Location: confirmation.php');
        exit();
    }
}
?>
<section class="contact_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container">
            <h2>Get In Touch</h2>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="form_container">
                    <form action="index.php" method="POST">
                        <div>
                            <input type="text" name="name" placeholder="Full Name" required />
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Email" required />
                        </div>
                        <div>
                            <input type="text" name="phone" placeholder="Phone Number" required />
                        </div>
                        <div>
                            <input type="text" class="message-box" name="message" placeholder="Message" required />
                        </div>
                        <div class="btn_box">
                            <button type="submit">SEND</button>
                        </div>
                    </form>

                    <?php if (isset($success) && $success): ?>
                        <p>Message sent successfully!</p>
                    <?php elseif (isset($success) && !$success): ?>
                        <p>There was an issue sending your message. Please try again later.</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="img-box">
                    <img src="images/contact-img.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
function send_contact_message($name, $email, $phone, $message) {
    $to = "your-email@example.com";
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    $headers = "From: $email";

    return true;
}
?>
