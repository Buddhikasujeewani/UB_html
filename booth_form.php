<div id="wf-form-section" lang="en-GB">
    <div id="wf-error-message" style="text-align:center; color:red;" padding:10px;></div>
    <form action="' . admin_url('admin-ajax.php') . '" method="post" id="wf-contact-sponsor-form">
    <input type="hidden" name="action" value="wf_contact_sponsor_ajax">
    <input type="hidden" id="wf-sponsor-email" name="sponsor_email" value="' . $form_data['sponsor_email'] . '">
    <input type="hidden" name="sponsor_name" value="' . $form_data['sponsor_name'] . '">
    <p><label> Name<br>
    <input type="text" name="your_name" size="40" class="wpcf7-form-control wpcf7-text" value="' . $dname . '"> </label></p>
    <p><label> Email<br>
    <input type="email" name="your_email" value="' . $demail . '" size="40" class="wpcf7-form-control wpcf7-text"> </label></p>
    <p><label> Tel (optional)<br>
    <input type="text" name="your_tel" value="" size="40" class="wpcf7-form-control wpcf7-text"> </label></p>
    <p><label> Enquiry (optional)<br>
    <textarea name="your_message" cols="40" rows="1" class="wpcf7-form-control wpcf7-textarea"></textarea> </label></p>
    <p><input type="submit" value="ENTER*" class="wpcf7-form-control wpcf7-submit" id="wf-contact-sponsor-btn"></p>
</div>