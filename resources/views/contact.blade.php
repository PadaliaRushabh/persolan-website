
    <div id="contact">
    <div class="alert alert-success element-invisible" role="alert">
        Your email is successfully send!
    </div>
    <div class="alert alert-danger element-invisible" role="alert">
        Something went wrong! Please send your email on <a href="mailto:padalia.rushabh@gmail.com">padalia.rushabh@gmail.com</a>
    </div>
    <h2>{{$homeContent["contact_heading"]}}</h2>
        <div id="contact-form">
            <form method="POST" action="#">
                <input type="email" name="visitor_email" id="visitor_email" placeholder="Your email" required>
                <input type="name" name="visitor_name" id="visitor_name" placeholder="Your name" required>
                <textarea name="message" placeholder="Your message" id="message" required></textarea>
                <button type="submit" id="send-email">Send</button>
            </form>
        </div>
        <!-- End #contact-form -->
    </div>
    <!-- End #contact -->